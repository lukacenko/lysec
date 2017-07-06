<?php
// source: C:\xampp\htdocs\lysec\vendor\datagrid\src\Components\DataGridPaginator/templates/data_grid_paginator.latte

class Templateb4c85abf1b81fa742a167c3edcbe2cdb extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('a7a412b612', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block icon-arrow-left
//
if (!function_exists($_b->blocks['icon-arrow-left'][] = '_lb19825fc099_icon_arrow_left')) { function _lb19825fc099_icon_arrow_left($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>
arrow-left"></i><?php
}}

//
// block icon-arrow-right
//
if (!function_exists($_b->blocks['icon-arrow-right'][] = '_lb5c3a64c03a_icon_arrow_right')) { function _lb5c3a64c03a_icon_arrow_right($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>
arrow-right"></i><?php
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
$link = array($control->getParent(), 'link') ?>

<?php if ($paginator->pageCount > 1) { ?><div>
<?php if ($paginator->isFirst()) { ?>
		<a class="first btn btn-sm btn-default disabled">
<?php } else { ?>
		<a class="btn btn-sm btn-default ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($link('page!', array('page' => $paginator->page - 1))), ENT_COMPAT) ?>" rel="prev">
<?php } if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['icon-arrow-left']), $_b, get_defined_vars())  ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.previous'), ENT_NOQUOTES) ?></a>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($steps) as $step) { if ($step == $paginator->page) { ?>
			<a class="first btn btn-sm btn-primary active"><?php echo Latte\Runtime\Filters::escapeHtml($step, ENT_NOQUOTES) ?></a>
<?php } else { ?>
			<a class="btn btn-sm btn-default ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($link('page!', array('page' => $step))), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($step, ENT_NOQUOTES) ?></a>
<?php } ?>
		
		<?php if ($iterator->nextValue > $step + 1) { ?><span>…</span><?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php if ($paginator->isLast()) { ?>
		<a class="first btn btn-sm btn-default disabled"><?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.next'), ENT_NOQUOTES) ?>

<?php } else { ?>
		<a class="btn btn-sm btn-default ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($link('page!', array('page' => $paginator->page + 1))), ENT_COMPAT) ?>
" rel="next"><?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.next'), ENT_NOQUOTES) ?>

<?php } call_user_func(reset($_b->blocks['icon-arrow-right']), $_b, get_defined_vars())  ?>
</a>
</div>
<?php } 
}}