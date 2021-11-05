<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";   //當輸入錯誤時reset 回到原始頁面
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";

?>