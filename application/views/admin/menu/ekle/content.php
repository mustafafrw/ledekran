<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Menü Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("admin/menu/save"); ?>" method="post">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Hedef Url</label>
                        <input class="form-control" placeholder="Url" name="url">
                    </div>
                    <div class="form-group">                      
						<label>Lokasyon</label>
                                               
						<div id="control-demo-6">
							<select class="form-control" name="type">
								<option value="head">Header</option>
								<option value="footer">Footer</option>
							</select>
						</div>                   
					</div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("admin/menu"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>