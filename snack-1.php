<?php 
$games = [

    [
        "Los Angeles Lakers",
        "Golden State Warriors",
        "64",
        "52"
    ],

    [
        "Miami Heat",
        "Boston Celtics",
        "34",
        "22"
    ],

    [
        "Chicago Bulls",
        "New York Knicks",
        "54",
        "50"
    ],
];

foreach($games as $game) {
    echo $game[0]." - ".$game[1]." | ".$game[2]." - ".$game[3];
    echo "<br/>";
}
?>