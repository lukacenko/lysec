<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Homepage/orders.latte

class Templateffebabed688ca987b477cd1fcfd1c376 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('e53d05d83e', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb77fb9b9a21_content')) { function _lb77fb9b9a21_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h1><?php ob_start() ?>Zoznam zákazok<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?></h1>

<div class="row">
    <div class="col-xs-12">

        <table id="myTable" class="tablesorter table"> 
            <thead> 
                <tr> 
                    <th>Last Name</th> 
                    <th>First Name</th> 
                    <th>Email</th> 
                    <th>Due</th> 
                    <th>Web Site</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <td>Smith</td> 
                    <td>John</td> 
                    <td>jsmith@gmail.com</td> 
                    <td>$50.00</td> 
                    <td>http://www.jsmith.com</td> 
                </tr> 
                <tr> 
                    <td>Bach</td> 
                    <td>Frank</td> 
                    <td>fbach@yahoo.com</td> 
                    <td>$50.00</td> 
                    <td>http://www.frank.com</td> 
                </tr> 
                <tr> 
                    <td>Doe</td> 
                    <td>Jason</td> 
                    <td>jdoe@hotmail.com</td> 
                    <td>$100.00</td> 
                    <td>http://www.jdoe.com</td> 
                </tr> 
                <tr> 
                    <td>Conway</td> 
                    <td>Tim</td> 
                    <td>tconway@earthlink.net</td> 
                    <td>$50.00</td> 
                    <td>http://www.timconway.com</td> 
                </tr> 
            </tbody> 
        </table> 
    </div>
</div>

<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb3f56166f96_scripts')) { function _lb3f56166f96_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script>
    $(document).ready(function (){
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
?>

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars()) ; 
}}