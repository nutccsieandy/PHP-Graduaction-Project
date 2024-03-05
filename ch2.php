<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch2-變數</title>
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
    .variable
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
    .tit 
    {
        font-size: 20px;
        color: #000000;
    }
    .st
    {
        font-size: 30px;
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
        $count=0;
        if(isset($_POST["ui"])&&isset($_POST["code"]))
        {
            $x1=$_POST["ui"];
            $x2=$_POST["code"];
            $x3=$_POST["type"];
            $x4=$_POST["name"];
            $x5=$_POST["use"];
            $st1=(string)$x1;
            $st2=(string)$x2;
            $st3=(string)$x3;
            $st4=(string)$x4;
            $st5=(string)$x5;
            if($st1=="浮點數")
            {
                $count=$count+1;
            }
            if($st2=="type(變數名稱)")
            {
                $count=$count+1;
            }
            if($st3=="int整數、float浮點數、boolean布林、string字串")
            {
                $count=$count+1;
            }
            if(isset($_POST["num3"]))
            {
                $count=$count+1;
            }
            if(isset($_POST["k1"]))
            {
                $count=$count+1;
            }
            $sql="update user set VA='".$count."'where AC='".$s1."'";
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
<div class="main">
    <div class="variable" id="main">
        <p class="tit">
            <strong class="st">
                Ch2-變數
            </strong>
                <br>
                變數是程式語言用來儲存資訊的物件，變數總共有四種類型。
                <br>
                (1).整數:
                <br>
                ex:5,7，這種變數我們稱為Int整數型態。
                <br>
                <br>
                (2).浮點數:
                <br>
                ex:2.1,5.2，這種變數我們稱為Float浮點數型態。
                <br>
                <br>
                (3).字串:
                <br>
                用來儲存由中文或英文字母組成的文字。
                <br>
                ex:Andy,你好。
                <br>
                <br>
                (4).布林值:
                <br>
                用來儲存二元狀態(真和假)，True和False。
                <br>
                <br>
                (5).Python變數使用方式:
                <br>
                假設我今天要建立一個變數是a，量值是12
                <br>
                我只要輸入a=12即可。
                <br>
                <br>
                (6).型態查詢:
                <br>
                輸入type(變數名稱)即可。
        </p>
    </div>
    <div class="exercise">
            <strong id="st">
               章節練習題
            </strong>
            <form method="post">
                    <p class="le">
                    1.請說出小數的變數型態?
                    </p>
                    <input class="lei" name="ui">
                    <br>
                    <br>
                    <p class="le">
                    2.請說出型態查詢的函數名稱?
                    </p>
                    <input class="lei" name="code">
                    <br>
                    <br>
                    <p class="le">
                    3.列出四種變數名稱(回答時以逗號隔開)
                    </p>
                    <input class="lei" name="type">
                    <br>
                    <br>
                    <p class="le">
                    4.請問我們應該用何種變數型態來儲存一個人的姓名?
                    </p>
                    <input type="radio" name="num1"><label class="le">&nbsp;int整數</label>
                    <input type="radio" name="num2"><label class="le">&nbsp;float或double浮點數</label>
                    <input type="radio" name="num3"><label class="le">&nbsp;string字串</label>
                    <input type="radio" name="num4"><label class="le">&nbsp;boolean布林值</label>
                    <br>
                    <br>  
                    <p class="le">
                    5.請回答布林值的使用情境?
                    </p>
                    <input type="radio" name="k1"><label class="le">&nbsp;判斷正確與否</label>
                    <input type="radio" name="k2"><label class="le">&nbsp;控制程式執行次數</label>
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