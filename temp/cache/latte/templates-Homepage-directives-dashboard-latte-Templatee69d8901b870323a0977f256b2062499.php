<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Homepage/../directives/dashboard.latte

class Templatee69d8901b870323a0977f256b2062499 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('74ff470303', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<div class="col-xs-4 hoverDiv">
    <div class="overlayed" style="position: absolute; border: 5px solid <?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::escapeCss($order['color']), ENT_COMPAT) ?>; border-radius: 10px;">
        <table class="table table-condensed table-bordered table-striped" style="margin-top: 5px;">
            <tbody>
                <tr>
                    <td>
                        <i class="fa fa-tasks"></i> <?php echo Latte\Runtime\Filters::escapeHtml($order['number'], ENT_NOQUOTES) ?>

                        <br>
                        <i class="fa fa-building"></i> <?php echo Latte\Runtime\Filters::escapeHtml($order['company'], ENT_NOQUOTES) ?>

                    </td>
                    <td>
                        <i class="fa fa-globe"></i> <?php echo Latte\Runtime\Filters::escapeHtml($order['state'], ENT_NOQUOTES) ?>

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                         <table class="table table-bordered table-fixed margin-0">
                            <tr>
                                <th>
                                    <?php ob_start() ?>Naložených<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>:
                                </th>
                                <td class="text-center">
                                    <span class="label <?php echo Latte\Runtime\Filters::escapeHtml($order['loadedPerc'] < 50 ? 'label-danger' : ($order['loadedPerc'] <= 99 ? 'label-warning' : 'label-success'), ENT_COMPAT) ?> label-as-badge">
                                        <b><?php echo Latte\Runtime\Filters::escapeHtml($order['loadedPerc'], ENT_NOQUOTES) ?>
%</b> ( <?php echo Latte\Runtime\Filters::escapeHtml($order['loadedCount'], ENT_NOQUOTES) ?>
 <?php ob_start() ?>ks<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?> )
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php ob_start() ?>Zabalených<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>:
                                </th>
                                <td class="text-center">
                                    <span class="label <?php echo Latte\Runtime\Filters::escapeHtml($order['wrappedPerc'] < 50 ? 'label-danger' : ($order['wrappedPerc'] <= 99 ? 'label-warning' : 'label-success'), ENT_COMPAT) ?> label-as-badge">
                                        <b><?php echo Latte\Runtime\Filters::escapeHtml($order['wrappedPerc'], ENT_NOQUOTES) ?>
%</b> ( <?php echo Latte\Runtime\Filters::escapeHtml($order['wrappedCount'], ENT_NOQUOTES) ?>
 <?php ob_start() ?>ks<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?> )
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php ob_start() ?>Označených<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>:
                                </th>
                                <td class="text-center">
                                    <span class="label <?php echo Latte\Runtime\Filters::escapeHtml($order['markedPerc'] < 50 ? 'label-danger' : ($order['markedPerc'] <= 75 ? 'label-warning' : 'label-success'), ENT_COMPAT) ?> label-as-badge">
                                        <b><?php echo Latte\Runtime\Filters::escapeHtml($order['markedPerc'], ENT_NOQUOTES) ?>
%</b> ( <?php echo Latte\Runtime\Filters::escapeHtml($order['markedCount'], ENT_NOQUOTES) ?>
 <?php ob_start() ?>ks<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?> )
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php ob_start() ?>Celkovo<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>:
                                </th>
                                <td class="text-center">
                                    <span class="label label-info label-as-badge"><?php echo Latte\Runtime\Filters::escapeHtml($order['totalCount'], ENT_NOQUOTES) ?>
 <?php ob_start() ?>ks<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></span>
                                </td>
                            </tr>
                        </table>

                        <table class="table table-bordered table-fixed margin-0">
                            <tr>
                                <td>
                                    <?php echo Latte\Runtime\Filters::escapeHtml($order['date'], ENT_NOQUOTES) ?>

                                </td>
                                <td>
                                    <?php echo Latte\Runtime\Filters::escapeHtml($order['days'], ENT_NOQUOTES) ?>

                                </td>
                                <td>
                                    <?php echo Latte\Runtime\Filters::escapeHtml($order['date2'], ENT_NOQUOTES) ?>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="overlay text-center" style="display: none; position: absolute; width: 100%; top: 80px;">
        <div class="row">
            <div class="col-xs-12">
                <h3><?php ob_start() ?>Zákazka<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>
: <?php echo Latte\Runtime\Filters::escapeHtml($order['number'], ENT_NOQUOTES) ?></h3>
            </div>
            <div class="col-xs-12">
                <a class="btn btn-primary" type="button" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:order", array('id'=>$order['number'])), ENT_COMPAT) ?>
"><span aria-hidden="true" class="fa fa-pencil-square-o"></span> <?php ob_start() ?>
Editovať<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></a>            
                <button class="btn btn-success" type="button"><span aria-hidden="true" class="fa fa-check-square-o"></span> <?php ob_start() ?>
Ukončiť<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></button>            
            </div>
        </div>
    </div>
</div><?php
}}