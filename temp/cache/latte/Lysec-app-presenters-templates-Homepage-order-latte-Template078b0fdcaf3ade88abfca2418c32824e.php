<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Homepage/order.latte

class Template078b0fdcaf3ade88abfca2418c32824e extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('27bee47b91', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb941683ae1e_content')) { function _lb941683ae1e_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h1><?php ob_start() ?>Detail zákazky<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>
: <?php echo Latte\Runtime\Filters::escapeHtml($order['number'], ENT_NOQUOTES) ?></h1>

<div class="row well well-sm" style="border: 5px solid <?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::escapeCss($order['color']), ENT_COMPAT) ?>; border-radius: 20px !important;">
    <div class="col-xs-6">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php ob_start() ?>Zákazka<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4 style="margin: 5px 0px;"><u><?php ob_start() ?>
Údaje o zákazke<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>:</u></h4>
                                <div class="margin-5">
                                    National Glad Ltd, India<br>
                                    <?php echo Latte\Runtime\Filters::escapeHtml($order['number'], ENT_NOQUOTES) ?>

                                </div>                                
                            </div>
                            <div class="col-xs-6">
                                <h4 style="margin: 5px 0px;"><u><?php ob_start() ?>
Adresa dodania<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>:</u></h4>
                                <address class="margin-5">
                                    <strong>Nov, s.r.o.</strong><br>
                                    Továrenská 58/A<br>
                                    Zlaté Moravce, SK 95301<br>
                                    <abbr title="Telefón">Tel:</abbr> (123) 456-7890
                                </address>                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 style="margin: 5px 0px;"><u><?php ob_start() ?>
Dátum dodania<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>:</u></h4>                                
                                <table class="table table-fixed table-bordered margin-0">
                                    <tr>
                                        <td>
                                            8/2016
                                        </td>
                                        <td>
                                            235
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><?php ob_start() ?>Tabuľka o prehľade balenia<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></h3>
            </div>
            <div class="panel-body">
                <table class="table table-fixed">
                    <thead>
                        <tr>
                            <th></th>
                            <th><?php ob_start() ?>Naložené<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></th>
                            <th><?php ob_start() ?>Zabalené<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></th>
                            <th><?php ob_start() ?>Označené<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></th>
                            <th><?php ob_start() ?>Celkovo<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><?php ob_start() ?>Diely<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></th>
                            <td>0</td>
                            <td>5</td>
                            <td>43</td>
                            <td>62</td>
                        </tr>
                        <tr>
                            <th><?php ob_start() ?>Zariadenia<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></th>
                            <td>0</td>
                            <td>1</td>
                            <td>12</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <th><?php ob_start() ?>Palety<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></th>
                            <td>0</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                        
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-fixed table-bordered">
            <thead>
                <tr>
                    <th>
                        <?php ob_start() ?>Dátum dodania<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Pozícia<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Seriové číslo<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Označenie<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>P.č. dielu<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Názov dielu<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Hmotnosť dielov<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Posledná činnosť<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?> /<br>
                        <?php ob_start() ?>stav balenia<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Posledný pracovník<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Číslo palety<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Balenie<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Preprava<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                    <th>
                        <?php ob_start() ?>Číslo kontajnera<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?> /<br>
                        <?php ob_start() ?>ŠPZ vozidla<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?>

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12.2.2016</td>
                    <td data-to-expand="1005" style="cursor: pointer;"><i class="fa fa-plus fa-1"></i> 1005</td>
                    <td>801-087051</td>
                    <td>FREMD/MA</td>
                    <td>1</td>
                    <td>TISH</td>
                    <td>700kg</td>
                    <td>Nakládka</td>
                    <td>Štefan Kršák</td>
                    <td>2</td>
                    <td>ALU/BL</td>
                    <td>Kontajner</td>
                    <td>326-457-82</td>
                </tr>
                <tr data-expand="1005" style="display: none;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>2</td>
                    <td>ELV</td>
                    <td>1250kg</td>
                    <td>Nakládka</td>
                    <td>Štefan Kršák</td>
                    <td>2</td>
                    <td>ALU/BL</td>
                    <td>Kontajner</td>
                    <td>326-457-82</td>
                </tr>
                <tr>
                    <td></td>
                    <td data-to-expand="1010" style="cursor: pointer;"><i class="fa fa-plus fa-1"></i> 1010</td>
                    <td>380-083970</td>
                    <td>RTUB</td>
                    <td>1</td>
                    <td>PANEL</td>
                    <td>890kg</td>
                    <td>Preprava palety</td>
                    <td>Ján Pekný</td>
                    <td>1</td>
                    <td>CU/MD</td>
                    <td>Kontajner</td>
                    <td>326-457-82</td>
                </tr>
                <tr data-expand="1010" style="display: none;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>2</td>
                    <td>PODÁVAČ</td>
                    <td>560kg</td>
                    <td>Balenie</td>
                    <td>Peter Hrozný</td>
                    <td>3</td>
                    <td>CU/MD</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr data-expand="1010" style="display: none;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3</td>
                    <td>KABELÁŽ</td>
                    <td>280kg</td>
                    <td>Balenie</td>
                    <td>Peter Hrozný</td>
                    <td>3</td>
                    <td>CU/MD</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>20.2.2016</td>
                    <td data-to-expand="1020" style="cursor: pointer;"><i class="fa fa-plus fa-1"></i> 1020</td>
                    <td>380-057708</td>
                    <td>RTB/GEB</td>
                    <td>1</td>
                    <td>Dopravník</td>
                    <td>1810kg</td>
                    <td>Ustav.</td>
                    <td>Ivan Malý</td>
                    <td>4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr data-expand="1020" style="display: none;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>2</td>
                    <td>Skriňa 230/380V</td>
                    <td>650kg</td>
                    <td>Označovanie</td>
                    <td>Štefan Biely</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr data-expand="1020" style="display: none;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>3</td>
                    <td>Príslušenstvo</td>
                    <td>200kg</td>
                    <td>Označovanie</td>
                    <td>Vladimír Mach</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td data-to-expand="1035" style="cursor: pointer;"><i class="fa fa-plus fa-1"></i> 1035</td>
                    <td>315-035929</td>
                    <td>VAM/FA</td>
                    <td>1</td>
                    <td>Rezač</td>
                    <td>620kg</td>
                    <td>Nakládka</td>
                    <td>Pavol Široký</td>
                    <td>5</td>
                    <td>ALU/BL</td>
                    <td>LKW</td>
                    <td>A-323AT</td>
                </tr>
                <tr data-expand="1035" style="display: none;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>2</td>
                    <td>Podávač</td>
                    <td>480kg</td>
                    <td>Nakládka</td>
                    <td>Pavol Široký</td>
                    <td>5</td>
                    <td>ALU/BL</td>
                    <td>LKW</td>
                    <td>A-323AT</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1015</td>
                    <td>380-083570</td>
                    <td>RTV-OMBAV</td>
                    <td>1</td>
                    <td>Elektronika</td>
                    <td>1200kg</td>
                    <td>Balenie</td>
                    <td>Roman Úzky</td>
                    <td>6</td>
                    <td>OVMDS</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb7fc15a46db_scripts')) { function _lb7fc15a46db_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script>
    $(function(){
        $('td[data-to-expand]').on('click', function(){
            $(this).children('i').toggleClass('fa-minus');
            $('tr[data-expand="'+$(this).attr('data-to-expand')+'"]').toggle();
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
?>

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars()) ; 
}}