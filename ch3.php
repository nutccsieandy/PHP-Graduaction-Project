<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch3-條件判斷</title>
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
        if(isset($_POST["ui"])&&isset($_POST["code"]))
        {
            $x1=$_POST["ui"];
            $x2=$_POST["code"];
            $st1=(string)$x1;
            $st2=(string)$x2;
            $count=0;
            if($st1=="if-else if-else")
            {
                $count+=1;
            }
            if($st2=="條件判斷式")
            {
                $count+=1;
            }
            $sql="update user set DC='".$count."'where AC='".$s1."'";
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
           Ch3-條件判斷
        </strong>
        <p class="tit">
            要讓電腦知道在甚麼條件(情況)下做甚麼任務，就必須透過條件判斷式去控制。
            <br>
            (1).if-else if-else:
            <br>
            <strong> 舉個分數判斷的案例</strong>
            <br>
            if(score>90):
            <br>
            &nbsp;&nbsp;&nbsp;print("A LEVEL")
            <br>
            else if(score>80):
            <br>
            &nbsp;&nbsp;&nbsp;print("B LEVEL")
            <br>
            else:
            <br>
            &nbsp;&nbsp;&nbsp;print("C LEVEL")
            <br>
            <br>
            PS:當分數Score大於90，印出指定字串"A LEVEL"。
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;當分數Score大於80且小於90，印出指定字串"B LEVEL"。
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;當分數Score小於80，印出指定字串"C LEVEL"。
            <br>
            <br>
            (2).while(條件式):
            <br>
            當條件成立，執行程式敘述。
            <br>
            <strong>舉個降雨機率判斷案例</strong>
            <br>
            while(降雨機率>90):
            <br>
            &nbsp;&nbsp;&nbsp;print("請帶雨傘")
        </p>
    </div>
    <div class="exercise">
            <strong id="st">
               章節練習題
            </strong>
            <form method="post">
                    <p class="le">
                    1.請說出能夠分成三個等級運作的條件判斷式?
                    </p>
                    <input class="lei" name="ui">
                    <br>
                    <br>
                    <p class="le">
                    2.為了使程式語言知道在甚麼情況下做出正確的動作，需要透過什麼判斷式來工作?
                    </p>
                    <input class="lei" name="code">
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