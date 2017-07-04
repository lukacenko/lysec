<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/Produkty/prehlad.latte

class Template5f04c1d951245e5bbed0b9c69bfb5656 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('dd285d225f', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbbb9eea9da0_content')) { function _lbbb9eea9da0_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><!-- content-section-starts-here -->
<div class="container">
    <div class="main-content">
        <div class="online-strip">
            <div class="col-md-4 follow-us">
                <h3>follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
            </div>
            <div class="col-md-4 shipping-grid">
                <div class="shipping">
                    <img src="images/shipping.png" alt="">
                </div>
                <div class="shipping-text">
                    <h3>Free Shipping</h3>
                    <p>on orders over $ 199</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 online-order">
                <p>Order online</p>
                <h3>Tel:999 4567 8902</h3>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="products-grid">
            <header>
                <h3 class="head text-center">Latest Products</h3>
            </header>
<?php $iterations = 0; foreach ($produkty as $row) { ?>
            
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($row->title_photo), ENT_COMPAT) ?>" alt=""></a>
                <div class="mask">
                    <a href="single.html">Quick View</a>
                </div>
                <a class="product_name" href="single.html"><?php echo Latte\Runtime\Filters::escapeHtml($row->product_name, ENT_NOQUOTES) ?></a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price"><?php echo Latte\Runtime\Filters::escapeHtml($row->price, ENT_NOQUOTES) ?> €</span></a></p>
            </div>
<?php $iterations++; } ?>

            <div class="clearfix"></div>
        </div>
    </div>

</div>
<div class="other-products">
    <div class="container">
        <h3 class="like text-center">Featured Collection</h3>        			
        <ul id="flexiselDemo3">
            <li><a href="single.html"><img src="images/l1.jpg" class="img-responsive" alt=""></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$759</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="images/l2.jpg" class="img-responsive" alt=""></a>						
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">praising pain</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$699</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="images/l3.jpg" class="img-responsive" alt=""></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">Neque porro</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="images/l4.jpg" class="img-responsive" alt=""></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">equal blame</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$499</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="images/l5.jpg" class="img-responsive" alt=""></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$649</span></a></p>
                </div>
            </li>
        </ul>
        <script type="text/javascript">
            $(window).load(function () {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>            
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbb91caf183f_scripts')) { function _lbb91caf183f_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script>
    $(document).ready(function () {
        $(".hoverDiv").hover(function () {
            $(this).children('.overlayed').css("opacity", "0.1");
            $(this).children('.overlay').fadeIn(0);
        }, function () {
            $(this).children('.overlayed').css("opacity", "1");
            $(this).children('.overlay').fadeOut(0);
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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars()) ; 
}}