<?php
    if (!empty($_SESSION['VALI_MESSAGE'])) {
        echo $_SESSION['VALI_MESSAGE'];
    }
?>
<html>
<form action="/ex/app/Controller/Controller.php" method="post">
    <input type="text" name="title" id="">
    <button>提交</button>
</form>
</html>