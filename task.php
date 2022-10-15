<?php
    session_start();
if(!isset($_SESSION['tasks'])){
    $_SESSION['tasks'] = array();
}
if(isset($_GET['task_name'])){
    if($_GET['task_name'] != ""){
    array_push($_SESSION['tasks'], $_GET['task_name']);
    unset($_GET['task_name']);
    }else{
        $_SESSION['msg'] = "O campo não pode estar vazio!"; 
    }

}
if(isset($_GET['clear'])){
    unset($_SESSION['tasks']);
}

if(isset($_GET['key'])){
    array_splice($_SESSION['tasks'],$_GET['key'], 1);
    unset($_GET['key']);
}
?>