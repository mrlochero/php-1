<?php

SELECT taikhoan, matkhau, level, hoten, gioitinh
FROM thanhvien INNTER JOIN chitietthanhvien ON thanhvien.id = chitietthanhvien.id

    // dùng trong php admin.