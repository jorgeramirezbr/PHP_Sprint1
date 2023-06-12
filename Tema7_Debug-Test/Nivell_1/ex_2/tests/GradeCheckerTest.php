<?php
use PHPUnit\Framework\TestCase;
include 'src/GradeChecker.php';

class GradeCheckerTest extends TestCase {
  
    public static function addDataProvider () {
        return array (
            array (20, 'reprobado'),
            array (33, 'tercera division'),
            array (40, 'tercera division'),
            array (45, 'segunda division'),
            array (60, 'primera division'),
        );
    }  
    
    /**
    * @dataProvider addDataProvider
    */
    public function testCheck($grade, $string) {
        $gradeChecker = new GradeChecker();
        $result = $gradeChecker->check($grade);
        $this->assertIsString($result);
        $this->assertStringContainsStringIgnoringCase($string, $result);
    }
    /**importante considerar la sintaxis de los comentarios-anotaciones de lo contrario phpUnit manda mensaje de deprecacion */
}


?>