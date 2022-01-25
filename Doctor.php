<?php


class Doctor implements IChildState {
    

    public function Diagnose($statecase) {
        return $statecase . "try to be healthy";
    }

    public function givemedicine($medicine) {
        return $medicine . "give specific medicine";
    }

}
?>