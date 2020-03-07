<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Kategori Listesi
            <a href="<?php echo base_url("admin/kategori/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>

        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

                <?php  if(!isset($items)) { ?>
                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("admin/kategori/new_form"); ?>">tıklayınız</a></p>
                </div>
                <?php } ?>

                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                    <th class="order"><i class="fa fa-reorder"></i></th>
                <th class="w50">#ID</th>
                        <th>Başlık</th>
                        <th>Açıklama</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="sortable" data-url="">    
                        
                             <?php foreach($items as $item) { ?>
                        
                            <tr id="ord-X">
                                <td class="order"><i class="fa fa-reorder"></i></td>
                                <td class="w50 text-center"><?php echo $item->id; ?></td>
                                <td><?php echo $item->title; ?></td>
                                <td><?php echo $item->description; ?></td>
                                <td>
                                    <button
                                        data-url="<?php echo base_url("admin/kategori/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                    <a href="<?php echo base_url("admin/kategori/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                </td>
                            </tr>
                                 <?php } ?>
                    </tbody>

                </table>


        </div><!-- .widget -->
    </div><!-- END column -->
</div>