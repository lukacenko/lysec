<?php
// source: C:\xampp\htdocs\lysec\app\presenters/templates/Sign/prihlasenie.latte

class Templatec4565f22418834f15dc564acae65f7cd extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('da927b8ecf', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb979aeae89d_content')) { function _lb979aeae89d_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><!-- content-section-starts -->
<div class="content">
    <div class="container">
        <div class="login-page">
            <div class="dreamcrub">
                <ul class="breadcrumbs">
                    <li class="home">
                        <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                        <span>&gt;</span>
                    </li>
                    <li class="women">
                        Login
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="account_grid">
                <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                    <h2>NOVÝ ZÁKAZNÍCI</h2>
                    <p>Vytvorením účtu v našom obchode budete môcť rýchlejšie prechádzať procesom platby, ukladať viaceré dodacie adresy, zobrazovať a sledovať vaše objednávky vo vašom účte a ďalšie.</p>
                    <a class="acount-btn" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Sign:registracia"), ENT_COMPAT) ?>
">Vytvoriť účet</a>
                </div>
                <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                    <h3>REGISTROVANÍ ZÁKAZNÍCI</h3>
                    <p>Ak máte vytvorený účet, prosím prihláste sa.</p>
                        <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["signInForm"], array()) ?>

                            <div>
                                <span><?php if ($_label = $_form["username"]->getLabel()) echo $_label  ?></span>
                                <?php echo $_form["username"]->getControl() ?>

                            </div>
                            <div>
                                <span><?php if ($_label = $_form["password"]->getLabel()) echo $_label  ?></span>
                                <?php echo $_form["password"]->getControl() ?>

                            </div>                            
                            <div>
                                <span> <?php if ($_label = $_form["remember"]->getLabel()) echo $_label  ?>  </span>
                                 <?php echo $_form["remember"]->getControl() ?>

                            </div>                            
                            <a class="forgot" href="#">Zabudol si heslo ?</a>
                            <?php echo $_form["send"]->getControl() ?>

                        <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

                </div>	
                <div class="clearfix"> </div>
            </div>
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
?>

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}