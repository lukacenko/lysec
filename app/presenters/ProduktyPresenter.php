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
        $this[$name] = $form;

        $form->addUpload('image', 'Obrázok:')
                ->setRequired(false)
                ->setAttribute('id', 'fine-uploader-gallery')
                ->addRule(Form::IMAGE, 'Obrázok musí být JPEG, PNG nebo GIF.')
                ->addRule(Form::MAX_FILE_SIZE, 'Maximální velikost souboru je 1024 kB.', 1024 * 1024 /* v bytech */);
        $form->addText('product_name', 'Názov produktu')
                ->setRequired('Prosím vložte názov produktu.')
                ->setAttribute('class', 'form-control');
        $form->addText('keywords', ' Kľúčové slová')
                ->setRequired('Prosím vložte kľúčové slová.')
                ->setAttribute('class', 'form-control');
        $form->addTextArea('product_desc', 'Popis produktu')
                ->setRequired(FALSE)
                ->setAttribute('cols', 100)
                ->setAttribute('rows', 12)
                ->setAttribute('class', 'form-control')
                ->setRequired('Prosím vložte popis produktu.');
        $form->addText('stock', '  Množstvo')
                ->setAttribute('type', 'number')
                ->setRequired('Prosím vložte množstvo.')
                ->setAttribute('class', 'form-control');
        $availability = $this->model->getAllAvailability();
        foreach ($availability as $value) {
            $parent = $value['availability_id']; //cií klíč do kategorií
            if ($parent !== NULL) {
                $categories[$value['availability_id']] = $value['availability'];
            }
        }
        $form->addSelect('availability', 'Dostupnosť:', $categories)
                ->setPrompt('Prosím vložte dostupnosť')
                ->setAttribute('class', 'form-control');
        $form->addText('price', 'Cena')
                ->setAttribute('type', 'number')
                ->setRequired('Prosím vložte cenu.')
                ->setAttribute('class', 'form-control');
        $form->addText('postage', 'Poštovné')
                ->setAttribute('type', 'number')
                ->setRequired('Prosím vložte cenu poštovného.')
                ->setAttribute('class', 'form-control');
        $colors = $this->model->getValuesForFilter('color', 'id_color', 'color');
        $form->addSelect('color', 'Farba:', $colors)
                ->setPrompt('Prosím vložte farbu')
                ->setAttribute('class', 'form-control');
        $material = $this->model->getValuesForFilter('material', 'id_material', 'material');
        $form->addSelect('material', 'Materiál:', $material)
                ->setPrompt('Prosím vložte materiál')
                ->setAttribute('class', 'form-control');
        $production = $this->model->getValuesForFilter('production', 'id_production', 'production');
        $form->addSelect('production', 'Spôsob výroby:', $production)
                ->setPrompt('Prosím vložte spôsob výroby')
                ->setAttribute('class', 'form-control');
        $category = $this->model->getValuesForFilter('category', 'id_category', 'category_name');
        $form->addSelect('one', 'Kategória', $category)
                ->setAttribute('class', 'form-control')
                ->setPrompt('Prosím vložte kategóriu');
        $subCategory = $this->model->getAllSubCategory($form['one']->value);
        $form->addSelect('two', 'Podkategória', $subCategory)
                ->setAttribute('class', 'form-control');

        if ($form['two']->value == NULL) {
            $form['two']->value = 20;
        }
        $subCategory2 = $this->model->getAllSubCategoryLevel2($form['two']->value);
        $form->addSelect('three', 'Podkategória upresnenie', $subCategory2)
                ->setAttribute('class', 'form-control');
        $form->addSubmit('send', 'Odeslat')
                ->setAttribute('class', 'form-control');
        $form->onSuccess[] = array($this, 'pridajprodukt');
        return $form;
    }

    public function pridajprodukt(UI\Form $form, $values) {

        if ($this->isAjax()) {
            $this->invalidateControl('sendMessageForm');
        }
                //$this->model->recoveryPassword($password, $id, $email);
                $this->flashMessage("Úspešne pridaný produkt", 'success');
                $this->redirect('Sign:prihlasenie');
        }

    public function beforeRender() {
        parent::beforeRender();
        $this->template->_form = $this['form']; // form {snippet} workaround
    }

    public function handleInvalidate($value) {

        $this['form']['two']->setItems($this->model->getAllSubCategory($value));
        $this->redrawControl('two');

        $this->redrawControl('three');
    }

    public function handleInvalidate2($value) {
        $this['form']['three']->setItems($this->model->getAllSubCategoryLevel2($value));
        $this->redrawControl('three');
    }

    public function success(UI\Form $form, $vals) {
        //dump($vals);
    }

    public function handleUploadPicture() {
    $uploader = new \UploadHandler();
    $uploader->allowedExtensions = array("jpeg", "jpg", "png", "gif");
    $id = $this->getUser()->getIdentity()->id;
    $cas = microtime();
    $result = $uploader->handleUpload(__DIR__ . '/../../www/uploads/'.$this->getUser()->getIdentity()->id.'/image/product_image/'.$cas.'/');
//    $result = $uploader->handleUpload(__DIR__ . '/../../www/uploads/'.$this->getUser()->getIdentity()->id.'/image/product_image/'.$cas.'/');
    $result = $uploader->handleUpload(__DIR__ . '/../../www/uploads/');
    $this->sendResponse(new Nette\Application\Responses\JsonResponse($result));
}
}
