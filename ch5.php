<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch5-程式函數</title>
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
    .contact-text
    {
        size:20px;
        color: #fff;
    }
    .dc
    {
        width: 90%;
        margin: 0px auto;
        padding: 10px;
        background-color:#F0F0F0;
        box-shadow: 2px 2px 2px 2px #fff;
        border-radius: 5px;
        border: 0px;
        margin-top: 40px;
        margin-bottom: 40px;
    }
    .st
    {
        font-size: 30px;
        color: #000000; 
    }
    .tit 
    {
        font-size: 20px;
        color: #000000;
    }
    .exercise
    {
        width: 90%;
        margin: 0px auto;
        padding: 20px;
        background-color:#F0F0F0;
        box-shadow: 2px 2px 2px 2px #fff;
        border-radius: 5px;
        border: 0px;
        margin-top: 100px;  
        margin-bottom:50px;       
    }
    .lei
    {
        border-radius: 5px;
        border: 0px;
    }
    .le
    {
        font-size: 20px;
        color: #000000;
    }
    #st
    {
        font-size: 30px;
        color: #000000;       
    }
    #back
    {
        background-color: green;
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
</style>
<script>
    function back()
    {
        window.location.href="#main";
    }
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
    if(isset($_POST["send"]))
    {
        if(isset($_POST["ui"])&&isset($_POST["code"])&&isset($_POST["num2"])&&isset($_POST["x3"]))
        {
            $x1=$_POST["ui"];
            $x2=$_POST["code"];
            $st1=(string)$x1;
            $st2=(string)$x2;
            $count=0;
            if($st1=="有引數與無引數")
            {
                $count+=1;
            }
            if($st2=="函數")
            {
                $count+=1;
            }
            if(isset($_POST["num2"]))
            {
                $count+=1;
            }
            if(isset($_POST["x3"]))
            {
                $count+=1;
            }
            $sql="update user set FC='".$count."'where AC='".$s1."'";
            mysqli_query($link,$sql);
            echo '<script>alert("答題成功!")</script>';
        }
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
<div class="main" id="main">
    <div class="dc" id="d1">
        <strong class="st">
        Ch5-程式函數
        </strong>
        <p class="tit">
            為了使城市模組化，達到高效管理的意義，我們一般會使用函數來撰寫程式碼。
            <br>
            (1).無引數函數&nbsp;def f():
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("HELLO!")
            <br>
           定義一個無引數(函數內的變數)的函數來使得程式具有模組化的功能。
            <br>
            (2).有引數函數&nbsp;def f(x):
            <br>
            sum=0+x
            <br>
            定義一個有引數(函數內的變數)的函數來做到數字計算與統計的效果。
            <br>
        </p>
    </div>
    <div class="exercise">
            <strong id="st">
               章節練習題
            </strong>
            <form method="post">
                    <p class="le">
                    1.請說出函數的兩種類型?
                    </p>
                    <input class="lei" name="ui">
                    <br>
                    <br>
                    <p class="le">
                    2.為了使程式語言模組化，我們可以利用何種原件來實現?
                    </p>
                    <input class="lei" name="code">
                    <br>
                    <br>
                    <p class="le">
                    3.def f(n):
                        <br>
                        for  i in range(1,n+1,1):
                            <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("HELLO!")
                    </p>
                    <input type="radio" name="num1"><label class="le">&nbsp;n-1次</label>
                    <input type="radio" name="num2"><label class="le">&nbsp;n次</label>
                    <input type="radio" name="num3"><label class="le">&nbsp;n+1次</label>
                    <br>
                    <br>
                    <p class="le">
                    4.def f():
                    <br>
                            print("你好!")
                        <br>
                        for  i in range(a,b+1,1):
                            <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f()
                        <br>
                        請輸入數對(a,b)來印出十行文字
                    </p>
                    <input type="radio" name="x1"><label class="le">&nbsp;(1,10)</label>
                    <input type="radio" name="x2"><label class="le">&nbsp;(1,9)</label>
                    <input type="radio" name="x3"><label class="le">&nbsp;(1,11)</label>
                    <br>
                    <br>
                    <input type="submit" name="send" class="send">
            </form>
            <br>
            <button class="send" id="back" onclick="back()">返回查看教材內容</button>
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