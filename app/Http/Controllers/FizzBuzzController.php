<?php

namespace App\Http\Controllers;

class FizzBuzzController extends Controller
{
    public function fizzBuzz($min, $max)
    {
        $result = array();
        $output = "";
        for ($i = $min; $i <= $max; $i++) {
            if ($i % 3 == 0) {
                if ($i % 5 == 0) {
                    $result[] = "FizzBuzz";
                } else {
                    $result[] = "Fizz";
                }
            } else {
                if ($i % 5 == 0) {
                    $result[] = "Buzz";
                } else {
                    $result[] = $i;
                }
            }
        }
        foreach ($result as $number) {
            $output .= $number . "\n";
        }
        return $output;
    }
}
