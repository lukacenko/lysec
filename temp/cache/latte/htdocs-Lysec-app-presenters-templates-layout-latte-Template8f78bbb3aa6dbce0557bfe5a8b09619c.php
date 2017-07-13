<?php
// source: C:\xampp\htdocs\Lysec\app\presenters/templates/@layout.latte

class Template8f78bbb3aa6dbce0557bfe5a8b09619c extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('43e390bbc9', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb0e31168c08_scripts')) { function _lb0e31168c08_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
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
<!DOCTYPE html>
<html lang="<?php echo Latte\Runtime\Filters::escapeHtml($lang, ENT_COMPAT) ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="NOV, s.r.o.">
        <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="<?php echo Latte\Runtime\Filters::escapeHtml($basePath, ENT_COMPAT) ?>
/favicon.ico" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/favicon.ico">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.min.js"></script>
        <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/netteForms.min.js"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/style.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/languages.min.css" rel="stylesheet" type="text/css" media="all">
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->

        <!-- for bootstrap working -->
        <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- cart -->
        <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/simpleCart.min.js"></script>
        <!-- cart -->
        <link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/flexslider.css" type="text/css" media="screen">

        <title><?php if (isset($_b->blocks["title"])) { ob_start(); Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'title', $template->getParameters()); echo $template->striptags(ob_get_clean()) ?>
 | <?php } ?>Lysec | Luko, s.r.o.</title>
    </head>
    <body role="document">
        <!-- header-section-starts -->
        <div class="header">
            <div class="header-top-strip">
                <div class="container">
                    <div class="header-top-left">
                        <ul>
<?php if ($user->loggedIn) { ?>
                                <li style="color:white"> <span class="glyphicon glyphicon-user"> </span> Ahoj <?php echo Latte\Runtime\Filters::escapeHtml($user->getIdentity()->login, ENT_NOQUOTES) ?> </li>
                                <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Spravy:prehlad"), ENT_COMPAT) ?>
">  <span class="glyphicon glyphicon-envelope"> </span><?php ob_start() ?> Pošta<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?> </a></li>
                                <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Nastavenia:default"), ENT_COMPAT) ?>
">  <span class="glyphicon glyphicon-wrench"> </span><?php ob_start() ?> Môj účet<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?> </a></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle glyphicon glyphicon-baby-formula" data-toggle="dropdown" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Produkty:prehlad"), ENT_COMPAT) ?>
">Produkty <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4" >
                                            <ul class="multi-column-dropdown text-danger" >
                                                <h6>PRODUKTY</h6>
                                                <li><a style="color:saddlebrown"  href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Produkty:prehlad"), ENT_COMPAT) ?>
">Prehľad produktov</a></li>
                                                <li><a style="color:saddlebrown"  href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Produkty:pridaj"), ENT_COMPAT) ?>
">Pridať nový produkt</a></li>
                                                <li><a style="color:saddlebrown"  href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Produkty:moje"), ENT_COMPAT) ?>
">Moje produkty</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                             </li>                                
                                <li> <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Sign:out"), ENT_COMPAT) ?>
">  <span class="glyphicon glyphicon-share"> </span><?php ob_start() ?>Odhlásiť sa<?php echo Latte\Runtime\Filters::escapeHtml($template->translate(ob_get_clean()), ENT_NOQUOTES) ?> </a></li>
<?php } else { ?>
                                <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Sign:prihlasenie"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-user"> </span>Prihlásiť sa</a></li>
                                <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Sign:registracia"), ENT_COMPAT) ?>
">   <span class="glyphicon glyphicon-lock"> </span>Vytvoriť účet</a></li>			
<?php } ?>
                        </ul>
                    </div>
                    <div class="header-right">
                        <div class="cart box_1">
                            <p><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("this", array('locale' => 'sk')), ENT_COMPAT) ?>
"><span lang="sk" class="lang-lg "></span></a></p>
                            <p><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("this", array('locale' => 'en')), ENT_COMPAT) ?>
