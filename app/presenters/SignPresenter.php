<?php

namespace App\Presenters;

use Nette\Application\UI,
    Tomaj\Form\Renderer\BootstrapRenderer,
    Tomaj\Form\Renderer\BootstrapInlineRenderer,
    Tomaj\Form\Renderer\BootstrapVerticalRenderer;
use Nette\Application\UI\Form;
use Nette\Mail\SmtpMailer;
use Nette\Mail\Message;

/**
 * Sign in/out presenters.
 */
class SignPresenter extends \BasePresenter {

    private $model;

    public function __construct(\Model\Repository\UserManager $model) {
        $this->model = $model;
    }

    public function renderDefault() {
        echo 'dd';
    }

    protected function createComponentRegisForm() {

        $role = array(
            'user' => 'Predajca',
            'superuser' => 'Predajca + Kupujúci',
        );
        $form = new UI\Form;
        $form->setRenderer(new BootstrapVerticalRenderer());
        $form->setTranslator($this->translator);
        $form->addText('email', $this->translator->translate('E-mailová adresa:'))->setAttribute('placeholder', $this->translator->translate('E-mailová adresa'))
                ->setRequired('Prosím vložte Vaš E-mail.')
                ->addRule(Form::EMAIL, 'Email muí obsahovať správny tvar');
        $form->addText('username', $this->translator->translate('Užívateľské meno:'))->setAttribute('placeholder', $this->translator->translate('Užívateľské meno'))
                ->setRequired('Prosím vložte Vaše používateľské meno.');
        $form->addPassword('password', $this->translator->translate('Heslo:'))->setAttribute('placeholder', $this->translator->translate('Heslo'))
                ->setRequired('Prosím vložte Vaše heslo.');
        $form->addPassword('password2', $this->translator->translate('Zopakovanie hesla:'))->setAttribute('placeholder', $this->translator->translate('Zopakovanie hesla'))
                //->setRequired('Prosím vložte Vaše heslo.');
                ->setOmitted(TRUE)
                ->addConditionOn($form['password'], Form::FILLED)
                ->addRule(Form::FILLED, 'Zadejte prosím heslo znovu pro ověření.')
                ->addRule(Form::EQUAL, 'Zřejmě došlo k překlepu, zkuste prosím hesla zadat znovu.', $form['password']);
        $form->addSelect('rola', 'Typ registrácie:', $role);
        $form->addCheckbox('newsletter', 'Chcem dostávať emailom personalizovaný newsletter');
        $form->addCheckbox('actept', 'Súhlasím s podmienkami používania')
                ->setRequired('Je potrebné súhlasiť s podmienkami');
        $form->addSubmit('send', 'Registruj sa');

        $form->onSuccess[] = $this->RegisFormSubmitted;
        $form->addProtection();
        return $form;
    }

    public function RegisFormSubmitted(UI\Form $form) {
        if ($this->isAjax()) {
            $this->invalidateControl('RegisForm');
        }

        $values = $form->getValues();

        try {
            // ak existuje dany email alebo username tak vrat chybu.
            if ($this->model->issetUser($values->username) != FALSE) {
                $this->flashMessage('Používateľ s menom ' . $values->username . ' existuje prosím zvolte iné meno', 'danger');
                $this->redirect('this');
            } else {
                if ($this->model->issetEmail($values->email == TRUE)) {
                    if ($values->rola != 'user' || $values->rola != 'superuser') {
                        $values->rola = 'user';
                    }
                    $this->model->add($values->email, $values->username, $values->password, $values->rola, $values->newsletter);
                    $this->flashMessage('Boli ste úspešne zaregistrovaný', 'success');
                    $this->redirect('Homepage:default');
                } else {
                    $this->flashMessage('Používateľ s emailom ' . $values->email . ' existuje prosím zvolte iné email', 'danger');
                    $this->redirect('this');
                }
            }
        } catch (\Nette\Security\AuthenticationException $e) {
            $form->addError($this->translator->translate($e->getMessage()));
        }
    }

