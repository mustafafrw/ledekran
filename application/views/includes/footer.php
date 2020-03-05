
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
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
                            <li>Address: Şişli / İstanbul</li>
                            <li>Phone: 0546 899 66 66</li>
                            <li>Email: led_tabela@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Bilgasdasdi</h5>
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