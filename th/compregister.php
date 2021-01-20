<?php
include("../RSC-th/heading.html");
$comp = $_GET['compid'];
if ($comp == "tdb2021")
{
    echo("<h1>แบบฟอร์มสมัครการแข่งขัน ThailandCube Discord Online Battle 2021</h1>");
    include("../RSC-th/compregister.html");
}
else 
{
    echo("<h1>ไม่รู้จักหน้านี้</h1>");
}
?>
