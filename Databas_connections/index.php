<?php
session_start();
include ("Databass_class/MyclassDB.php");
$Obj=new MyDatabas();
include ("functionality/send2_DB.php");
include("includes/header.php");
include("includes/comment_section.php");
include("includes/comment_area.php");
include("includes/show_comments.php");
include("includes/footer.php");