<aside id="menubar" class="menubar light">

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">


                <li>
                    <a href="admin">
                      <a href="<?php echo base_url("admin"); ?>">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Anasayfa</span>
                    </a>
                </li>



                <li>
                    <a href="<?php echo base_url("admin/urunler"); ?>">
                        <i class="menu-icon fa fa-cubes"></i>
                        <span class="menu-text">Ürünler</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("admin/kategori"); ?>">
                        <i class="menu-icon fa fa-cubes"></i>
                        <span class="menu-text">Kategoriler</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("admin/menu"); ?>">
                        <i class="menu-icon fa fa-cubes"></i>
                        <span class="menu-text">Menüler</span>
                    </a>
                </li>


                <li>
                    <a href="<?php echo base_url("admin/slider") ?>">
                        <i class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i>
                        <span class="menu-text">Slider</span>
                    </a>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-storage zmdi-hc-lg"></i>
                        <span class="menu-text">Ayarlar</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url("admin/ayarlar/iletisim"); ?>"><span class="menu-text">İletişim</span></a></li>
                        <li><a href="<?php echo base_url("admin/ayarlar/pdf"); ?>"><span class="menu-text">Pdf</span></a></li>
                         <li><a href="<?php echo base_url("admin/ayarlar/hakkimizda"); ?>"><span class="menu-text">Hakkımızda</span></a></li>
                        <li><a href="<?php echo base_url("admin/ayarlar/seo");?>"><span class="menu-text">Seo</span></a></li>
                    </ul>
                 </li>
            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>
