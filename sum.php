<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查看答題總成績</title>
    <link rel="icon" href="lecture.png">
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .send
    {
        padding: 10px;
        box-shadow: #000000;
        border-radius: 5px;
        border: 0px;
        background-color:#0072E3;
        color: #fff;
    }
    .contact 
    {
        position: fixed;
        right:20px;
        bottom:20px;
        background-color:#F0F0F0 alpha;
        background:hsla(59,168%,47%,0.9);
        padding:5px;
        width:75px;
        height:75px;
        border-radius:50%;
        border:0px;
    }
    #backbutton
    {
        position: fixed;
        right:120px;
        bottom:20px;
        background-color:#F0F0F0 alpha;
        background:hsla(59,168%,47%,0.9);
        padding:5px;
        width:75px;
        height:75px;
        border-radius:50%;
        border:0px;
    }
    .sum
    {
        width: 90%;
        margin: 0px auto;
        padding: 25px;
        background-color:#F0F0F0;
        box-shadow: 2px 2px 2px 2px #fff;
        border-radius: 5px;
        border: 0px;
        margin-top: 40px;
    }
    .content
    {
        font-size: 30px;
        color: #000000;
    }
    #st
    {
        font-size: 30px;
        color: #000000;       
    }
    .ans
    {
        background-color:#007500 alpha;
        background:hsla(80,90%,20%,1.5);
        padding:15px;
        font-size:20px;
        border-radius:25px;
        border:0px;
    }
    #feed 
    {
        border-radius:20px;
        padding:15px;
    }
</style>
<script>
    function contact()
    {
        window.location.href = "mailto:nutccsieandy@gmail.com";
    }
    function home()
    {
        window.location.href="main.php";
    }
</script>
<?php
    $link = mysqli_connect("localhost", "root", "sf6210sf", "demo","3306");
    session_start();
    $s1=$_SESSION["AC"];
    $s2=$_SESSION["PW"];
    if(isset($_POST["log"]))
    {
        unset($_SESSION["AC"]);
        unset($_SESSION["PW"]);
        header("Location:index.php");
    }
?>
<body>
<!-- As a link -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="main.php">畢業專題</a>
  <form method="post">
  <input type="submit" class="send" value="登出" name="log">
  </form>
</nav>
<!--Function Area-->
<div class="main">
<div class="sum" id="sum">
        <p class="content">
            <strong id="st">
               成績檢核區
            </strong>
            
            <br>
            使用者帳號:
            <?php
                 echo $_SESSION["AC"];
            ?>
            <br>
            (1).CH1-概論:            
            <?php
            $s1=$_SESSION["AC"];
            $s2=$_SESSION["PW"];
            $sql = "SELECT * FROM `user` WHERE `AC`='$s1'";
            $ap=mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($ap);
            echo $row["CN"];
            $k1=(int)$row["CN"];
            ?>
            <br>
            (2).CH2-變數:
            <?php
            $s1=$_SESSION["AC"];
            $s2=$_SESSION["PW"];
            $sql = "SELECT * FROM `user` WHERE `AC`='$s1'";
            $ap=mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($ap);
            echo $row["VA"];
            $k2=(int)$row["VA"];
            ?>
            <br>
            (3).CH3-條件判斷:
            <?php
            $s1=$_SESSION["AC"];
            $s2=$_SESSION["PW"];
            $sql = "SELECT * FROM `user` WHERE `AC`='$s1'";
            $ap=mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($ap);
            echo $row["DC"];
            $k3=(int)$row["DC"];
            ?>
            <br>
            (4).CH4-程式迴圈:
            <?php
            $s1=$_SESSION["AC"];
            $s2=$_SESSION["PW"];
            $sql = "SELECT * FROM `user` WHERE `AC`='$s1'";
            $ap=mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($ap);
            echo $row["LP"];
            $k4=(int)$row["LP"];
            ?>      
            <br>
            (5).CH5-程式函數:
            <?php
            $s1=$_SESSION["AC"];
            $s2=$_SESSION["PW"];
            $sql = "SELECT * FROM `user` WHERE `AC`='$s1'";
            $ap=mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($ap);
            echo $row["FC"];
            $k5=(int)$row["FC"];
            ?>
            <br>
            (6).CH6-Python數據分析:
            <?php
            $s1=$_SESSION["AC"];
            $s2=$_SESSION["PW"];
            $sql = "SELECT * FROM `user` WHERE `AC`='$s1'";
            $ap=mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($ap);
            echo $row["AZ"];
            $k6=(int)$row["AZ"];
            ?>
            <br>
            <strong id="score-sum">
                總分:
            </strong>
            <?php
                $sum=$k1+$k2+$k3+$k4+$k5+$k6;
                echo $sum;
                $sql="update user set SU='".$sum."'where AC='".$s1."'";
                mysqli_query($link,$sql);
            ?> 
        </p>
    </div>
</div>
<button class="contact" onclick=contact()>
            <img src="speech-bubble.png" style="width:50%; height:50%;">
        </button>
        <button class="contact" onclick=home() id="backbutton">
            <img src="back.png" style="width:50%; height:50%;">
        </button>
</body>
</html>