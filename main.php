<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主頁</title>
    <link rel="icon" href="lecture.png">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .send
    {
        position: absolute;
        right: 10px;
        top: 10px;
        padding: 10px;
        box-shadow: #000000;
        border-radius: 5px;
        border: 0px;
        background-color:#0072E3;
        color: #fff;
    }
    .about
    {
        padding: 10px;
        box-shadow: #000000;
        border-radius: 5px;
        border: 0px;
        background-color:#005757;
        color: #fff;
    }
    .container
    {
        width:100%;
        height: auto;
        padding: 10px;
        display: flex;
        flex-direction: row;
    }
    @media screen and (max-width:600px)
    {
        .container
        {
        width:100%;
        height: auto;
        padding: 10px;
        display: flex;
        flex-direction: column;
        }     
    }
    .item
    {
        width: 30%;
        padding: 30px;
        margin: 10px;
        background-color:#10294E;
        border-radius: 5px;
        box-shadow: 2px 2px 2px 2px #9D9D9D;
        border: 0px;
    }
    @media screen and (max-width:600px)
    {
        .item
        {
        width: 90%;
        padding: 10px;
        background-color:#10294E;
        border-radius: 5px;
        box-shadow: 2px 2px 2px 2px #9D9D9D;
        border: 0px;
        }
    }
    .item-text
    {
        text-align: center;
        color: #FFFFFF;
        font-size: 25px;
    }
    #b1
    {
        background-color:#10294E;
    }
    #sum
    {
        width:93%;
        background-color:#000;
    }
    
    #tutor
    {
        width:93%;
        background-color:#000;
    }
    #check
    {
        width: 93%;
        background-color:#000;
    }
    @media screen and (max-width:600px)
    {
        #sum
        {
            width:90%;
        }
    
        #tutor
        {
            width:90%;
        }
        #check
        {
            width: 90%;
        }
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
    .contact-text
    {
        size:20px;
        color: #fff;
    }
    .nav-title 
    {
        background-color:#6C6C6C;
        padding:10px;
        padding-left:25px;
        height: 65px;
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .nav-text
    {
        color: #FFF;
        font-size: 20px;
    }
</style>
<script>
    function bt1()
    {
        window.location.href="ch1.php";
    }
    function bt2()
    {
        window.location.href="ch2.php";
    }
    function bt3()
    {
        window.location.href="ch3.php";
    }
    function bt4()
    {
        window.location.href="ch4.php";
    }
    function bt5()
    {
        window.location.href="ch5.php";
    }
    function bt6()
    {
        window.location.href="ch6.php";
    }
    function tutor()
    {
        window.location.href="tutor.php";
    }
    function check()
    {
        window.location.href="about.php";
    }
    function sum()
    {
        window.location.href="sum.php";
    }
    function report()
    {
        window.alert("即將前往Google表單頁面");
        window.location.href = "https://docs.google.com/forms/d/1G3zxRIE7WrTBf1Hx_u-7aAixlruB2p1GImRvcZ24VaI/viewform?edit_requested=true";
    }
    function contact()
    {
        window.location.href = "mailto:nutccsieandy@gmail.com";
    }
    function out()
    {
        window.location.href="index.php";
    }
</script>
<?php
    $link = mysqli_connect("localhost", "root", "sf6210sf", "demo","3306");
    session_start();
    $s1=$_SESSION["AC"];
    $s2=$_SESSION["PW"];
    if(isset($_POST["out"]))
    {
        unset($_SESSION["AC"]);
        unset($_SESSION["PW"]);
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>"; 
    }
?>
<body>
<!-- As a link -->
<nav class="nav-title">
  <a class="nav-text" href="main.php">畢業專題</a>
  <form method="post">
  <input type="submit" class="send" value="登出" name="out" onclick="out()">
  </form>
</nav>
<!--Function Area-->
<div class="main">
    <div class="container">
        <div class="item" onclick="bt1()" id="b1">
            <P class="item-text">Ch1-程式概論</P>
        </div>
        <div class="item" onclick="bt2()" id="b1">
        <P class="item-text">Ch2-變數</P>
        </div>
        <div class="item" onclick="bt3()" id="b1">
        <P class="item-text">Ch3-條件判斷</P>
        </div>
    </div>
    <div class="container">
        <div class="item" onclick="bt4()" id="b1">
        <P class="item-text">Ch4-程式迴圈</P>
        </div>
        <div class="item" onclick="bt5()" id="b1">
        <P class="item-text">Ch5-程式函數</P>
        </div>
        <div class="item" onclick="bt6()" id="b1">
        <P class="item-text">Ch6-Python數據分析</P>
        </div>
    </div>
    <div class="container">
        <div class="item" onclick="sum()" id="sum">
            <P class="item-text">成績查詢</P>
        </div>
    </div>
    <div class="container">
        <div class="item" onclick="report()" id="sum">
            <P class="item-text">問卷調查</P>
        </div>
    </div>
    <div class="container">
        <div class="item" onclick="tutor()" id="tutor">
            <P class="item-text">教學影音與Colab使用教學</P>
        </div>
    </div>
    <div class="container">
        <div class="item" onclick="check()" id="check">
            <P class="item-text">認識開發團隊與緣起</P>
        </div>
    </div>
</div>
<button class="contact" onclick=contact()>
            <img src="speech-bubble.png" style="width:50%; height:50%;">
        </button>
</body>
</html>