<?php

class GradeChecker {

    public function check(int $grade) {
        if ($grade >= 60) {
            return "Primera Division";
          } elseif ($grade >= 45 && $grade <= 59) {
            return "Segunda Division";
          } elseif ($grade >= 33 && $grade <= 44) {
            return "Tercera Division";
          } else {
            return "Reprobado";
          }
    }

}

?>