"><span lang="en" class="lang-lg "></span></a></p>
                            <p>&nbsp;&nbsp;&nbsp;</p>
                           <a href="checkout.html">
                                <h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="images/bag.png" alt=""></h3>
                            </a>	
                            <p><a class="simpleCart_empty" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Kosik:kosik"), ENT_COMPAT) ?>
">Empty cart</a></p>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- header-section-ends -->
        <div class="banner-top">
            <div class="container">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <h1><a href="index.html"><span>E</span> -Shop</a></h1>
                        </div>
                    </div>
                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Produkty:prehlad"), ENT_COMPAT) ?>
">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>NEW IN</h6>
                                                <li><a href="products.html">New In Clothing</a></li>
                                                <li><a href="products.html">New In Bags</a></li>
                                                <li><a href="products.html">New In Shoes</a></li>
                                                <li><a href="products.html">New In Watches</a></li>
                                                <li><a href="products.html">New In Grooming</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>CLOTHING</h6>
                                                <li><a href="products.html">Polos & Tees</a></li>
                                                <li><a href="products.html">Casual Shirts</a></li>
                                                <li><a href="products.html">Casual Trousers</a></li>
                                                <li><a href="products.html">Jeans</a></li>
                                                <li><a href="products.html">Shorts & 3/4th</a></li>
                                                <li><a href="products.html">Formal Shirts</a></li>
                                                <li><a href="products.html">Formal Trousers</a></li>
                                                <li><a href="products.html">Suits & Blazers</a></li>
                                                <li><a href="products.html">Track Wear</a></li>
                                                <li><a href="products.html">Inner Wear</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>WATCHES</h6>
                                                <li><a href="products.html">Analog</a></li>
                                                <li><a href="products.html">Chronograph</a></li>
                                                <li><a href="products.html">Digital</a></li>
                                                <li><a href="products.html">Watch Cases</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">women <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>NEW IN</h6>
                                                <li><a href="products.html">New In Clothing</a></li>
                                                <li><a href="products.html">New In Bags</a></li>
                                                <li><a href="products.html">New In Shoes</a></li>
                                                <li><a href="products.html">New In Watches</a></li>
                                                <li><a href="products.html">New In Beauty</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>CLOTHING</h6>
                                                <li><a href="products.html">Polos & Tees</a></li>
                                                <li><a href="products.html">Casual Shirts</a></li>
                                                <li><a href="products.html">Casual Trousers</a></li>
                                                <li><a href="products.html">Jeans</a></li>
                                                <li><a href="products.html">Shorts & 3/4th</a></li>
                                                <li><a href="products.html">Formal Shirts</a></li>
                                                <li><a href="products.html">Formal Trousers</a></li>
                                                <li><a href="products.html">Suits & Blazers</a></li>
                                                <li><a href="products.html">Track Wear</a></li>
                                                <li><a href="products.html">Inner Wear</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>WATCHES</h6>
                                                <li><a href="products.html">Analog</a></li>
                                                <li><a href="products.html">Chronograph</a></li>
                                                <li><a href="products.html">Digital</a></li>
                                                <li><a href="products.html">Watch Cases</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">kids <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-2">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="multi-column-dropdown">
                                                <h6>NEW IN</h6>
                                                <li><a href="products.html">New In Boys Clothing</a></li>
                                                <li><a href="products.html">New In Girls Clothing</a></li>
                                                <li><a href="products.html">New In Boys Shoes</a></li>
                                                <li><a href="products.html">New In Girls Shoes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="multi-column-dropdown">
                                                <h6>ACCESSORIES</h6>
                                                <li><a href="products.html">Bags</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">Sun Glasses</a></li>
                                                <li><a href="products.html">Jewellery</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="typography.html">TYPO</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse-->
                </nav>
                <!--/.navbar-->
            </div>
        </div>
        <!--div class="banner">
            <div class="container">
                <div class="banner-bottom">
                    <div class="banner-bottom-left">
                        <h2>B<br>U<br>Y</h2>
                    </div>
                    <div class="banner-bottom-right">
                        <div  class="callbacks_container">
                            <ul class="rslides" id="slider4">
                                <li>
                                    <div class="banner-info">
                                        <h3>Smart But Casual</h3>
                                        <p>Start your shopping here...</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-info">
                                        <h3>Shop Online</h3>
                                        <p>Start your shopping here...</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-info">
                                        <h3>Pack your Bag</h3>
                                        <p>Start your shopping here...</p>
                                    </div>								
                                </li>
                            </ul>
                        </div>
        <!--banner-->
        <script src="js/responsiveslides.min.js"></script>
        <script>
