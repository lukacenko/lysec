<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Sign/registracia.latte

class Template9030cbbb06c03e4b65b5fd2f2b4578f7 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('c8da33dd7b', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbb608d0cd3e_content')) { function _lbb608d0cd3e_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="registration-form">
    <div class="container">
        <div class="dreamcrub">
            <ul class="breadcrumbs">
                <li class="home">
                    <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li class="women">
                    Registration
                </li>
            </ul>
            <ul class="previous">
                <li><a href="index.html">Back to Previous Page</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <h2>Registrácia</h2>
        <div class="registration-grids">
            <div class="reg-form">
                <div class="reg">
                    <p>Vitajte, prosím, zadajte nasledujúce údaje a pokračujte.</p>
                    <p>Ak ste sa už zaregistrovali, <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Sign:prihlasenie"), ENT_COMPAT) ?>
">kliknite sem</a></p>
<?php $iterations = 0; foreach ($flashes as $flash) { ?>                    <div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?> fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

                    </div><?php $iterations++; } ?>
                     <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["regisForm"], array()) ?>

                    <ul>
                        <li class="text-info"><?php if ($_label = $_form["email"]->getLabel()) echo $_label  ?> </li>
                        <li><?php echo $_form["email"]->getControl() ?></li>
                    </ul>
                    <ul>
                        <li class="text-info"><?php if ($_label = $_form["username"]->getLabel()) echo $_label  ?> </li>
                        <li><?php echo $_form["username"]->getControl() ?></li>
                    </ul>				 
                    <ul>
                        <li class="text-info"><?php if ($_label = $_form["password"]->getLabel()) echo $_label  ?> </li>
                        <li><?php echo $_form["password"]->getControl() ?></li>
                    </ul>
                    <ul>
                        <li class="text-info"><?php if ($_label = $_form["password2"]->getLabel()) echo $_label  ?> </li>
                        <li><?php echo $_form["password2"]->getControl() ?></li>
                    </ul>
                    <ul>
                        <li class="text-info"> <?php if ($_label = $_form["rola"]->getLabel()) echo $_label  ?> </li>
                        <li><?php echo $_form["rola"]->getControl() ?></li>
                    </ul>
                    <ul>
                        <li class="text-info"><?php if ($_label = $_form["newsletter"]->getLabel()) echo $_label  ?> </li>
                        <li><?php echo $_form["newsletter"]->getControl() ?></li>
                    </ul>
                    <ul>
                        <li class="text-info"><?php if ($_label = $_form["actept"]->getLabel()) echo $_label  ?> </li>
                        <li> <?php echo $_form["actept"]->getControl() ?></li>
                    </ul>
                    <?php echo $_form["send"]->getControl() ?>

                    <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p> 
                    <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>


                    </div>
                </div>
                <div class="reg-right">
                    <h3>Bezplatný účet</h3>
                    <div class="strip"></div>
                    <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
                        libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
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