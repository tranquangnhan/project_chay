<?php
class Model_categories extends Model_db{
    function listRecords() 
    {
        $sql = "SELECT * FROM catalog";
        return $this->result1(0,$sql);
    }
    function addNewProducer($name,$order,$showHide,$slug)
    {
        $sql = "INSERT INTO catalog(TenNSX,ThuTu,AnHien,slug) VALUE(?,?,?,?)";
        return $this->SqlExecDebug($sql,$name,$order,$showHide,$slug);
    }
    function deleteProducer($id)
    {   
        $sql = "DELETE FROM catalog WHERE idNSX = ?";
        return $this->exec1($sql,$id);
    }
    function editCategory($name,$parent,$slug,$id){
        $sql = "UPDATE catalog SET name= ?,parent=?,slug=? WHERE id=?";
        return $this->exec1($sql,$name,$parent,$slug,$id);
    }
    function showChildrenCategori(){
        $sql = "SELECT * FROM catalog WHERE parent = 0";
        return $this->result1(0,$sql,$id);
    }
    function getParentOfPro() 
    {
        $sql = "SELECT * FROM catalog where parent !=0 ";
        return $this->result1(0,$sql);
    }
    function showOneProducer($id)
    {
        $sql = "SELECT * FROM catalog WHERE id=?";
        return $this->result1(1,$sql,$id);
    }
}

?>