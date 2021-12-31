<style>
    input#ngaySinh {
        background-color: white;
    }

    input,
    checkbox,
    select {
        margin-bottom: 10px;
    }

    label {
        font-weight: bolder;
    }

    .checkform {
        display: flex;
        justify-content: center;
        margin-top: 8rem;

    }

    .content {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 20px;
        border-radius: 8px;
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

    .shipper {
        border: none;
        outline: none;
        background-color: #eaecf4;
        border-radius: 6px;
        padding: 5px;
    }

    h3 {
        text-align: center;
    }
</style>
<div class="checkform">
    <div class="content">
        <h3>ĐỔI MẬT KHẨU</h3>
        <!-- <div class="mt-3"> -->
        <form action="canhan/saveMK" method="POST">
            <div class="form-horizontal">
                <div class="form-group1">
                    <label for="oldPass" class="control-label col-md-4"><b>Mật khẩu cũ</b></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control text-box single-line" id="oldPass" name="oldPass" value="<?php if (isset($_SESSION['dmk']['oldPass'])) echo $_SESSION['dmk']['oldPass'];
                                                                                                            unset($_SESSION['dmk']['oldPass']); ?>">
                        <span class="text-danger"><?php if (isset($_SESSION['error']['oldPass'])) echo $_SESSION['error']['oldPass'];
                                                    unset($_SESSION['error']['oldPass']); ?></span>
                    </div>
                </div>

                <div class="form-group1">
                    <label for="newPass" class="control-label col-md-4"><b>Mật khẩu mới</b></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control text-box single-line" id="newPass" name="newPass" value="<?php if (isset($_SESSION['dmk']['newPass'])) echo $_SESSION['dmk']['newPass'];
                                                                                                            unset($_SESSION['dmk']['newPass']); ?>">
                        <i style="font-size: small;">(*)Mật khẩu phải chứa ít nhất 8 ký tự, ít nhất 1 số, ít nhất 1 chữ cái viết hoa và ít nhất 1 chữ cái thường</i>
                        <br>
                        <span class="text-danger"><?php if (isset($_SESSION['error']['newPass'])) echo $_SESSION['error']['newPass'];
                                                    unset($_SESSION['error']['newPass']); ?></span>
                    </div>
                </div>
                <div class="form-group1">
                    <label for="againPass" class="control-label col-md-4"><b>Nhập lại mật khẩu</b></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control text-box single-line" id="againPass" name="againPass" value="<?php if (isset($_SESSION['dmk']['againPass'])) echo $_SESSION['dmk']['againPass'];
                                                                                                                unset($_SESSION['dmk']['againPass']); ?>">
                        <span class="text-danger"><?php if (isset($_SESSION['error']['againPass'])) echo $_SESSION['error']['againPass'];
                                                    unset($_SESSION['error']['againPass']); ?></span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
        <!-- </div> -->
    </div>
</div>