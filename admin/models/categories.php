<?php
class Model_categories extends Model_db{
    function listRecords() 
    {
        $sql = "SELECT * FROM catalog order by parent";
        return $this->result1(0,$sql);
    }
    
    function addNewCate($name,$name_ge,$imgs,$IDcate,$slug,$des_category,$des_category_ge)
    {
        $sql = "INSERT INTO catalog(name,name_ge,image_list,parent,slug,description,description_ge) VALUE(?,?,?,?,?,?,?)";
        return $this->exec1($sql,$name,$name_ge,$imgs,$IDcate,$slug,$des_category,$des_category_ge);
    }
    function deleteCate($id)
    {   
        $sql = "DELETE FROM catalog WHERE id = ?";
        return $this->exec1($sql,$id);
    }
    function editCategory($name,$name_ge,$imgs,$IDcate,$slug,$des_category,$des_category_ge,$id){
        if($imgs == "")
        {
            $sql = "UPDATE catalog SET name= ?,name_ge=?,parent=?,slug=?,description=?,description_ge=? WHERE id=?";
        return $this->SqlExecDebug($sql,$name,$name_ge,$IDcate,$slug,$des_category,$des_category_ge,$id);
        }else
        {
            $sql = "UPDATE catalog SET name= ?,name_ge=?,image_list=?,parent=?,slug=?,description=?,description_ge=? WHERE id=?";
        return $this->SqlExecDebug($sql,$name,$name_ge,$imgs,$IDcate,$slug,$des_category,$des_category_ge,$id);
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