// You can also use "$(window).load(function() {"
            $(function () {
// Slideshow 4
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
            * /
        </script>
        <!--/div>
        <div class="clearfix"> </div>
    </div>
    <div class="shop">
        <a href="single.html">SHOP COLLECTION NOW</a>
    </div>
</div>
</div-->
        
<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'content', $template->getParameters()) ?>
    <!-- content-section-ends-here -->
    <div class="news-letter">
        <div class="container">
            <div class="join">
                <h6>JOIN OUR MAILING LIST</h6>
                <div class="sub-left-right">
                    <form>
                        <input type="text" value="Enter Your Email Here" onfocus="this.value = '';">
                        <input type="submit" value="SUBSCRIBE">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer_top">
                <div class="span_of_4">
                    <div class="col-md-3 span1_of_4">
                        <h4>Shop</h4>
                        <ul class="f_nav">
                            <li><a href="#">new arrivals</a></li>
                            <li><a href="#">men</a></li>
                            <li><a href="#">women</a></li>
                            <li><a href="#">accessories</a></li>
                            <li><a href="#">kids</a></li>
                            <li><a href="#">brands</a></li>
                            <li><a href="#">trends</a></li>
                            <li><a href="#">sale</a></li>
                            <li><a href="#">style videos</a></li>
                        </ul>	
                    </div>
                    <div class="col-md-3 span1_of_4">
                        <h4>help</h4>
                        <ul class="f_nav">
                            <li><a href="#">frequently asked  questions</a></li>
                            <li><a href="#">men</a></li>
                            <li><a href="#">women</a></li>
                            <li><a href="#">accessories</a></li>
                            <li><a href="#">kids</a></li>
                            <li><a href="#">brands</a></li>
                        </ul>	
                    </div>
                    <div class="col-md-3 span1_of_4">
                        <h4>account</h4>
                        <ul class="f_nav">
                            <li><a href="account.html">prihlásiť sa</a></li>
                            <li><a href="register.html">vytvoriť účet</a></li>
                            <li><a href="#">create wishlist</a></li>
                            <li><a href="checkout.html">my shopping bag</a></li>
                            <li><a href="#">brands</a></li>
                            <li><a href="#">create wishlist</a></li>
                        </ul>				
                    </div>
                    <div class="col-md-3 span1_of_4">
                        <h4>popular</h4>
                        <ul class="f_nav">
                            <li><a href="#">new arrivals</a></li>
                            <li><a href="#">men</a></li>
                            <li><a href="#">women</a></li>
                            <li><a href="#">accessories</a></li>
                            <li><a href="#">kids</a></li>
                            <li><a href="#">brands</a></li>
                            <li><a href="#">trends</a></li>
                            <li><a href="#">sale</a></li>
                            <li><a href="#">style videos</a></li>
                            <li><a href="#">login</a></li>
                            <li><a href="#">brands</a></li>
                        </ul>			
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="cards text-center">
                <img src="images/cards.jpg" alt="">
            </div>
            <div class="copyright text-center">
                <p>© 2017 Lysec. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
            </div>
        </div>
    </div>
    <?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>

</body>    
</html>
<?php
}}