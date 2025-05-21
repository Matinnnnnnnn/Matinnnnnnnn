<?php
include("includes/header.php");

if (
    isset($_POST['realname']) && !empty($_POST['realname']) &&

    isset($_POST['username']) && !empty($_POST['username']) &&

    isset($_POST['password']) && !empty($_POST['password']) &&

    isset($_POST['repassword']) && !empty($_POST['repassword']) &&

    isset($_POST['email']) && !empty($_POST['email'])
) {
    $realname = $_POST['realname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
} else {
    exit("برخی از فیلدها مقدار دهی نشده است");
}

if ($password != $repassword) {
    exit("کلمه عبور با تکرار آن مشابه نیست");
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    exit("پست الکترونیک واردشده صحیح نیست");
}

?>

<?php
$host_db = "localhost";
$username_db = "root";
$password_db = "";
$db_name = "shop_db";

$link = mysqli_connect($host_db, $username_db, $password_db, $db_name);

if (mysqli_connect_errno()) {
    exit("خطایی با شرح زیر رخ داده است : " . mysqli_connect_error());
}

$query = "INSERT INTO users (realname,username,password,email,type) VALUES ('$realname','$username','$password','$email','0')";

if (mysqli_query($link, $query) === true) {
    echo ("<p style='color:green;'>"
        . $username .
        "گرامی عضویت شما با نام کاربری "
        . $username .
        "در فروشگاه با موفقیت انجام شد" . "</p>");
} else {
    echo ("<p style='color:red;'><b>عضویت شما در فروشگاه انجام نشد</b></p>");
}
?>

<?php
include("includes/footer.php");
?>