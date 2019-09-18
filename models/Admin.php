<?php

class Admin {
public static function getArraySection()
{
$myDB = new SafeMySQL();
$myselect = "SELECT * FROM sections";
$allarray = $myDB->getAll($myselect); 
return $allarray;
}

public static function delSection($id)
{
$myDB = new SafeMySQL();
$myselect = "DELETE FROM sections WHERE id=$id";
$result = $myDB->query($myselect); 
if (intval($result)==1) return "Ok";
else return "У секции есть катеогрии и/или бренды!";
}


public static function addSection($name,$sort,$status)
{
$myDB = new SafeMySQL();
$myselect = "INSERT INTO 'sections'('id', 'name', 'sort','status') VALUES (null,?s,?i,?i)";
$result = $myDB->query($myselect,$name,$sort,$status);
$result= $myDB->insertId(); 
return $result;

}

public static function redactSection($obj)
{
$myDB = new SafeMySQL();
$myselect = "UPDATE 'sections' SET 'name' = ?s, 'sort' = ?i, 'status' = ?i WHERE 'sections'.'id'=?i";
$myDB->query($myselect,$obj->name,$obj->sort,$obj->status,$obj->id);
return "Ok";
}
}
