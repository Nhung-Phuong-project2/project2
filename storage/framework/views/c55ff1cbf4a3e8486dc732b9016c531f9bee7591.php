<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo $__env->yieldContent('title'); ?></title>
    <link href="/<?php echo url('public/css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet" />
	<link href="/<?php echo url('public/css/dataTables.bootstrap.min.css'); ?>" type="text/css" rel="stylesheet" />
	<link href="/<?php echo url('public/css/bootstrap-custom.css'); ?>" type="text/css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <!-- <?php $__env->startSection('content'); ?> -->
		<?php echo $__env->yieldContent('content'); ?>
    </div>
	<script type="text/javascript" src="/<?php echo url('public/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="/<?php echo url('public/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="/<?php echo url('public/js/jquery.dataTables.min.js'); ?>"></script>
	<script type="text/javascript" src="/<?php echo url('public/js/dataTables.bootstrap.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#DataList").DataTable({
				"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Tất cả"]],
				"iDisplayLength": 10,
				"oLanguage": {
					"sLengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
					"oPaginate": {
						"sFirst": "<span class='glyphicon glyphicon-step-backward' aria-hidden='true'></span>",
						"sLast": "<span class='glyphicon glyphicon-step-forward' aria-hidden='true'></span>",
						"sNext": "<span class='glyphicon glyphicon-triangle-right' aria-hidden='true'></span>",
						"sPrevious": "<span class='glyphicon glyphicon-triangle-left' aria-hidden='true'></span>"
					},
					"sEmptyTable": "Không có dữ liệu",
					"sSearch": "Tìm kiếm:",
					"sZeroRecords": "Không có dữ liệu",
					"sInfo": "Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ dòng được tìm thấy",
					"sInfoEmpty" : "Không tìm thấy",
					"sInfoFiltered": " (trong tổng số _MAX_ dòng)"
				}
			});
		});
	</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\project2\resources\views/templates/master.blade.php ENDPATH**/ ?>