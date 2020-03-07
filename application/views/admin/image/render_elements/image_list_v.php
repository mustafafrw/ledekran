 <?php if(empty($item_images)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir resim bulunmamaktadır.</p>
                </div>

            <?php } else { ?>
                
                <table class="table table-bordered table-striped table-hover pictures_list">
                    <thead>
                    <th class="order"><i class="fa fa-reorder"></i></th>
                        <th>#id</th>
                        <th>Görsel</th>
                        <th>Resim Adı</th>
                        <th>Durumu</th>
                        <th>Kapak</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="sortable" data-url="">
                        
                        <?php foreach($item_images as $image) {?> 
                                                  
                           <tr id="ord-<?php echo $image->id;?>">
                            <td class="order"><i class="fa fa-reorder"></i></td>
                            <td class="w50 text-center">#<?php echo $image->id; ?></td>
                            <td class="w100 text-center">
                                
                    <img width="30" src="<?php echo base_url("uploads/{$viewFolder}/$image->path") ?>" alt="<?php echo $image->path; ?>" class="img-responsive">
                                                       
                    </td>
                            <td><?php echo $image->path; ?></td>

                            <td class="w100 text-center">
                                <input
                                    data-url="<?php echo base_url("admin/urunler/isCoverSetter/$image->id/$image->post_id"); ?>"
                                    class="isCover"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#ff5b5b"
                                    <?php echo ($image->isCover) ? "checked" : ""; ?>
                                />
                            </td>
                            <td class="w100 text-center">
                                <button
                                    
                                    data-url="<?php echo base_url("admin/urunler/imageDelete/$image->id/$image->post_id"); ?>"
                                    class="btn btn-sm btn-danger btn-outline remove-btn btn-block">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            <?php } ?>