<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Ürün Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("admin/urunler/save"); ?>" method="post">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                      <div class="form-group">
						<label>Kategori</label>
                                               
						<div id="control-demo-6">
							<select class="form-control" name="type">
                                                            <?php foreach($items as $item){?>
								<option value="<?php echo $item->id?>"><?php echo $item->title ?></option>
								
                                                                <?php }?>
							</select>
						</div>     
                                               
					</div>
                   <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                      
                        </textarea>
                    </div>
                   
                  
                    <div class="form-group">
                        <label>Yükseklik Başlangıç</label>
                        <input class="form-control"  name="h_start" value="">
                       
                    </div> 
                        <div class="form-group">
                        <label>Yükseklik Bitiş</label>
                        <input class="form-control" name="h_end" value="">
                       
                       </div>
                      <div class="form-group">
                        <label>Genişlik Başlangıç</label>
                        <input class="form-control" name="w_start" value="">
                      
                    </div> 
                      <div class="form-group">
                        <label>Genişlik Bitiş</label>
                        <input class="form-control" name="w_end" value="" >
                       
                    </div> 
                    <div class="form-group">
                        <label>Panel Adaptor Size</label>
                        <input class="form-control"  name="panelAdaptorSize" value="">
                       
                    </div> 
                       <div class="form-group">
                        <label>Panel Pixsel</label>
                        <input class="form-control" name="panelPixels" value="">
                        
                    </div> 
        
                     <div class="form-group">
                        <label>Panel Tutar</label>
                        <input class="form-control" name="panelAmount" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>Panel Metre Pixel</label>
                        <input class="form-control"  name="panelMetrePixel" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>Panel MM</label>
                        <input class="form-control" name="panelMM" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>Adaptör Tutar</label>
                        <input class="form-control" name="adaptorAmount" value="">
                       
                    </div>
                    <div class="form-group">
                        <label>Kasa Tutar</label>
                        <input class="form-control" name="kasaAmount" value="">
                       
                    </div>
                      <div class="form-group">
                        <label>pikselOlcusu</label>
                        <input class="form-control" name="pikselOlcusu" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>ledTuru</label>
                        <input class="form-control" name="ledTuru" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>goruntuDestegi</label>
                        <input class="form-control" name="goruntuDestegi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>kirmiziDalgaBoyu</label>
                        <input class="form-control" name="kirmiziDalgaBoyu" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>yesilDalgaBoyu</label>
                        <input class="form-control" name="yesilDalgaBoyu" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>maviDalgaBoyu</label>
                        <input class="form-control" name="maviDalgaBoyu" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>ledAcisi</label>
                        <input class="form-control" name="ledAcisi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>parlaklik</label>
                        <input class="form-control" name="parlaklik" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>chipMarkasi</label>
                        <input class="form-control" name="chipMarkasi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>m2PikselSayisi</label>
                        <input class="form-control" name="m2PikselSayisi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>sinyal_iletimi</label>
                        <input class="form-control" name="sinyal_iletimi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>calismaOzelligi</label>
                        <input class="form-control" name="calismaOzelligi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>calismaSicakligi</label>
                        <input class="form-control" name="calismaSicakligi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>calismaGerilimi</label>
                        <input class="form-control" name="calismaGerilimi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>minimumGoruntuMesafesi</label>
                        <input class="form-control" name="minimumGoruntuMesafesi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>gucKaynagiTipi</label>
                        <input class="form-control" name="gucKaynagiTipi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>renkKapasitesi</label>
                        <input class="form-control" name="renkKapasitesi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>parlaklikSeviyesi</label>
                        <input class="form-control" name="parlaklikSeviyesi" value="">
                       
                    </div>
                     <div class="form-group">
                        <label>kabinTipi</label>
                        <input class="form-control" name="kabinTipi" value="">
                       
                    </div>
                
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("admin/urunler"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>