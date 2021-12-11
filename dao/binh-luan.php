<?php
require_once "pdo.php";
function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_lap){
    $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_lap) VALUES (?,?,?,?)";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_lap);
}
function binh_luan_delete($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
        pdo_execute($sql, $ma_bl);
}

function binh_luan_select_all(){
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_lap DESC";
        return pdo_query($sql);
}

function binh_luan_select_by_ma_hang_hoa($ma_hh){
    $sql = "SELECT b.*, h.ten_hh, ph.phan_hoi, ph.ma_bl as ma_blph FROM binh_luan b 
    JOIN hang_hoa h ON h.ma_hh=b.ma_hh
    JOIN phan_hoi_binh_luan ph 
    GROUP BY b.ma_bl
    HAVING b.ma_hh= $ma_hh ORDER BY ngay_lap DESC
    ";
        return pdo_query($sql);
}
