<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Spravy/nova.latte

class Templatef26fe01cf56d1f56a45c5d642bbbc4ce extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('ea440d8a50', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbd9d45865e5_content')) { function _lbd9d45865e5_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$iterations = 0; foreach ($flashes as $flash) { ?><div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?> fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

</div>
<?php $iterations++; } ?>

<div class="content">
    <div class="container">
        <div class="login-page">
            <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                <h1>Napísať novú správu</h1>
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
    </div>
</div>


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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}