<?php
include("includes/header.php");
?>

<?php
if(isset($_SESSION['state_login'])&& $_SESSION['state_login']===true)
{
?>
<script type="text/javascript">
<!--
location.replace("index.php");
-->
</script>
<?php
}
?>
<script>
    function check_empty() {
        var username = '';
        username = document.getElementById("username").value;
        if(username == ''){
            alert("وارد کردن نام کاربرری الزامی است ! ");
        }else{
            var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید ؟ ");
            if(r == true){
                document.register.submit();
            }
        }
    }
</script>

<br>
<form name="register" action="action_register.php" method="POST">
    <table style="width: 50%;" border="0" style="margin-left: auto;margin-right: auto;">
        <tr>
            <td style="width: 40%;">نام واقعی<span style="color:red;">*</span></td>
            <td style="width: 60%;"><input type="text" id="realname" name="realname"></td>
        </tr>
        <tr>
            <td>نام کاربری<span style="color:red;">*</span></td>
            <td><input type="text" style="text-align: left;" id="username" name="username"></td>
        </tr>
        <tr>
            <td>کلمه عبور<span style="color:red;">*</span></td>
            <td><input type="password" style="text-align: left;" id="password" name="password"></td>
        </tr>
        <tr>
            <td>نکرار کلمه عبور<span style="color:red;">*</span></td>
            <td><input type="password" style="text-align: left;" id="repassword" name="repassword"></td>
        </tr>
        <tr>
            <td>پست الکترونیک<span style="color:red;">*</span></td>
            <td><input type="text" style="text-align: left;" id="email" name="email"></td>
        </tr>

        <tr>
            <td><br><br><br></td>
            <td>
                <input type="button" value="ثبت نام" onclick="check_empty()">
                &nbsp;&nbsp;&nbsp;
                <input type="reset" value="پاک کردن">
            </td>
        </tr>
    </table>
</form>

<?php
include("includes/footer.php");
?>