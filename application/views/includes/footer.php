
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: <?php echo $items["ayarlar"]->adres;  ?></li>
                            <li>Telefon: <?php echo $items["ayarlar"]->tel_1;  ?></li>
                            <li>Misyon:   <?php echo $items["ayarlar"]->misyon;  ?></li>
                            <li>Visyon:   <?php echo $items["ayarlar"]->visyon;  ?></li>
                            
                        </ul>
                        <div class="footer-social">
                            <a href="<?php echo $items["ayarlar"]->facebook; ?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $items["ayarlar"]->instagram; ?>"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo $items["ayarlar"]->twitter; ?>"><i class="fa fa-twitter"></i></a>                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Bilgi</h5>
                        <ul>

                        <?php foreach($items["footer"] as $item) { ?>
                        
                        <li><a href="<?php echo $item->url;?>"><?php echo $item->title?></a></li>                     
                        
                         <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      
    </footer>