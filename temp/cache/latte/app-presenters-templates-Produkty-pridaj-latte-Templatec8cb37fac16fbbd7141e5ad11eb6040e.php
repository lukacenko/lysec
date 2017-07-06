<?php
// source: C:\xampp\htdocs\lysec\app\presenters/templates/Produkty/pridaj.latte

class Templatec8cb37fac16fbbd7141e5ad11eb6040e extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8efcd2e6bd', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbadf1591404_content')) { function _lbadf1591404_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="content">
    <div class="container">	
        <div class="container-fluid">
            <div class="row">
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
<?php $iterations = 0; foreach ($flashes as $flash) { ?>                            <div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?> fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

                            </div>
<?php $iterations++; } ?>
                            <p>Napíšte a odošlite správu. Príjemca je notifikovaný na svoj email, príloha je obmedzená na 25MB.</p>
                            <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["form"], array()) ?>


                                <div>
                                    <span><?php if ($_label = $_form["one"]->getLabel()) echo $_label  ?></span>
                                    <?php echo $_form["one"]->getControl() ?>

                                </div>
                                <div>
                                    <span><?php if ($_label = $_form["two"]->getLabel()) echo $_label  ?></span>
                                    <?php echo $_form["two"]->getControl() ?>

                                </div>
                                <div>   
                                    Nie je dovolené dohovárať sa s Predajcom na osobnom odbere tovaru, zasielať akékoľvek kontaktné údaje, e-mail a obchodné ponuky mimo SAShE.sk, z dôvodu porušenia Podmienok používania odsúhlasených pri Registrácii.                                
                                </div>
                                <div>
                                    <span><?php if ($_label = $_form["product_name"]->getLabel()) echo $_label  ?></span>
                                    <?php echo $_form["product_name"]->getControl() ?>

                                </div>                            
                                <div>
                                    <span> <?php if ($_label = $_form["keywords"]->getLabel()) echo $_label  ?>  </span>
                                    <?php echo $_form["keywords"]->getControl() ?>

                                </div>   
                                <div>
                                    <span> <?php if ($_label = $_form["product_desc"]->getLabel()) echo $_label  ?>  </span>
                                    <?php echo $_form["product_desc"]->getControl() ?>

                                </div>   
                                <div>
                                    <span> <?php if ($_label = $_form["stock"]->getLabel()) echo $_label  ?>  </span>
                                    <?php echo $_form["stock"]->getControl() ?>

                                </div>   
                                <div>
                                    <span> <?php if ($_label = $_form["availability"]->getLabel()) echo $_label  ?>  </span>
                                    <?php echo $_form["availability"]->getControl() ?>

                                </div>   
                                <div>
                                    <span> <?php if ($_label = $_form["price"]->getLabel()) echo $_label  ?>  </span>
                                    <?php echo $_form["price"]->getControl() ?>

                                </div>   
                                <div>
                                    <span> <?php if ($_label = $_form["postage"]->getLabel()) echo $_label  ?>  </span>
                                    <?php echo $_form["postage"]->getControl() ?>

                                </div>   
                                <div>
                                    <span> <?php if ($_label = $_form["color"]->getLabel()) echo $_label  ?>  </span>
                                    <?php echo $_form["color"]->getControl() ?>

                                </div>   
                                <div class="col-md-2 col-md-offset-6">
                                    <?php echo $_form["send"]->getControl() ?>

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
if (!function_exists($_b->blocks['scripts'][] = '_lbbe0a86243c_scripts')) { function _lbbe0a86243c_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/nette.ajax.js"></script>
<script>
    $(function () {
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