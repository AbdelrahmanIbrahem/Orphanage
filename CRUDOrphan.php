<?php
include_once("Singletonedataconfig.php");
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CRUDOrphan
 *
 * @author LENOVO
 */
class CRUDOrphan implements ICreate, IRead, IUpdate, IDelete {
     public function __construct() {
        echo 'created';
        $conn = SingleObject::getinstance(); 
        
    }
    public function Delete($id) {
          $sql = "DELETE FROM orphans WHERE id = $id";
         $res = $conn->query($sql);
         if ($res->num_rows == 0) {
            echo'<script>alert("Deleted SUCCEESSFULY")</script>';
            echo '<script>location.href="../login.html";</script>';
        
    }
    }

    public function Read($x) {
        $sql = "SELECT * FROM orphans WHERE id = ?";
         $res = $conn->query($sql);
         if ($res->num_rows == 0) {
            echo'<script>alert("Deleted SUCCEESSFULY")</script>';
            echo '<script>location.href="../login.html";</script>';
        
    } 
    }

    public function Update($x) {
        $sql = "UPDATE orphans SET name=?, address=?, salary=? WHERE id=?";
         $res = $conn->query($sql);
         if ($res->num_rows == 0) {
            echo'<script>alert("Deleted SUCCEESSFULY")</script>';
            echo '<script>location.href="../login.html";</script>';
        
    } 
    }

    public function create($x) {
        $sql = "INSERT INTO orphans (name, address, salary) VALUES (?, ?, ?)";
         $res = $conn->query($sql);
         if ($res->num_rows == 0) {
            echo'<script>alert("Deleted SUCCEESSFULY")</script>';
            echo '<script>location.href="../login.html";</script>';
        
    } 
    }

}
