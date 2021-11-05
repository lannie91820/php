<?php
    session_start();   //使用 session 來記錄用戶的資訊前，要先用 session_start() 這個函式，告訴系統準備開始使用
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;  //是個變數 
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>";  //輸入錯誤時，使用重置
?>