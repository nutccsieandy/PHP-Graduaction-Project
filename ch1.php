<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch1-程式語言概論</title>
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
    .introduction
    {
        width: 90%;
        margin: 0px auto;
        padding: 10px;
        background-color:#F0F0F0;
        box-shadow: 2px 2px 2px 2px #fff;
        border-radius: 5px;
        border: 0px;
        margin-top: 40px;
    }
    .content
    {
        font-size: 20px;
        color: #000000;
    }
    #st
    {
        font-size: 30px;
        color: #000000;       
    }
    .coding
    {
        width: 90%;
        margin: 0px auto;
        padding: 10px;
        background-color:#F0F0F0;
        box-shadow: 2px 2px 2px 2px #fff;
        border-radius: 5px;
        border: 0px;
        margin-top: 100px;
    }
    .usage
    {
        width: 90%;
        margin: 0px auto;
        padding: 10px;
        background-color:#F0F0F0;
        box-shadow: 2px 2px 2px 2px #fff;
        border-radius: 5px;
        border: 0px;
        margin-top: 100px;
    }
    .lesson
    {
        width: 90%;
        margin: 0px auto;
        padding: 10px;
        background-color:#F0F0F0;
        box-shadow: 2px 2px 2px 2px #fff;
        border-radius: 5px;
        border: 0px;
        margin-top: 100px;       
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
    .le
    {
        font-size: 20px;
        color: #000000;
    }
    .lei
    {
        border-radius: 5px;
        border: 0px;
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
        if(isset($_POST["ui"])&&isset($_POST["code"])&&isset($_POST["pc"]))
        {
            $x1=$_POST["ui"];
            $x2=$_POST["code"];
            $x3=$_POST["pc"];
            $st1=(string)$x1;
            $st2=(string)$x2;
            $st3=(string)$x3;
            if($st1=="HTML+CSS+JS")
            {
                $count=$count+1;
            }
            if($st2=="python")
            {
                $count=$count+1;
            }
            if($st3=="讓電腦讀取")
            {
                $count=$count+1;
            }
            $sql="update user set CN='".$count."'where AC='".$s1."'";
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
    <div class="introduction" id="main">
        <p class="content">
            <strong id="st">
                Ch1-程式語言概論
            </strong>
            <br>
            語言，是人類溝通的工具，現今的世界兩大主流語言，分成英語與中文。<br>
            人類語言有語系、文法、單詞。<br>
            然而，程式語言也有類似的體制。<br>
            想了解更多，請繼續往下看!
        </p>
    </div>
    <div class="coding">
        <p class="content">
            <strong id="st">
               1-1程式語言的分類
            </strong>
            <br>
            程式語言分為高階與低階兩種
            <br>
            (1).高階語言貼近人類語言，適合初學者，例如:本網站使用的Python程式語言以及C#還有JAVA。
            <br>
            相較之下，高階語言運作速度比較慢。
            <br>
            (2).低階語言適合用於底層電腦元件(例如:處理器)進行溝通，相對之下速度比較快，語法比較複雜。
            <br>
            PS:處理器是電腦運算中心，可以理解成電腦的大腦。
            <br>
            常見低階語言有:C/C++。
        </p>
    </div>
    <div class="usage">
        <p class="content">
            <strong id="st">
               1-2程式語言的用途
            </strong>
            <br>
            (1).用於控制電腦硬體的程式語言:C/C++。
            <br>
            (2).用於開往網頁型態管理系統的程式語言
            <br>
            a.前端(介面):HTML+CSS+JS
            <br>
            b.後端(控制資料庫):C#或PHP
            <br>
            c.資料庫邏輯設計:SQL
            <br>
            (3).Windows應用程式:C#或JAVA
        </p>
    </div>
    <div class="lesson">
        <p class="content">
            <strong id="st">
               1-3Python程式語言有哪些章節?
            </strong>
            <br>
            (1).變數型態及使用方式
            <br>
            (2).條件判斷式
            <br>
            (3).迴圈
            <br>
            (4).函數使用方法
            <br>
            (5).Python資料分析套件使用
        </p>
    </div>
    <div class="exercise">
            <strong id="st">
               章節練習題
            </strong>
            <form method="post">
                    <p class="le">
                    1.請說出網頁前端需要哪三種程式語言?
                    </p>
                    <input class="lei" name="ui">
                    <br>
                    <br>
                    <p class="le">
                    2.請說出本網站主要是使用哪種程式語言來教學?
                    </p>
                    <input class="lei" name="code">
                    <br>
                    <br>
                    <p class="le">
                    3.低階語言通常用於什麼類型的工作？請舉出一個例子。
                    </p>
                    <input class="lei" name="pc">
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
</body>
</html>