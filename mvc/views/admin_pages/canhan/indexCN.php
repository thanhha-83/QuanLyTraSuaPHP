<?php
if (isset($_SESSION['thongbao'])) {
    echo "<div class='alert alert-success'>";
    echo $_SESSION['thongbao'];
    echo "</div>";
    unset($_SESSION['thongbao']);
}

?>

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

<table class="content" cellpadding="0" cellspacing="0" style="font-size:20px; margin-left: auto; margin-right: auto; margin-top: 80px;">
    <tr>
        <td>
            <table style="margin: 60px;" cellpadding="2" cellspacing="10">
                <tr>
                    <td colspan="3">
                        <h3><b>THÔNG TIN CHI TIẾT</b></h3>
                    </td>
                </tr>
                <tr>
                    <td rowspan="8"><img src="public/upload/nguoidung/<?php echo $data['nv']['hinhAnh'] ?>" width="300" height="300" /></td>
                    <td>Mã nhân viên:</td>
                    <td><?php echo $data['nv']['maNV'] ?></td>
                </tr>
                <tr>
                    <td>Tên nhân viên:</td>
                    <td><?php echo $data['nv']['tenNV'] ?></td>
                </tr>
                <tr>
                    <td>Giới tính:</td>
                    <td>
                        <?php
                        if ($data['nv']['gioiTinh'] == 1)
                            echo "Nam";
                        else
                            echo "Nữ";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh:</td>
                    <td><?php
                        $date = str_replace('-', '/', $data["nv"]["ngaySinh"]);
                        echo date('d/m/Y', strtotime($date));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><?php echo $data['nv']['diaChi'] ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $data['nv']['email'] ?></td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td><?php echo $data['nv']['sdt'] ?></td>
                </tr>
                <tr>
                    <td>Nhóm nhân viên:</td>
                    <td><?php echo $data['nv']['TenNhom'] ?></td>
                </tr>

            </table>
        </td>
        <td>

        </td>
    </tr>
</table>
<p style="margin-top:60px; text-align: center; font-size: 1.6rem;">
    <a style="line-height: 2.2rem;" class="btn btn-primary" href="canhan/edit">Cập nhật</a> |
    <a class="comeback" style="font-size: 1.4rem;" href="homeAdmin/index">Quay lại</a>
</p>