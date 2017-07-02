<?php
// source: C:\xampp\htdocs\lysec\app\presenters/templates/Spravy/prehlad.latte

class Template77396342575903eb638b9b84e5d5e034 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('fb4184030b', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb23ffa57983_content')) { function _lb23ffa57983_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="content">
    <div class="container">	

        <div class="container-fluid">
            <div class="row">
<?php $_b->templates['fb4184030b']->renderChildTemplate("layout.latte", $template->getParameters()) ?>
                <div class="col-md-9 current-chat">
                    <div class="row chat-toolbar-row">
                        <div class="col-sm-12">
                            <div class="btn-group chat-toolbar" role="group" aria-label="...">
                                <h3 class="bars"> Zoznam prijatých správ</h3>
                            </div>
                        </div>
                    </div>
<?php $iterations = 0; foreach ($flashes as $flash) { ?>                    <div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?> fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

                    </div> 
<?php $iterations++; } ?>
                    <button class="btn btn-primary" id="checkAll" type="button"> <input type="checkbox" name="vehicle" value="Bike"> Označ všetky </button>          
                    <button class="btn btn-primary" id="uncheckAll" type="button">  Odznačiť všetky </button>          
<?php $_l->tmp = $_control->getComponent("simpleGrid"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Predmet Name</th>
                                <th>Od</th>
                                <th>Dátum</th>
                                <th>Možnosti</th>
                            </tr>
                        </thead>
                        <tbody>
<?php $iterations = 0; foreach ($prehlad as $row) { if ($row->user2read == 0) { ?>
                                    <tr class="info">
<?php } else { ?>
                                    <tr>
<?php } ?>
                                    <td scope="row">   <input type="checkbox" name="vehicle" value="Bike"></td>
                                    <td> <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:detail", array($row->user1)), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($row->title, ENT_NOQUOTES) ?></a></td>
                                    <td><?php echo Latte\Runtime\Filters::escapeHtml($row->login, ENT_NOQUOTES) ?></td>
                                    <td><span class="glyphicon glyphicon-time"></span> <?php echo Latte\Runtime\Filters::escapeHtml($row->timesend, ENT_NOQUOTES) ?></td>
                                    <td><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:delete", array($row->id)), ENT_COMPAT) ?>"><span class="glyphicon glyphicon-remove"></span> </a> </td>
                                </tr>


<?php $iterations++; } ?>
                        </tbody>
                    </table>            

                    <button class="btn btn-primary" type="button"> <span class="glyphicon glyphicon-remove"></span> Zmaž označené  </button> 

                </div>
            </div>
        </div>




    </div>
</div>

<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb10cac92316_scripts')) { function _lb10cac92316_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script>

    $('#checkAll').click(function () {
        $('input:checkbox').each(function () {
            $(this).prop('checked', true);
        })
    });

    $('#uncheckAll').click(function () {
        $('input:checkbox').each(function () {
            $(this).prop('checked', false);
        })
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