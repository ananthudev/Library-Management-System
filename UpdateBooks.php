<!DOCTYPE HTML>
<html>
<head>
    <title>Library Management System</title>
</head>
<body bgcolor="87ceeb">
    <center>
        <h2>Library Management System</h2>
    </center>
    <br>
    <!--Once the form is submitted, all the form data is forwarded to UpdateBooks.php -->
    <form action="UpdateBooks2.php" method="post">
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td>Enter ISBN :</td>
            <td><input type="text" name="isbn" size="48"></td>
            </tr>
            <tr>
            <td>Enter Title :</td>
            <td><input type="text" name="title" size="48"></td>
            </tr>
            <tr>
            <td>Enter Author :</td>
            <td><input type="text" name="author" size="48"></td>
            </tr>
            <tr>
            <td>Enter Edition :</td>
            <td><input type="text" name="edition" size="48"></td>
            </tr>
            <tr>
            <td>Enter Publication :</td>
            <td><input type="text" name="publication" size="48"></td>
            </tr>
            <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>