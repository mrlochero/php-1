<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Chi tiết Item</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="<?php echo base_url('item');?>"> Quay lại</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Tiêu đề:</strong>
			<?php echo $item->title; ?>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Mô tả:</strong>
			<?php echo $item->description; ?>
		</div>
	</div>
</div>
