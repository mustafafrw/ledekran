


    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        led_tabela@gmail.comX
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +90 544 444 99 64X
                    </div>
                </div>
                <div class="ht-right">
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="<?php echo base_url("includes")?>/img/logo.png" alt="Resim bulunamadı">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            
                            <form action="#" class="input-group">
                                <input type="text" placeholder="Neye ihtiyacınız var?">
                                <button style="float:right;" type="button"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul data-url="">
                         <?php foreach($items["header"] as $item) { ?>
                        
                        <li><a href="<?php echo $item->url ?>"><?php echo $item->title?></a></li>                     
                        
                         <?php } ?>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

 