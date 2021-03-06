<?php

namespace App\Presenters;

use Nette\Security\Identity;
use Nette,
    Nette\Application\UI,
    Nette\Utils\Html;
use Ublaboo\DataGrid\DataGrid;
use Nette\Application\UI\Form;
use Nette\Database\Table;
class ProduktyPresenter extends \BasePresenter {

    private $model;
    private $session;
    private $id_product;

    public function __construct(\Model\Repository\Produkty $model, Nette\Http\Session $session) {
        $this->model = $model;
        parent::__construct();
        $this->session = $session->getSection(get_class($this));
        $this->id_product = '';
    }

    public function renderPrehlad() {
        $this->template->produkty = $this->model->getAllProduct();
    }

    public function renderDetail($id) {
        $data = $this->model->getSingleProduct($id);
        $path = $this->context->parameters['wwwDir'];
        $rii = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path . '/' . $data->other_photo));
        $files = array();
        foreach ($rii as $file) {
            if ($file->isDir()) {
                continue;
            }
            $files[] = strchr($file->getPathname(), 'uploads');
        }
        $this->template->product = $data;
        $this->template->files = $files;
        if ($data == false) {
            $this->flashMessage('Produkt neexistuje', 'danger');
            $this->redirect('Produkt:prehlad');
        }
    }

    // zmazanie produktu
    public function handledelete($id) {

        // overit ci sprava patri prihlasene pouzivatelovy alebo inemu
        $user_id = $this->getUser()->getIdentity()->id;
        $id_user = $this->model->getIdShop($id);
        if ($user_id == $id_user->id_user) {
            $this->model->removeProduct($id);
            $this->flashMessage('Vymazane', 'success');
        } else {
            $this->flashMessage('Produkt sa neda zmazať', 'danger');
        }
        $this->redirect('Produkty:moje');
    }

    // editovanie clanku 
    public function actionEdit($id) {

            $this->id_product = $id;
            //ak existuje zaznam
            $post = $this->model->getProductFromId($this->id_product);
            dump($post);
            if (!$post) {
                $this->flashMessage('Článok neexistuje', 'error');
                $this->redirect('Produkty:moje');
                //$this->id_product = '';
                $this->setView('pridaj');
            }else{
                $this['form']->setDefaults($post[0]);
                $dopl = array('shop' => $post[0]['id_shop']);
                $this['form']->setDefaults($dopl);
                $this->setView('pridaj');
            }
    }

    public function createComponentProduktyGrid($name) {

        $grid = new DataGrid($this, $name);
        $grid->setDataSource($this->model->getAllProductUsers());
        $grid->addColumnText('id', 'ID')->setSortable();
        $grid->addColumnText('product_name', 'Názov produktu')
                ->setRenderer(function($item) {
                    echo Html::el('a')->href('detail/' . $item->id)->setHtml($item->product_name);
                })->setSortable();
        $grid->addColumnText('stock', 'Počet')->setSortable();
        $grid->addColumnText('price', 'Cena')->setSortable();
        $grid->addColumnText('timestamp', 'Dátum')->setSortable();

        $grid->addAction('Editovať', '', 'edit')->setClass('glyphicon glyphicon glyphicon-pencil')->setTitle('Editovať');
        $grid->addAction('Delete', '', 'delete!')->setClass('glyphicon glyphicon-remove')->setTitle('Odstrániť');
        $grid->addGroupAction('Odstrániť vybrané')->onSelect[] = [$this, 'deleteExamples'];
        $grid->setPagination(TRUE);
        /**
         * Localization
         */
        /*
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
         */
    }

    protected function createComponentForm($name) {

        $form = new UI\Form;
        $this[$name] = $form;
        $this->session->id_add = microtime();
        $form->addHidden('other_photo')->setDefaultValue('/uploads/' . $this->getUser()->getIdentity()->id . '/image/product_image/' . $this->session->id_add . '/');
        $shop = $this->model->getShop($this->getUser()->getIdentity()->id);
        foreach ($shop as $value) {
            $parent = $value['id'];
            if ($parent !== NULL) {
                $shops[$value['id']] = $value['name'];
            }
        }
        $form->addSelect('shop', 'Vyberte obchod:', $shops)
                ->setPrompt('Prosím vložte dostupnosť')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['id_shop']);
        $form->addUpload('subor', 'Titulná fotka:', FALSE);
        $form->addText('product_name', 'Názov produktu')
                ->setRequired('Prosím vložte názov produktu.')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['product_name']);
        $form->addText('keywords', ' Kľúčové slová')
                ->setRequired('Prosím vložte kľúčové slová.')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['keywords']);
        $form->addTextArea('product_desc', 'Popis produktu')
                ->setRequired(FALSE)
                ->setAttribute('cols', 100)
                ->setAttribute('rows', 12)
                ->setAttribute('class', 'form-control')
                ->setRequired('Prosím vložte popis produktu.');
                //->setDefaultValue($data[0]['product_desc']);
        $form->addText('stock', '  Množstvo')
                ->setAttribute('type', 'number')
                ->setRequired('Prosím vložte množstvo.')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['stock']);
        $availability = $this->model->getAllAvailability();
        foreach ($availability as $value) {
            $parent = $value['availability_id'];
            if ($parent !== NULL) {
                $categories[$value['availability_id']] = $value['availability'];
            }
        }
        $form->addSelect('availability', 'Dostupnosť:', $categories)
                ->setPrompt('Prosím vložte dostupnosť')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['availability']);
        $form->addText('price', 'Cena')
                ->setAttribute('type', 'number')
                ->setRequired('Prosím vložte cenu.')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['price']);
        $form->addText('postage', 'Poštovné')
                ->setAttribute('type', 'number')
                ->setRequired('Prosím vložte cenu poštovného.')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['postage']);
        $colors = $this->model->getValuesForFilter('color', 'id_color', 'color');
        $form->addSelect('color', 'Farba:', $colors)
                ->setPrompt('Prosím vložte farbu')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['color']);
        $material = $this->model->getValuesForFilter('material', 'id_material', 'material');
        $form->addSelect('material', 'Materiál:', $material)
                ->setPrompt('Prosím vložte materiál')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['material']);
        $production = $this->model->getValuesForFilter('production', 'id_production', 'production');
        $form->addSelect('production', 'Spôsob výroby:', $production)
                ->setPrompt('Prosím vložte spôsob výroby')
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['production']);
        $category = $this->model->getValuesForFilter('category', 'id_category', 'category_name');
        $form->addSelect('one', 'Kategória', $category)
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['category']);
        $subCategory = $this->model->getAllSubCategory($form['one']->value);
        $form->addSelect('two', 'Podkategória', $subCategory)
                ->setAttribute('class', 'form-control');
                //->setDefaultValue($data[0]['subcategory']);

        if ($form['two']->value == NULL) {
            $form['two']->value = 34;
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
            $this->invalidateControl('Form');
        }
        $name = $values->subor->getName();
        $path = $this->context->parameters['wwwDir'];
        $upload_images = $path . '/uploads/' . $this->getUser()->getIdentity()->id . '/image/product_image/' . $this->session->id_add . '/' . $name;
        $values['title_photo'] = '/uploads/' . $this->getUser()->getIdentity()->id . '/image/product_image/' . $this->session->id_add . '/' . $name;
        unset($this->session->id_add);
        $user_id = $this->getUser()->getIdentity()->id;
        $this->model->inserProduct($values, $user_id);
        if ($values->subor->isOK()) {
            $values->subor->move($upload_images);
        }
        exit();
        $this->flashMessage("Úspešne pridaný produkt", 'success');
        //$this->redirect('Sign:prihlasenie');
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

    public function handleUploadPicture() {

        $uploader = new \UploadHandler();
        $uploader->allowedExtensions = array("jpeg", "jpg", "png", "gif");
        $id = $this->getUser()->getIdentity()->id;
        $cesta = __DIR__ . '/../../www/uploads/' . $this->getUser()->getIdentity()->id . '/image//product_image/' . $this->session->id_add . '';
        if (!file_exists($cesta)) {
            mkdir($cesta, 0777, true);
        }
        $result = $uploader->handleUpload($cesta);
        $this->sendResponse(new Nette\Application\Responses\JsonResponse($result));
    }

    public function renderDelete() {

        $uploader = new \UploadHandler();
        $cesta = __DIR__ . '/../../www/uploads/' . $this->getUser()->getIdentity()->id . '/image//product_image/' . $this->session->id_add . '';
        $result = $uploader->handleDelete($cesta);
        $this->sendResponse(new Nette\Application\Responses\JsonResponse($result));
    }

}
