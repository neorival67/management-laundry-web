<?php 
require_once('database/Database.php');
$db = new Database();
$sql = "SELECT *
		FROM laundry_type
		ORDER BY laun_type_desc ASC";
$types = $db->getRows($sql);
$db->Disconnect();
 ?>
<div class="modal fade" id="modal-laun">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" id="form-new-laun">
					<input type="hidden" id="laun-type">
					<input type="hidden" id="laun-id">
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Nama Pelanggan:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="customer" placeholder="Masukkan nama pelanggan" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">No Telepon :</label>
				    <div class="col-sm-9">
				      <input type="number" class="form-control" id="priority" placeholder="Masukkan No Telepon" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Berat:</label>
				    <div class="col-sm-9">
				      <input type="number" step="any" class="form-control" id="weight" placeholder="Masukkan berat pakaian" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Layanan:</label>
				    <div class="col-sm-9">
					    <select class="btn btn-default" id="newlaun-type">
					    	<?php foreach($types as $t): ?>
					    		<option value="<?= $t['laun_type_id']; ?>"><?= $t['laun_type_desc']; ?></option>
					    	<?php endforeach; ?>
					    </select>
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-primary">Simpan</button>
				    </div>
				  </div>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>