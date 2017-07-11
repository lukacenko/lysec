<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Nastavenia/osobnenastavenia.latte

class Templatefe570bbf035c32e5a4607a6032d98552 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('d99381faff', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb1eeb5eff51_content')) { function _lb1eeb5eff51_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">


    <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["changeInfoForm"], array()) ?>

        <div class="form-group">
            <?php if ($_label = $_form["login"]->getLabel()) echo $_label  ?>

            <?php echo $_form["login"]->getControl() ?>

        </div>
        <div class="form-group">
            <?php if ($_label = $_form["email"]->getLabel()) echo $_label  ?>

            <?php echo $_form["email"]->getControl() ?>

        </div>
        <div class="form-group">
            <?php if ($_label = $_form["name"]->getLabel()) echo $_label  ?>

            <?php echo $_form["name"]->getControl() ?>

        </div>
        <div class="form-group">
            <?php if ($_label = $_form["surname"]->getLabel()) echo $_label  ?>

            <?php echo $_form["surname"]->getControl() ?>

        </div>
        <div class="form-group">
            <?php if ($_label = $_form["country"]->getLabel()) echo $_label  ?>

            <?php echo $_form["country"]->getControl() ?>

        </div>
        <div class="form-group">
            <?php if ($_label = $_form["sex"]->getLabel()) echo $_label  ?>

            <?php echo $_form["sex"]->getControl() ?>

        </div>
        <div class="text-center">
            <?php echo $_form["saveas"]->getControl() ?>

        </div>
    <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

</div>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}