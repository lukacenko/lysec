<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Spravy/prehlad.latte

class Template928d414cfa0618b4d4886b6d01912d79 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5f81caeb86', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb4006dc7e1d_content')) { function _lb4006dc7e1d_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="content">
    <div class="container">			   
        <div class="typrography">
            <div class="dreamcrub">
                <ul class="breadcrumbs">
                    <li class="home">
                        <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                        <span>&gt;</span>
                    </li>
                    <li class="women">
                        Typography
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!--h2 class="heading text-center">Zoznam správ</h2-->
            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:nova"), ENT_COMPAT) ?>
"><button class="btn btn-primary" type="button"> Napísať novú správu </button></a>

            <h3 class="bars"> Zoznam správ</h3>
            <div class="list-group">
<?php $iterations = 0; foreach ($prehlad as $row) { if ($row->user2read == 0) { ?>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
<?php } else { ?>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
<?php } ?>
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo Latte\Runtime\Filters::escapeHtml($row->title, ENT_NOQUOTES) ?></h5>
                        <small><span class="glyphicon glyphicon-time"><?php echo Latte\Runtime\Filters::escapeHtml($row->timestamp, ENT_NOQUOTES) ?></span></small>
                    </div>
                    <p class="mb-1"><?php echo Latte\Runtime\Filters::escapeHtml($row->message, ENT_NOQUOTES) ?></p>
                </a>
<?php $iterations++; } ?>
            </div>            
            <div class="grid_3 grid_5">
                <div class="col-md-6">
                    <ul class="pagination pagination-lg">
                        <li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

</div>


<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbb29ba52009_scripts')) { function _lbb29ba52009_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
?>

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars()) ; 
}}