<?php
class Model_categories extends Model_db{
    function listRecords() 
    {
        $sql = "SELECT * FROM catalog order by parent";
        return $this->result1(0,$sql);
    }
    function listRecordsdoc() 
    {
        $sql = "SELECT * FROM catalog where style=1 and parent !=0 order by parent";
        return $this->result1(0,$sql);
    }
    function addNewCate($name,$imgs,$IDcate,$slug,$des_category,$kieu,$hang)
    {
        $sql = "INSERT INTO catalog(name,image_list,parent,slug,description,style,hangcosan) VALUE(?,?,?,?,?,?,?)";
        return $this->exec1($sql,$name,$imgs,$IDcate,$slug,$des_category,$kieu,$hang);
    }
    function deleteCate($id)
    {   
        $sql = "DELETE FROM catalog WHERE id = ?";
        return $this->exec1($sql,$id);
    }
    function editCategory($name,$imgs,$IDcate,$slug,$des_category,$kieu,$hang,$id){
        if($imgs == "")
        {
            $sql = "UPDATE catalog SET name= ?,parent=?,slug=?,description=?,style=?,hangcosan=? WHERE id=?";
        return $this->SqlExecDebug($sql,$name,$IDcate,$slug,$des_category,$kieu,$hang,$id);
        }else
        {
            $sql = "UPDATE catalog SET name= ?,image_list=?,parent=?,slug=?,description=?,style=?,hangcosan=? WHERE id=?";
        return $this->SqlExecDebug($sql,$name,$imgs,$IDcate,$slug,$des_category,$kieu,$hang,$id);
        }
        
    }
    function showChildrenCategori(){
        $sql = "SELECT * FROM catalog ";
        return $this->result1(0,$sql);
    }
    function getParentOfPro() 
    {
        $sql = "SELECT * FROM catalog where parent=2 ";
        return $this->result1(0,$sql);
    }
    function showOneProducer($id)
    {
        $sql = "SELECT * FROM catalog WHERE id=?";
        return $this->result1(1,$sql,$id);
    }
}

?>