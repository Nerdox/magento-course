<?php

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