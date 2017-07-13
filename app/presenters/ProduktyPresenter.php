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
                ->setAttribute('type', 'number')
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
                ->setAttribute('type', 'number')
                ->setRequired('Prosím vložte cenu.');
        $form->addText('postage', 'Poštovné')
                ->setAttribute('type', 'number')
                ->setRequired('Prosím vložte cenu poštovného.');

        $colors = $this->model->getValuesForFilter('color', 'id_color', 'color');
        $form->addSelect('color', 'Farba:', $colors)
                ->setPrompt('Prosím vložte farbu');

        $category = $this->model->getValuesForFilter('category', 'id_category', 'category_name');
        $form->addSelect('one', 'Kategória', $category)->setDefaultValue(3);
        $subCategory = $this->model->getAllSubCategory($form['one']->value);
        $form->addSelect('two', 'Podkategória', $subCategory);

        if($form['two']->value == NULL){
            $form['two']->value = 20;
        }
        $subCategory2 = $this->model->getAllSubCategoryLevel2($form['two']->value);
        $form->addSelect('three', 'Podkategória upresnenie', $subCategory2);
        $form->addSubmit('send', 'Odeslat');
        $form->onSuccess[] = $this->success;
        return $form;
    }

    public function beforeRender() {
        parent::beforeRender();
        $this->template->_form = $this['form']; // form {snippet} workaround
    }

    public function handleInvalidate($value) {
        $this['form']['two']->setItems($this->model->getAllSubCategory($value));
        $this->redrawControl('two');
    }
    public function handleInvalidate2($value) {
        $this['form']['three']->setItems($this->model->getAllSubCategoryLevel2($value));
        $this->redrawControl('three');
    }

    public function success(UI\Form $form, $vals) {
        dump($vals);
    }

}
