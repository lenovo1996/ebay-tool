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


                    <button class="btn btn-sm btn-danger" id="export">Export Waiting Shipment Order
                    </button>
                </div>
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

<script>
    $(document).ready(function () {
        $.ajax({
            url: '/api/list-token.php',
            success: function (res) {

                $.each(res.data, function (key, value) {
                    var html = `<div class="col-md-3 text-center">
                                <div class="bs-callout bs-callout-danger token-select" data-id="${value.id}" style="cursor: pointer;">
                                    <h4>${value.title}</h4>
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

    $(document).on('click', '.token-select', function () {
        var id = $(this).data('id');
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
    $(document).on('click', '#export', async function () {
        tokenList = [];

        var res = await $.get('/api/list-token.php');
        for (const value of res.data) {
            tokenList.push(value.id);
        }
        exportOrder(0);
    });

    async function exportOrder(i) {
        if (i == tokenList.length) {
            alert('Xong!');
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

        console.log(r2);

        for (const order in r2.list) {
            var r3 = await $.get('http://ebay-tool.tk/api/order/order-detail.php?json=1&order_id=' + r2.list[order].id);
            console.log(r3);
        }

        i++;
        await exportOrder(i);
    }

    async function getOrderInfo() {

    }

</script>