<?php
    #mysqli_connect()建立資料庫連結
    $_conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );   //建立資料庫連結 //資料庫要事先從網站做建立，本次使用老師提供的xampp所寫的資料
    #mysqli_query()從資料庫查詢資料
    $_result = mysqli_query ( $_conn , "select * from user" );        //從建立的資料庫檔案中 查詢資料
    #mysqli_mysqli_fetch_array()從查詢出來的資料一筆一筆抓出來 
    $_row = mysqli_fetch_array ( $_result );                          //在找到的資料中 一筆一筆找出來
    echo  $_row ["id"] . " " . $_row ["pwd"];     //key id 及 pwd
?>