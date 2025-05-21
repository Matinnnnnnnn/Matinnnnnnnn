<?php
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تایپ شدن متن</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .typing2 {
            font-size: 24px;
            font-weight: bold;
            border-right: 2px solid black;
            padding-right: 5px;
            white-space: nowrap;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="typing2" id="text"></div>

    <script>
        let text = "به فروشگاه قطعات کامپیوتر خوش آمدید!اینجا ما انواع و اقسام لوازم یدکی کامپیوتر رو داریم پس بدو بخرر";
        let index = 0;
        
        function typeText() {
            if (index < text.length) {
                document.getElementById("text").innerHTML += text.charAt(index);
                index++;
                setTimeout(typeText, 50); // تنظیم سرعت تایپ
            } else {
                document.getElementById("text").style.borderRight = "none"; // حذف نشانگر تایپ
            }
        }

        typeText();
    </script>
</body>
</html>


<?php
include("includes/footer.php");
?>