<?php if (@$user_profile) {
    if ($act) {


        if ($conhang) {
            if ($thanhcong) {
                $arr = array('err' => 0, 'msg' => 'Mua thành công. Xem thông tin tài khoản trong Lịch sử giao dịch.');

            } else {
                $arr = array('err' => 1, 'msg' => 'Tiền trong tài khoản không đủ. Vui lòng nạp thêm.');

            }
        } else {
            $arr = array('err' => 1, 'msg' => 'Tài khoản này không có hoặc đã bị xóa.');

        }
    }
} else {
    $arr = array('err' => 1, 'msg' => 'Bạn chưa đăng nhập.');
}
echo json_encode($arr);
?> 