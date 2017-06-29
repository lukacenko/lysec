<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Homepage/default.latte

class Template10e1d9c9283f6db3c9246baee4914258 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('c08fb2d050', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb9c223855c9_content')) { function _lb9c223855c9_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="row">
    <div class="col-xs-8">
<?php call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>
    </div>
    <div class="col-xs-4 text-right">
        <a type="button" class="btn btn-success btn-lg" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:addOrder"), ENT_COMPAT) ?>
">
            <span class="fa fa-plus-square-o" aria-hidden="true"></span> <?php ob_start() ?>
Pridať zákazku<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

        </a>
    </div>
</div>
<div class="row">
<?php $iterations = 0; foreach ($orders as $order) { $_b->templates['c08fb2d050']->renderChildTemplate('../directives/dashboard.latte', array('order'=>$order) + $template->getParameters()) ;$iterations++; } ?>
</div>
<?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb192d6ecdb3_title')) { function _lb192d6ecdb3_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>        <h1><?php ob_start() ?>Rozpracované zakázky<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></h1>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb6dcb0c7371_scripts')) { function _lb6dcb0c7371_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script>
    $(document).ready(function(){
        $(".hoverDiv").hover(function(){
            $(this).children('.overlayed').css("opacity", "0.1");
            $(this).children('.overlay').fadeIn(0);
        }, function(){
            $(this).children('.overlayed').css("opacity", "1");
            $(this).children('.overlay').fadeOut(0);
        });
    });
</script>
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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars()) ; 
}}