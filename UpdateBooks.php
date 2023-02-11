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
    <!--Once the form is submitted, all the form data is forwarded to UpdateBooks2.php -->
    <form action="UpdateBooks2.php" method="post">
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td>Enter ISBN :</td>
            <td>
                <select name="isbn">
                    <option value="">--Select ISBN--</option>
                    <?php
                        //connect to database
                        $conn = mysqli_connect("localhost", "root", "", "books");
                        //check the connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        //select all ISBNs from the books table
                        $sql = "SELECT ISBN FROM books";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            //output data for each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row["ISBN"]."'>".$row["ISBN"]."</option>";
                            }
                        }
                        //close the database connection
                        mysqli_close($conn);
                    ?>
                </select>
            </td>
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