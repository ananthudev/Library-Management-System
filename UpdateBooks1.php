<!DOCTYPE html>
<html>
<body bgcolor="87ceeb">
    <center><h2>Update Book Information</h2></center>
    <!-- <h2>Update Book Information</h2> -->

    <form action="updatebookdbcon.php" method="post">
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
        <td> Enter ISBN :</td>
        <td> <input type="text" name="isbn" size="48"> </td>
        </tr>
        <tr>
        <td> Enter Title :</td>
        <td> <input type="text" name="title" size="48"> </td>
        </tr>
        <tr>
        <td> Enter Author :</td>
        <td> <input type="text" name="author" size="48"> </td>
        </tr>
        <tr>
        <td> Enter Edition :</td>
        <td> <input type="text" name="edition" size="48"> </td>
        </tr>
        <tr>
        <td> Enter Publication: </td>
        <td> <input type="text" name="publication" size="48"> </td>
        </tr>
        <tr>
        <td></td>
        <td>
        <input type="submit" value="Update">
        <input type="reset" value="Reset">
        </td>
        </tr>
    </table>
</form>
<a href="SearchBooks.php"> To Search Book Information,Click here </a>
<br>
<a href="DisplayBooks.php"> To Display Book Information,Click here </a>
<br>
<a href="EnterBooks.php"> To Enter Book information,Click here </a>

</body>
</html>
