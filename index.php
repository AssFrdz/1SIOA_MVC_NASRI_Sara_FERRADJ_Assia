<?php
session_start();
include "model/model.php";
$action=$_REQUEST['action']??"";
include "controller/controller.php";