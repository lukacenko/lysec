<?php
// source: C:\xampp\htdocs\lysec\app\presenters/templates/Spravy/nova.latte

class Template8e2168f2605172999a3537302f9546fb extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('2ed0991fd0', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbc75b0abfce_content')) { function _lbc75b0abfce_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="content">
    <div class="container">	

        <div class="container-fluid">
            <div class="row">
<?php $_b->templates['2ed0991fd0']->renderChildTemplate("layout.latte", $template->getParameters()) ?>
                <div class="col-md-9 current-chat">
                    <div class="row chat-toolbar-row">
                        <div class="col-sm-12">
                            <div class="btn-group chat-toolbar" role="group" aria-label="...">
                                <h3 class="bars"> Napísať novú správu </h3>
                            </div>
                        </div>
                    </div>
        <div class="login-page">
            <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
<?php $iterations = 0; foreach ($flashes as $flash) { ?>                <div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?> fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

                </div>
<?php $iterations++; } ?>
                <p>Napíšte a odošlite správu. Príjemca je notifikovaný na svoj email, príloha je obmedzená na 25MB.</p>
                <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["sendMessageForm"], array()) ?>

                    <div>
                        <span><?php if ($_label = $_form["prijemca"]->getLabel()) echo $_label  ?></span>
                        <?php echo $_form["prijemca"]->getControl() ?>

                    </div>
                    <div>
                        <span><?php if ($_label = $_form["title"]->getLabel()) echo $_label  ?></span>
                        <?php echo $_form["title"]->getControl() ?>

                    </div>
                    <div>   
                        Nie je dovolené dohovárať sa s Predajcom na osobnom odbere tovaru, zasielať akékoľvek kontaktné údaje, e-mail a obchodné ponuky mimo SAShE.sk, z dôvodu porušenia Podmienok používania odsúhlasených pri Registrácii.                                
                    </div>
                    <div>
                        <span><?php if ($_label = $_form["text"]->getLabel()) echo $_label  ?></span>
                        <?php echo $_form["text"]->getControl() ?>

                    </div>                            
                    <div>
                        <span> <?php if ($_label = $_form["priloha"]->getLabel()) echo $_label  ?>  </span>
                        <?php echo $_form["priloha"]->getControl() ?>

                    </div>   
                    <div class="col-md-2 col-md-offset-6">
                        <?php echo $_form["save"]->getControl() ?>

                    </div>
                <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

            </div>	
            <div class="clearfix"> </div>
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
if (!function_exists($_b->blocks['scripts'][] = '_lbd4d842fc27_scripts')) { function _lbd4d842fc27_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>






<?php
}}