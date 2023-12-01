<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DayController extends Controller {
    //

    public function index(Request $request) {

        $day = $request->input('day');

        //Based on the day (from 1 to 25) number call the appropriate method 

        switch ($day) {
            case 1:
                $output = $this->day1();
                break;
            case 2:
                $output = $this->day2();
                break;
            case 3:
                $output = $this->day3();
                break;
            case 4:
                $output = $this->day4();
                break;
            case 5:
                $output = $this->day5();
                break;
            case 6:
                $output = $this->day6();
                break;
            case 7:
                $output = $this->day7();
                break;
            case 8:
                $output = $this->day8();
                break;
            case 9:
                $output = $this->day9();
                break;
            case 10:
                $output = $this->day10();
                break;
            case 11:
                $output = $this->day11();
                break;
            case 12:
                $output = $this->day12();
                break;
            case 13:
                $output = $this->day13();
                break;
            case 14:
                $output = $this->day14();
                break;
            case 15:
                $output = $this->day15();
                break;
            case 16:
                $output = $this->day16();
                break;
            case 17:
                $output = $this->day17();
                break;
            case 18:
                $output = $this->day18();
                break;
            case 19:
                $output = $this->day19();
                break;
            case 20:
                $output = $this->day20();
                break;
            case 21:
                $output = $this->day21();
                break;
            case 22:
                $output = $this->day22();
                break;
            case 23:
                $output = $this->day23();
                break;
            case 24:
                $output = $this->day24();
                break;
            case 25:
                $output = $this->day25();
                break;
            default:
                $output = "Invalid day number";
        }




        return view('day', [
            "output" => $output,
            "day" => $day
        ]);
    }

    private function day1() {

        $file = Storage::disk('public')->get('day1.txt');

        $words = explode("\n", $file);

        $total = 0;
        $output = "";

        /** Part one */

        /*

            foreach ($words as $word) {

                $chars = str_split($word);
                $numbers = [];

                foreach ($chars as $char) {
                    if (is_numeric($char)) {
                        $numbers[] = $char;
                    }
                }

                if (count($numbers) > 1) {
                    $sum = $numbers[0] . $numbers[count($numbers) - 1];
                } else {
                    $sum = $numbers[0] . $numbers[0];
                }

                $total += $sum;
            }

        */

        /** Part two */

        $numberLiterals = [
            "zero",
            "one",
            "two",
            "three",
            "four",
            "five",
            "six",
            "seven",
            "eight",
            "nine",
            "0",
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9"
        ];


        function convertToNumber($value) {

            if (is_numeric($value)) {

                return intval($value);
            } else {

                switch ($value) {
                    case  "zero":
                        return 0;
                        break;
                    case   "one":
                        return 1;
                        break;
                    case   "two":
                        return 2;
                        break;
                    case "three":
                        return 3;
                        break;
                    case  "four":
                        return 4;
                        break;
                    case  "five":
                        return 5;
                        break;
                    case   "six":
                        return 6;
                        break;
                    case "seven":
                        return 7;
                        break;
                    case "eight":
                        return 8;
                        break;
                    case  "nine":
                        return 9;
                        break;
                }
            }
        }

        function all_strpos($haystack, $needle) {
            $offset = 0;
            $all_occurrencies = [];

            while (($pos = strpos($haystack, $needle, $offset)) !== FALSE) {
                $offset   = $pos + 1;
                $all_occurrencies[] = $pos;
            }

            return $all_occurrencies;
        }

        foreach ($words as $word) {
            $numbers = [];
            $keys = [];

            foreach ($numberLiterals as $number) {

                $all = all_strpos($word, $number);

                if (count($all) > 0) {

                    foreach ($all as $position) {
                        $numbers[$position] =  substr($word, strpos($word, $number), strlen($number));
                    }
                }
            }

            if (count($numbers) > 1) {
                foreach ($numbers as $k => $v) {
                    $keys[] = $k;
                }
                $sum = convertToNumber($numbers[min($keys)]) . convertToNumber($numbers[max($keys)]);
            } else {
                $popped = convertToNumber(array_pop($numbers));
                $sum = $popped . $popped;
            }

            $total += $sum;
        }

        $output = $total;

        return $output;
    }
}
