<?php
$title = "Lista tuturor produselor:";
include 'Controller.php';
$Controller = new Controller();

$content = $Controller->CreateOverviewTable();

if(isset($_GET["delete"]))
{
    $Controller->DeleteObject($_GET["delete"]);
}
        
include './Template.php';      
?>
