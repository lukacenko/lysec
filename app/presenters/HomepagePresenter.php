<?php

namespace App\Presenters;

use Nette,
    Nette\Application\UI,
    Tomaj\Form\Renderer\BootstrapRenderer,
    Tomaj\Form\Renderer\BootstrapInlineRenderer,
    Tomaj\Form\Renderer\BootstrapVerticalRenderer;
use App\Model\Homepage;

class HomepagePresenter extends \BasePresenter {


    private $model;
    

    public function __construct(\Model\Repository\Homepage $model) {
        $this->model = $model;
        parent::__construct();
    }

        
    public function renderPrehlad(){
        //$this->template->orders = $this->data;
     }
    
    public function renderOrder($id){
        $hasData = false;
        foreach($this->data as $k=>$v){
            foreach($v as $k2=>$v2){
                if($k2 == 'number'){
                    if($v2 == $id){
                        $hasData = $this->data[$k];
                        break;
                    }
                }
            }
        }
        if($hasData == false){
            $this->flashMessage($this->translator->translate('Zákazka neexistuje'), 'danger');
            $this->redirect('Homepage:default');
        }
        $this->template->order = $hasData;
    }

    public function renderAddOrder(){
    }    
    
    
    //FORMULÁR na pridanie zakázky
    protected function createComponentAddOrderForm()
    {
        $form = new UI\Form;
        $form->setRenderer(new BootstrapVerticalRenderer());
        $form->setTranslator($this->translator);
        
        $form->addGroup('Údaje o zákazke')->setOption('container', 'fieldset class=col-xs-4');
        $form->addText('cislo', 'Číslo zákazky');
        $form->addSelect('farba', 'Farba zákazky', array('red'=>'Červená', 'blue'=>'Modrá', 'green'=>'Zelená'));
        $form->addText('nazov', 'Názov spoločnosti')
                ->setAttribute('data-attr', 'nazov')
                ->setAttribute('onKeyUp', '$(".nazov2").val(this.value)');
        
        $form->addGroup('Adresa dodania')->setOption('container', 'fieldset class=col-xs-4');
        $form->addText('nazovDodania', 'Názov spoločnosti')->setAttribute('class', 'nazov2');
        $form->addText('ulica', 'Ulica');
        $form->addText('mesto', 'Mesto');
        $form->addText('psc', 'PSČ');
        $form->addText('tel', 'Telefón');
        $form->addText('kod_krajiny', 'Kód krajiny');
        
        $form->addGroup()->setOption('container', 'fieldset class="col-xs-12 text-center"');
        $form->addSubmit('save', 'Pridať');
        $form->addProtection();
        $form->onSuccess[] = array($this, 'addOrderFormSucceeded');
        return $form;
    }

    //Spracovanie zakázky
    public function addOrderFormSucceeded(UI\Form $form, $values)
    {
        $this->flashMessage($this->translator->translate('Zákazka úspešne pridaná'), 'success');
        $this->redirect('Homepage:');
    }
}
