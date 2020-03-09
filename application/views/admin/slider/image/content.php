<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">

                <form data-url="<?php echo base_url("admin/slider/refresh_image_list"); ?>" action="<?php echo base_url("admin/slider/image_upload"); ?>" id="dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("admin/slider/image_upload"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buyara sürükleyiniz</h3>
                        <p class="m-b-lg text-muted">(Yüklemek için dosyalarınızı sürükleyiniz yada buraya tıklayınız)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><! -- END column -->
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
           
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body image_list_container" >
            <?php $this->load->view("{$viewFolder}/image/render_elements/image_list_v"); ?>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>

