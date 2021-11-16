<?php


class logindonator implements ILogin {
    //put your code here
    public function Login($x) {
        
        echo '<script>location.href="../Donator.html";</script>';
        echo 'this is a Donator login';
        return 0;
    }

}
