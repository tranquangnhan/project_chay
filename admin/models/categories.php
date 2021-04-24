<?php
class Model_categories extends Model_db{
    function listRecords() 
    {
        $sql = "SELECT * FROM catalog";
        return $this->result1(0,$sql);
    }
    function addNewCate($name,$IDcate,$slug)
    {
        $sql = "INSERT INTO catalog(name,parent,slug) VALUE(?,?,?)";
        return $this->exec1($sql,$name,$IDcate,$slug);
    }
    function deleteCate($id)
    {   
        $sql = "DELETE FROM catalog WHERE id = ?";
        return $this->exec1($sql,$id);
    }
    function editCategory($name,$IDcate,$slug,$id){
        $sql = "UPDATE catalog SET name= ?,parent=?,slug=? WHERE id=?";
        return $this->exec1($sql,$name,$IDcate,$slug,$id);
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