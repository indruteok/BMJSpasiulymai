<?php
header('Content-type: text/css; charset:UTF-8');
$primary_color = "black";
$table_color="rgb(248, 252, 241)";
$table_border="1px solid black";
$img_size="100px";
$table_size="48%";
$margin_standart="20px";

?>

* {
    box-sizing: border-box;
}

body {
    color: <?=$primary_color?>;
}

table, th, td {
    border: <?=$table_border?>;
}

img {
    width: <?=$img_size?>;
}

table {
    background-color: <?=$table_color?>;
}

div{
    margin-left: <?=$margin_standart?>;
    width: <?=$table_size?>;
    float: left;
}

