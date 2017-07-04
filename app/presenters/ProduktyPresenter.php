<?php


namespace App\Presenters;

use Nette\Security\Identity;
use Nette,
    Nette\Application\UI;
use Ublaboo\DataGrid\DataGrid;

class ProduktyPresenter extends \BasePresenter {
    
    private $model;

    public function __construct(\Model\Repository\Produkty $model) {
        $this->model = $model;
        parent::__construct();
    }

    public function renderPrehlad() {
        $this->template->produkty = $this->model->getAllProduct();
    }
    
}