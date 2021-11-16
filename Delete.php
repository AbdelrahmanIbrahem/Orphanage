<?php

     include_once("Singletonedataconfig.php");

class DeleteClass {

    //put your code here
    //private $db;

    public function __construct() {
        echo 'created';
        $conn = SingleObject::getinstance(); 
        
    }

    public function delete($id) {
        $sql = "DELETE FROM users WHERE id = $id";
         $res = $conn->query($sql);
         if ($res->num_rows == 0) {
            echo'<script>alert("Deleted SUCCEESSFULY")</script>';
            echo '<script>location.href="../login.html";</script>';
         }
       // if ($stmt = mysqli_prepare($this->link, $sql)) {
            // Bind variables to the prepared statement as parameters
         //   mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
           // $param_id = trim($_POST["id"]);

            // Attempt to execute the prepared statement
            //if (mysqli_stmt_execute($stmt)) {
                // Records deleted successfully. Redirect to landing page
              //  return true;
           // } else {
             //   return false;
            //}
        //}

        // Close statement
       // mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($conn);
        return false;
    }

}
