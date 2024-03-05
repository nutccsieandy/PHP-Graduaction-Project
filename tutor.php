<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>開發工具介紹</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
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
    function link()
    {
        window.location.href="https://colab.research.google.com/drive/1eKcElL27M9EZA6MyskYzfag-fkpDr8vn?hl=zh-tw";
    }
</script>
<style>
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
    function colab()
    {
        window.location.href="https://www.youtube.com/playlist?list=PLFU9sIOfhsY7mbc6qYQaXDx9cZ5hGRY94";
    }
</script>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="about.php">畢業專題</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#scroll">製作動機</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">程式語言教學區</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0" style="font-size: 60px;">Python程式語言教學專區</h1>
                    <h2 class="masthead-subheading mb-0"></h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">了解更多</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="tutor.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4" style="color:#0066CC;">製作動機</h2>
                            <p style="font-size: 30px;">為了讓學生能夠實際練習Python程式設計，我們製作這個網頁來鼓勵學生實際撰寫程式。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section id="team">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <img class="img-fluid rounded-circle" src="colab.png" onclick="colab()" />
                            <button class="btn btn-primary btn-xl rounded-pill mt-5" onclick="colab()">
                                點我觀看教學影片!
                                </button>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4"  style="color:#007500;">影音專區</h2>
                            <p style="font-size: 30px;">影音專區有Colab使用教學以及程式教學影片</p>
                            <<br>
                            <p style="font-size: 30px;">
                            <strong>
                                影片目錄
                            </strong>
                            <br>
                            1.Colab使用教學
                            <br>
                            2.程式語言概論
                            <br>
                            3.變數、運算子
                            <br>
                            4.條件判斷
                            <br>
                            5.迴圈與函數
                            <br>
                            6.Python整合Excel數據分析教學
                            </p>
                            <p style="font-size: 25px; color:#0066CC;">PS:請點選圖片取得影音資源</p>
                            <button class="btn btn-primary btn-xl rounded-pill mt-5" style="background-color:blue; border-color:white;" onclick="link()">
                                查看線上教材!
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
        <button class="contact" onclick=contact()>
            <img src="speech-bubble.png" style="width:50%; height:50%;">
        </button>
        <button class="contact" onclick=home() id="backbutton">
            <img src="back.png" style="width:50%; height:50%;">
        </button>
    </body>
</html>
