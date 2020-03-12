<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo '<b>'.$item->id.'</b> kaydını düzenliyorsunuz'; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("admin/slider/update/$item->id"); ?>" method="post">
                    <div class="form-group">
                        <label>Yol </label>
                        <input class="form-control" placeholder="Başlık" name="path" value="<?php echo $item->path; ?>">

                    </div>
                    <div class="form-group">
                        <label>İlk Yazı</label>
                        <input class="form-control" placeholder="Başlık" name="title1" value="<?php echo $item->yazi1; ?>">

                    </div>
                    <div class="form-group">
                        <label>İkinci Yazı</label>
                        <input class="form-control" placeholder="Başlık" name="title2" value="<?php echo $item->yazi2; ?>">

                    </div>
                      <div class="form-group">
                        <label>Resim </label>
                        <input class="form-control" placeholder="Başlık" name="picture" value="<?php echo $item->picture; ?>">

                    </div>



                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("admin/slider"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>
