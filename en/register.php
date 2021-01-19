<?php
include("../RSC-en/heading.html");
$comp = $_GET['compid'];
if ($comp == "tdb2021")
{
    echo("<h1>Pre Registration Forms for ThailandCube Discord Online Battle 2021</h1>");
    include("../RSC-en/register.html");
}
else 
{
    echo("<h1>Unknown Webpage</h1>");
}
?>
