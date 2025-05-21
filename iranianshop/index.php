<?php
include("includes/header.php");

$host_db = "localhost";
$username_db = "root";
$password_db = "";
$db_name = "shop_db";

$link = mysqli_connect($host_db, $username_db, $password_db, $db_name);

if (mysqli_connect_errno()) {
    exit("خطایی با شرح زیر رخ داده است : " . mysqli_connect_error());
}

$query = "SELECT * FROM produts";

$result = mysqli_query($link, $query);
?>



<table style="width: 100%;" border="1px">
    <tr>
        <?php
        $counter = 0;
        while ($row = mysqli_fetch_array($result)) {
            $counter++;
            ?>
            <td style="border-style: dotted dashed;vertical-align: top;width: 33%;">
                <h4 style="color: brown;"><?php echo ($row['pro_name']) ?></h4>
                <a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;">
                    <img src="images/products/<?php echo ($row['pro_image']) ?>" width="250px" height="150px" />
                </a>
                <br />
                قيمت : <?php echo ($row['pro_price']) ?> &nbsp; تومان
                <br />
                تعداد موجودي : <span style="color:red;"><?php echo ($row['pro_qty']) ?></span>
                <br />
                توضيحات : <span style="color:green;"> <?php echo (substr($row['pro_detail'], 0, 240)) ?> ...</span>
                <br /><br />
                <b><a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;">توضيحات
                        تكميلي و خريد</a></b>
                <br /><br />
            </td>
            <?php
            if ($counter % 3 == 0)
                echo ("</tr><tr>");
        } // while
        if ($counter % 3 != 0)
            echo ("</tr>");
        ?>
</table>



<?php
include("includes/footer.php");
?>