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
                    </div>  <div class="form-group">
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
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("admin/urunler"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>