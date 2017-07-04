<?php

namespace App\Presenters;

use Nette,
    Nette\Application\UI;
use App\Model\Homepage;

class NastaveniaPresenter extends \BasePresenter {

    private $model;
    public $id;

    public function __construct(\Model\Repository\Nastavenia $model) {
        $this->model = $model;
        parent::__construct();
    }

//FORMULÁR pre odoslanie správy

    protected function createComponentChangeInfoForm() {

        $data = $this->model->getInfoUser($this->getUser()->getIdentity()->id);
        $form = new UI\Form;
        $form->setTranslator($this->translator);

        $form->addText('login', 'Prihlasovacie meno:')
                ->setAttribute('readonly', 'readonly')
                ->setValue($data->login)
                ->setRequired('Prosím vložte Príjemcu.');
        $form->addHidden('id')->setDefaultValue($this->getUser()->getIdentity()->id);
        $form->addText('email', 'E-mail:')
                ->setValue($data->email)
                ->setRequired('Prosím vložte Príjemcu.');
        //$form->addSelect('id_kat', 'Kategória', $this->model->ziskajdata2());

        $form->addText('name', 'Meno:')
                ->setValue($data->name)
                ->setRequired('Prosím vložte Príjemcu.');
        $form->addText('surname', 'Priezvisko:')
                ->setValue($data->surname)
                ->setRequired('Prosím vložte Príjemcu.');
        $form->addText('street', 'Ulica, č.domu:')
                ->setValue($data->street)
                ->setRequired('Prosím vložte Príjemcu.');
        $form->addText('postcode', 'PSČ:')
                ->setValue($data->postcode)
                ->setRequired('Prosím vložte Príjemcu.');
        $form->addText('city', 'Mesto:')
                ->setValue($data->city)
                ->setRequired('Prosím vložte Príjemcu.');
        $form->addText('phone', 'Telefón:')
                ->setValue($data->phone)
                ->setRequired('Prosím vložte Príjemcu.');
        $countries = [
            'SK' => 'Slovensko',
            'CZ' => 'Česká Republika',
            '' => 'Prosim vyberte'
        ];
        $form->addSelect('country', 'Krajina:', $countries)
                ->setValue($data->country);
        $pohlavie = [
            'Z' => 'Muž',
            'M' => 'Žena',
            '' => 'Prosim vyberte'
        ];
        $form->addSelect('sex', 'Pohlavie:', $pohlavie)
                ->setValue($data->sex);

        if ($data->role != 'admin') {
            $role = [
                'user' => 'Kupujúci',
                'superuser' => 'Predajca + Kupujúci',
            ];
            $form->addSelect('role', 'Typ registrácie:', $role)
                    ->setValue($data->role);
        }
        $form->addSubmit('save', 'Uložiť');
        $form->addProtection();
        $form->onSuccess[] = array($this, 'addOrderFormSucceeded');
        return $form;
    }

    // spracovanie formularu pre editaciu/vytvorenie clanku
    public function addOrderFormSucceeded($form) {
        if ($form->isSuccess()) {
            // zisti ci je clanok editovany ale vytvarany
            $data = $form->getValues();
            $this->model->editUser($form->getValues());
            $this->flashMessage('Úspešné uložený článok', 'success');
            $this->redirect('Nastavenia:default');
        } else {
            // vyskytla sa chyba pri odoslaní formularu
            $form->addError('Vyskytla sa chyba pri odosielani formulara');
        }
    }

}
