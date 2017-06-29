<?php

namespace App\Presenters;

use Nette\Application\UI,
    Tomaj\Form\Renderer\BootstrapRenderer,
    Tomaj\Form\Renderer\BootstrapInlineRenderer,
    Tomaj\Form\Renderer\BootstrapVerticalRenderer;

/**
 * Sign in/out presenters.
 */
class SignPresenter extends \BasePresenter {
    
    private $model;

    
    public function __construct(\Model\Repository\UserManager $model) {
        $this->model = $model;
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
                ->setRequired('Prosím vložte Vaše používateľské meno.');
        $form->addText('username', $this->translator->translate('Užívateľské meno:'))->setAttribute('placeholder', $this->translator->translate('Užívateľské meno'))
                ->setRequired('Prosím vložte Vaše používateľské meno.');
        $form->addPassword('password', $this->translator->translate('Heslo:'))->setAttribute('placeholder', $this->translator->translate('Heslo'))
                ->setRequired('Prosím vložte Vaše heslo.');
        $form->addPassword('password2', $this->translator->translate('Zopakovanie hesla:'))->setAttribute('placeholder', $this->translator->translate('Zopakovanie hesla'))
                ->setRequired('Prosím vložte Vaše heslo.');
        $form->addSelect('rola', 'Typ registrácie:', $role);
        $form->addCheckbox('newsletter', 'Chcem dostávať emailom personalizovaný newsletter');
        $form->addCheckbox('actept', 'Chcem dostávať emailom personalizovaný newsletter');
        $form->addSubmit('send', 'Registruj sa');

        // call method signInFormSubmitted() on success
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
            $this->model->add($values->email, $values->username, $values->password, $values->rola, $values->newsletter);
            $this->flashMessage('Boli ste úspešne zaregistrovaný', 'success');
            $this->redirect('Homepage:default');
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

}
