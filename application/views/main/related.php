<?php 
                $i =0;
                    foreach($items["kategori"] as $item){
                        $i++;
                        if($i>3)break;
                        $kategoriListe = $this->main_model->get_all(
                            array("category_id"=>$item->id), "post_id ASC" ,"posts"
                
                        );
                        if(count($kategoriListe)==0)continue;
                ?>
    <div class="related-products spad">
         <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><?php echo $item->title ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                    <?php foreach($kategoriListe as $k) { 
                          $thumbnail = $this->main_model->get(
                            array("post_id" => $k->post_id,"type"=>"kapak"),"pictures"
                        );
                        if(!isset($thumbnail))continue;
                        ?>

                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                        <a href="<?php echo base_url("urun/").$k->post_id; ?>"><img src="<?php echo base_url("uploads/").$thumbnail->path; ?>" alt=""></a>
                              
                            <ul>
                            <li class="quick-view"><a href="<?php echo base_url("urun/").$k->post_id; ?>">Teklif Al</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                                <a href="#">
                                    <h5><?php echo $k->title; ?></h5>
                                </a>
                         </div>
                    </div>
                </div>

                    <?php } ?>
             </div>
                    </div>
                    </div>
                    <?php } ?>
                    