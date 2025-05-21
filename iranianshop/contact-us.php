<?php
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افکت ورود متن</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .text {
            font-size: 24px;
            font-weight: bold;
            opacity: 0; /* ابتدا نامرئی */
            transform: translateY(-50px); /* موقعیت اولیه بالا */
            animation: slideDown 1s ease-in-out forwards; /* اجرای انیمیشن */
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="text">برای ارتباط با ما با این شماره 09333569765 تماس بگیرید</div>
</body>
</html>


<?php
include("includes/footer.php");
?>