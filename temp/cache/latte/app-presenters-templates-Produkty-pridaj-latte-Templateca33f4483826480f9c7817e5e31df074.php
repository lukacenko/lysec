<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Produkty/pridaj.latte

class Templateca33f4483826480f9c7817e5e31df074 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5d48a4f9e1', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbdefe47cc6a_content')) { function _lbdefe47cc6a_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="content">
    <div class="container">
        <div class="container-fluid">
<?php $iterations = 0; foreach ($flashes as $flash) { ?>            <div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?> fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

            </div>
<?php $iterations++; } ?>
            <div id="fine-uploader-gallery">
            </div>
            <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["form"], array()) ?>

                <div class="form-group">
                    <span><?php if ($_label = $_form["product_name"]->getLabel()) echo $_label  ?></span>
                    <?php echo $_form["product_name"]->getControl() ?>

                </div>    
                                <div class="form-group">
                    <span> <?php if ($_label = $_form["keywords"]->getLabel()) echo $_label  ?>  </span>
                    <?php echo $_form["keywords"]->getControl() ?>

                </div>   
                <div class="form-group">
                    <span> <?php if ($_label = $_form["product_desc"]->getLabel()) echo $_label  ?>  </span>
                    <?php echo $_form["product_desc"]->getControl() ?>

                </div>   
                <div class="form-group" >
                    <span> <?php if ($_label = $_form["stock"]->getLabel()) echo $_label  ?>  </span>
                    <?php echo $_form["stock"]->getControl() ?>

                </div>   
                <div class="form-group">
                    <span> <?php if ($_label = $_form["availability"]->getLabel()) echo $_label  ?>  </span>
                    <?php echo $_form["availability"]->getControl() ?>

                </div>   
                <div class="form-group">
                    <span> <?php if ($_label = $_form["price"]->getLabel()) echo $_label  ?>  </span>
                    <?php echo $_form["price"]->getControl() ?>

                </div>   

                <div class="form-group">
                    <span> <?php if ($_label = $_form["postage"]->getLabel()) echo $_label  ?>  </span>
                    <?php echo $_form["postage"]->getControl() ?>

                </div>   
                <div class="form-group">
                    <span> <?php if ($_label = $_form["color"]->getLabel()) echo $_label  ?>  </span>
                    <?php echo $_form["color"]->getControl() ?>

                </div> 
                <div class="form-group">
                    <span> <?php if ($_label = $_form["material"]->getLabel()) echo $_label  ?>  </span>
                    <?php echo $_form["material"]->getControl() ?>

                </div> 
                <div class="form-group">
                    <span> <?php if ($_label = $_form["production"]->getLabel()) echo $_label  ?>  </span>
                    <?php echo $_form["production"]->getControl() ?>

                </div> 

                <div class="form-group">
                    <span><?php if ($_label = $_form["one"]->getLabel()) echo $_label  ?></span>
                    <?php echo $_form["one"]->getControl() ?>

                </div>
                <div class="form-group">
                    <span><?php if ($_label = $_form["two"]->getLabel()) echo $_label  ?></span>
<div id="<?php echo $_control->getSnippetId('two') ?>"><?php call_user_func(reset($_b->blocks['_two']), $_b, $template->getParameters()) ?>
</div>                </div>                                
                <div class="form-group">
                    <span><?php if ($_label = $_form["three"]->getLabel()) echo $_label  ?></span>
<div id="<?php echo $_control->getSnippetId('three') ?>"><?php call_user_func(reset($_b->blocks['_three']), $_b, $template->getParameters()) ?>
</div>                </div>               
                <div class="form-group col-md-2 col-md-offset-6">
                    <?php echo $_form["send"]->getControl() ?>

                </div>
            <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<script>
        var obj = {filename: this.getName(id)}
