


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Anasayfa</a>
                        <a href="<?php echo base_url("kategori/").$items["categoryInfo"]->id ?>"><?php echo $items["categoryInfo"]->title ?></a>
                        <span><?php echo $items["post"]->title ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="<?php echo base_url("uploads/").$items["thumbnail"]->path?>" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="<?php echo base_url("uploads/").$items["thumbnail"]->path?>"><img
                                            src="<?php echo base_url("uploads/").$items["thumbnail"]->path?>" alt=""></div>

                                            <?php foreach($items["pictures"] as $pic){
                                            ?>
                                    <div class="pt" data-imgbigurl="<?php echo base_url("uploads/").$pic->path; ?>"><img
                                            src="<?php echo base_url("uploads/").$pic->path; ?>" alt=""></div>
                                            <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span><?php echo $items["categoryInfo"]->title ?></span>
                                    <h3><?php echo $items["post"]->title ?></h3>
                                </div>


                                <br><br>
                               <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>

                                        <div id="app">
                                                <div class="row responsive-calculate">
                                                <div class="form-group col-md-4" style="height:40px;">

                                                    <!--<h6>{{yukseklik}}, {{genislik}}, {{post_id}}</h6>-->
                                                    <select id="" class="form-control" name="yukseklik" v-model="yukseklik">

                                                <option value="0">Yükseklik</option>
                                                <?php
                                                $h_start = $items["post_data"]->h_start;
                                                $h_end = $items["post_data"]->h_end;
                                                $h_start = str_replace(",",".",$h_start);
                                                $h_end = str_replace(",",".",$h_end);

                                                for($i=$h_start;$i<$h_end;$i+=$h_start){  ?>
                                                                        <option value="<?php echo $i ?>"><?php echo number_format($i, 2,',','.'); ?></option>
                                                                    <?php } ?>

                                                                </select>


                                                </div>
                                                <div class="form-group col-md-4" style="height:40px;">



                                                    <select id="" class="form-control" name="genislik" v-model="genislik">
                                                    <option value="0">Genişlik</option>
                                                    <?php
                                                $w_start = $items["post_data"]->w_start;
                                                $w_end = $items["post_data"]->w_end;
                                                $w_start = str_replace(",",".",$w_start);
                                                $w_end = str_replace(",",".",$w_end);

                                                for($i=$w_start;$i<$w_end;$i+=$w_start){  ?>
                                                                        <option value="<?php echo $i ?>"><?php echo number_format($i, 2,',','.'); ?></option>
                                                                    <?php } ?>

                                                                </select>


                                                            </div>







                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" v-model="videoprc">
                                                    <label class="custom-control-label" for="customCheck1">Video Processor Ekle</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="quantity">
                                                <button class="primary-btn pd-cart" @click="myreq()">Teklif Al</button>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group" v-if="status">
                                            <h3>Hesaplanıyor...</h3>
                                            </div>
                                            <div class="form-group" v-if="response">
                                                <h3>Toplam Fiyat: {{parseFloat(response.tutar).toFixed(2)}}$</h3>
                                                <br>
                                                <a :href="'http://localhost/htmltopdf/'+response.pdf" target="_blank"><button class="primary-btn pd-cart">Teklifi Görüntüle</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <script>


                                                new Vue({
                                                                el: "#app",
                                                                data:{
                                                                    yukseklik:0,
                                                                    genislik:0,
                                                                    post_id:"<?php echo $items["post"]->post_id ?>",
                                                                    response:"",
                                                                    status:false,
                                                                    videoprc:false
                                                                },
                                                                methods:{
                                                                    myreq(){
                                                                        this.status=true;
                                                                        var r = this;
                                                                        var gyukseklik = Math.floor(this.yukseklik);
                                                                        var ggenislik = Math.floor(this.genislik);
                                                                        axios.get('http://localhost/htmltopdf/?postid='+this.post_id+'&genislik='+ggenislik+'&yukseklik='+gyukseklik+'&videoprc='+this.videoprc)
                                                                            .then(response => {
                                                                            r.status=false;
                                                                            r.response = response.data;
                                                                            }).catch(error => {
                                                                            console.log(response)
                                                                        })
                                                                    }
                                                                }
                                                                // define data - initial display text and set the text on the button

                                               });

                                        </script>


                                <div class="div">
                                            <?php
                                                if(isset($items["pdfpath"])){
                                                    //echo $items["pdfpath"];
                                                   echo '<a href="http://localhost/htmltopdf/'.$items["pdfpath"].'" target="_blank">TEKLİFİNİZ HAZIRLANDI.</a';
                                                }

                                            ?>
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
                                                <img src="" alt="">
                                            </div>
                                        </div>
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
              <?php $counter=0; foreach($items["related"] as $item) {
                $counter++;
                if($counter>4)break;
                  $thumbnail = $this->main_model->get(
                      array("post_id"=>$item->post_id,"type"=>"kapak"), "pictures"
                  ); ?>
                <div class="col-lg-3 col-sm-6">

                    <div class="product-item">
                        <div class="pi-pic">
                            <a href="<?php echo base_url('urun/').$item->post_id; ?>"><img src="<?php echo base_url("uploads/").$thumbnail->path; ?>" alt=""></a>
                            <div class="sale">İNDİRİM</div>

                            <ul>
                                <li class="quick-view"><a href="<?php echo base_url('urun/').$item->post_id; ?>">Teklif Al</a></li>
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
    <!-- Related Products Section End -->
