<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Nastavenia/default.latte

class Template10f779556372b6490e781ed0e66749a5 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('e270fb76c2', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb374fffb0cd_content')) { function _lb374fffb0cd_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
<div class="content">
    <h1>Nastavenia </h1>
    Úprava informácií o uživateľovi. Nezabudni kliknúť na Uložiť na spodu stránky.
    <h2> Osobné informácie</h2>
<?php $_l->tmp = $_control->getComponent("changeInfoForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
    <h2> Adresy doručenia</h2>
    </div>
</div>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbe53c4cbcaf_scripts')) { function _lbe53c4cbcaf_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script>

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