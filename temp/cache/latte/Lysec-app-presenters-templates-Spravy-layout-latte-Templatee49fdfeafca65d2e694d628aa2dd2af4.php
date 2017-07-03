<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Spravy/layout.latte

class Templatee49fdfeafca65d2e694d628aa2dd2af4 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('160c1bd4d0', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbb28def7297_content')) { function _lbb28def7297_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="col-md-3" style="margin-top:20px;">
    <div class="row chats-row">
        <div class="col-md-12">
            <div class="list-group-item open-request">
                <p><i class="glyphicon glyphicon-envelope"></i> <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:nova"), ENT_COMPAT) ?>
">Napísať správu</a></p>
            </div>
            <div class="list-group-item open-request">
                <p><i class="glyphicon glyphicon-user"></i> <a href="/chcem/kontakty">Kontakty</a></p>
            </div>
            <div class="list-group-item open-request">
                <p><i class="glyphicon glyphicon-folder-open"></i> <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:prehlad"), ENT_COMPAT) ?>
"> Doručená pošta</a></p>
            </div>
            <div class="list-group-item open-request">
                <p><i class="glyphicon glyphicon-send"></i> <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:odoslane"), ENT_COMPAT) ?>
"> Odoslaná pošta</a></p>
            </div>
            <div class="list-group-item open-request">
                <p><i class="glyphicon glyphicon-flag"></i> <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:oblubene"), ENT_COMPAT) ?>
"> Oblubené</a></p>
            </div>
            <div class="list-group-item open-request">
                <p><i class="glyphicon glyphicon-trash"></i> <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:zmazane"), ENT_COMPAT) ?>
"> Kôš</a></p>
            </div>
        </div>
    </div>
</div>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb78fb5df718_scripts')) { function _lb78fb5df718_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script>

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