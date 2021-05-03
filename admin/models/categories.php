<?php
class Model_categories extends Model_db{
    function listRecords() 
    {
        $sql = "SELECT * FROM catalog order by parent";
        return $this->result1(0,$sql);
    }
    
    function addNewCate($name,$imgs,$IDcate,$slug,$des_category)
    {
        $sql = "INSERT INTO catalog(name,image_list,parent,slug,description) VALUE(?,?,?,?,?)";
        return $this->exec1($sql,$name,$imgs,$IDcate,$slug,$des_category);
    }
    function deleteCate($id)
    {   
        $sql = "DELETE FROM catalog WHERE id = ?";
        return $this->exec1($sql,$id);
    }
    function editCategory($name,$imgs,$IDcate,$slug,$des_category,$id){
        if($imgs == "")
        {
            $sql = "UPDATE catalog SET name= ?,parent=?,slug=?,description=? WHERE id=?";
        return $this->SqlExecDebug($sql,$name,$IDcate,$slug,$des_category,$id);
        }else
        {
            $sql = "UPDATE catalog SET name= ?,image_list=?,parent=?,slug=?,description=? WHERE id=?";
        return $this->SqlExecDebug($sql,$name,$imgs,$IDcate,$slug,$des_category,$id);
        }
        
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