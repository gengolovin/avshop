<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">

                <!--<li><a href="index.html">Home</a></li>
                <li class="active">Single</li>-->
                <?=$breadcrumbs;?>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
    <div class="container">
        <div class="single-main">
            <div class="col-md-9 single-main-left">
                <div class="sngl-top">
                    <div class="col-md-5 single-top-left">
                        <?php if($gallery):?>
                        <div class="flexslider">
                            <ul class="slides">
                                <?php foreach ($gallery as $item):?>
                                <li data-thumb="images/prod/<?=$item->img;?>">
                                    <div class="thumb-image"> <img src="images/prod/<?=$item->img;?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <?php else:?>
                            <div class="thumb-image"> <img src="images/prod/<?=$product->img;?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                        <?php endif;?>
                        <!-- FlexSlider -->

                    </div>
                    <?php
                    $curr = \avshop\App::$app->getProperty('currency');
                    $cats = \avshop\App::$app->getProperty('cats');
                    ?>
                    <div class="col-md-7 single-top-right">
                        <div class="single-para simpleCart_shelfItem">
                            <h2><?=$product->title;?></h2>
                            <div class="star-on">
                                <ul class="star-footer">
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                </ul>
                                <div class="review">
                                    <a href="#"> 1 customer review </a>

                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <h5 class="item_price" id="base-price" data-base="<?=round($product->price / $curr['value'],2);?>"><?=$curr['symbol_left'];?>&nbsp;<?=round($product->price / $curr['value'],2);?>&nbsp;<?=$curr['symbol_right'];?></h5>
                            <?php if ($product->old_price): ?>
                               <del><?=$curr['symbol_left'];?>&nbsp;<?=round($product->old_price / $curr['value'],2);?>&nbsp;<?=$curr['symbol_right'];?></del>
                            <?php endif;?>

                          <!--  <p><?/*=$product->content;*/?></p>-->
                            <div class="available">
                                <ul>
                                    <?php foreach ($mods as $chage):?>
                                    <?php if($chage->color) $color = true;?>
                                    <?php if($chage->size) $size = true;?>
                                    <?php endforeach;?>
                                    <?php if($color):?>
                                    <li>Цвет
                                        <select>
                                            <option>Выбрать цвет товара</option>
                                            <?php foreach ($mods as $mod):?>
                                            <option data-alias="<?=$mod->alias;?>" data-price="<?=round($mod->price / $curr['value'],2);?>" value="<?=$mod->id;?>"><?=$mod->title;?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </li>
                                    <?php endif;?>

                                    <?php if($size):?>
                                    <li>Вес<select>
                                            <option>Выберете объем товара</option>
                                            <?php foreach ($mods as $mod):?>
                                                <option data-alias="<?=$mod->alias;?>" data-price="<?=round($mod->price / $curr['value'],2);?>" value="<?=$mod->id;?>"><?=$mod->title;?></option>
                                            <?php endforeach;?>
                                        </select></li>
                                    <?php endif;?>
                                    <div class="clearfix"> </div>

                                </ul>
                            </div>
                            <ul class="tag-men">
                                <li><span >Категория:</span>
                                    <span><a href="category/<?=$cats[$product->category_id]['alias'];?>"><?=$cats[$product->category_id]['title'];?></a> </span></li>

                            </ul>
                            <ul class="tag-men">
                                <li><span >Остаток товара:</span>
                                   <?=$product->count;?> шт.</li>

                            </ul>
                            <div class="quantity">
                                <input id="qty-input" type="number" size="10" value="1" name="quantity" min="1" step="1" pattern="^[0-9]">
                            </div>
                            <a id="productAdd" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>" class="add-cart item_add add-to-cart-link">В корзину</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="tabs">
                    <ul class="menu_drop">
                        <li class="item1"><a href="#"><img src="images/arrow.png" alt="">Описание товара</a>
                            <ul>
                                <li class="subitem1"><a href="#"></a></li>
                                <li class="subitem2"><a href="#"><?=$product->content;?></a></li>
                                <li class="subitem3"><a href="#"></a></li>
                            </ul>
                        </li>
                        <li class="item2"><a href="#"><img src="images/arrow.png" alt="">Additional information</a>
                            <ul>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item3"><a href="#"><img src="images/arrow.png" alt="">Reviews (10)</a>
                            <ul>
                                <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item4"><a href="#"><img src="images/arrow.png" alt="">Helpful Links</a>
                            <ul>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                        <li class="item5"><a href="#"><img src="images/arrow.png" alt="">Make A Gift</a>
                            <ul>
                                <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                                <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                                <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php if ($related): ?>
                <div class="latestproducts">
                    <div class="product-one">
                        <h4>С этим товаром также покупают:</h4>
                        <?php foreach ($related as $items): ?>
                        <div class="col-md-4 product-left p-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="product/<?=$items['alias']; ?>" class="mask"><img class="img-responsive zoom-img" src="images/prod/<?=$items['img']; ?>" alt="" /></a>
                                <div class="product-bottom">
                                    <h3><a href="product/<?=$items['alias']; ?>"><?=$items['title']; ?></a></h3>
                                    <p>Explore Now</p>
                                    <h4><a class="item_add add-to-cart-link" href="cart/add?id=<?=$items['id'];?>" data-id="<?=$items['id'];?>"><i></i></a> <span class=" item_price"><?=$curr['symbol_left'];?>&nbsp;<?=round($items['price'] / $curr['value'],2);?>&nbsp;<?=$curr['symbol_right'];?></span>
                                        <?php if ($items['old_price']): ?>
                                            <span class=" item_price"><del><?=$curr['symbol_left'];?>&nbsp;<?=round($items['old_price'] / $curr['value'],2);?>&nbsp;<?=$curr['symbol_right'];?></del></span>
                                        <?php endif;?>

                                    </h4>
                                </div>
                                <div class="srch">
                                    <span><?php echo discont($items['price'],$items['old_price']);?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php endif;?>


            </div>
                   <?php if ($recentlyViewed): ?>
                        <div class="latestproducts">
                            <div class="product-one ">
                                <h4>Недавно просмотренные:</h4>
                                <?php foreach ($recentlyViewed as $item): ?>
                                    <div class="col-md-3 product-left">
                                        <div class="product-main simpleCart_shelfItem">
                                            <a href="product/<?=$item['alias']; ?>" class="mask"><img class="img-responsive zoom-img" src="images/prod/<?=$item['img']; ?>" alt="" /></a>
                                            <div class="product-bottom">
                                                <h3><a href="product/<?=$item['alias']; ?>"><?=$item['title']; ?></a></h3>
                                                <p>Explore Now</p>
                                                <h4><a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a> <span class=" item_price"><?=$curr['symbol_left'];?>&nbsp;<?=round($item['price'] / $curr['value'],2);?>&nbsp;<?=$curr['symbol_right'];?></span>
                                                    <?php if ($item['old_price']): ?>
                                                        <span class=" item_price"><del><?=$curr['symbol_left'];?>&nbsp;<?=round($item['old_price'] / $curr['value'],2);?>&nbsp;<?=$curr['symbol_right'];?></del></span>
                                                    <?php endif;?>

                                                </h4>
                                            </div>
                                            <div class="srch">
                                                <span><?php echo discont($item['price'],$item['old_price']);?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    <?php endif;?>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--end-single-->
