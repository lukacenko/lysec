<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Spravy/detail.latte

class Templated2e5c74686279317151b6ad781e09939 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('b396675691', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb4be79d8a2d_content')) { function _lb4be79d8a2d_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="content">
    <div class="container">	

        <div class="container-fluid">
            <div class="row">
<?php $_b->templates['b396675691']->renderChildTemplate("layout.latte", $template->getParameters()) ?>
                <div class="col-md-9 current-chat">
                    <div class="row chat-toolbar-row">
                        <div class="col-sm-12">
                            <div class="btn-group chat-toolbar" role="group" aria-label="...">
                                <h3 class="bars"> Konverzácia s <?php echo Latte\Runtime\Filters::escapeHtml($messageUser->login, ENT_NOQUOTES) ?></h3>
                            </div>
                        </div>
                    </div>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($message) as $row) { if ($iterator->first) { ?>
                            <div class="row current-chat-area">
                                <div class="col-md-12">
<?php } if ($messageUser->login == $row->login) { ?>
                                    <ul class="media-list text-right">

<?php } else { ?>
                                        <ul class="media-list">
<?php } ?>
                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media">
                                                    <b><?php echo Latte\Runtime\Filters::escapeHtml($row->title, ENT_NOQUOTES) ?></b>
<?php if ($messageUser->login == $row->login) { ?>
                                                        <a class="pull-right" href="#">

<?php } else { ?>
                                                            <a class="pull-left" href="#">
<?php } ?>
                                                            <img class="media-object img-circle " src="https://app.teamsupport.com/dc/1078/UserAvatar/1839999/48/1470773165634">
                                                        </a>
                                                        <div class="media-body">
                                                            <?php echo Latte\Runtime\Filters::escapeHtml($row->sprava, ENT_NOQUOTES) ?>

                                                            <br>
                                                            <?php echo Latte\Runtime\Filters::escapeHtml($help = !$row->login, ENT_NOQUOTES) ?>

                                                            <small class="text-muted"><?php echo Latte\Runtime\Filters::escapeHtml($row->login, ENT_NOQUOTES) ?>
 | <?php echo Latte\Runtime\Filters::escapeHtml($row->timesend, ENT_NOQUOTES) ?></small>
                                                            <hr>
                                                        </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
<?php if ($iterator->first) { ?>
                                </div>
                            </div>
<?php } $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                    <div class="row current-chat-footer">
                        <div class="panel-footer">
                            <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["sendMessageOpenForm"], array()) ?>

                                <div class="form-group" >
                                    <span> <?php if ($_label = $_form["title"]->getLabel()) echo $_label  ?>  </span>
                                    <?php echo $_form["title"]->getControl() ?>

                                </div>
                                <div class="form-group" >
                                    <span> <?php if ($_label = $_form["text"]->getLabel()) echo $_label  ?>  </span>
                                    <?php echo $_form["text"]->getControl() ?>

                                </div>
                                <div class="form-group" >
                                    <?php echo $_form["save"]->getControl() ?>

                                </div>
                            <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

                        </div>
                    </div>
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
if (!function_exists($_b->blocks['scripts'][] = '_lb5c55fb4262_scripts')) { function _lb5c55fb4262_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script>
    $(document).ready(function () {
        $("#myTable").DataTable();
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