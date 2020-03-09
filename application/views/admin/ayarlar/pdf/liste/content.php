<div class="row">

    <div class="col-md-12">
         <div class="widget p-lg">
         <form action="<?php echo base_url("admin/ayarlar/pdf/update/$items->id"); ?>" method="post">
       
           
                    <div class="form-group">
                        <label>Üst Resim Yolu</label>
                        <input class="form-control" placeholder="Üst Resim Yolu" name="UstResimYolu" value="<?php echo $items->UstResimYolu; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"><?php echo form_error("UstResimYolu"); ?></small>
                        <?php } ?>
                    </div>
                        <div class="form-group">
                        <label>Alt Resim Yolu</label>
                        <input class="form-control" placeholder="Alt Resim Yolu" name="AltResimYolu" value="<?php echo $items->AltResimYolu;?>" >
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("AltResimYolu"); ?></small>
                        <?php } ?>
                        </div>  
                        <div class="form-group">
                        <label>Giriş Yazısı</label>
                        <input class="form-control" placeholder="Giriş Yazısı" name="GirisYazisi" value="<?php echo $items->GirisYazisi;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("GirisYazisi"); ?></small>
                        <?php } ?>
                       </div>
                      <div class="form-group">
                        <label>Teklif Şartları</label>
                        <input class="form-control" placeholder="Teklif Şartları" name="TeklifSartlari" value="<?php echo $items->TeklifSartlari;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("TeklifSartlari"); ?></small>
                        <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("admin/ayarlar"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
              
             </form>
              </div><!-- .widget --> 
    </div><!-- END column -->
</div>