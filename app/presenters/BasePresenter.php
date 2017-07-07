<?php

/**
 * Base presenter for all application presenters.
 *
 * @property callable $newListFormSubmitted
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter {

    /** @persistent */
    public $locale = 'sk';

    /** @var \Kdyby\Translation\Translator @inject */
    public $translator;

    protected function startup() {



        parent::startup();
        //authorizator
        if ($this->user->isLoggedIn()) {
            if ($this->name == 'Sign') {
                if ($this->action == 'in') {
                    $this->redirect('Homepage:default');
                }
            }
        }
        if (!$this->user->isAllowed($this->name, $this->action)) {
            if (!$this->user->isLoggedIn()) {
                $this->redirect('Sign:prihlasenie');
            } else {
                $this->flashMessage('Do tejto sekcie nemáte prístup', 'error');
                $this->redirect('Homepage:default');
            }
        }
    }

    public function createTemplate($class = NULL) {
        $template = parent::createTemplate($class);
        //zavedenie premennej lang do templateov
        $template->lang = $this->locale;
        return $template;
    }

}
