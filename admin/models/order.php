<?php
 class Model_order extends Model_db{
    function getAllBill()
    {
        $sql = "SELECT * FROM donhang ORDER BY id DESC";
        return $this->result1(0,$sql);
    }
    function getProDetail($id)
    {
        $sql = "SELECT * FROM donhangchitiet WHERE id = ?";
        return $this->result1(0,$sql,$id);
    }
    function getInfoDetail($id)
    {
        $sql = "SELECT * FROM donhang WHERE id = ?";
        return $this->result1(1,$sql,$id);
    }
    function updataStatus($iddh){
        $sql = "UPDATE donhang SET status=1 WHERE id = ?";
        return $this->exec1($sql,$iddh);
    }
    function getBillDetail($id)
    {
        $sql = "SELECT * FROM donhang WHERE id = ?";
        return $this->result1(1,$sql,$id);
    }
    function editBIllDetail($name,$email,$dienthoai,$diachi,$ghichucuakhach,$ghichucuaadmin,$thoidiemgiaohang,$thoidiemdathang,$trangthai,$anhien,$id)
    {
        $sql ="UPDATE donhang SET TenNguoiNhan = ?,EmailNguoiNhan=?,dienthoai=?,DiaChiNguoiNhan=?,GhiChuCuaKhach=?,GhiChuCuaAdmin=?,ThoiDiemGiaoHang=?,ThoiDiemDatHang=?,TrangThai=?,AnHien=? WHERE id=?";
        return $this->exec1($sql,$name,$email,$dienthoai,$diachi,$ghichucuakhach,$ghichucuaadmin,$thoidiemgiaohang,$thoidiemdathang,$trangthai,$anhien,$id);
    }
    function del($id){
        $sql ="DELETE FROM donhang WHERE id = ?";
        return $this->exec1($sql,$id);
    }
}