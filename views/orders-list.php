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
<div class="container" style="width: 70%">

	<?php include '../includes/header.php' ?>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Danh Sách Orders</div>
            <div class="panel-body">
                <div class="form-group col-md-2">
                    <label>Lấy order từ ngày:</label>
                    <input class="date form-control start">
                </div>
                <div class="form-group col-md-2">
                    <label>Đến ngày:</label>
                    <input class="date form-control end">
                </div>
                <div class="form-group col-md-2">
                    <label>Buyer User Name:</label>
                    <input class="form-control buyer_user_name" placeholder="Nhập Buyer user name để lọc theo order">
                </div>
                <div class="form-group col-md-2">
                    <label style="white-space: nowrap">Waiting shipment:</label>
                    <p><input class="waiting_shipment" type="checkbox" checked></p>
                </div>
                <div class="form-group col-md-2">
                    <label style="white-space: nowrap">Chưa có tracking:</label>
                    <p><input class="blank_tracking" type="checkbox"></p>
                </div>
                <div class="form-group text-center col-md-1">
                    <label>Click</label>
                    <button class="btn btn-sm btn-primary get-orders" data-loading-text="Đang lấy orders ..."
                            data-page="1">Lấy
                        orders
                    </button>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 option" style="display: none">
                    <button class="btn btn-sm change-multi-quantity">Đổi quantity hàng loạt</button>
                    <button class="btn btn-sm btn-danger start-change-quantity" style="display: none">Bắt đầu đổi quantity
                    </button>
                    <button class="btn btn-sm change-multi-price">Đổi Giá hàng loạt</button>
                    <button class="btn btn-sm btn-danger start-change-price" style="display: none">Bắt đầu đổi giá</button>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="bs-callout bs-callout-danger rootEl">
                        <div class="col-md-2">
                            <b>Actions</b>
                        </div>
                        <div class="col-md-5">
                            <b>Purchase detail</b>
                        </div>
                        <div class="col-md-1">
                            <b>Quantity</b>
                        </div>

                        <div class="col-md-2">
                            <b>Total</b>
                        </div>
                        <div class="col-md-2">
                            <b>Date paid</b>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="orders-list"></div>
                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination">

                    </ul>
                </nav>
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
                    <button type="button" class="btn btn-primary save" data-loading-text="Loading...">Save changes
                    </button>
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
                    <button type="button" class="btn btn-primary save-tracking" data-loading-text="Loading...">Save
                        changes
                    </button>
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
                    <input type="hidden" name="sku">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save-note" data-loading-text="Loading...">Save
                        changes
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade" id="add-Quantity-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Add/Update Quantity</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Quantity number:</label>
                        <input class="form-control" id="Quantity_num">
                    </div>
                    <input type="hidden" name="item_id">
                    <input type="hidden" name="sku">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save-Quantity" data-loading-text="Loading...">Save
                        changes
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade" id="add-price-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Add/Update price</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>price number:</label>
                        <input class="form-control" id="price">
                    </div>
                    <input type="hidden" name="item_id">
                    <input type="hidden" name="sku">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save-price" data-loading-text="Loading...">Save
                        changes
                    </button>
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
			autoclose: true,
		});

		$(document).on('click', '.get-orders', function () {
			$(this).button('loading');

			var page = $(this).data('page');

			$('.orders-list').html('Loading...');

			$.ajax({
				url: '/api/order/order-list.php',
				data: {
					start: $('.start').val(),
					end: $('.end').val(),
					buyerUserName: $('.buyer_user_name').val(),
					waitingShipment: $('.waiting_shipment').prop('checked'),
					blankTracking: $('.blank_tracking').prop('checked'),
					page: page,
				},
				success: function (json) {
					$('.option').show();

					var res = json.list;

					var pagination = json.page;
					$('.pagination').html('');

					if (pagination > 1) {
						for (var m = 1; m <= pagination; m++) {
							var className = '';
							if (m == json.current) {
								className = 'active';
							}
							$('.pagination').append('<li><a class="get-orders ' + className + '" data-page="' + m + '">' + m + '</a></li>');
						}
					}

					$('.orders-list').html('');

					var keys = Object.keys(res);

					keys.sort(function (a, b) {
						return b - a;
					});

					for (var i = 0; i < keys.length; i++) {

						var item = res[keys[i]];

						var shipped = 'Print invoice shipping<br />';
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
							shipped = item.status + '<br />';
							markasshipped = '';
						}

						var myNote = '';
						if (item.note) {
							myNote = `<div class="alert alert-warning" style=" padding: 5px; margin-bottom: 0px; ">My note: ${item.note}</div>`;
						}

						var sku = '';
						if (item.item.sku) {
							sku = item.item.sku;
						}

						var html = `<div class="bs-callout bs-callout-danger rootEl"  data-orderid="${item.id}" data-transactionid="${item.transactionId}" data-itemid="${item.item.id}" data-sku="${sku}">
                        <div class="col-md-2">
                            <div class="dropdown">
                                ${shipped} (<a class="view-record">${item.saleRecord}</a>)
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    ${markasshipped}
                                    ${button}
                                    <li><a class="view-record">View record</a></li>
                                    <li><a class="add-note">Add/Update Note</a></li>
                                    <li><a class="add-Quantity">Update Quantity</a></li>
                                    <li><a class="add-price">Update price</a></li>
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
                                    <a href="https://www.ebay.com/itm/${item.item.id}" target="_blank">${item.item.title}</a> (${item.item.id}) -
                                     <span class="badge badge-dark Quantity" data-itemid="${item.item.id}" data-variation='${JSON.stringify(item.item.variation)}'><i class="fa fa-circle-o-notch fa-spin fa-fw margin-bottom"></i></span>

                                </p>
                                <p>Buyer: ${item.buyerName} - <a href="https://www.ebay.com/usr/${item.BuyerUserID}">${item.BuyerUserID}</a></p>
                                <p>Tracking: <span class="text-warning">${item.TrackingNumber}</span> (<a class="edit-tracking">edit</a>)</p>
                                <p class="multi-quantity-edit" style="display:none">New quantity: <input class="form-control input-sm quantity-value" style="width: 60px;height: 25px;display: inline;"></p>
                                <p class="multi-price-edit" style="display:none">New price: <input class="form-control input-sm price-value" style="width: 60px;height: 25px;display: inline;"></p>
                                ${myNote}
                            </div>
                        </div>
                        <div class="col-md-1">
                            ${item.qty}
                        </div>
                        <div class="col-md-2">
                            ${item.total}
                        </div>

                        <div class="col-md-2">
                            ${paid}
                        </div>
                        <div class="clearfix"></div>
                    </div>`;

						$('.orders-list').append(html);
					}

					setTimeout(function () {
						getQuantity();
					}, 100);
					$('.get-orders').button('reset');
				}
			});
		});

		$('.change-multi-quantity').click(function () {
			$('.start-change-quantity').toggle();
			$('.multi-quantity-edit').toggle();
		});

		$('.change-multi-price').click(function () {
			$('.start-change-price').toggle();
			$('.multi-price-edit').toggle();
		});

		$(document).on('click', '.start-change-quantity', function () {
			var quantityList = $('.quantity-value');
			$.each(quantityList, function (key, value) {
				var rootEl = $(value).closest('.rootEl');
				var itemId = rootEl.data('itemid');
				var sku = rootEl.data('sku');
				var quantity = $(value).val();

				rootEl.find('.multi-quantity-edit').hide();
				$(value).val('');
				if (!quantity) {
					return;
				}
				rootEl.find('.Quantity').html('<i class="fa fa-circle-o-notch fa-spin fa-fw margin-bottom"></i>');

				$.ajax({
					url: '/api/order/add-quantity.php',
					data: {
						itemId: itemId,
						quantity: quantity,
						sku: sku
					},
					success: function (res) {
						if (res.Ack == 'Failure') {
							rootEl.find('.Quantity').html('Lỗi');
							return;
						}
						rootEl.find('.Quantity').html(quantity + ' available');
					}
				});
			});

		});

		$(document).on('click', '.start-change-price', function () {
			var priceList = $('.price-value');
			$.each(priceList, function (key, value) {
				var rootEl = $(value).closest('.rootEl');
				var itemId = rootEl.data('itemid');
				var sku = rootEl.data('sku');
				var price = $(value).val();

				rootEl.find('.multi-price-edit').hide();
				$(value).val('');
				if (!price) {
					return;
				}

				rootEl.find('.Quantity').html('<i class="fa fa-circle-o-notch fa-spin fa-fw margin-bottom"></i>');

				$.ajax({
					url: '/api/order/change-price.php',
					data: {
						itemId: itemId,
						price: price,
						sku: sku
					},
					success: function (res) {
						if (res.Ack == 'Failure') {
							rootEl.find('.Quantity').html('Lỗi');
							return;
						}
						rootEl.find('.Quantity').html(price + ' USD');
					}
				});
			});

		});

		function getQuantity() {
			var QuantityList = $('.Quantity');

			$.each(QuantityList, function (key, value) {
				var rootEl = $(value).closest('.rootEl');
				var itemId = $(value).data('itemid');
				var sku = rootEl.data('sku');
				$.ajax({
					url: '/api/order/get-quantity.php',
					data: {
						itemId: itemId,
						sku: sku
					},
					success: function (res) {
						$(value).text(res.quantity + ' available');
					}
				});
			});
		}


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
					$('.get-orders')[0].click();
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
					$('.get-orders')[0].click();
				}
			});
		});

		$(document).on('click', '.add-note', function () {
			var rootEl = $(this).closest('.rootEl');
			var orderId = rootEl.data('orderid');
			var itemId = rootEl.data('itemid');
			var sku = rootEl.data('sku');
			$('#add-note-modal').modal('show');
			$('#add-note-modal').find('[name="order_id"]').val(orderId);
			$('#add-note-modal').find('[name="sku"]').val(sku);
			$('#add-note-modal').find('[name="item_id"]').val(itemId);
		});

		$(document).on('click', '.save-note', function () {
			$(this).button('loading');
			var self = this;
			var orderId = $('#add-note-modal').find('[name="order_id"]').val();
			var sku = $('#add-note-modal').find('[name="sku"]').val();
			var itemId = $('#add-note-modal').find('[name="item_id"]').val();
			var note_content = $('#add-note-modal').find('#note_content').val();

			$.ajax({
				url: '/api/order/add-note.php',
				type: 'post',
				data: {
					orderId: orderId,
					itemId: itemId,
					sku: sku,
					noteContent: note_content
				},
				success: function (res) {
					$(self).button('reset');
					if (res.Ack == 'Success') {
						alert('Cập nhật note thành công');
						$('#add-note-modal').modal('hide');
						$('#add-note-modal').find('#note_content').val('');
					} else {
						alert(res.Errors[0].ShortMessage);
					}
					$('.get-orders')[0].click();
				}
			});
		});

		$(document).on('click', '.add-Quantity', function () {
			var rootEl = $(this).closest('.rootEl');
			var itemId = rootEl.data('itemid');
			var sku = rootEl.data('sku');
			$('#add-Quantity-modal').modal('show');
			$('#add-Quantity-modal').find('[name="item_id"]').val(itemId);
			$('#add-Quantity-modal').find('[name="sku"]').val(sku);
		});

		$(document).on('click', '.save-Quantity', function () {
			$(this).button('loading');
			var self = this;
			var itemId = $('#add-Quantity-modal').find('[name="item_id"]').val();
			var sku = $('#add-Quantity-modal').find('[name="sku"]').val();
			var Quantity_num = $('#add-Quantity-modal').find('#Quantity_num').val();

			$.ajax({
				url: '/api/order/add-quantity.php',
				data: {
					itemId: itemId,
					quantity: Quantity_num,
					sku: sku
				},
				success: function (res) {
					if (res.Ack == 'Failure') {

						alert('Lỗi');
						return;
					}
					$(self).button('reset');
					alert('Cập nhật Quantity number thành công');
					$('#add-Quantity-modal').modal('hide');
					$('[data-itemid="' + itemId + '"]').find('.Quantity').text(Quantity_num + ' available');
				}
			});
		});

		$(document).on('click', '.add-price', function () {
			var rootEl = $(this).closest('.rootEl');
			var itemId = rootEl.data('itemid');
			var sku = rootEl.data('sku');
			$('#add-price-modal').modal('show');
			$('#add-price-modal').find('[name="item_id"]').val(itemId);
			$('#add-price-modal').find('[name="sku"]').val(sku);
		});


		$(document).on('click', '.save-price', function () {
			$(this).button('loading');
			var self = this;
			var itemId = $('#add-price-modal').find('[name="item_id"]').val();
			var sku = $('#add-price-modal').find('[name="sku"]').val();
			var price = $('#add-price-modal').find('#price').val();

			$.ajax({
				url: '/api/order/change-price.php',
				data: {
					itemId: itemId,
					price: price,
					sku: sku
				},
				success: function (res) {
					if (res.Ack == 'Failure') {
						alert('Lỗi');
						return;
					}
					$(self).button('reset');
					alert('Cập nhật giá thành công');
					$('#add-price-modal').modal('hide');
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