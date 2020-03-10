<div class="row">

    <div class="col-md-12">
         <div class="widget p-lg">
         <form action="<?php echo base_url("admin/ayarlar/iletisim/update/$items->id"); ?>" method="post">
       
           
                    <div class="form-group">
                        <label>Şirket İsmi</label>
                        <input class="form-control" placeholder="Şirket İsmi" name="sirket_ismi" value="<?php echo $items->sirket_ismi; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"><?php echo form_error("sirket_ismi"); ?></small>
                        <?php } ?>
                    </div> 
                        <div class="form-group">
                        <label>Misyon</label>
                        <input class="form-control" placeholder="Misyon" name="misyon" value="<?php echo $items->misyon;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("misyon"); ?></small>
                        <?php } ?>
                       </div>
                      <div class="form-group">
                        <label>Visyon</label>
                        <input class="form-control" placeholder="Visyon" name="visyon" value="<?php echo $items->visyon;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("visyon"); ?></small>
                        <?php } ?>
                    </div> 
                      <div class="form-group">
                        <label>Logo</label>
                        <input class="form-control" placeholder="Logo" name="logo" value="<?php echo $items->logo;?>" >
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("logo"); ?></small>
                        <?php } ?>
                    </div> 
                       <div class="form-group">
                        <label>Telefon</label>
                        <input class="form-control" placeholder="Telefon" name="tel_1" value="<?php echo $items->tel_1;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("tel_1"); ?></small>
                        <?php } ?>
                    </div> 
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" placeholder="E-mail" name="email" value="<?php echo $items->email;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
                        <?php } ?>
                    </div>
                 <div class="form-group">
                        <label>Facebook</label>
                        <input class="form-control" placeholder="Facebook" name="facebook" value="<?php echo $items->facebook;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("facebook"); ?></small>
                        <?php } ?>
                    </div>
                  <div class="form-group">
                        <label>İnstagram</label>
                        <input class="form-control" placeholder="İnstagram" name="instagram" value="<?php echo $items->instagram;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("instagram"); ?></small>
                        <?php } ?>
                    </div>
                     <div class="form-group">
                        <label>Twitter</label>
                        <input class="form-control" placeholder="Twitter" name="twitter" value="<?php echo $items->twitter;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("instagram"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Adres</label>
                        <input class="form-control" placeholder="Adres" name="adres" value="<?php echo $items->adres;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("adres"); ?></small>
                        <?php } ?>
                    </div>
                  <div class="form-group">
                        <label>Harita</label>
                        <textarea class="form-control" placeholder="Harita" name="map"><?php echo $items->map; ?></textarea>
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("map"); ?></small>
                        <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("admin/ayarlar"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
              
             </form>
              </div><!-- .widget --> 
    </div><!-- END column -->
</div>