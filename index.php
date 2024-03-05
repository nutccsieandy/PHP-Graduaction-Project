<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="icon" href="lecture.png">
</head>
<style>
    .main
    {
        width: 30%;
        padding: 20px;
        background-color:#FFF;
        border-radius: 5px;
        box-shadow: 0px 0px 0px 0px #000000;
        margin: 0px auto;
        margin-top: 50px;
    }
    @media  screen and (max-width:600px) 
    {
        .main  
        {
            width: 90%;
            padding: 10px;
            background-color:#FFF;
            box-shadow: 0px 0px 0px 0px #000000;
            border-radius: 5px;
            margin: 0px auto;
            margin-top: 50px;
            margin-bottom:100px;
        }  
    }
    .tit
    {
        color: black;
        text-align: center;
        white-space:nowrap;
        font-size:35px;
    }
    .tct
    {
        font-size: 20px;
        color: black;
        text-align: center;
    }
    .account
    {
        border-radius: 5px;
        border: 1px solid;
        border-style:inset;
        placeholder
    }
    .send
    {
        margin: 0px auto;
        padding: 10px;
        box-shadow: #000000;
        border-radius: 5px;
        border: 0px;
        background-color:#0072E3;
        color: #fff;
    }
    .sign
    {
        margin: 0px auto;
        padding: 10px;
        box-shadow: #000000;
        border-radius: 5px;
        border: 0px;
        background-color:#00A600;
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
    table 
    {
        margin-left:auto;
        margin-right:auto;
    }
    body
    {
        margin:0px;
    }
    .head
    {
        width: 100%;
        padding-top:10px;
        padding-bottom:10px;
        padding-left:25px;
        background-color:#10294E;
    }
    .nav-tit
    {
        color:#fff;
        font: optional;
        font-size:20px;
    }
    input::-webkit-input-placeholder 
    {
        color: 	#8E8E8E;
        font-size: 16px;
    }
</style>
<script>
    function signup()
    {
        window.location.href="sign.php";
    }
    function contact()
    {
        window.location.href = "mailto:nutccsieandy@gmail.com";
    }
</script>
<?php
    $link = mysqli_connect("localhost", "root", "sf6210sf", "demo","3306");
    if(!$link)
    {
        die("資料庫連接失敗");
    }
    $sql = "set names utf8";
    mysqli_query($link,$sql);
    if(isset($_POST["log"]))
    {
        if(isset($_POST["ac"])&&isset($_POST["pw"]))
        {
            $s1=$_POST['ac'];
            $s2=$_POST['pw'];
            $sql = "SELECT *  FROM `user` WHERE `AC`='$s1' AND `PW`='$s2'";
            $ans= mysqli_query($link,$sql);
            $xc=mysqli_num_rows($ans);
            if($xc==0)
            {
                echo '<script>alert("帳號或密碼錯誤!")</script>';
            }
            else 
            {
                session_start();
                $_SESSION['AC']=$s1;
                $_SESSION['PW']=$s2;
                header("Location:main.php");
            }
        }
    }
?>
<body bgcolor="#F0F0F0" style="padding:0px;">
    <nav class="head">
        <P class="nav-tit">
        畢業專題
        </p>
    </nav>
    <div class="main">
        <form method="post">
        <table width="100%"  align="center" style="border-spacing:20px;">
        <tr>
            <td>
            <p class="tit">會員登入</p>
            </td>
        </tr>
        <tr align="center" >
            <td align="center">
                帳號&nbsp;&nbsp;&nbsp;
                <input type="text"  style="height: 30px;" class="account" name="ac"placeholder="請輸入帳號"> 
            </td>
        </tr>
        <tr  align="center">
            <td align="center">
                密碼&nbsp;&nbsp;&nbsp;
                <input type="text" style="height: 30px;" class="account" name="pw"placeholder="請輸入密碼">
            </td>
        </tr>
        <tr  align="center">
            <td align="center">
                <input type="submit" class="send" style="height: 50px; width: 250px; font-size:20px;"value="登入" name="log">
            </td>
        </tr>
        <tr  align="center">
        <td align="center">
            <input type="button" class="sign" value="前往註冊"style="height: 50px; width: 250px; font-size:20px;" onclick="signup()">
            </td>
            </tr>
    </table>
    </form>
    </div>
    <button class="contact" onclick=contact()>
            <img src="speech-bubble.png" style="width:50%; height:50%;">
        </button>
</body>
</html>