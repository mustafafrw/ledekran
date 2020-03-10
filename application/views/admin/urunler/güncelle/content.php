<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo '<b>$item["urun"]->title</b> kaydını düzenliyorsunuz'; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php $p = $item["urun"]->post_id; echo base_url("admin/urunler/update/$p"); ?>" method="post">
                    
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title" value="<?php echo $item["urun"]->title; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div> 
                    <div class="form-group">
			<label>Kategori</label>                                      
				<div id="control-demo-6">
			<select class="form-control" name="catid">
                            
                             <?php foreach($item["kategori"] as $itemx){?>
                            
				<option value="<?php echo $itemx->id?>"><?php echo $itemx->title ?></option>								
   
                          <?php }?>
			</select>
		    </div>                                           
		</div>
                    
                   
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                            <?php echo $item["urun"]->description; ?>
                        </textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Yükseklik Başlangıç</label>
                        <input class="form-control" placeholder="Başlık" name="h_start" value="<?php echo $item["post_data"]->h_start; ?>">
                        
                    </div> 
                      <div class="form-group">
                        <label>Yükseklik Bitiş</label>
                        <input class="form-control" placeholder="Başlık" name="h_end" value="<?php echo $item["post_data"]->h_end; ?>">
                        
                    </div> 
                      <div class="form-group">
                        <label>Genişlik Başlangıç</label>
                        <input class="form-control" placeholder="Başlık" name="w_start" value="<?php echo $item["post_data"]->w_start; ?>">
                        
                    </div> 
                      <div class="form-group">
                        <label>Genişlik Bitiş</label>
                        <input class="form-control" placeholder="Başlık" name="w_end" value="<?php echo $item["post_data"]->w_end; ?>">
                       
                    </div>
                    <div class="form-group">
                        <label>Panel Adaptor Size</label>
                        <input class="form-control"  name="panelAdaptorSize" value="<?php echo $item["post_data"]->panelAdaptorSize; ?>">
                       
                    </div> 
                       <div class="form-group">
                        <label>Panel Pixsel</label>
                        <input class="form-control" name="panelPixels" value="<?php echo $item["post_data"]->panelPixels; ?>">
                        
                    </div> 
        
                     <div class="form-group">
                        <label>Panel Tutar</label>
                        <input class="form-control" name="panelAmount" value="<?php echo $item["post_data"]->panelAmount; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>Panel Metre Pixel</label>
                        <input class="form-control"  name="panelMetrePixel" value="<?php echo $item["post_data"]->panelMetrePixel; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>Panel MM</label>
                        <input class="form-control" name="panelMM" value="<?php echo $item["post_data"]->panelMM; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>Adaptör Tutar</label>
                        <input class="form-control" name="adaptorAmount" value="<?php echo $item["post_data"]->adaptorAmount; ?>">
                       
                    </div>
                    <div class="form-group">
                        <label>Kasa Tutar</label>
                        <input class="form-control" name="kasaAmount" value="<?php echo $item["post_data"]->kasaAmount; ?>">
                       
                    </div>
                      <div class="form-group">
                        <label>pikselOlcusu</label>
                        <input class="form-control" name="pikselOlcusu" value="<?php echo $item["post_data"]->pikselOlcusu; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>ledTuru</label>
                        <input class="form-control" name="ledTuru" value="<?php echo $item["post_data"]->ledTuru; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>goruntuDestegi</label>
                        <input class="form-control" name="goruntuDestegi" value="<?php echo $item["post_data"]->goruntuDestegi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>kirmiziDalgaBoyu</label>
                        <input class="form-control" name="kirmiziDalgaBoyu" value="<?php echo $item["post_data"]->kirmiziDalgaBoyu; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>yesilDalgaBoyu</label>
                        <input class="form-control" name="yesilDalgaBoyu" value="<?php echo $item["post_data"]->yesilDalgaBoyu; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>maviDalgaBoyu</label>
                        <input class="form-control" name="maviDalgaBoyu" value="<?php echo $item["post_data"]->maviDalgaBoyu; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>ledAcisi</label>
                        <input class="form-control" name="ledAcisi" value="<?php echo $item["post_data"]->ledAcisi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>parlaklik</label>
                        <input class="form-control" name="parlaklik" value="<?php echo $item["post_data"]->parlaklik; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>chipMarkasi</label>
                        <input class="form-control" name="chipMarkasi" value="<?php echo $item["post_data"]->chipMarkasi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>m2PikselSayisi</label>
                        <input class="form-control" name="m2PikselSayisi" value="<?php echo $item["post_data"]->m2PikselSayisi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>sinyal_iletimi</label>
                        <input class="form-control" name="sinyal_iletimi" value="<?php echo $item["post_data"]->sinyal_iletimi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>calismaOzelligi</label>
                        <input class="form-control" name="calismaOzelligi" value="<?php echo $item["post_data"]->calismaOzelligi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>calismaSicakligi</label>
                        <input class="form-control" name="calismaSicakligi" value="<?php echo $item["post_data"]->calismaSicakligi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>calismaGerilimi</label>
                        <input class="form-control" name="calismaGerilimi" value="<?php echo $item["post_data"]->calismaGerilimi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>minimumGoruntuMesafesi</label>
                        <input class="form-control" name="minimumGoruntuMesafesi" value="<?php echo $item["post_data"]->minimumGoruntuMesafesi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>gucKaynagiTipi</label>
                        <input class="form-control" name="gucKaynagiTipi" value="<?php echo $item["post_data"]->gucKaynagiTipi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>renkKapasitesi</label>
                        <input class="form-control" name="renkKapasitesi" value="<?php echo $item["post_data"]->renkKapasitesi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>parlaklikSeviyesi</label>
                        <input class="form-control" name="parlaklikSeviyesi" value="<?php echo $item["post_data"]->parlaklikSeviyesi; ?>">
                       
                    </div>
                     <div class="form-group">
                        <label>kabinTipi</label>
                        <input class="form-control" name="kabinTipi" value="<?php echo $item["post_data"]->kabinTipi; ?>">
                       
                    </div>
                
                    
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("admin/urunler"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>