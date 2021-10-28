<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 26. 10. 2021
 * Time: 18:07
 */

namespace DasAuto\BladeModule\Model;

class Student
{
    private $studentName;
    private $studentAge;
    private $studentScores;

    public function __construct(
        $studentName = "Alex",
        $studentAge = 55,
        array $studentScores = [
            "math" => 100,
            "programming" => 50
        ]
    ) {
        $this->studentName = $studentName;
        $this->studentAge = $studentAge;
        $this->studentScores = $studentScores;
    }
}