<div class="row">

    <div class="col-md-12">
         <div class="widget p-lg">
         <form action="<?php echo base_url("admin/ayarlar/seo/update/$items->id"); ?>" method="post">
       
           
                    <div class="form-group">
                        <label>Site Başlık</label>
                        <input class="form-control" placeholder="Site Başlık" name="title" value="<?php echo $items->title; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"><?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                        <div class="form-group">
                        <label>Açıklama</label>
                        <input class="form-control" placeholder="Açıklama" name="description" value="<?php echo $items->description;?>" >
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("description"); ?></small>
                        <?php } ?>
                        </div>  
                        <div class="form-group">
                        <label>Anahtar Kelimeler</label>
                        <input class="form-control" placeholder="Anahtar Kelimeler" name="keywords" value="<?php echo $items->keywords;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("keywords"); ?></small>
                        <?php } ?>
                       </div>                     
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("admin/ayarlar"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
              
             </form>
              </div><!-- .widget --> 
    </div><!-- END column -->
</div>