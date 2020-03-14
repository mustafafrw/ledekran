<section class="hero-section">
        <div class="hero-items owl-carousel">
        <?php foreach($items["slider"] as $item) { ?>
            <div class="single-hero-items set-bg" data-setbg="includes/img/<?php echo $item->picture;?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Led Ekranlar</span>
                            <h1><?php echo $item->yazi1;?></h1>
                            <p><?php echo $item->yazi2;?></p>
                            <a href="<?php echo $item->path;?>" class="primary-btn">Teklif Al</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
         
        </div>
    </section>