<?php
// source: C:\xampp\htdocs\lysec\app\presenters/templates/Spravy/detail.latte

class Template2932e4b1e472be95f944f120b44f3092 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('4a2b966832', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb193ce68a5b_content')) { function _lb193ce68a5b_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="content">
    <div class="container">	

        <div class="container-fluid">
            <div class="row">
<?php $_b->templates['4a2b966832']->renderChildTemplate("layout.latte", $template->getParameters()) ?>
                <div class="col-md-9 current-chat">
                    <div class="row chat-toolbar-row">
                        <div class="col-sm-12">
                            <div class="btn-group chat-toolbar" role="group" aria-label="...">
                                <h3 class="bars"> Konverzácia s <?php echo Latte\Runtime\Filters::escapeHtml($messageUser->login, ENT_NOQUOTES) ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row current-chat-area">
                        <div class="col-md-12">
                            <ul class="media-list">
<?php $iterations = 0; foreach ($message as $row) { ?>
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="media">
                                                <b><?php echo Latte\Runtime\Filters::escapeHtml($row->title, ENT_NOQUOTES) ?></b>
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="https://app.teamsupport.com/dc/1078/UserAvatar/1839999/48/1470773165634">
                                                </a>
                                                <div class="media-body">
                                                    <?php echo Latte\Runtime\Filters::escapeHtml($row->sprava, ENT_NOQUOTES) ?>

                                                    <br>
                                                    <small class="text-muted"><?php echo Latte\Runtime\Filters::escapeHtml($row->login, ENT_NOQUOTES) ?>
 | <?php echo Latte\Runtime\Filters::escapeHtml($row->timesend, ENT_NOQUOTES) ?></small>
                                                    <hr>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
<?php $iterations++; } ?>
                            </ul>  
                        </div>
                    </div>
                    <div class="row current-chat-footer">
                        <div class="panel-footer">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Send</button>
                                </span>
                            </div>
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
if (!function_exists($_b->blocks['scripts'][] = '_lbc349644d69_scripts')) { function _lbc349644d69_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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