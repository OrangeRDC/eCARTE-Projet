<?php
include ('phpqrcode/qrlib.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    QRcode::png($id);
}