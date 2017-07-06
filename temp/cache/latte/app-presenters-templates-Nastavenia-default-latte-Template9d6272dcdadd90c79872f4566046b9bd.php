<?php
// source: C:\xampp\htdocs\lysec\app\presenters/templates/Nastavenia/default.latte

class Template9d6272dcdadd90c79872f4566046b9bd extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('2ec88be4d3', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb39338c851a_content')) { function _lb39338c851a_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="content">
        <h1>Nastavenia </h1>
        Úprava informácií o uživateľovi. Nezabudni kliknúť na Uložiť na spodu stránky.
                <div class="row">
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Osobné informácie </h2>
                        <div class="text-right">
                            <a href="" class="glyphicon glyphicon-pencil"> Upraviť </a>
                        </div>                    
                    </div>
                    <table class="table"> 
                        <tbody> 
                            <tr> <th scope="row">Prihlasovacie meno:</th> <td>12345</td></tr>
                            <tr> <th scope="row">Meno:</th> <td>Lukáš</td> </tr>
                            <tr> <th scope="row">Priezvisko:</th> <td>Šurda</td> </tr>
                            <tr> <th scope="row">Telefón:</th> <td>0904090180</td> </tr>
                            <tr> <th scope="row">Krajina:</th> <td>Slovenská republika</td> </tr>
                            <tr> <th scope="row">Pohlavie:</th> <td>Muž</td> </tr>
                        </tbody> 
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Adresy doručenia</h2>
                        <div class="text-right">
                            <a href="" class="glyphicon glyphicon-pencil"> Upraviť </a>
                        </div>
                    </div>
                    <table class="table"> 
                        <tbody> 
                            <tr> <th scope="row">Firma:</th> <td>Šurda</td></tr>
                            <tr> <th scope="row">Adresa:</th> <td>Lukáš</td> </tr>
                            <tr> <th scope="row">Mesto:</th> <td>Lukáš</td> </tr>
                            <tr> <th scope="row">PSČ:</th> <td>Lukáš</td> </tr>
                            <tr> <th scope="row">Štát:</th> <td>Lukáš</td> </tr>
                        </tbody> 
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Fakturačne údaje</h2>
                        <div class="text-right">
                            <a href="" class="glyphicon glyphicon-pencil"> Upraviť </a>
                        </div>
                    </div>
                    <table class="table"> 
                        <tbody> 
                            <tr> <th scope="row">Firma:</th> <td>Šurda</td></tr>
                            <tr> <th scope="row">Adresa:</th> <td>Mechov 213</td> </tr>
                            <tr> <th scope="row">Mesto:</th> <td>Velčice</td> </tr>
                            <tr> <th scope="row">PSČ:</th> <td>95171</td> </tr>
                            <tr> <th scope="row">Štát:</th> <td>Slovenská republika</td> </tr>
                        </tbody> 
                    </table>
                </div>
            </div>        
        </div>        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Obchody</h2>
                        <div class="text-right">
                            <a href="" class="glyphicon glyphicon-pencil"> Upraviť </a>
                        </div>                    
                    </div>
                    <table class="table"> 
                        <tbody> 
                            <tr> <th scope="row">Adresa:</th> <td>Mechov 213</td></tr>
                            <tr> <th scope="row">Mesto:</th> <td>Velčice</td> </tr>
                            <tr> <th scope="row">PSČ:</th> <td>95171</td> </tr>
                            <tr> <th scope="row">Štát:</th> <td>Slovenská republika</td> </tr>
                        </tbody> 
                    </table>
                </div>
            </div>

        </div>
<?php $_l->tmp = $_control->getComponent("changeInfoForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>

    </div>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbd78c09e914_scripts')) { function _lbd78c09e914_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <script>

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