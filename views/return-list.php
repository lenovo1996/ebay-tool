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
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <style>
        a {
            cursor: pointer;
        }
    </style>
</head>
<body style="padding-top:60px;">
<div class="container" style="width: 80%">

    <?php include '../includes/header.php' ?>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Danh Sách Return</div>
            <div class="panel-body">
                <div class="form-group col-md-2">
                    <label>Lấy order từ ngày:</label>
                    <input class="date form-control start">
                </div>
                <div class="form-group col-md-2">
                    <label>Đến ngày:</label>
                    <input class="date form-control end">
                </div>
                <div class="form-group text-center col-md-1">
                    <label>Click</label>
                    <button class="btn btn-sm btn-primary get-orders" data-loading-text="Đang lấy orders ..."
                            data-page="1">Lấy
                        orders
                    </button>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="bs-callout bs-callout-danger rootEl">
                        <div class="col-md-2">
                            <b>Actions</b>
                        </div>
                        <div class="col-md-5">
                            <b>Detail</b>
                        </div>
                        <div class="col-md-1">
                            <b>Quantity</b>
                        </div>

                        <div class="col-md-2">
                            <b>Status</b>
                        </div>
                        <div class="col-md-2">
                            <b>Type</b>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="orders-list"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="order-detail-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Order detail</h4>
                </div>
                <div class="modal-body" id="detail">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
            autoclose: true,
        });

        $(document).on('click', '.get-orders', function () {
            $(this).button('loading');

            $('.orders-list').html('Loading...');

            $.ajax({
                url: '/api/order/return-order.php',
                data: {
                    start: $('.start').val(),
                    end: $('.end').val()
                },
                success: function (json) {
                    var res = json;

                    $('.orders-list').html('');

                    var keys = Object.keys(res);

                    keys.sort(function (a, b) {
                        return b - a;
                    });

                    for (var i = 0; i < keys.length; i++) {

                        var item = res[keys[i]];

                        var html = `<div class="bs-callout bs-callout-danger rootEl"  data-orderid="${item.id}" data-transactionid="${item.itemTransaction}" data-itemid="${item.itemId}">
                        <div class="col-md-2">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div style="float: left; width: 15%">
                                <a href="https://www.ebay.com/itm/${item.itemId}">
                                    <img src="https://thumbs4.ebaystatic.com/pict/${item.itemId}8080_1.jpg"
                                         style="width: 90%">
                                </a>
                            </div>
                            <div style="float: left; width: 80%">
                                <p>
                                    <a href="https://www.ebay.com/itm/${item.itemId}" target="_blank" class="title"><i class="fa fa-circle-o-notch fa-spin fa-fw margin-bottom"></i></a> (${item.itemId})
                                </p>
                                <p>Buyer: ${item.buyer}</p>
                                <p>Reason: ${item.reason}</p>
                            </div>
                        </div>
                        <div class="col-md-1">
                            ${item.itemQty}
                        </div>
                        <div class="col-md-2">
                            ${item.status}
                        </div>

                        <div class="col-md-2">
                            ${item.type}
                        </div>
                        <div class="clearfix"></div>
                    </div>`;

                        $('.orders-list').append(html);
                    }

                    setTimeout(function () {
                        getTitle();
                    }, 100);
                    $('.get-orders').button('reset');
                }
            });
        });

        function getTitle() {
            var QuantityList = $('.title');

            $.each(QuantityList, function (key, value) {
                var rootEl = $(value).closest('.rootEl');
                var itemId = rootEl.data('itemid');
                $.ajax({
                    url: '/api/order/get-title.php',
                    data: {
                        itemId: itemId
                    },
                    success: function (res) {
                        $(value).text(res.title);
                    }
                });
            });
        }
    </script>