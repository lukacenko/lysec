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
        $form->addText('product_name', 'Názov produktu')
                ->setRequired('Prosím vložte názov produktu.');
        $form->addText('keywords', ' Kľúčové slová')
                ->setRequired('Prosím vložte kľúčové slová.');
        $form->addTextArea('product_desc', 'Popis produktu')
                ->setRequired(FALSE)
                ->setAttribute('cols', 100)
                ->setAttribute('rows', 12);
        $form->addText('stock', '  Množstvo')
                ->setRequired('Prosím vložte množstvo.');
        $availability = $this->model->getAllAvailability();
        foreach ($availability as $value) {
            $parent = $value['availability_id']; //cií klíč do kategorií
            if ($parent !== NULL) {
                $categories[$value['availability_id']] = $value['availability'];
            }
        }
        $form->addSelect('availability', 'Dostupnosť:', $categories)
                ->setPrompt('Prosím vložte dostupnosť');
        $form->addText('price', 'Cena')
                ->setRequired('Prosím vložte cenu.');
        $form->addText('postage', 'Poštovné')
                ->setRequired('Prosím vložte cenu poštovného.');
        $color = $this->model->getAllColor();
        foreach ($color as $value) {
            $parent = $value['id_color']; //cií klíč do kategorií
            if ($parent !== NULL) {
                $colors[$value['id_color']] = $value['color'];
            }
        }
        $form->addSelect('color', 'Farba:', $colors)
                ->setPrompt('Prosím vložte farbu');

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
