<?php

require_once("config.php");

require_once("header.php");
?>


<div class="span9">
    <div class="well well-small">
        <div class="row-fluid">
            <div class="item active">
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.html"><img src="themes/images2/b1.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Brown Roses</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.html"><img src="themes/images2/b5.jpg" alt=""></a>
                            <div class="caption">
                                <h5>World Disney</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$40.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.html"><img src="themes/images2/b6.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Lavenders</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$20.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <i class="tag"></i>
                            <a href="product_details.html"><img src="themes/images2/b9.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Vanilla</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$25.00</span></h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="item">
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <i class="tag"></i>
                            <a href="product_details.html"><img src="themes/images2/b5.jpg" alt=""></a>
                            <div class="caption">
                                <h5>World Disney</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$20.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <i class="tag"></i>
                            <a href="product_details.html"><img src="themes/images2/b10.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Jelly Drop</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$15.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.html"><img src="themes/images2/b7.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Chocolate Melt</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$25.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.html"><img src="themes/images2/b8.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Hearts n Roses</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$30.00</span></h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="item">
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.html"><img src="themes/images2/b9.jpg" alt=""></a>
                            <div class="caption">
                                <h5></h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$35.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.html"><img src="themes/images2/b10.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$20.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="product_details.html"><img src="themes/images2/b11pg" alt=""></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
        <a class="right carousel-control" href="#featured" data-slide="next">›</a>
    </div>
</div>
</div>
<h4>Latest Designs </h4>
<?php $products_item = fetchAllProducts(); ?>
<ul class="thumbnails">
    <?php foreach($products_item as $products){ ?>
        <li class="span3">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">


                <div class="thumbnail">
                    <a  href="product_details.html"><img src="themes/images2/b2.jpg" alt=""/></a>
                    <div class="caption">
                        <h5><?php print $products['product_name']; ?> </h5>
                        <p><?php print $products['product_desc']; ?></p>
                        <p>Price <?php print $products['price']; ?></p>
                        <label>
                            <span>Quantity</span>
                            <input type="text" size="2" maxlength="2" name="product_qty" value="1" />
                        </label>
                        <input type="text" name="product_code" value="<?php print $products['product_code']; ?>" />
                        <input type="text" name="type" value="add" />
                        <div align="center"><button type="submit" class="add_to_cart">Add to <i class="icon-shopping-cart"></i></button></div>
                    </div>
            </form>
        </li>

    <?php } ?>
</ul>
</div>
</div>
</div>