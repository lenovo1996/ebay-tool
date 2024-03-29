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

        .read-this {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
        }

        .read {
            color: gray;
            font-size: 12px;
        }

        .not-read {
            color: black;
            font-size: 14px;
            font-weight: bold;
        }

        <?php
          if (isset($_GET['id'])) {
              echo '.id-' . $_GET['id'] . ' { background-color: #c5c5c5;color: gray;font-size: 12px; }';
          }
          ?>
    </style>
</head>
<body style="padding-top:60px;">
<div class="container" style="width: 80%">

	<?php include '../includes/header.php' ?>

    <div class="col-md-5">

        <div class="panel panel-primary">
            <div class="panel-heading">Danh Sách Messages</div>
            <div class="panel-body">
                <div class="form-group col-md-4">
                    <label>Từ ngày:</label>
                    <input class="date form-control start">
                </div>
                <div class="form-group col-md-4">
                    <label>Đến ngày:</label>
                    <input class="date form-control end">
                </div>
                <div class="form-group text-center col-md-1">
                    <label>Click</label>
                    <button class="btn btn-sm btn-primary get-messages" data-loading-text="Đang lấy messages ...">Lấy
                        Messages
                    </button>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-4">
                    <label>Sender Ebay:</label>
                    <input class="ebay" name="sender"
                           type="radio" <?php echo isset($_GET['ebay']) && $_GET['ebay'] == 'true' ? 'checked' : '' ?>>
                </div>
                <div class="form-group col-md-4">
                    <label>Sender buyer:</label>
                    <input class="buyer" name="sender"
                           type="radio" <?php echo isset($_GET['buyer']) && $_GET['buyer'] == 'true' ? 'checked' : '' ?>>
                </div>

                <div class="form-group col-md-4">
                    <label>Chưa đọc</label>
                    <input class="not-read"
                           type="checkbox" <?php echo isset($_GET['notRead']) && $_GET['notRead'] == 'true' ? 'checked' : '' ?>>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="bs-callout bs-callout-danger rootEl">
                        <div class="col-md-4">
                            <b>Sender</b>
                        </div>
                        <div class="col-md-4">
                            <b>Subject</b>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-sm btn-primary mark-as-read">Mark as read all</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="messages-list"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="panel panel-primary">
            <div class="panel-heading msg-title"></div>
            <div class="panel-body" id="message">
                <div class="reply-form" style="display: none">
                    <div class="clearfix"></div>
                    <input type="hidden" name="sender">
                    <input type="hidden" name="externalMessageID">
                    <div class="form-group">
                        <label>Body:</label>
                        <textarea class="form-control" name="body"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary send-msg">Trả lời</button>
                        </button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div id="google_translate_element"></div>
                <div class="clearfix"></div>
                <div class="msg-body"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.vi.min.js"></script>
<script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>
<script>
  $('.date').datepicker({
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    autoclose: true,
  });


  $(document).on('click', '.get-messages', function () {
    $(this).button('loading');
    $('.messages-list').html('loading...');
    $.ajax({
      url: '/api/message/messages.php',
      data: {
        start: $('.start').val(),
        end: $('.end').val(),
        ebay: $('.ebay').prop('checked'),
        buyer: $('.buyer').prop('checked'),
        notRead: $('.not-read').prop('checked'),
      },
      success: function (json) {
        $('.get-messages').button('reset');

        $('.messages-list').html('');
        var ebay = $('.ebay').prop('checked');
        var buyer = $('.buyer').prop('checked');
        var notRead = $('.not-read').prop('checked');

        var str = 'ebay=' + ebay + '&buyer=' + buyer + '&notRead=' + notRead;

        $.each(json, function (key, item) {
          var title = '';
          if (item.read) {
            title = '<a class="read-this read" href="messages-list.php?' + str + '&id=' + item.id + '" data-msgid="' + item.id + '">' + item.subject + '</a>';
          } else {
            title = '<a class="read-this not-read" href="messages-list.php?' + str + '&id=' + item.id + '" data-msgid="' + item.id + '">' + item.subject + '</a>';
          }

          var html = `<div class="bs-callout bs-callout-danger rootEl id-${item.id}">
                        <div class="col-md-4">
                            ${item.sender}
                        </div>
                        <div class="col-md-8">
                            ${title}<br />
                            ${item.receiveDate.substr(0, 10)}
                        </div>
                        <div class="clearfix"></div>
                    </div>`;

          $('.messages-list').append(html);
        });

      }
    });
  });

  $(document).on('click', '.mark-as-read', function () {
    var list = $('.not-read');
    $.each(list, function () {
      var msgId = $(this).data('msgid');
      $(this).removeClass('not-read');
      $(this).addClass('read');
      $.ajax({
        url: '/api/message/message-content.php',
        data: {
          id: msgId
        }
      });
    });
  });


  function getMsg(msgId) {
    $('.msg-body').html('Loading...');
    $('.msg-title').html('Loading...');
    $('.reply-form').hide();
    $.ajax({
      url: '/api/message/message-content.php',
      data: {
        id: msgId
      },
      success: function (res) {
        $('.msg-title').html(res.subject);
        $('.msg-body').html(res.text);
        var r = $('#message');
        r.find('[name="externalMessageID"]').val(res.externalMessageID);
        r.find('[name="sender"]').val(res.sender);
        $('.reply-form').show();
      }
    });
  }

  <?php
  if (isset($_GET['id'])) {
	  echo '$(".get-messages").click();getMsg(' . $_GET['id'] . ');';
  }
  ?>

  $(document).on('click', '.send-msg', function () {
    var r = $('#message');
    var data = {
      body: r.find('[name="body"]').val(),
      media_name: r.find('[name="media_name"]').val(),
      media_url: r.find('[name="media_url"]').val(),
      externalMessageID: r.find('[name="externalMessageID"]').val(),
      sender: r.find('[name="sender"]').val(),
    };

    $.ajax({
      url: '/api/message/send-message.php',
      type: 'post',
      data: data,
      success: function (res) {
        if (res.Ack == 'Failure') {
          alert('Lỗi');
          return;
        }

        r.find('[name="body"]').val('');
        r.find('[name="media_name"]').val('');
        r.find('[name="media_url"]').val('');
        alert('Gửi reply thành công!');
      }
    });
  });
</script>