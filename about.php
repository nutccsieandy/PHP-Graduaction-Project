<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>團隊介紹</title>
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
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="about.php">畢業專題</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#scroll">製作動機</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">團隊組成</a></li>
                        <li class="nav-item"><a class="nav-link" href="#future">未來期許</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0" style="font-size: 60px;">歡迎來到這個網站</h1>
                    <h2 class="masthead-subheading mb-0">我們是一個由三位學生組成的團隊</h2>
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
                        <div class="p-5"><img class="img-fluid rounded-circle" src="code.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4" style="color:#0066CC;">製作動機</h2>
                            <p style="font-size: 30px;">我們期許透過網際網路來提升青少年科技水平，希望透過教學網站來輔助教師教學。</p>
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
                        <div class="p-5"><img class="img-fluid rounded-circle" src="binary-code.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4"  style="color:#007500;">組員構成</h2>
                            <p style="font-size: 30px;">我們是由三位來自國立台中科技大學資訊工程系學生所組成的團隊。
                            <br>
                            1.資工五乙&nbsp;陳德恩
                            <br>
                            2.資工四2&nbsp;吳孟鴻
                            <br>
                            3.資工四2&nbsp;謝愷彥
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section  id="future">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="tutor.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">未來期許</h2>
                            <p style="font-size: 30px;">提供更完善的服務，建立更完善的教學資源。</p>
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
