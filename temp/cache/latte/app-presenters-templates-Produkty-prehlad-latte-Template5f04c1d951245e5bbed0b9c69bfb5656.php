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
?><!-- content-section-starts -->
<div class="container">
    <div class="products-page">
        <div class="products">
            <div class="product-listy">
                <h2>Naše produkty</h2>
                <ul class="product-list">
                    <li><a href="">Nové produkty</a></li>
                    <li><a href="">Najpredávanejšie</a></li>
                    <li><a href="">Nábytok</a></li>
                    <li><a href="">Krabičky</a></li>
                    <li><a href="">Do kuchyne</a></li>
                    <li><a href="">Zrkadlá</a></li>
                    <li><a href="#">Dekorácie</a></li>
                    <li><a href="#">Hodiny</a></li>
                </ul>
                <h2>Dostupnosť</h2>
                <ul class="product-list">
                    <li><a href="">Nové produkty</a></li>
                    <li><a href="">1 deň</a></li>
                    <li><a href="">2 dni</a></li>
                    <li><a href="">3 dni</a></li>
                    <li><a href="">Týždeň</a></li>
                    <li><a href="">2 týždne</a></li>
                    <li><a href="#">Mesiac</a></li>
                    <li><a href="#">Viac ako mesiac</a></li>
                </ul>
                <h2>Farba</h2>
                <ul class="product-list">
                   <li><a href="">Žltá</a></li>
                    <li><a href="">Biela</a></li>
                    <li><a href="">Modrá</a></li>
                    <li><a href="#">Červená</a></li>
                </ul>
                <h2>Spôsob výroby</h2>
                <ul class="product-list">
                   <li><a href="">Batikovanie</a></li>
                    <li><a href="">Batikovanie</a></li>
                    <li><a href="">Cínovanie</a></li>
                    <li><a href="#">Čipka</a></li>
                </ul>
                <h2>Materiál</h2>
                <ul class="product-list">
                    <li><a href="">Drevo </a></li>
                    <li><a href="">Kov</a></li>
                </ul>
            </div>
            <div class="latest-bis">
                <img src="images/l4.jpg" class="img-responsive" alt="">
                <div class="offer">
                    <p>40%</p>
                    <small>Top ponuka</small>
                </div>
            </div> 	
            <div class="tags">
                <h4 class="tag_head">Kľúčové slová</h4>
                <ul class="tags_links">
                    <li><a href="#">Kabelky</a></li>
                    <li><a href="#">Dekorácie</a></li>
                    <li><a href="#">Hodiny</a></li>
                    <li><a href="#">Šperky</a></li>
                    <li><a href="#">Kabelky</a></li>
                    <li><a href="#">Dekorácie</a></li>
                    <li><a href="#">Hodiny</a></li>
                    <li><a href="#">Šperky</a></li>
                    <li><a href="#">Kabelky</a></li>
                    <li><a href="#">Dekorácie</a></li>
                    <li><a href="#">Hodiny</a></li>
                    <li><a href="#">Šperky</a></li>
                </ul>
            </div>

        </div>
        <div class="new-product">
            <div class="new-product-top">
                <ul class="product-top-list">
                    <li><a href="index.html">Home</a>&nbsp;<span>&gt;</span></li>
                    <li><span class="act">Best Sales</span>&nbsp;</li>
                </ul>
                <p class="back"><a href="index.html">Choď na úvod</a></p>
                <div class="clearfix"></div>
            </div>
            <div class="mens-toolbar">
                <div class="sort">
                    <div class="sort-by">
                        <label>Zoradiť</label>
                        <select>
                            <option value="">
                                Mena                </option>
                            <option value="">
                                Cený                </option>
                            <option value="">
                                Dátumu                 </option>
                        </select>
                        <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
                    </div>
                </div>
                <ul class="women_pagenation">
                    <li>Stránka:</li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                </ul>
                <div class="clearfix"></div>		
            </div>
            <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                <div class="cbp-vm-options">
                    <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
                    <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
                </div>
                <div class="pages">   
                    <div class="limiter visible-desktop">
                        <label>Zobraziť</label>
                        <select>
                            <option value="" selected="selected">
                                9                </option>
                            <option value="">
                                15                </option>
                            <option value="">
                                30                </option>
                        </select> na stánke        
                    </div>
                </div>
                <div class="clearfix"></div>
                <ul>
<?php $iterations = 0; foreach ($produkty as $row) { ?>
                        <li>
                            <a class="cbp-vm-image" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Produkty:detail", array($row->id)), ENT_COMPAT) ?>
">
                                <div class="simpleCart_shelfItem">
                                    <div class="view view-first">
                                        <div class="inner_content clearfix">
                                            <div class="product_image">
                                                <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($row->title_photo), ENT_COMPAT) ?>" class="img-responsive" alt="">
                                                <div class="mask">
                                                    <div class="info">Quick View</div>
                                                </div>
                                                <div class="product_container">
                                                    <div class="cart-left">
                                                        <p class="title"><?php echo Latte\Runtime\Filters::escapeHtml($row->product_name, ENT_NOQUOTES) ?></p>
                                                    </div>
                                                    <div class="pricey"><span class="item_price"><?php echo Latte\Runtime\Filters::escapeHtml($row->price, ENT_NOQUOTES) ?> €</span></div>
                                                    <div class="clearfix"></div>
                                                </div>		
                                            </div>
                                        </div>
                                    </div>
                            </a>
                            <div class="cbp-vm-details">
                                <?php echo Latte\Runtime\Filters::escapeHtml($row->product_desc, ENT_NOQUOTES) ?>.
                            </div>
                            <a class="cbp-vm-icon cbp-vm-add item_add" href="#">Pridať do košíka</a>
                        </li>                
<?php $iterations++; } ?>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- content-section-ends -->
<div class="other-products">
    <div class="container">
        <h3 class="like text-center">Featured Collection</h3>        			
        <ul id="flexiselDemo3">
            <li><a href="single.html"><img src="images/l1.jpg" class="img-responsive"></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">Perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$759</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="images/l2.jpg" class="img-responsive"></a>						
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">Praising pain</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$699</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="images/l3.jpg" class="img-responsive"></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">Neque porro</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="images/l4.jpg" class="img-responsive"></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">Equal blame</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$499</span></a></p>
                </div>
            </li>
            <li><a href="single.html"><img src="images/l5.jpg" class="img-responsive"></a>
                <div class="product liked-product simpleCart_shelfItem">
                    <a class="like_name" href="single.html">Perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class=" item_price">$649</span></a></p>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbb91caf183f_scripts')) { function _lbb91caf183f_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/cbpViewModeSwitch.js" type="text/javascript"></script>
<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/classie.js" type="text/javascript"></script>
<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/simpleCart.min.js"></script>
<!-- cart -->
<script type="<?php echo Latte\Runtime\Filters::escapeHtml($basePath, ENT_COMPAT) ?>/application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- cart -->
<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/simpleCart.min.js"></script>
<!-- cart -->
<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/component.css" rel='stylesheet' type='text/css'>
<script>
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