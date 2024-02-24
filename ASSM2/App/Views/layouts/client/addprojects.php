<?php
ob_start();
use App\Core\Sessions;

?>
<div class="container-fluid">
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Thêm dự án</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="product_id" id="" value="">
                        <label for="exampleInputEmail1">Tên dự án</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                            placeholder="Nhập tên dự án" value="">
                    </div>
                    <div class="form-group">
                        <label for="price">Vị trí</label>
                        <input type="text" name="price" class="form-control" id="exampleInputPassword1"
                            placeholder="Nhập vị trí" value="">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Ngày bắt đầu</label>
                        <div class="col-sm-9">
                            <input type="date" name="date_start" id="">
                            <?php if (isset($_SESSION['date_start'])): ?>
                                <p style="color: red;">
                                    <?php echo Sessions::display_session('date_start'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ngày kết thúc</label>
                        <div class="col-sm-9">
                            <input type="date" name="date_end" id="">
                            <?php if (isset($_SESSION['date_end'])): ?>
                                <p style="color: red;">
                                    <?php echo Sessions::display_session('date_end'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
        </form>
    </div>
</div>