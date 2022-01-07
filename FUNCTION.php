<?php
function atm($so_tien, $menh_gia) {
    $so_du = $so_tien % $menh_gia;
    $so_chia = $so_tien - $so_du;
    $ket_qua = $so_chia / $menh_gia;
    return [
        $ket_qua,
        $so_du
    ];
}