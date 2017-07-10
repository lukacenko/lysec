<?php

namespace App\Presenters;

use Nette,
    Nette\Application\UI;
use App\Model\Homepage;
use Nette\Application\UI\Form;

class NastaveniaPresenter extends \BasePresenter {

    private $model;
    public $id;

    public function __construct(\Model\Repository\Nastavenia $model) {
        $this->model = $model;
        parent::__construct();
    }
    
    public function renderDefault(){
        $id = $this->getUser()->getIdentity()->id;
        $this->template->osobne = $this->model->getInfoUser($id);
    }

//FORMULÁR pre odoslanie správy

    protected function createComponentChangeInfoForm() {

        $data = $this->model->getInfoUser($this->getUser()->getIdentity()->id);
        $form = new UI\Form;
        $form->setTranslator($this->translator);

        $form->addText('login', 'Prihlasovacie meno:')
                ->setAttribute('readonly', 'readonly')
                ->setValue($data->login)
                ->setAttribute('class', 'form-control');
        $form->addHidden('id')->setDefaultValue($this->getUser()->getIdentity()->id);
        $form->addText('email', 'E-mail:')
                ->setValue($data->email)
                ->setAttribute('class', 'form-control');
                //->setRequired('Prosím vložte Príjemcu.');
        //$form->addSelect('id_kat', 'Kategória', $this->model->ziskajdata2());

        $form->addText('name', 'Meno:')
                ->setValue($data->name)
                ->setAttribute('class', 'form-control')
                ->setRequired('Prosím vložte meno.');
        $form->addText('surname', 'Priezvisko:')
                ->setValue($data->surname)
                ->setAttribute('class', 'form-control');
        $form->addText('street', 'Ulica, č.domu:')
                ->setValue($data->street)
                ->setAttribute('class', 'form-control');
        $form->addText('postcode', 'PSČ:')
                ->setValue($data->postcode)
                ->setAttribute('class', 'form-control');
        $form->addText('city', 'Mesto:')
                ->setValue($data->city)
                ->setAttribute('class', 'form-control');
        $form->addText('phone', 'Telefón:')
                ->setValue($data->phone)
                ->setAttribute('class', 'form-control');
        $countries = [
            'SK' => 'Slovensko',
            'CZ' => 'Česká Republika',
            '' => 'Prosim vyberte'
        ];
        $form->addSelect('country', 'Krajina:', $countries)
                ->setAttribute('class', 'form-control')
                ->setValue($data->country);

        $pohlavie = [
            'Z' => 'Muž',
            'M' => 'Žena',
            '' => 'Prosim vyberte'
        ];
        $form->addSelect('sex', 'Pohlavie:', $pohlavie)
                ->setAttribute('class', 'form-control')
                ->setValue($data->sex);

        if ($data->role != 'admin') {
            $role = [
                'user' => 'Kupujúci',
                'superuser' => 'Predajca + Kupujúci',
            ];
            $form->addSelect('role', 'Typ registrácie:', $role)
                    ->setValue($data->role);
        }
        $form->addSubmit('saveas', 'Uložiť')->
                setAttribute('class', 'btn btn-default');
        $form->onSuccess[] = $this->SaveInfoForm;
        $form->addProtection();
        return $form;
    }

    // spracovanie formularu pre editaciu/vytvorenie clanku
    public function SaveInfoForm(UI\Form $form) {
        
        
        if ($form->isSuccess()) {
            // zisti ci je clanok editovany ale vytvarany
            $data = $form->getValues();
            $this->model->editUser($form->getValues());
            $this->flashMessage('Úspešné uložený profil', 'success');
            $this->redirect('Nastavenia:default');
        } else {
            // vyskytla sa chyba pri odoslaní formularu
            $form->addError('Vyskytla sa chyba pri odosielani formulara');
        }
    }

}
