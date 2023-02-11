<!DOCTYPE html>
<html>
<body bgcolor="87ceeb">
    <center><h2>Update Book Information</h2></center>

    <form action="updatebookdbcon.php" method="post">
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
        <td> Select ISBN :</td>
        <td> 
            <select name="isbn">
                <?php
                // Connect to the database
                $servername = "localhost";
                $username = "username";
                $password = "password";
                $dbname = "database_name";
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                // Fetch ISBN values from the database
                $sql = "SELECT ISBN FROM books";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // Generate the options for the drop-down menu
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row["ISBN"] . "'>" . $row["ISBN"] . "</option>";
                    }
                } else {
                    echo "<option value=''>No ISBN values found</option>";
                }
                mysqli_close($conn);
                ?>
            </select> 
        </td>
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
<a href="EnterBooks.php"> To Enter Book information,,Click here </a>

</body>
</html>
