<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Codeigniter 3 CRUD with DANDEV</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="<?php echo base_url('item/create') ?>"> Tạo mới Item</a>
		</div>
	</div>
</div>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>Tiêu đề</th>
		<th>Mô tả</th>
		<th width="220px">Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $item) { ?>
		<tr>
			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->description; ?></td>
			<td>
				<form method="DELETE" action="<?php echo base_url('item/delete/'.$item->id);?>">
					<a class="btn btn-info" href="<?php echo base_url('item/'.$item->id) ?>">Xem</a>
					<a class="btn btn-primary" href="<?php echo base_url('item/edit/'.$item->id) ?>">Sửa</a>
					<button type="submit" class="btn btn-danger">Xóa</button>
				</form>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
