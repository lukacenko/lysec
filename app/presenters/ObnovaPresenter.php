<?php

namespace App\Presenters;

use Nette,
    Nette\Application\UI;
use Nette\Security\Passwords;
use App\Model\Homepage;

class ObnovaPresenter extends \BasePresenter {

    private $model;

    public function __construct(\Model\Repository\Obnova $model) {
        $this->model = $model;
        parent::__construct();
    }

    public function renderDefault() {
        $email = $this->getParameter('email');
        $kod = $this->getParameter('kod');
    }

    //FORMULÁR pre odoslanie správy
    protected function createComponentSendMessageForm() {
        $form = new UI\Form;
        $form->setTranslator($this->translator);
        $form->addHidden('email', $this->getParameter('email'));
        $form->addHidden('id', $this->getParameter('fp_code'));
        $form->addPassword('heslo', 'Heslo')
                ->setRequired('Prosím vložte Heslo.')
                ->setAttribute('class', 'form-control');
        $form->addPassword('heslo2', 'Heslo znovu')
                ->setRequired('Prosím vložte Heslo znovu.')
                ->setAttribute('class', 'form-control');
        $form->addSubmit('save', 'Zmeniť')->setAttribute('class', 'btn btn-primary');
        $form->addProtection();
        $form->onSuccess[] = array($this, 'obnovahesla');
        return $form;
    }

    //Spracovanie zakázky
    public function obnovahesla(UI\Form $form, $values) {
        if ($this->isAjax()) {
            $this->invalidateControl('sendMessageForm');
        }
        $values = $form->getValues();
        $password = $values->heslo;
        $password2 = $values->heslo2;
        $id = $values->id;
        $email = $values->email;
        if ($password == $password2) {
            if ($this->model->verificationId($id, $email) == TRUE) {
                $password = Passwords::hash($password);
                $this->model->recoveryPassword($password, $id, $email);
                $this->flashMessage("Úspešne zmené heslo", 'success');
                $this->redirect('Sign:prihlasenie');
            } else {
                $this->flashMessage("Chyba ERROR", 'error');
                $this->redirect('this');
            }
        } else {
            $this->flashMessage("Heslo su neni zhodné", 'error');
            $this->redirect('this');
        }
    }

}
