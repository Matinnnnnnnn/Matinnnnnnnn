<?php
session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>فروشگاه ایرانیان</title>
    <link rel="icon" type="image/ico" href="../imgs/logo.ico">
    <style>
        body {
            text-align: center;
            background-image: url('../imgs/123.jpg');
            background-attachment: fixed; /* ثابت نگه داشتن تصویر */
            background-position: center;
            background-size: cover;
            background: linear-gradient(90deg, #1a0b3b, #4b0082, #2e1a47);
            color: #f8f8f8; /* رنگ سفید مایل به طوسی برای خوانایی */
            background-size: 400% 400%;
            animation: bgAnimation 5s infinite alternate;
        }

        div {
            font-size: 48px;
            color: #fff; */
            text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000, 0 0 30px #ff0000;
            color: #ffd700; طلایی برای جلوه‌ی گیمینگ
            text-shadow: 0 0 10px #ffcc00, 0 0 20px #ffcc00;
        }

        @keyframes bgAnimation {
            from { background-position: 0% 50%; }
            to { background-position: 100% 50%; }
        }

        button {
            background: transparent;
            border: 2px solid #ff0000;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            transition: 0.3s;
        }

        a{
            color: #ffffff; /* سفید روشن */
            text-shadow: 0 0 8px #e0e0e0, 0 0 15px #aaaaaa;
        }

        a:hover{
            color: #000000; /* مشکی */
            text-shadow: 0 0 8px #555555, 0 0 15px #777777;
        }

        button:hover {
            background: #ff0000;
            box-shadow: 0 0 15px #ff0000;
        }

        img {
            transition: 0.5s;
        }

        img:hover {
            transform: scale(1.1);
        }

        .divTable {
            display: table;
            width: 1500px;
            font-size: 13pt;
            font-family: tahoma;
            margin-left: auto;
            margin-right: auto;
            direction: rtl;
        }

        .divTableRow {
            display: table-row;
        }

        .divTableCell {
            display: table-cell;
            border: 1px solid #999999;
            padding: 3px 10px;
        }

        .set_style_link {
            text-decoration: none;
            font-weight: bold;
        }

        .typing {
            position: absolute;
            top: 50px; /* تنظیم فاصله از بالا */
            left: -350px;
            font-size: 32px;
            font-weight: bold;
            color: #ffcc00;
            font-family: "Courier New", monospace;
            overflow: hidden;
            white-space: nowrap;
            width: 400px;
            height: 40px;
            display: inline-block;
            animation: typing 3s steps(40, end) forwards, blink 0.5s infinite;
            
            color: #ffffff; /* سفید روشن */
            text-shadow: 0 0 8px #e0e0e0, 0 0 15px #aaaaaa;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink {
            from { border-right-color: #ffcc00; }
            to { border-right-color: transparent; }
        }

        @keyframes slideDown{
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slider {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            animation: slideAnimation 6s infinite;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide:nth-child(1) { animation-delay: 0s; }
        .slide:nth-child(2) { animation-delay: 2s; }
        .slide:nth-child(3) { animation-delay: 4s; }

        @keyframes slideAnimation {
            0% { opacity: 1; }
            25% { opacity: 1; }
            50% { opacity: 0; }
            75% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>

    <script>
        let slides = document.querySelectorAll(".slide");
        let currentSlide = 0;

        function nextSlide() {
            slides[currentSlide].style.opacity = "0";
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].style.opacity = "1";
        }

        setInterval(nextSlide, 100); // هر ۳ ثانیه تصویر تغییر کند
    </script>

</head>

<body>
    <div class="divTable">
        <div class="divTableRow">
            <div class="divTableCell">
                <header class="divTable">
                    <div class="divTableRow">
                        <div class="divTableCell" style="text-align: right;"><img src="../imgs/logo.png" alt="" style="width: 100px; float: right; " ><div style="padding: 0px;"><div class="typing">فروشگاه لوازم جانبی کامپیوتر متین</div></div></div>
                        </div>
                        <div class="slider">
                            <div class="slide"><img src="../imgs/1-1.jpg" alt="تصویر ۱"></div>
                            <div class="slide"><img src="../imgs/2-2.jpg" alt="تصویر ۲"></div>
                            <div class="slide"><img src="../imgs/3-3.jpg" alt="تصویر ۳"></div>
                        </div>
                </header>
                <nav class="divTable">
                    <ul class="divTableRow">
                        <li class="divTableCell"><a class="set_style_link" href="index.php">صفحه اصلی</a></li>
                        <li class="divTableCell"><a class="set_style_link" href="register.php">عضویت در سایت</a></li>
                        <?php
                        if (isset($_SESSION['state_login']) && $_SESSION['state_login'] === true) {
                            ?>
                            <li class="divTableCell"><a href="logout.php" class="set_style_link">خروج از
                                    سایت<?php echo ("({$_SESSION['realname']})") ?></a></li>
                            <?php
                        } else {
                            ?>
                            <li class="divTableCell"><a class="set_style_link" href="login.php">ورود به سایت</a></li>
                            <?php
                        }
                        ?>
                        <li class="divTableCell"><a class="set_style_link" href="about-us.php">درباره ما</a></li>
                        <li class="divTableCell"><a class="set_style_link" href="contact-us.php">ارتباط با ما</a></li>
                        <?php
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] == "admin") {
                            ?>
                            <li class="divTableCell"><a href="admin_products.php" class="set_style_link">مدیریت محصولات</a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
                <section class="divTable">
                    <section class="divTableRow">
                        <aside class="divTableCell" style="width: 25%">بخش امکانات سایت</aside>
                        <section class="divTableCell" style="width: 75%">