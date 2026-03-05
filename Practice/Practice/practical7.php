<?php

require("./fpdf/fpdf.php");

$obj = new FPDF();

$obj->AddPage();

$obj->SetFont("Arial","B","18");

$obj->Cell(10,10,"Hi there! This is trial text to create pdf!");
$obj->Cell(10,20,"PHP is an object oriented Language which is easy to use comparitively other languages such as JSP.");
$obj->Cell(10,30,"PHP is a Server side language and helps in communicating through HTML forms.");

$obj->Output();