<?php
// source: C:\xampp\htdocs\lysec\app\presenters/templates/Sign/in.latte

class Template1bddca0ca03826170fa4f61fc2e6e431 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('54d9491c49', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb987559f7d8_content')) { function _lb987559f7d8_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
<?php call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>
    </div>
    <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
<?php $_l->tmp = $_control->getComponent("signInForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
    </div>
</div><?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lbe728127ec2_title')) { function _lbe728127ec2_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>        <h1>Lisec <?php ob_start() ?>prihlásenie<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></h1>
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