    /**
     * Sign-in form factory.
     * @return Nette\Application\UI\Form
     */
    protected function createComponentSignInForm() {
        $form = new UI\Form;
        $form->setRenderer(new BootstrapVerticalRenderer());
        $form->setTranslator($this->translator);

        $form->addText('username', $this->translator->translate('Užívateľské meno'))->setAttribute('placeholder', $this->translator->translate('Užívateľské meno'))
                ->setRequired('Prosím vložte Vaše používateľské meno.');

        $form->addPassword('password', $this->translator->translate('Heslo'))->setAttribute('placeholder', $this->translator->translate('Heslo'))
                ->setRequired('Prosím vložte Vaše heslo.');

        $form->addCheckbox('remember', 'Zapamätať si ma');

        $form->addSubmit('send', 'Prihlásiť sa');

        // call method signInFormSubmitted() on success
        $form->onSuccess[] = $this->signInFormSubmitted;
        $form->addProtection();
        return $form;
    }

    public function signInFormSubmitted(UI\Form $form) {
        if ($this->isAjax()) {
            $this->invalidateControl('signInForm');
        }
        $values = $form->getValues();

        if ($values->remember) {
            $this->getUser()->setExpiration('+ 3 days', FALSE);
        } else {
            $this->getUser()->setExpiration('+ 60 minutes', TRUE);
        }

        try {
            $this->user->login($values->username, $values->password);
            $this->flashMessage('Boli ste úspešne prihlásený', 'success');
            $this->redirect('Homepage:default');
        } catch (\Nette\Security\AuthenticationException $e) {
            $form->addError($this->translator->translate($e->getMessage()));
        }
    }

    public function actionOut() {
        $this->getUser()->logout();
        $this->flashMessage('Boli ste úspešne odhlásený', 'success');
        $this->redirect('prihlasenie');
    }

    protected function createComponentNewPassword() {
        $form = new UI\Form;
        $form->setRenderer(new BootstrapVerticalRenderer());
        $form->setTranslator($this->translator);

        $form->addText('email', $this->translator->translate('E-mail:'))
                ->setRequired('Prosím vložte Vaš E-mail.')
                ->setAttribute('class', 'form-control');
        $form->addSubmit('recovery', 'Požiadať o zmenu hesla')
                ->setAttribute('class', 'btn btn-primary');
        $form->onSuccess[] = $this->newPasswordForm;
        $form->addProtection();
        return $form;
    }

    public function newPasswordForm(UI\Form $form) {
        if ($this->isAjax()) {
            $this->invalidateControl('signInForm');
        }
        $values = $form->getValues();
        try {
            $email = $values->email;
            //existuje dany email 
            if ($this->model->issetEmail($email)) {
                //generat unique string
                $uniqidStr = md5(uniqid(mt_rand()));
                $this->model->updateUniqidStr($uniqidStr, $email);
                $resetPassLink = 'localhost/lysec/www/obnova/?fp_code=' . $uniqidStr . '&email=' . $email . '';
                //email
                $mail = new Message;
                //emailový server
                $mailer = new SmtpMailer(array(
                    'smtp' => 'true',
                    'port' => '587',
                    'host' => 'mail.nov.sk',
                    'username' => 'monitor@nov.sk',
                    'password' => 'FloHatPop6',
                    'secure' => 'tls',
                ));
                $mail->setFrom('LYSEC@SRO.SK')
                        ->addTo($email)
                        ->setSubject('Zabudnuté heslo')
                        ->setHtmlBody('<br/>Recently a request was submitted to reset a password for your account. If this was a mistake, just ignore this email and nothing will happen.
                        <br/>To reset your password, visit the following link: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
                        <br/><br/>Regards,
                        <br/>CodexWorld');
                $mailer->send($mail);
                $this->flashMessage('Na tvoj e-mail boli zaslané inštrukcie na obnovu hesla.
                Skontroluj svoju schránku, niekdy môže doručenie správy chvíľku trvať' . $resetPassLink, 'success');
                $this->redirect('Sign:prihlasenie');
            } else {
                $this->flashMessage('Daný e-mail neexistuje', 'error');
                $this->redirect('Sign:zabudnuteheslo');
            }
        } catch (\Nette\Security\AuthenticationException $e) {
            $form->addError($this->translator->translate($e->getMessage()));
        }
    }

}
