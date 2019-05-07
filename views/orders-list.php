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

    <style>
        a {
            cursor: pointer;
        }
    </style>
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
                    <button class="btn btn sm btn-primary get-orders" data-loading-text="Đang lấy orders ...">Lấy
                        orders
                    </button>
                </div>
                <div class="clearfix"></div>
                <div class="orders-list">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cancel-order" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cancel order</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Reason:</label>
                        <select class="form-control" id="reason">
                            <option value="OUT_OF_STOCK_OR_CANNOT_FULFILL">I'm out of stock or the item is damaged
                            </option>
                            <option value="BUYER_ASKED_CANCEL">Buyer asked to cancel the order</option>
                            <option value="ADDRESS_ISSUES">Something was wrong with the buyer's shipping address
                            </option>
                        </select>
                    </div>
                    <input type="hidden" name="order_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save" data-loading-text="Loading...">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="add-tracking" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Add tracking number</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tracking number:</label>
                        <input type="text" class="form-control" id="tracking_number">
                    </div>
                    <div class="form-group">
                        <label>Shipping Carrier Used (UPS, FedEx, PBI):</label>
                        <input type="text" class="form-control" id="shipping_carrier_used">
                    </div>
                    <input type="hidden" name="order_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save-tracking" data-loading-text="Loading...">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="add-note-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Add note</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Note content:</label>
                        <textarea class="form-control" id="note_content"></textarea>
                    </div>
                    <input type="hidden" name="order_id">
                    <input type="hidden" name="item_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save-note" data-loading-text="Loading...">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


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

					$('.orders-list').html('');

					$.each(res, function (key, item) {
						var shipped = '';
						var markasshipped = '<li><a class="mark-as-shipped" data-status="1">Mark as shipped</a></li>';
						var paid = 'N/A';

						if (item.PaidTime) {
							paid = item.PaidTime.substr(0, 10);
						}

						if (item.ShippedTime) {
							shipped = 'Shipped ' + item.ShippedTime.substr(0, 10) + ' <br />';
							markasshipped = '<li><a class="mark-not-shipped" data-status="0">Mark not shipped</a></li>';
						}

						var button = `<li><a class="cancel-order">Cancel order</a></li>`;

						if (item.status == 'Cancelled') {
							button = '';
							shipped += item.status + '<br />';
							markasshipped = '';
						}

						var myNote = '';
						if (item.note) {
							myNote = `<div class="alert alert-warning" style=" padding: 5px; margin-bottom: 0px; ">My note: ${item.note}</div>`;
                        }

						var html = `<div class="bs-callout bs-callout-danger rootEl"  data-orderid="${item.id}" data-transactionid="${item.transactionId}" data-itemid="${item.item.id}">
                        <div class="col-md-2">
                            <div class="dropdown">
                                ${shipped}
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    ${markasshipped}
                                    ${button}
                                    <li><a class="view-record">View record</a></li>
                                    <li><a class="add-note">Add/Update Note</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div style="float: left; width: 15%">
                                <a href="https://www.ebay.com/itm/292799546666">
                                    <img src="https://thumbs4.ebaystatic.com/pict/${item.item.id}8080_1.jpg"
                                         style="width: 90%">
                                </a>
                            </div>
                            <div style="float: left; width: 80%">
                                <p>
                                    <a href="https://www.ebay.com/itm/${item.item.id}">${item.item.title} (${item.item.id}) - <span class="badge badge-dark">${item.item.conditionDisplayName}</span>
                                    </a>
                                </p>
                                <p>Buyer: ${item.buyerName} - <a href="https://www.ebay.com/usr/${item.BuyerUserID}">${item.BuyerUserID}</a></p>
                                <p>Tracking: <span class="text-warning">${item.TrackingNumber}</span> (<a class="edit-tracking">edit</a>) - sale record: ${item.saleRecord}</p>
                                ${myNote}
                            </div>
                        </div>
                        <div class="col-md-1">
                            Qty: ${item.qty}
                        </div>
                        <div class="col-md-2">
                            Total: ${item.total}
                        </div>

                        <div class="col-md-2">
                            Date Paid: ${paid}
                        </div>
                        <div class="clearfix"></div>
                    </div>`;

						$('.orders-list').append(html);
					});


					$('.get-orders').button('reset');
				}
			});
		});


		$(document).on('click', '.mark-as-shipped, .mark-not-shipped', function () {

			var rootEl = $(this).closest('.rootEl');

			var c = confirm('Bạn chắc chắn thực hiện hành động này chứ?');

			if (c) {
				var status = $(this).data('status');
				var orderId = rootEl.data('orderid');
				var transactionId = rootEl.data('transactionid');
				$.ajax({
					url: '/api/order/mark-as-shipped.php',
					data: {
						status: status,
						order_id: orderId,
						transaction_id: transactionId
					},
					success: function (res) {
						console.log(res.Ack);
						if (res.Ack == 'Success') {
							alert("thành công!");
						}
					}
				})

			}
		});

		$(document).on('click', '.cancel-order', function () {
			var rootEl = $(this).closest('.rootEl');
			var orderId = rootEl.data('orderid');
			$('#cancel-order').modal('show');
			$('#cancel-order').find('[name="order_id"]').val(orderId);
		});

		$(document).on('click', '.cancel-order-confirm', function () {
			$(this).button('loading');
			var self = this;
			var orderId = $('#cancel-order').find('[name="order_id"]').val();
			var reason = $('#cancel-order').find('#reason').val();

			$.ajax({
				url: '/api/order/cancel-order.php',
				type: 'post',
				data: {
					orderId: orderId,
					cancelReason: reason
				},
				success: function (res) {
					alert('Đã gửi lệnh cancel order');
					$('.get-orders').click();
					$(self).button('reset');
				}
			});
		});

		$(document).on('click', '.edit-tracking', function () {
			var rootEl = $(this).closest('.rootEl');
			var orderId = rootEl.data('orderid');
			$('#add-tracking').modal('show');
			$('#add-tracking').find('[name="order_id"]').val(orderId);
		});


		$(document).on('click', '.save-tracking', function () {
			$(this).button('loading');
			var self = this;
			var orderId = $('#add-tracking').find('[name="order_id"]').val();
			var tracking_number = $('#add-tracking').find('#tracking_number').val();
			var shipping_carrier_used = $('#add-tracking').find('#shipping_carrier_used').val();

			$.ajax({
				url: '/api/order/add-tracking.php',
				type: 'post',
				data: {
					orderId: orderId,
					trackingNumber: tracking_number,
					ShippingCarrierUsed: shipping_carrier_used
				},
				success: function (res) {
					$(self).button('reset');
					if (res.Ack == 'Success') {
						alert('Cập nhật tracking number thành công');
						$('#add-tracking').modal('hide');
						$('#add-tracking').find('#tracking_number').val('');
						$('#add-tracking').find('#shipping_carrier_used').val('');
					} else {
						alert(res.Errors[0].ShortMessage);
					}
					$('.get-orders').click();
				}
			});
		});

		$(document).on('click', '.add-note', function () {
			var rootEl = $(this).closest('.rootEl');
			var orderId = rootEl.data('orderid');
			var itemId = rootEl.data('itemid');
			$('#add-note-modal').modal('show');
			$('#add-note-modal').find('[name="order_id"]').val(orderId);
			$('#add-note-modal').find('[name="item_id"]').val(itemId);
		});

		$(document).on('click', '.save-note', function () {
			$(this).button('loading');
			var self = this;
			var orderId = $('#add-note-modal').find('[name="order_id"]').val();
			var itemId = $('#add-note-modal').find('[name="item_id"]').val();
			var note_content = $('#add-note-modal').find('#note_content').val();

			$.ajax({
				url: '/api/order/add-note.php',
				type: 'post',
				data: {
					orderId: orderId,
					itemId: itemId,
					noteContent: note_content
				},
				success: function (res) {
					$(self).button('reset');
					if (res.Ack == 'Success') {
						alert('Cập nhật note number thành công');
						$('#add-note-modal').modal('hide');
						$('#add-note-modal').find('#note_content').val('');
					} else {
						alert(res.Errors[0].ShortMessage);
					}
					$('.get-orders').click();
				}
			});
		});

		$(document).on('click', '.view-record', function () {
			var rootEl = $(this).closest('.rootEl');
			var orderId = rootEl.data('orderid');

			$.ajax({
                url: '/api/order/order-detail.php',
                data: {
					order_id: orderId
                },
                success: function (res) {
                    $('#detail').html(res);
                    $('#order-detail-modal').modal('show');
				}
            })

		});

    </script>