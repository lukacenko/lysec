<?php

namespace App\Presenters;

use Nette\Security\Identity;
use Nette,
    Nette\Application\UI;

class SpravyPresenter extends \BasePresenter {

    private $model;

    public function __construct(\Model\Repository\Spravy $model) {
        $this->model = $model;
        parent::__construct();
    }

    public function renderPrehlad() {
        $this->template->prehlad = $this->model->getAllMessage($this->getUser()->getIdentity()->id);
    }

    public function renderOrder($id) {
        $hasData = false;
        foreach ($this->data as $k => $v) {
            foreach ($v as $k2 => $v2) {
                if ($k2 == 'number') {
                    if ($v2 == $id) {
                        $hasData = $this->data[$k];
                        break;
                    }
                }
            }
        }
        if ($hasData == false) {
            $this->flashMessage($this->translator->translate('Zákazka neexistuje'), 'danger');
            $this->redirect('Homepage:default');
        }
        $this->template->order = $hasData;
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
