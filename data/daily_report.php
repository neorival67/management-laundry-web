<?php 
require_once('../class/Sales.php');
if(isset($_POST['date'])){
	$date = $_POST['date'];

	$reports = $sales->daily_sales($date);
	// echo '<pre>';
	// 	print_r($reports);
	// echo '</pre>';
?>
<br />
<div class="table-responsive">
        <table id="" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama Pelanggan</th>
                    <th><center>Tipe Layanan</center></th>
                    <th><center>Tanggal Pesan</center></th>
                    <th><center>Tanggal Bayar</center></th>
                    <th><center>Jumlah</center></th>
                </tr>
            </thead>
            <tbody>
            	<?php 
            		$total = 0;
            		foreach($reports as $r): 
            		$total += $r['sale_amount'];
            	?>
	                <tr align="center">
	                    <td align="left"><?= $r['sale_customer_name']; ?></td>
	                    <td><?= $r['sale_type_desc']; ?></td>
	                    <td><?= $r['sale_laundry_received']; ?></td>
	                    <td><?= $r['sale_date_paid']; ?></td>
	                    <td><?= '₱ '.number_format($r['sale_amount'], 2); ?></td>
	                </tr>
	            <?php endforeach; ?>
            </tbody>
	            <tr>
	            	<td></td>
	            	<td></td>
	            	<td></td>
	            	<td align="right"><strong></strong></td>	
	            	<td align="center"><strong><?= 'Rp '.number_format($total,3); ?></strong></td>
	            </tr>
        </table>
</div>


<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-report').DataTable();
    });
</script>



<?php
}//end isset


