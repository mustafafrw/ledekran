<div class="row">

    <div class="col-md-12">
         <div class="widget p-lg">
         <form action="<?php echo base_url("admin/ayarlar/hakkimizda/update/$items->id"); ?>" method="post">
       
           
                   <div class="form-group">
                       <label><b>Hakkımızda Düzenle<b></label>
                        <textarea name="hakkimda" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                            <?php echo $items->hakkimda; ?>
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("admin/ayarlar"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
              
             </form>
              </div><!-- .widget --> 
    </div><!-- END column -->
</div>