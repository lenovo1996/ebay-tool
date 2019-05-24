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
    <style>
        .xoa {
            position: absolute;
            top: 25px;
            color: darkgray;
            right: 25px;
            font-size: 14px;
        }
    </style>
</head>
<body style="padding-top:60px;">
<div class="container" style="width: 70%">

	<?php include '../includes/header.php' ?>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Danh Sách Account</div>
            <div class="panel-body">
                <div class="account-list"></div>
                <div class="clearfix"></div>
                <div class="form-group text-center">
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addAccount">Thêm account
                    </button>
                    <button class="btn btn-sm btn-danger" id="export" data-loading-text="Loading...">Export Waiting
                        Shipment Order
                    </button>
                </div>
            </div>
        </div>
        <div class="form-group" id="progress" style="display: none;">
            <div class="msg"></div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar"
                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                </div>
            </div>
            <div class="msg-error"></div>
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

<script>
  $(document).ready(function () {
    $.ajax({
      url: '/api/list-token.php',
      success: function (res) {

        $.each(res.data, function (key, value) {
          var html = `<div class="col-md-3 text-center">
                                <div class="bs-callout bs-callout-danger" data-id="${value.id}" style="cursor: pointer;">
                                    <span class="pull-right xoa glyphicon glyphicon-remove"></span>
                                    <h4 class="token-select">${value.title}</h4>
                                    <p>${value.atime}</p>
                                </div>
                                </div>`;
          $('.account-list').append(html);
        });
      }
    });
  });


  $('.save').click(function () {
    $.ajax({
      url: '/api/add-token.php',
      type: 'post',
      data: {
        title: $('#title').val(),
        token: $('#token').val(),
      },
      success: function (res) {
        alert(res.msg);
        $('#addAccount').modal('hide');
        location.reload();
      }
    });
  });

  $(document).on('click', '.xoa', function () {
    var self = $(this);
    var id = self.closest('.bs-callout').data('id');
    $.ajax({
      url: '/api/remove-token.php',
      type: 'post',
      data: {
        id: id,
      },
      success: function (res) {
        alert('Xóa thành công');
        self.closest('.col-md-3').remove();
      }
    });
  });

  $(document).on('click', '.token-select', function () {
    var id = $(this).closest('.bs-callout').data('id');
    $.ajax({
      url: '/api/select-token.php',
      type: 'post',
      data: {
        id: id
      },
      success: function () {
        location.href = '/views/orders-list.php';
      }
    });
  });


  var tokenList = [];
  var data = '';
  $(document).on('click', '#export', async function () {
    tokenList = [];
    data = '';
    var res = await $.get('/api/list-token.php');
    for (const value of res.data) {
      tokenList.push(value.id);
    }

    $('#progress').show();
    exportOrder(0);
  });

  async function exportOrder(i) {
    try {
      $('.msg').text('Đang xử lý ' + (i + 1) + '/' + tokenList.length + ' Acc...');
      var percent = (i + 1) / tokenList.length * 100;
      $('.progress-bar').css('width', percent + '%');

      if (i == tokenList.length) {
        $('.progress-bar').removeClass('progress-bar-striped active');
        $('.progress-bar').addClass('progress-bar-success');
        $('#progress').hide();

        if (!data) {
          alert('Không có order nào');
          return;
        }

        console.log(data);
        download('data.txt', data);
        return;
      }
      var idToken = tokenList[i];
      var r = await $.post('/api/select-token.php', {id: idToken});

      var r2 = await $.ajax({
        url: '/api/order/order-list.php',
        data: {
          waitingShipment: true
        }
      });

      for (const order in r2.list) {
        var r3 = await $.get('/api/order/order-detail.php?json=1&order_id=' + r2.list[order].id + '&json=1');
        data += r3.seller + '\t' + r3.paidDate + '\t' + r3.saleRecord + '\t' + r3.total + '\t' + r3.qty + '\t' + r3.Variations + '\t' + r3.link + '\t' + r3.shippingDetail + '\t' + r3.buyerUserName + '\t' + r3.buyerEmail + '\n';
      }

    } catch (e) {
      var name = $('[data-id="' + tokenList[i] + '"]').find('.token-select').text();
      $('.msg-error').append('<p>' + name + ' có lỗi, vui lòng kiểm tra</p>');
    }

    i++;
    await exportOrder(i);
  }

  function download(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
  }

</script>