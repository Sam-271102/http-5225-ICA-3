<?php
date_default_timezone_set('UTC'); // Set timezone to UTC or your local timezone

$currentHour = date('G'); // Get current hour in 24-hour format

if ($currentHour >= 5 && $currentHour < 9) {
    echo "Breakfast Time: Bananas, Apples, and Oats";
} elseif ($currentHour >= 12 && $currentHour < 14) {
    echo "Lunch Time: Fish, Chicken, and Vegetables";
} elseif ($currentHour >= 19 && $currentHour < 21) {
    echo "Dinner Time: Steak, Carrots, and Broccoli";
} else {
    echo "No feeding time right now.";
}
?>
