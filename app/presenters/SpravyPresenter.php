<?php

namespace App\Presenters;

use Nette\Security\Identity;
use Nette,
    Nette\Application\UI;

class SpravyPresenter extends \BasePresenter {

    private $model;
    public $id;

    public function __construct(\Model\Repository\Spravy $model) {
        $this->model = $model;
        parent::__construct();
    }

    public function renderPrehlad() {
        $this->template->prehlad = $this->model->getAllMessage($this->getUser()->getIdentity()->id);
    }

    public function renderOdoslane() {
        $this->template->prehlad = $this->model->getAllSendMessage($this->getUser()->getIdentity()->id);
    }

    public function actionDetail($id) {

        $this->id = $id;
        $data = $this->model->getAllMessageUsers($this->id);
        $this->template->message = $data;
        $user = $this->model->getAllMessageUsersName($this->id);
        $this->template->messageUser = $user;
        $this->setView('detail');
    }

    // zmazanie správy
    public function actionDelete($id) {

        // overit ci sprava patri prihlasene pouzivatelovy alebo inemu
        $user_id = $this->getUser()->getIdentity()->id;
        $id_user = $this->model->getMessageUserId($id);
        if ($user_id == $id_user->user2) {
            $this->model->removeMessage($id);
            $this->flashMessage('Vymazane', 'success');
        } else {
            $this->flashMessage('Sprava sa neda zmazať', 'danger');
        }
        $this->redirect('Spravy:prehlad');
    }

    public function createComponentSimpleGrid($name) {
        $grid = new \Ublaboo\DataGrid\DataGrid;
        //$grid->setDataSource($this->model->getAllMessage($this->getUser()->getIdentity()->id));
        //$grid->addColumnText('id', 'Idecko');
    }

    //FORMULÁR pre odoslanie správy
    protected function createComponentSendMessageForm() {
        $form = new UI\Form;
        $form->setTranslator($this->translator);
        $form->addText('prijemca', 'Príjemca')
                ->setRequired('Prosím vložte Príjemcu.');
        $form->addText('title', 'Predmet');
        $form->addTextArea('text', 'text')
                ->setRequired(FALSE)
                ->setAttribute('cols', 100)
                ->setAttribute('rows', 12);
        $form->addMultiUpload('priloha', 'Príloha');
        $form->addSubmit('save', 'Odoslať');
        $form->addProtection();
        $form->onSuccess[] = array($this, 'addOrderFormSucceeded');
        return $form;
    }

    //Spracovanie zakázky
    public function addOrderFormSucceeded(UI\Form $form, $values) {
        if ($this->isAjax()) {
            $this->invalidateControl('sendMessageForm');
        }
        $values = $form->getValues();
        $user = $this->getUser()->getIdentity()->id;
        //overic ci existuje prijemca
        $row = $this->model->issetUser($values->prijemca);
        if (!$row) {
            $this->flashMessage('Zadaný používateľ neexistuje', 'danger');
            $this->redirect("Spravy:nova");
        } else {
            $id = $this->model->getIdUser($values->prijemca);
            $this->model->sendMessage($values->title, $user, $id, $values->text);
            $this->flashMessage('Správa uspešne odoslaná', 'success');
            $this->redirect("Spravy:prehlad");
        }
    }

}
