
<style type="text/css">
    .gelenmesajlar td{
        text-align: center;
    }
</style>
<div class="row">
    <div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Gelen Mesajlar</h4>
					</header>
					<hr class="widget-separator">
					<div class="widget-body">
						<div class="table-responsive">							
	
             <table class="table table-hover table-striped table-bordered content-container">
	  <thead>
		<tr>
                    <th>İsim</th>
                    <th>Soyisim</th>
                    <th>E-mail</th>
                    <th>Telefon</th>
                    <th>Mesaj</th>
                    <th>Tarih</th>
                </tr>
	 </thead>
	<tbody class="gelenmesajlar">
             <?php foreach($items as $item){ ?>
	<tr>
           
            <td><?php echo $item->isim ;?></td>
            <td><?php echo $item->soyisim ;?></td>
            <td><?php echo $item->email ;?></td>
            <td><?php echo $item->telefon ;?></td>
            <td><?php echo $item->mesaj;?></td>
            <td><?php echo $item->tarih ;?></td>
         
        </tr>
   <?php } ?>
	</tbody>
				</table>
				</div>
			</div>
		</div><!-- .widget -->
	</div>
</div>