<?php
	session_start();
	if (!$_SESSION['userDir']) {
		header('location: /views/login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://getbootstrap.com/docs/3.3/assets/css/docs.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
</head>
<body style="padding-top:60px;">
<div class="container" style="width: 70%">

	<?php include '../includes/header.php' ?>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Danh Sách Orders</div>
            <div class="panel-body">
                <div class="form-group col-md-3">
                    <label>Lấy order từ ngày:</label>
                    <input class="date form-control start">
                </div>
                <div class="form-group col-md-3">
                    <label>Đến ngày:</label>
                    <input class="date form-control end">
                </div>
                <div class="form-group text-center col-md-1">
                    <label>Click</label>
                    <button class="btn btn sm btn-primary get-orders" data-loading-text="Đang lấy orders ...">Lấy orders</button>
                </div>
                <div class="clearfix"></div>
                <div class="orders-list"></div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Thêm account</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tiêu đề:</label>
                    <input type="text" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label>Access token:</label>
                    <textarea class="form-control" id="token"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.vi.min.js"></script>

<script>
    $('.date').datepicker({
		format: 'yyyy-mm-dd',
		todayHighlight: true,
		autoclose: true
    });

    $('.get-orders').click(function () {
        $(this).button('loading');

        $.ajax({
            url: '/api/order/order-list.php',
            data: {
                start: $('.start').val(),
                end: $('.end').val()
            },
            success: function (res) {
                console.log(res);
                $('.get-orders').button('reset');
            }
        });
    });

</script>