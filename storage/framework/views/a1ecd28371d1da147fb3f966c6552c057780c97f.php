

<?php $__env->startSection('title','Thêm mới sách'); ?>

<?php $__env->startSection('content'); ?>

<div class="page-header"><h4>Quản lý sách</h4></div>

<?php //Hiển thị thông báo thành công?>
<?php if( Session::has('success') ): ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong><?php echo e(Session::get('success')); ?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
<?php endif; ?>

<?php //Hiển thị thông báo lỗi?>
<?php if( Session::has('error') ): ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong><?php echo e(Session::get('error')); ?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
<?php endif; ?>

<?php //Form thêm mới sách?>
<p><a class="btn btn-primary" href="/<?php echo e(url('/book')); ?>">Về danh sách</a></p>
<div class="col-xs-4 col-xs-offset-4">
	<center><h4>Thêm sách</h4></center>
	<form action="<?php echo e(route('book.store')); ?>" method="POST" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
		<input type="hidden" id="_token" name="_token" value="<?php echo e(csrf_token()); ?>"/>
		<div class="form-group">
			<label for="name">Tên sach</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Tên sách" maxlength="255" required />
		</div>
		<div class="form-group">
			<label for="details">Mô tả</label>
			<input type="text" class="form-control" id="details"  name="details" placeholder="Mô tả" maxlength="255" required />
		</div>
		<div class="form-group">
			<label for="details">Avatar</label>
			<input type="file" class="form-control-file" id="ava"  name="ava" required />
		</div>
		
		<div class="form-group">
			<label for="author">Tác giả:</label>
			<select name="author" id="author" class="form-control">
				<option value="">Chọn tác giả</option>
				<?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aut): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($aut->id); ?>"><?php echo e($aut->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
                      
        </div>
		<div class="form-group">
			<label for="nxb">Nhà xuất bản:</label>
			<select name="nxb" id="nxb" class="form-control">
				<option value="">Chọn nhà xuất bản</option>
				<?php $__currentLoopData = $nxb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($nx->id); ?>"><?php echo e($nx->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			
		</div>
		<div class="form-group">
			<label for="type">Loại sách:</label>
			<select name="type" id="type" class="form-control">
				<option value="">Chọn loại</option>
				<?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($typ->id); ?>"><?php echo e($typ->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			
		</div>

		

		<center><button type="submit" class="btn btn-primary">Thêm</button></center>
	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\project2\resources\views/book/create.blade.php ENDPATH**/ ?>