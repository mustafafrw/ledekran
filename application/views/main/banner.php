<div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <?php 
                $i =0;
                    foreach($items["kategori"] as $item){
                        $i++;
                        if($i>3)break;
                ?>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="<?php echo $item->thumb; ?>" alt="">
                        <div class="inner-text">
                            <a href="<?php echo base_url("kategori/").$item->id; ?>"><h4><?php echo $item->title ?></h4></a>
                        </div>
                    </div>
                </div>
                    <?php } ?>
            </div>
        </div>
    </div>