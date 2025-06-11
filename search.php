<?php
header('Content-Type: text/html; charset=UTF-8');
$input_time = $_GET['time'];

$movies = [
    "10:00" => "The Matrix",
    "13:30" => "Inception",
    "15:45" => "Interstellar",
    "18:00" => "Spirited Away",
    "20:15" => "Parasite"
];

function timeToMinutes($timeStr) {
    list($h, $m) = explode(":", $timeStr);
    return $h * 60 + $m;
}

$input_minutes = timeToMinutes($input_time);
$selected = null;

foreach ($movies as $time => $title) {
    if (timeToMinutes($time) >= $input_minutes) {
        $selected = [$time, $title];
        break;
    }
}

if ($selected) {
    echo "<h2>推薦您觀看：</h2>";
    echo "<p>{$selected[0]} - {$selected[1]}</p>";
} else {
    echo "<p>已無後續電影場次，請選擇更早時間。</p>";
}
?>
