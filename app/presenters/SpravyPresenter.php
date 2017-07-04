<?php

namespace App\Presenters;

use Nette\Security\Identity;
use Nette,
    Nette\Application\UI;
use Ublaboo\DataGrid\DataGrid;

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
    public function handledelete($id) {

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

    public function handlefavorite($id) {

        $this->model->favoriteMessage($id);
        $this->flashMessage('Sprava pridana do oblubených', 'success');
        $this->redirect('Spravy:prehlad');
    }

    // prida spravu k oblubenym
    public function handletest($id) {
        $this->id = $id;
    }

    public function deleteExamples(array $ids) {
        foreach ($ids as $id) {
            $this->model->removeMessage($id);
        }
        $this->flashMessage('Správa bola zmazaná', 'success');
        $this->redirect('this');
    }

    public function createComponentSimpleGrid($name, $odoslane = 'dorucene') {

        $grid = new DataGrid($this, $name);
        $grid->addColumnText('title', 'Predmet')->setSortable();
        if ($odoslane == 'dorucene') {
            $grid->setDataSource($this->model->getAllMessage($this->getUser()->getIdentity()->id));
            $grid->addColumnText('login', 'Od')->setSortable();
        } elseif ($odoslane == 'odoslane') {
            $grid->setDataSource($this->model->getAllSendMessage($this->getUser()->getIdentity()->id));
            $grid->addColumnText('login', 'Komu')->setSortable();
        } elseif ($odoslane == 'oblubene') {
            $grid->setDataSource($this->model->getAllFavoriteMessage($this->getUser()->getIdentity()->id));
            $grid->addColumnText('login', 'Komu')->setSortable();
        } elseif ($odoslane == 'zmazane') {
            $grid->setDataSource($this->model->getAllDeleteMessage($this->getUser()->getIdentity()->id));
            $grid->addColumnText('login', 'Od')->setSortable();
        }
        $grid->addColumnText('timesend', 'Dátum')->setSortable();
        /**
         * ACtions
         */
        if ($odoslane == 'dorucene' || $odoslane == 'odoslane') {
            $grid->addAction('Delete', '', 'delete!')->setClass('glyphicon glyphicon-remove')->setTitle('Odstrániť');
        }
        if ($odoslane == 'dorucene') {
            $grid->addAction('Favorite', '', 'favorite!')->setClass('glyphicon glyphicon-star')->setTitle('Pridať k oblubeným');
        }
        $grid->addGroupAction('Odstrániť vybrané')->onSelect[] = [$this, 'deleteExamples'];
        $grid->setPagination(TRUE);
        /**
         * Localization
         */
        $translator = new \Ublaboo\DataGrid\Localization\SimpleTranslator([
            'ublaboo_datagrid.no_item_found_reset' => 'Žádné položky nenalezeny. Filtr můžete vynulovat',
            'ublaboo_datagrid.no_item_found' => 'Žádné položky nenalezeny.',
            'ublaboo_datagrid.here' => 'zde',
            'ublaboo_datagrid.items' => 'Položky',
            'ublaboo_datagrid.all' => 'všechny',
            'ublaboo_datagrid.from' => 'z',
            'ublaboo_datagrid.reset_filter' => 'Resetovat filtr',
            'ublaboo_datagrid.group_actions' => 'Hromadné akce',
            'ublaboo_datagrid.show_all_columns' => 'Zobrazit všechny sloupce',
            'ublaboo_datagrid.hide_column' => 'Skrýt sloupec',
            'ublaboo_datagrid.action' => 'Akce',
            'ublaboo_datagrid.previous' => 'Předchozí',
            'ublaboo_datagrid.next' => 'Další',
            'ublaboo_datagrid.choose' => 'Vyberte',
            'ublaboo_datagrid.execute' => 'Provést',
            'Name' => 'Jméno',
            'Inserted' => 'Vloženo'
        ]);
        $grid->setTranslator($translator);
    }

    public function createComponentSimpleGridDorucene($name) {
        $this->createComponentSimpleGrid($name, 'dorucene');
    }

    public function createComponentSimpleGridOdoslane($name) {
        $this->createComponentSimpleGrid($name, 'odoslane');
    }

    public function createComponentSimpleGridOblubene($name) {
        $this->createComponentSimpleGrid($name, 'oblubene');
    }

    public function createComponentSimpleGridZmazane($name) {
        $this->createComponentSimpleGrid($name, 'zmazane');
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
