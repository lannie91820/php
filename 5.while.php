   
<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");  //建立資料庫連結 //資料庫要事先從網站做建立，本次使用老師提供的xampp所寫的資料
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");  //從建立的資料庫檔案中 查詢資料
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while($row=mysqli_fetch_array($result)) {            //找到所需資訊後一筆筆抓出
     echo$row["id"]." ".$row["pwd"]."<br>";             //輸入id及pwd
   } 
?>