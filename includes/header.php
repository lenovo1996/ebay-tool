<div class="col-md-2">
    <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body text-center" style="height: 92px">
            <a class="list-group-item" href="/views/index.php">Danh Sách Account</a>
        </div>
    </div>
</div>
<div class="col-md-2">
    <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body text-center" style="height: 92px">
            <a class="list-group-item" href="/views/return-list.php">Danh Sách Return</a>
        </div>
    </div>
</div>
<div class="col-md-2">
    <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body text-center" style="height: 92px">
            <a class="list-group-item" href="/views/orders-list.php">Danh Sách Orders</a>
        </div>
    </div>
</div>
<div class="col-md-2">
    <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body text-center" style="height: 92px">
            <a class="list-group-item" href="/views/messages-list.php">Danh Sách Messages</a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body text-center" style="height: 92px">
            <div class="list-group-item">
				<?php
					if (isset($_SESSION['token'])) {
						echo 'Account: <span class="text-danger" title="' . $_SESSION['token'] . '">' . $_SESSION['title'] . '</span>';
					} else {
						echo 'Chưa chọn account';
					}

				?>
                <br/> <a href="/api/logout.php">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>
