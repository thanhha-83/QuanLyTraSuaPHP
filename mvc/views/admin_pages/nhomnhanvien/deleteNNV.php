<style>
    .checkform {
        display: flex;
        justify-content: center;
        margin-top: 8rem;

    }

    .content {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 20px;
        border-radius: 8px;
        /* display: ; */
    }

    .title {
        padding-bottom: 1.5rem;
        text-align: center;
    }

    .form-group {
        display: flex;
        margin-bottom: 0.2rem;
        /* justify-content: center; */
        text-align: center;
        margin-top: 1.5rem;
    }

    .form-group1 {
        display: flex;
        /* justify-content: ; */
        align-items: baseline;
        margin-bottom: 0.2rem;
    }

    h3 {
        text-align: center;
    }

    .comeback {
        border: none;
        outline: none;
        background-color: #eaecf4;
        border-radius: 6px;
        padding: 5px;

    }

    .comeback>a {
        text-decoration: none;
    }
</style>
<div class="checkform">
    <div class="content">
        <h3 style="margin-left: 15px;">Bạn chắc chắn muốn xóa nhóm nhân viên này ?</h3>
        <form action="NhomNhanVien/Confirm/<?php echo $data['nnv']['IDNhom'] ?>" method="post">
            <div class="form-horizontal" style="display:flex; margin-left: 15px; justify-content: center;">
                <div style="width: 350px;">
                    <label class="form-control">Mã nhóm nhân viên: <?php echo $data['nnv']['IDNhom'] ?> </label>
                    <label class="form-control">Tên nhóm nhân viên: <?php echo $data['nnv']['TenNhom'] ?> </label>
                </div>
            </div>
            <div class="form-group" style="align-items: baseline;">
                <div style="margin-top: 10px;" class="col-md-offset-2 col-md-6">
                    <input type="submit" value="Xóa" class="btn btn-primary" />
                </div>
                <div class="col-md-offset-2 col-md-6 comback_div">
                    <a class="comeback" href="javascript:window.history.back(-1);">Quay lại</a>
                </div>
            </div>

        </form>
    </div>
</div>