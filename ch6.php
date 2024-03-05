<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch6-Python數據分析</title>
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
        window.location.href="https://www.youtube.com/playlist?list=PLFU9sIOfhsY7mbc6qYQaXDx9cZ5hGRY94";
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
        $count=0;
        if(isset($_POST["ui"]))
        {
            $x1=$_POST["ui"];
            if($x1=="0")
            {
                $count=$count+1;
            }
        }
        if(isset($_POST["x1"]))
        {
            $count=$count+ 1;
        }
        $sql="update user set AZ='".$count."'where AC='".$s1."'";
        mysqli_query($link,$sql);
        echo '<script>alert("答題成功!")</script>';
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
        Ch6-Python數據分析
        </strong>
        <p class="tit">
            本課程以Python整合Excel數據分析為主
            <br>
            1.基本觀念:橫向為列，直向為行
            2.常用套件:Numpy與Pandas
            3.第一筆資料編號為0
            <br>
        </p>
        <button class="send" id="back" onclick="back()">先去看Youtube教學影片!</button>
    </div>
    <div class="exercise">
            <strong id="st">
               章節練習題
            </strong>
            <form method="post">
                    <p class="le">
                    1.今天小明想從一張資料表撈出第一筆資料，請問他需要輸入的數字為何?
                    </p>
                    <input class="lei" name="ui">
                    </p>
                    <p class="le">
                    2.小華想將一筆資料放在橫向第二筆(直向為第二筆)，請以數對(a,b)回答?
                    </p>
                    <input type="radio" name="x1"><label class="le">&nbsp;(1,1)</label>
                    <input type="radio" name="x2"><label class="le">&nbsp;(2,2)</label>
                    <input type="radio" name="x3"><label class="le">&nbsp;(1,2)</label>
                    <br>
                    <input type="submit" name="send" class="send">
            </form>
            <br>    
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