 <?php if(empty($item_images)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir resim bulunmamaktadır.</p>
                </div>

            <?php } else { ?>
                <form action="<?php echo base_url("admin/slider/update/").$item->id; ?>" method="post">
                <table class="table table-bordered table-striped table-hover pictures_list">
                    <thead>
                    <th class="order"><i class="fa fa-reorder"></i></th>
                        <th>#id</th>
                        <th>Yolu</th>
                        <th>Yazı 1</th>
                        <th>Yazı 2</th>
                        <th>Resim</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="sortable" data-url="">
                        
                        <?php foreach($item_images as $image) {?> 
                                                  
                           <tr id="ord-<?php echo $image->id;?>">
                            <td class="order"><i class="fa fa-reorder"></i></td>
                            <td class="w50 text-center">#<?php echo $image->id; ?></td>
                             <td class="w50 text-center">#<?php echo $image->path; ?></td>
                            <td class="w50 text-center">#<?php echo $image->yazi1; ?></td>
                            <td class="w50 text-center">#<?php echo $image->yazi2; ?></td>
                            <td class="w50 text-center">#<?php echo $image->picture; ?></td>   
                            
                            <td class="w100 text-center">                              
                    <img width="30" src="<?php echo base_url("uploads/$image->path") ?>" alt="<?php echo $image->path; ?>" class="img-responsive">                                                   
                    </td>
                                                    
                            <td class="w100 text-center">
                                <button                                  
                                    data-url="<?php echo base_url("admin/slider/imageDelete/$image->id"); ?>"
                                    class="btn btn-sm btn-danger btn-outline remove-btn btn-block">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                                <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>                                                                               
                            </td>                          
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
    </form>
            <?php } ?>