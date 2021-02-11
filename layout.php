<?php
class LayoutClass
{
    public $layout;

    public function __construct()
    {
        $this->layout = '<!DOCTYPE html><html style="padding:0px">
        <head>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <meta charset="utf-8" /><link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <title>CV Rohan MARTIN</title>
        </head>
        <body>
            <header>
                <div class="row">
                <div class="col-sm-11" style="text-align: center;	padding: 5px 5px 5px 5px;
        background-color:#80808038;
        border-radius:10px;
        border-bottom-right-radius:0px;
        border-bottom-left-radius:0px;
        border-color: black;
        border-style: solid solid none solid;
        color : black;
        opacity : 0.9;
        position:left;
        box-shadow: 2px 2px 5px black;"><h1> Martin Rohan </h1><a style="font-size:25px">curriculum vitae</a></div></header>';
    }
    public function displayLayout() {
        $this->layout .='</body></html>';
        echo($this->layout);
    }

    public function startNewRow($styleSettings = "", $id = " ")
    {
        $this->layout .='<div class="row" id= "'. $id .'" style="'. $styleSettings .'">';
    }
    public function endAnyDiv()
    {
        $this->layout .='</div>';
    }
    public function startNewCol($size,$styleSettings = " ",$id = " ")
    {
        $this->layout .='<div class="col-' . $size . '" id="' . $id . '" style="' . $styleSettings . '">';
    }
    public function write($text,$styleSettings = " ",$boolbr = true)
    {
        $this->layout .='<a style="'.$styleSettings.'">' . $text . '</a>';
        if($boolbr==true)
        $this->layout .='<br>';

    }
    public function writeh1($text,$styleSettings = " ",$boolbr = true)
    {
        $this->layout .='<h1 style="'.$styleSettings.'">' . $text . '</h1>';
        if($boolbr)
        $this->layout .='<br>';

    }
    public function addImg($src,$alternative,$styleSettings)
    {
        $this->layout .='<img src="' . $src . '" alt="' . $alternative . '"style="' . $styleSettings . '"> ';
    }
    public function startNewDiv($class = "",$styleSettings = "")
    {
        $this->layout .='<div class="' . $class . '" style="' . $styleSettings . '">';
    }
}























?>