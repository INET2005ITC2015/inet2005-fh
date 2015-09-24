<?php
    $firstname= $_GET["First"];
    $lastname= $_GET["Last"];
    $month= strtolower($_GET["Month"]);
    $day= $_GET["Day"];
    echo "Hello $firstname $lastname" . "<br>";
    echo "Your Zodiac sign is:" . zodiac($month, $day) . "<br>";

//code based off of code found on phpsnips.com at url http://phpsnips.com/9/Zodiac-Sign#.VgR4l99Viko on september 24th 2015

    function zodiac ($month, $day){
        if(($month == 3 || $month == 4 || $month == "march" || $month == "april" ) && ($day > 22 || $day < 21)){
            $zodiac = "Aries";
        }
        elseif(($month == 4 || $month == 5|| $month == "april" || $month == "may" ) && ($day > 22 || $day < 22)){
            $zodiac = "Taurus";
        }
        elseif(($month == 5 || $month == 6 || $month == "may" || $month == "June" ) && ($day > 23 || $day < 22)){
            $zodiac = "Gemini";
        }
        elseif(($month == 6 || $month == 7|| $month == "june" || $month == "july" ) && ($day > 23 || $day < 23)){
            $zodiac = "Cancer";
        }
        elseif(($month == 7 || $month == 8|| $month == "july" || $month == "august" ) && ($day > 24 || $day < 22)){
            $zodiac = "Leo";
        }
        elseif(($month == 8 || $month == 9 || $month == "august" || $month == "september" ) && ($day > 23 || $day < 24)){
            $zodiac = "Virgo";
        }
        elseif(($month == 9 || $month == 10 || $month == "september" || $month == "october" ) && ($day > 25 || $day < 24)){
            $zodiac = "Libra";
        }
        elseif(($month == 10 || $month == 11|| $month == "october" || $month == "november" ) && ($day > 25 || $day < 23)){
            $zodiac = "Scorpio";
        }
        elseif(($month == 11 || $month == 12|| $month == "november" || $month == "december" ) && ($day > 24 || $day < 23)){
            $zodiac = "Sagittarius";
        }
        elseif(($month == 12 || $month == 1|| $month == "december" || $month == "january" ) && ($day > 24 || $day < 21)){
            $zodiac = "Cpricorn";
        }
        elseif(($month == 1 || $month == 2|| $month == "january" || $month == "february" ) && ($day > 22 || $day < 20)){
            $zodiac = "Aquarius";
        }
        elseif(($month == 2 || $month == 3|| $month == "february" || $month == "march" ) && ($day > 21 || $day < 21)){
            $zodiac = "Pisces";
        }
        return $zodiac;
        }
?>