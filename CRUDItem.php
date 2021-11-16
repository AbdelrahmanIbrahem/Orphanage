<?php
include_once("Singletonedataconfig.php");
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of DeleteItem
 *
 * @author LENOVO
 */
class CRUDItem implements IDelete, IRead , ICreate, IUpdate{
     public function __construct() {
        echo 'created';
        $conn = SingleObject::getinstance(); 
        
    }
    //put your code here
    public function Delete($id) {
        $sql = "DELETE FROM Items WHERE id = $id";
         $res = $conn->query($sql);
         if ($res->num_rows == 0) {
            echo'<script>alert("Deleted SUCCEESSFULY")</script>';
            echo '<script>location.href="../login.html";</script>';
    }

}

    public function Read($x) {
        $sql = "SELECT * FROM Items WHERE id = ?";
         $res = $conn->query($sql);
         if ($res->num_rows == 0) {
            echo'<script>alert("Deleted SUCCEESSFULY")</script>';
            echo '<script>location.href="../login.html";</script>';
        
    }
    }
    public function create($x) {
        $sql = "INSERT INTO Items (name, address, salary) VALUES (?, ?, ?)";
         $res = $conn->query($sql);
         if ($res->num_rows == 0) {
            echo'<script>alert("Deleted SUCCEESSFULY")</script>';
            echo '<script>location.href="../login.html";</script>';
        
    }
        
    }

    public function Update($x) {
       $sql = "UPDATE Items SET name=?, address=?, salary=? WHERE id=?";
         $res = $conn->query($sql);
         if ($res->num_rows == 0) {
            echo'<script>alert("Deleted SUCCEESSFULY")</script>';
            echo '<script>location.href="../login.html";</script>';
        
    } 
    }

}
