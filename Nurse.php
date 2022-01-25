<?php


class Nurse implements IChildState {
    

    public function Diagnose($statecase) {
        return $statecase . "First aid done";
    }

    public function givemedicine($medicine) {
        return $medicine . "go to the pharmacy";
    }

}
?>