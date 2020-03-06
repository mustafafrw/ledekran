


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Kategoriler</h4>
                        <ul class="filter-catagories">
                             <?php foreach($items["categoryList"] as $item) { ?>
                            <li><a href="<?php echo base_url("kategori/").$item->id; ?>"><?php echo $item->title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="<?php echo $items["post"]->thumbnail?>" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="<?php echo $items["post"]->thumbnail?>"><img
                                            src="<?php echo $items["post"]->thumbnail?>" alt=""></div>
                                    <div class="pt" data-imgbigurl="img/product-single/product-2.jpg"><img
                                            src="img/product-single/product-2.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img
                                            src="img/product-single/product-3.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img
                                            src="img/product-single/product-3.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>oranges</span>
                                    <h3><?php echo $items["post"]->title ?></h3>
                                </div>


                                <br><br>
                                <div class="quantity">
                                    
                                    <a href="#" class="primary-btn pd-cart">Teklif Al</a>
                                </div>
                                <div class="row responsive-calculate">
                                    <div class="form-group col-md-4" style="height:40px;">
                                        <select id="" class="form-control">
                                       <option value="0">Yükseklik</option>
                                                            <option value="16,00">16,00</option>
                                                            <option value="32,00">32,00</option>
                                                            <option value="48,00">48,00</option>
                                                            <option value="64,00">64,00</option>
                                                            <option value="80,00">80,00</option>
                                                            <option value="96,00">96,00</option>
                                                            <option value="112,00">112,00</option>
                                                            <option value="128,00">128,00</option>
                                                            <option value="144,00">144,00</option>
                                                            <option value="160,00">160,00</option>
                                                            <option value="176,00">176,00</option>
                                                            <option value="192,00">192,00</option>
                                                            <option value="208,00">208,00</option>
                                                            <option value="224,00">224,00</option>
                                                            <option value="240,00">240,00</option>
                                                            <option value="256,00">256,00</option>
                                                            <option value="272,00">272,00</option>
                                                            <option value="288,00">288,00</option>
                                                            <option value="304,00">304,00</option>
                                                            <option value="320,00">320,00</option>
                                                            <option value="336,00">336,00</option>
                                                            <option value="352,00">352,00</option>
                                                            <option value="368,00">368,00</option>
                                                            <option value="384,00">384,00</option>
                                                            <option value="400,00">400,00</option>
                                                            <option value="416,00">416,00</option>
                                                            <option value="432,00">432,00</option>
                                                            <option value="448,00">448,00</option>
                                                            <option value="464,00">464,00</option>
                                                            <option value="480,00">480,00</option>
                                                            <option value="496,00">496,00</option>
                                                            <option value="512,00">512,00</option>
                                                            <option value="528,00">528,00</option>
                                                            <option value="544,00">544,00</option>
                                                            <option value="560,00">560,00</option>
                                                            <option value="576,00">576,00</option>
                                                            <option value="592,00">592,00</option>
                                                            <option value="608,00">608,00</option>
                                                            <option value="624,00">624,00</option>
                                                            <option value="640,00">640,00</option>
                                                            <option value="656,00">656,00</option>
                                                            <option value="672,00">672,00</option>
                                                            <option value="688,00">688,00</option>
                                                            <option value="704,00">704,00</option>
                                                            <option value="720,00">720,00</option>
                                                            <option value="736,00">736,00</option>
                                                            <option value="752,00">752,00</option>
                                                            <option value="768,00">768,00</option>
                                                            <option value="784,00">784,00</option>
                                                            <option value="800,00">800,00</option>
                                                            <option value="816,00">816,00</option>
                                                            <option value="832,00">832,00</option>
                                                            <option value="848,00">848,00</option>
                                                            <option value="864,00">864,00</option>
                                                            <option value="880,00">880,00</option>
                                                            <option value="896,00">896,00</option>
                                                            <option value="912,00">912,00</option>
                                                            <option value="928,00">928,00</option>
                                                            <option value="944,00">944,00</option>
                                                            <option value="960,00">960,00</option>
                                                            <option value="976,00">976,00</option>
                                                            <option value="992,00">992,00</option>
                                                            <option value="1008,00">1008,00</option>
                                                            <option value="1024,00">1024,00</option>
                                                            <option value="1040,00">1040,00</option>
                                                            <option value="1056,00">1056,00</option>
                                                            <option value="1072,00">1072,00</option>
                                                            <option value="1088,00">1088,00</option>
                                                            <option value="1104,00">1104,00</option>
                                                            <option value="1120,00">1120,00</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4" style="height: 40px;">
                                                    <select id="slcPanelWidth" class="form-control">
                                                        <option value="0">Genişlik</option>
                                                            <option value="32,00">32,00</option>
                                                            <option value="64,00">64,00</option>
                                                            <option value="96,00">96,00</option>
                                                            <option value="128,00">128,00</option>
                                                            <option value="160,00">160,00</option>
                                                            <option value="192,00">192,00</option>
                                                            <option value="224,00">224,00</option>
                                                            <option value="256,00">256,00</option>
                                                            <option value="288,00">288,00</option>
                                                            <option value="320,00">320,00</option>
                                                            <option value="352,00">352,00</option>
                                                            <option value="384,00">384,00</option>
                                                            <option value="416,00">416,00</option>
                                                            <option value="448,00">448,00</option>
                                                            <option value="480,00">480,00</option>
                                                            <option value="512,00">512,00</option>
                                                            <option value="544,00">544,00</option>
                                                            <option value="576,00">576,00</option>
                                                            <option value="608,00">608,00</option>
                                                            <option value="640,00">640,00</option>
                                                            <option value="672,00">672,00</option>
                                                            <option value="704,00">704,00</option>
                                                            <option value="736,00">736,00</option>
                                                            <option value="768,00">768,00</option>
                                                            <option value="800,00">800,00</option>
                                                            <option value="832,00">832,00</option>
                                                            <option value="864,00">864,00</option>
                                                            <option value="896,00">896,00</option>
                                                            <option value="928,00">928,00</option>
                                                            <option value="960,00">960,00</option>
                                                            <option value="992,00">992,00</option>
                                                            <option value="1024,00">1024,00</option>
                                                            <option value="1056,00">1056,00</option>
                                                            <option value="1088,00">1088,00</option>
                                                            <option value="1120,00">1120,00</option>
                                                            <option value="1152,00">1152,00</option>
                                                            <option value="1184,00">1184,00</option>
                                                            <option value="1216,00">1216,00</option>
                                                            <option value="1248,00">1248,00</option>
                                                            <option value="1280,00">1280,00</option>
                                                            <option value="1312,00">1312,00</option>
                                                            <option value="1344,00">1344,00</option>
                                                            <option value="1376,00">1376,00</option>
                                                            <option value="1408,00">1408,00</option>
                                                            <option value="1440,00">1440,00</option>
                                                            <option value="1472,00">1472,00</option>
                                                            <option value="1504,00">1504,00</option>
                                                            <option value="1536,00">1536,00</option>
                                                            <option value="1568,00">1568,00</option>
                                                            <option value="1600,00">1600,00</option>
                                                            <option value="1632,00">1632,00</option>
                                                            <option value="1664,00">1664,00</option>
                                                            <option value="1696,00">1696,00</option>
                                                            <option value="1728,00">1728,00</option>
                                                            <option value="1760,00">1760,00</option>
                                                            <option value="1792,00">1792,00</option>
                                                            <option value="1824,00">1824,00</option>
                                                            <option value="1856,00">1856,00</option>
                                                            <option value="1888,00">1888,00</option>
                                                            <option value="1920,00">1920,00</option>
                                                            <option value="1952,00">1952,00</option>
                                                            <option value="1984,00">1984,00</option>
                                                            <option value="2016,00">2016,00</option>
                                                            <option value="2048,00">2048,00</option>
                                                            <option value="2080,00">2080,00</option>
                                                            <option value="2112,00">2112,00</option>
                                                            <option value="2144,00">2144,00</option>
                                                            <option value="2176,00">2176,00</option>
                                                            <option value="2208,00">2208,00</option>
                                                            <option value="2240,00">2240,00</option>
                                                    </select>
                                        
                                                </div>                                  
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>: More Accessories, Wallets & Cases</li>
                                    <li><span>TAGS</span>: Clothing, T-shirt, Woman</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Sku : 00012</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">Açıklama</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">Özellikler</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                              
                                                <p><?php echo $items["post"]->description?> </p>
                                                
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="img/product-single/tab-desc.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Customer Rating</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Price</td>
                                                <td>
                                                    <div class="p-price">$495.00</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Add To Cart</td>
                                                <td>
                                                    <div class="cart-add">+ add to cart</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Availability</td>
                                                <td>
                                                    <div class="p-stock">22 in stock</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Weight</td>
                                                <td>
                                                    <div class="p-weight">1,3kg</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Size</td>
                                                <td>
                                                    <div class="p-size">Xxl</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Color</td>
                                                <td><span class="cs-color"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Sku</td>
                                                <td>
                                                    <div class="p-code">00012</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>İlgilenebileceğiniz Ürünler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-1.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coat</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Related Products Section End -->