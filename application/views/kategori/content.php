<section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Kategoriler</h4>
                        <ul class="filter-catagories">
                            <?php foreach($items["categoryList"] as $item) { ?>
                            <li><a href="<?php echo base_url("kategori/").$item->id; ?>"><?php echo $item->title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                
                                <h3><?php echo $items["categoryInfo"]->title?></h3>
                                <h6><?php echo $items["categoryInfo"]->description?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <?php foreach($items["post"] as $item) {
                                $thumbnail = $this->main_model->get(
                                    array("post_id"=>$item->post_id,"type"=>"kapak"), "pictures"
                                );
                                ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <a href="<?php echo base_url("urun/").$item->post_id;?>"><img  src="
                                        <?php if($thumbnail)
                                        echo base_url("uploads/").$thumbnail->path; ?>" alt=""></a>
                   
                                        <ul>
                                            <li class="quick-view"><a href="<?php echo base_url("urun/").$item->post_id;?>">Teklif Al</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                    
                                        <a href="#">
                                            <h5><?php echo $item->title; ?></h5>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>