<div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe
                    src="<?php echo $items["ayarlar"]->map; ?>"
                    height="610" style="border:0" allowfullscreen="">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>İletişim</h4>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Adres</span>
                                <p><?php echo $items["ayarlar"]->adres; ?></p>
                            </div>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $items["ayarlar"]->tel_1;  ?>">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                           
                            <div class="ci-text">
                                <span>Telefon:</span>
                                <a href="https://api.whatsapp.com/send?phone=<?php echo $items["ayarlar"]->tel_1;  ?>" target="_blank"><p><?php echo $items["ayarlar"]->tel_1; ?></p></a>

                            </div>
                        </div>
                        </a>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p><?php echo $items["ayarlar"]->email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Bize Ulaşın</h4>
                            <p>Bize ulaşmak için aşşağıdaki alanları doldurunuz.</p>
                            <form action="<?php echo base_url("iletisim/save"); ?>" method="post" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="İsim" name="isim">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Soyisim" name="soyisim">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email" name="email">
                                    </div>
                                     <div class="col-lg-6">
                                        <input type="text" placeholder="Telefon" name="telefon">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Mesaj" name="mesaj"></textarea>
                                        <button type="submit" class="site-btn">Gönder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>