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
<?php $iterations = 0; foreach ($flashes as $flash) { ?>                <div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?> fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

        </div>      
<?php $iterations++; } ?>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Osobné informácie</h2>
                        <div class="text-right">
                            <a class="glyphicon glyphicon-pencil" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Nastavenia:osobnenastavenia"), ENT_COMPAT) ?>
"> Upraviť </a>
                        </div>                    
                    </div>
                    <table class="table"> 
                        <tbody> 
                            <tr> <th scope="row">Prihlasovacie meno:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($osobne->login, ENT_NOQUOTES) ?></td></tr>
                            <tr> <th scope="row">Meno:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($osobne->name, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">Priezvisko:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($osobne->surname, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">Krajina:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($osobne->country, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">Pohlavie:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($osobne->sex, ENT_NOQUOTES) ?></td> </tr>
                        </tbody> 
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Adresy doručenia</h2>
                        <div class="text-right">
                            <a class="glyphicon glyphicon-pencil" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Nastavenia:adresydorucenia"), ENT_COMPAT) ?>
"> Upraviť </a>
                        </div>
                    </div>
                    <table class="table"> 
                        <tbody> 
                            <tr> <th scope="row">Meno:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($dodacie->name, ENT_NOQUOTES) ?></td></tr>
                            <tr> <th scope="row">Priezvisko:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($dodacie->surename, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">Ulica:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($dodacie->street, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">PSČ:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($dodacie->postcode, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">Mesto:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($dodacie->city, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">Telefón:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($dodacie->phone, ENT_NOQUOTES) ?></td> </tr>

                            
                        </tbody> 
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Fakturačne údaje</h2>
                        <div class="text-right">
                            <a class="glyphicon glyphicon-pencil" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Nastavenia:adresyfaktura"), ENT_COMPAT) ?>
"> Upraviť </a>
                        </div>
                    </div>
                    <table class="table"> 
                        <tbody> 
                            <tr> <th scope="row">Meno:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($fakturacne->name, ENT_NOQUOTES) ?></td></tr>
                            <tr> <th scope="row">Priezvisko:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($fakturacne->surename, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">Ulica:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($fakturacne->street, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">PSČ:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($fakturacne->postcode, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">Mesto:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($fakturacne->city, ENT_NOQUOTES) ?></td> </tr>
                            <tr> <th scope="row">Telefón:</th> <td><?php echo Latte\Runtime\Filters::escapeHtml($fakturacne->phone, ENT_NOQUOTES) ?></td> </tr>
                        </tbody> 
                    </table>
                </div>
            </div>        
        </div>        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading" style="margin-bottom:10px;">
                        <h2 class="panel-title text-primary">Moje Obchody   <b><a class=""href="">pridať nový TU </a></b></h2> 
                    </div>
                    <P></p>
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h2 class="panel-title">Obchod lukáš 1</h2>
                                <div class="text-right">
                                    <a href="" class="glyphicon glyphicon-pencil"> Upraviť </a>
                                </div>
                            </div>
                            <table class="table"> 
                                <tbody> 
                                    <tr> <th scope="row">Názov obchodu:</th> <td>Obchod lukáš 1</td></tr>
                                    <tr> <th scope="row">Dátum založenia:</th> <td>09.07.2017</td> </tr>
                                    <tr> <th scope="row">Logo:</th> <td><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/icon1.png"></td> </tr>
                                </tbody> 
                            </table>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h2 class="panel-title">Obchod lukáš 2</h2>
                                <div class="text-right">
                                    <a href="" class="glyphicon glyphicon-pencil"> Upraviť </a>
                                </div>
                            </div>
                            <table class="table"> 
                                <tbody> 
                                    <tr> <th scope="row">Názov obchodu:</th> <td>Obchod lukáš 1</td></tr>
                                    <tr> <th scope="row">Dátum založenia:</th> <td>09.07.2017</td> </tr>
                                    <tr> <th scope="row">Logo:</th> <td><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/icon1.png"></td> </tr>
                                </tbody> 
                            </table>
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
if (!function_exists($_b->blocks['scripts'][] = '_lbe53c4cbcaf_scripts')) { function _lbe53c4cbcaf_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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