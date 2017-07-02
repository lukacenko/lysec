<?php
// source: C:\xampp\htdocs\lysec\app\presenters/templates/Spravy/layout.latte

class Templatecde64c8a0f2668988e294f3773f4415d extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('9f214f1f86', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb4d698a7236_content')) { function _lb4d698a7236_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="col-md-3" style="margin-top:20px;">
    <div class="row chats-row">
        <div class="col-md-12">
            <div class="list-group-item open-request">
                <p><i class="glyphicon glyphicon-envelope"></i> <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:nova"), ENT_COMPAT) ?>
">Napísať správu</a></p>
            </div>
            <div class="list-group-item open-request">
                <p><i class="glyphicon glyphicon-pencil"></i> <a href="/chcem/rozpisana-posta">Rozpísané správy</a></p>
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
                <p><i class="glyphicon glyphicon-flag"></i> <a href="/chcem/postu?stared"> Oblubené</a></p>
            </div>
            <div class="list-group-item open-request">
                <p><i class="glyphicon glyphicon-trash"></i> <a href="/chcem/postu?trash"> Kôš</a></p>
            </div>
        </div>
    </div>
</div>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb54c8dfc084_scripts')) { function _lb54c8dfc084_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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