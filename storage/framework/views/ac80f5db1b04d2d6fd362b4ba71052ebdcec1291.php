

<?php $__env->startSection('title','Quản lý sách'); ?>

<?php $__env->startSection('content'); ?>

<?php //Hiển thị thông báo thành công?>
<div class="page-header"><h4>Quản lý sách</h4></div>

<?php if( session('success') ): ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong><?php echo e(session('success')); ?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
<?php endif; ?>

<?php //Hiển thị thông báo lỗi?>
<?php if( session('error') ): ?>  
<!-- chưa khai báo session nhaa -->
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong><?php echo e(session('error')); ?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
<?php endif; ?>

<?php //Hiển thị danh sách sách?>
<div class="nav-item col-4 col-md-auto">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="table-responsive">
			<p><a class="btn btn-primary" href="<?php echo e(route('book.create')); ?>">Thêm mới</a></p>
			
			<table id="DataList" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên Sách</th>
						<th>Details</th>
						<th>Ảnh</th>
						<th>Tác giả</th>
						<th>Loại</th>
						<th>Nhà xuất bản</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
				<?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
				<?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<?php //Điền số thứ tự?>
						<td><?php echo e($key+1); ?></td>
						<?php //Lấy tên sách?>
						<td><?php echo e($book->name); ?></td>
						<?php //Lấy details?>
						<td><?php echo e($book->details); ?></td>
						<?php
        					$destinationPath = public_path('/uploads/');
        				?>
						<td>
							<img src="<?php echo e(asset($destinationPath . $book->avatar)); ?>" alt="Anh dai dien">
						</td>
						<td><?php echo e($book->author->name); ?></td>
						<td><?php echo e($book->type->name); ?></td>
						<td><?php echo e($book->nxb->name); ?></td>
						<?php //Tạo nút sửa sách?>
						<td><a href="<?php echo e(route('book.edit',$book->id)); ?>">Sửa</a></td>
						<?php //Tạo nút xóa sách?>

						<td><a href="<?php echo e(route('book.destroy',$book->id)); ?>">Xoá</a></td>
						<!-- <td>
						
						</td> -->
					</tr>
				<?php //Kết thúc vòng lập foreach?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\project2\resources\views/book/list.blade.php ENDPATH**/ ?>