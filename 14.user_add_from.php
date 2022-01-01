<html>
    <head><title>新增使用者</title></head>  
    <body>
<?php        
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";  //輸入登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";  //連結總資訊的網址
    }
    else{    
        echo "  
            <form action=user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }  //echo帳密的資訊位置
?>
    </body>
</html>