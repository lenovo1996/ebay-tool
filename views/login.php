<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="padding-top:60px;">
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" id="username" class="form-control" value="" placeholder="username">
                </div>
                <div class="form-group">
                    <input type="text" id="password" class="form-control" value="" placeholder="password">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary" id="login" data-loading-text="Đang đăng nhập ...">Đăng nhập</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	$('#login').click(function () {
		$(this).button('loading');

		$.ajax({
			url: '/api/login.php',
			type: 'post',
			data: {
				username: $('#username').val(),
				password: $('#password').val(),
			},
			success: function (res) {
				$('#login').button('reset');
				alert(res.msg);
				if (res.result) {
					location.href = '/views/index.php';
				}
			}
		});

	});
</script>