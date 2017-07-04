<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Produkty/pridaj.latte

class Templateca33f4483826480f9c7817e5e31df074 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5d48a4f9e1', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbdefe47cc6a_content')) { function _lbdefe47cc6a_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["form"], array()) ?>

    <?php echo $_form["one"]->getControl()->addAttributes(array('size' => 3)) ?>

<div id="<?php echo $_control->getSnippetId('two') ?>"><?php call_user_func(reset($_b->blocks['_two']), $_b, $template->getParameters()) ?>
</div>    <?php echo $_form["send"]->getControl() ?>

<?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

<?php
}}

//
// block _two
//
if (!function_exists($_b->blocks['_two'][] = '_lbdedd0a79cd__two')) { function _lbdedd0a79cd__two($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('two', FALSE)
?>        <?php echo $_form["two"]->getControl()->addAttributes(array('size' => 3)) ?>

<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb40b7644207_scripts')) { function _lb40b7644207_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/nette.ajax.js"></script>
<script>
$(function(){
    $.nette.init();

    $('select[name=one]').change(function () {
        $.nette.ajax({
            url: <?php echo Latte\Runtime\Filters::escapeJs($_control->link("invalidate!")) ?>,
            data: {
                'value': $('select[name=one]').val(),
            }
        });
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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars()) ; 
}}