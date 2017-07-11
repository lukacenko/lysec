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

    public function renderDefault() {
        $id = $this->getUser()->getIdentity()->id;
        $this->template->osobne = $this->model->getInfoUser($id);
        $this->template->fakturacne = $this->model->getBillingAdress($id);
        $this->template->dodacie = $this->model->getShippingAdress($id);
    }

//FORMULÁR pre upravu osobnych nastavení
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

        $form->addText('name', 'Meno:')
                ->setValue($data->name)
                ->setAttribute('class', 'form-control')
                ->setRequired('Prosím vložte meno.');
        $form->addText('surname', 'Priezvisko:')
                ->setValue($data->surname)
                ->setAttribute('class', 'form-control');
        
        $countries = $this->model->getCountry();
        foreach($countries as $krajina){
            $countriese[''] = 'Prosím vyberte';
            $countriese[$krajina['id_country']] = $krajina->name;
        }
        $form->addSelect('country', 'Krajina:', $countriese)
                ->setAttribute('class', 'form-control')
                ->setValue($data->id_country);

        $pohlavie = [
            '' => 'Prosím vyberte si pohlavie',
            'Muž' => 'Muž',
            'Žena' => 'Žena',
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

//FORMULÁR pre upravu dorucenych nastavení
    protected function createComponentChangeDeliveryForm() {

        $data = $this->model->getShippingAdress($this->getUser()->getIdentity()->id);
        $form = new UI\Form;
        $form->setTranslator($this->translator);

        $form->addText('name', 'Meno:')
                ->setValue($data->name)
                ->setAttribute('class', 'form-control');
        $form->addHidden('id')->setDefaultValue($data->id_delivery_address);
        $form->addText('surename', 'Prezvisko:')
                ->setValue($data->surename)
                ->setAttribute('class', 'form-control');
        $form->addText('street', 'Ulica:')
                ->setValue($data->street)
                ->setAttribute('class', 'form-control')
                ->setRequired('Prosím vložte meno.');
        $form->addText('postcode', 'PSČ:')
                ->setValue($data->postcode)
                ->setAttribute('class', 'form-control');

        $form->addText('phone', 'Telefón:')
                ->setValue($data->phone)
                ->setAttribute('class', 'form-control');

        $form->addText('city', 'Mesto:')
                ->setValue($data->city)
                ->setAttribute('class', 'form-control');

        $form->addText('county', 'Štát:')
                ->setValue($data->county)
                ->setAttribute('class', 'form-control');

        $form->addSubmit('saveas', 'Uložiť')->
                setAttribute('class', 'btn btn-default');
        $form->onSuccess[] = $this->SaveDeliveriForm;
        $form->addProtection();
        return $form;
    }

    // spracovanie formularu pre editaciu/vytvorenie clanku
    public function SaveDeliveriForm(UI\Form $form) {


        if ($form->isSuccess()) {
            // zisti ci je clanok editovany ale vytvarany
            $data = $form->getValues();
            $this->model->editDelivery($form->getValues());
            $this->flashMessage('Úspešné uložený profil', 'success');
            $this->redirect('Nastavenia:default');
        } else {
            // vyskytla sa chyba pri odoslaní formularu
            $form->addError('Vyskytla sa chyba pri odosielani formulara');
        }
    }


//FORMULÁR pre upravu dorucenych nastavení
    protected function createComponentChangeBillingForm() {

        $data = $this->model->getBillingAdress($this->getUser()->getIdentity()->id);
        $form = new UI\Form;
        $form->setTranslator($this->translator);

        $form->addText('name', 'Meno:')
                ->setValue($data->name)
                ->setAttribute('class', 'form-control');
        $form->addHidden('id')->setDefaultValue($data->id_billing_address);
        $form->addText('surename', 'Prezvisko:')
                ->setValue($data->surename)
                ->setAttribute('class', 'form-control');
        $form->addText('street', 'Ulica:')
                ->setValue($data->street)
                ->setAttribute('class', 'form-control')
                ->setRequired('Prosím vložte meno.');
        $form->addText('postcode', 'PSČ:')
                ->setValue($data->postcode)
                ->setAttribute('class', 'form-control');

        $form->addText('phone', 'Telefón:')
                ->setValue($data->phone)
                ->setAttribute('class', 'form-control');

        $form->addText('city', 'Mesto:')
                ->setValue($data->city)
                ->setAttribute('class', 'form-control');

        $form->addText('county', 'Štát:')
                ->setValue($data->county)
                ->setAttribute('class', 'form-control');

        $form->addSubmit('saveas', 'Uložiť')->
                setAttribute('class', 'btn btn-default');
        $form->onSuccess[] = $this->SaveBillingForm;
        $form->addProtection();
        return $form;
    }

    // spracovanie formularu pre editaciu/vytvorenie clanku
    public function SaveBillingForm(UI\Form $form) {


        if ($form->isSuccess()) {
            // zisti ci je clanok editovany ale vytvarany
            $data = $form->getValues();
            $this->model->editBilling($form->getValues());
            $this->flashMessage('Úspešné uložený profil', 'success');
            $this->redirect('Nastavenia:default');
        } else {
            // vyskytla sa chyba pri odoslaní formularu
            $form->addError('Vyskytla sa chyba pri odosielani formulara');
        }
    }    
}