</script>            
<script>
    $('#fine-uploader-gallery').fineUploader({
        deleteFile: {
            enabled: true,
            forceConfirm: true,
            method: "POST",
            endpoint: 'delete'
        },
        template: 'qq-template-gallery',
        request: {
            endpoint: 'pictures?do=uploadPicture'
        },
        thumbnails: {
            placeholders: {
                waitingPath: <?php echo Latte\Runtime\Filters::escapeJs($basePath) ?> + "/images/placeholders/waiting-generic.png"
                , notAvailablePath: <?php echo Latte\Runtime\Filters::escapeJs($basePath) ?> + '/images/placeholders/not_available-generic.png'
            }
        },
        validation: {
            allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
        },
            /*
        callbacks: {
            onDelete: function (id) {
                this.setDeleteFileParams(obj, id);
            }
        }
        */

    });</script>            

<?php
}}

//
// block _two
//
if (!function_exists($_b->blocks['_two'][] = '_lbdedd0a79cd__two')) { function _lbdedd0a79cd__two($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('two', FALSE)
?>                        <?php echo $_form["two"]->getControl() ?>

<?php
}}

//
// block _three
//
if (!function_exists($_b->blocks['_three'][] = '_lbcb123520cc__three')) { function _lbcb123520cc__three($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('three', FALSE)
?>                        <?php echo $_form["three"]->getControl() ?>

<?php
}}

//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lbc1da51c7ac_head')) { function _lbc1da51c7ac_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.fine-uploader.js"></script>
<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/fine-uploader-new.css" rel="stylesheet">
<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/fine-uploader-gallery.css" rel="stylesheet">
<!-- Fine Uploader Gallery template
====================================================================== -->
<script type="text/template" id="qq-template-gallery">
    <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">
    <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
    <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
    </div>
    <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
    <span class="qq-upload-drop-area-text-selector"></span>
    </div>
    <div class="qq-upload-button-selector qq-upload-button">
    <div>Upload a file</div>
    </div>
    <span class="qq-drop-processing-selector qq-drop-processing">
    <span>Processing dropped files...</span>
    <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
    </span>
    <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
    <li>
    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
    <div class="qq-progress-bar-container-selector qq-progress-bar-container">
    <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
    </div>
    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
    <div class="qq-thumbnail-wrapper">
    <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
    </div>
    <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
    <button type="button" class="qq-upload-retry-selector qq-upload-retry">
    <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
    Retry
    </button>

    <div class="qq-file-info">
    <div class="qq-file-name">
    <span class="qq-upload-file-selector qq-upload-file"></span>
    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
    </div>
    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
    <span class="qq-upload-size-selector qq-upload-size"></span>
    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
    <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
    </button>
    <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
    <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
    </button>
    <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
    <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
    </button>
    </div>
    </li>
    </ul>

    <dialog class="qq-alert-dialog-selector">
    <div class="qq-dialog-message-selector"></div>
    <div class="qq-dialog-buttons">
    <button type="button" class="qq-cancel-button-selector">Close</button>
    </div>
    </dialog>

    <dialog class="qq-confirm-dialog-selector">
    <div class="qq-dialog-message-selector"></div>
    <div class="qq-dialog-buttons">
    <button type="button" class="qq-cancel-button-selector">No</button>
    <button type="button" class="qq-ok-button-selector">Yes</button>
    </div>
    </dialog>

    <dialog class="qq-prompt-dialog-selector">
    <div class="qq-dialog-message-selector"></div>
    <input type="text">
    <div class="qq-dialog-buttons">
    <button type="button" class="qq-cancel-button-selector">Cancel</button>
    <button type="button" class="qq-ok-button-selector">Ok</button>
    </div>
    </dialog>
    </div> 
</script>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb40b7644207_scripts')) { function _lb40b7644207_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/nette.ajax.js">
    < script >
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
                $('select[name=two]').change(function () {
                    $.nette.ajax({
                        url: <?php echo Latte\Runtime\Filters::escapeJs($_control->link("invalidate2!")) ?>,
                        data: {
                            'value': $('select[name=two]').val(),
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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>


<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars()) ; 
}}