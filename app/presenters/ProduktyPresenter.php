<?php

namespace App\Presenters;

use Nette\Security\Identity;
use Nette,
    Nette\Application\UI;
use Ublaboo\DataGrid\DataGrid;
use Nette\Application\UI\Form;

class ProduktyPresenter extends \BasePresenter {

    private $model;

    public function __construct(\Model\Repository\Produkty $model) {
        $this->model = $model;
        parent::__construct();
    }

    public function renderPrehlad() {
        $this->template->produkty = $this->model->getAllProduct();
    }

    private $database = [
        [1 => '2', '4', '9'],
        [4 => '.', '∴', '…'],
        [5 => 'π', '€', '©'],
    ];

    protected function createComponentForm($name) {
        $form = new UI\Form;
        $this[$name] = $form; // <- Zde je celý fígl

        $form->addSelect('one', 'One', ['Čísla', 'Tečky', 'Symboly'])->setDefaultValue(1);
        //dump($form['one']->value);

        $form->addSelect('two', 'Two', $this->database[$form['one']->value]);

        $form->addSubmit('send', 'Odeslat');
        $form->onSuccess[] = $this->success;
        return $form;
    }

    public function beforeRender() {
        parent::beforeRender();
        $this->template->_form = $this['form']; // form {snippet} workaround
    }

    public function handleInvalidate($value) {
        $this['form']['two']->setItems($this->database[$value]);
        $this->redrawControl('two');
    }

    public function success(UI\Form $form, $vals) {
        dump($vals);
    }

}
