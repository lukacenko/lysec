<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Produkty/detail.latte

class Templatea499e05bda705df5ec962df916851108 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('0db5d39600', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb9d8869ba0d_content')) { function _lb9d8869ba0d_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="products-page">
        <div class="new-product">
            <div class="col-md-5 zoom-grid">
                <div class="flexslider">
                    <ul class="slides">
<?php $iterations = 0; foreach ($files as $image) { ?>
                            <li data-thumb="<?php echo Latte\Runtime\Filters::escapeHtml($basePath, ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml($image, ENT_COMPAT) ?>">
                                <div class="thumb-image"> <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($image), ENT_COMPAT) ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
<?php $iterations++; } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 dress-info">
                <div class="dress-name">
                    <h3><?php echo Latte\Runtime\Filters::escapeHtml($product->product_name, ENT_NOQUOTES) ?></h3>
                    <span><?php echo Latte\Runtime\Filters::escapeHtml($product->price, ENT_NOQUOTES) ?> €</span>
                    <div class="clearfix"></div>
                    <p><?php echo Latte\Runtime\Filters::escapeHtml($product->product_desc, ENT_NOQUOTES) ?></p>
                </div>
                <div class="span span1">
                    <p class="left"> VYRABANÉ</p>
                    <p class="right"><?php echo Latte\Runtime\Filters::escapeHtml($product->production, ENT_NOQUOTES) ?></p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span2">
                    <p class="left">MATERIÁL</p>
                    <p class="right"><?php echo Latte\Runtime\Filters::escapeHtml($product->material, ENT_NOQUOTES) ?></p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span3">
                    <p class="left">FARBA</p>
                    <p class="right"><?php echo Latte\Runtime\Filters::escapeHtml($product->color, ENT_NOQUOTES) ?></p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span4">
                    <p class="left">SIZE</p>
                    <p class="right"><span class="selection-box"><select class="domains valid" name="domains">
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>FS</option>
                                <option>S</option>
                            </select></span></p>
                    <div class="clearfix"></div>
                </div>
                <div class="purchase">
                    <a href="#">Pridať do košíka</a>
                    <div class="social-icons">
                        <ul>
                            <li><a class="facebook1" href="#"></a></li>
                            <li><a class="twitter1" href="#"></a></li>
                            <li><a class="googleplus1" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/imagezoom.js"></script>
                <!-- FlexSlider -->
                <script defer src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.flexslider.js"></script>
                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                </script>
            </div>
            <div class="clearfix"></div>
            <div class="reviews-tabs">
                <!-- Main component for a primary marketing message or call to action -->
                <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
                    <li class="test-class active"><a class="deco-none misc-class" href="#how-to"> Viac informácií</a></li>
                    <li class="test-class"><a href="#features">Komentáre</a></li>
                </ul>

                <div class="tab-content responsive hidden-xs hidden-sm">
                    <div class="tab-pane active" id="how-to">
                        <p class="tab-text">Maecenas mauris velit, consequat sit amet feugiat rit, elit vitaeert scelerisque elementum, turpis nisl accumsan ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. and scrambled it to make a type specimen book. It has survived Auction your website on Flippa and you'll get the best price from serious buyers, dedicated support and a much better deal than you'll find with any website broker. Sell your site today I need a twitter bootstrap 3.0 theme for the full-calendar plugin. it would be great if the theme includes the add event; remove event, show event details. this must be RESPONSIVE and works on mobile devices. Also, I've seen so many bootstrap themes that comes up with the fullcalendar plugin. However these . </p>    
                    </div>
                    <div class="tab-pane" id="features">
                        <p class="tab-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.This tab has icon in consectetur adipiscing eliconse consectetur adipiscing elit. Vestibulum nibh urna, ctetur adipiscing elit. Vestibulum nibh urna, t.consectetur adipiscing elit. Vestibulum nibh urna,  Vestibulum nibh urna,it.</p>
                        <p class="tab-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="tab-pane" id="source">
                        <div class="response">
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/icon1.png" alt="">
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>MARCH 21, 2015</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/icon1.png" alt="">
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>MARCH 26, 2054</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>		
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/icon1.png" alt="">
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>MAY 25, 2015</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>		
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/icon1.png" alt="">
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>FEB 13, 2015</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>		
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/icon1.png" alt="">
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>JAN 28, 2015</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>		
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/icon1.png" alt="">
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>APR 18, 2015</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>		
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/icon1.png" alt="">
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>DEC 25, 2014</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>		
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>		
            </div>

        </div><?php
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