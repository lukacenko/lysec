<?php
// source: C:\xampp\htdocs\lysec\app\presenters/templates/Sign/zabudnuteheslo.latte

class Template3fc8171452e98286fc6772faf3575463 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('e5d978685c', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb0f025c1830_content')) { function _lb0f025c1830_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="content">
    <div class="container">
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
        <div class="dreamcrub">
            <h1>Zabudnuté heslo</h1>
            <h3> Ak si zabudol svoje heslo, tu si ho môžeš zmeniť.</h3>
        </div>
    
<?php $iterations = 0; foreach ($flashes as $flash) { ?>        <div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?> fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

        </div>  
<?php $iterations++; } ?>
        <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["newPassword"], array()) ?>

            <div class="form-group">
                <label for="exampleInputEmail1"><?php if ($_label = $_form["email"]->getLabel()) echo $_label  ?></label>
                <?php echo $_form["email"]->getControl() ?>

            </div> 
            <div class="form-group text-center">
                <?php echo $_form["recovery"]->getControl() ?>

            </div>            
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