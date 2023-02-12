<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Library Management System</h2></center>
    <?php
    include("DBConnection.php");
    
    $ISBN = isset($_REQUEST["ISBN"]) ? $_REQUEST["ISBN"] : '';
    $Title = isset($_REQUEST["Title"]) ? $_REQUEST["Title"] : '';
    $Author = isset($_REQUEST["Author"]) ? $_REQUEST["Author"] : '';
    $Edition = isset($_REQUEST["Edition"]) ? $_REQUEST["Edition"] : '';
    $Publication = isset($_REQUEST["Publication"]) ? $_REQUEST["Publication"] : '';
    
    if(isset($_REQUEST["update"]))
    {
        $query = "update book_info set Title='$Title',Author='$Author',Edition='$Edition',Publication='$Publication' where ISBN='$ISBN'";
        $result = mysqli_query($db,$query);
        if($result)
        {
            echo "<center>Record updated successfully</center>";
        
        }
        else
        {
            echo "<center>Record not updated</center>";
        }
        
    }
    
    $query = "select ISBN from book_info";
    $result = mysqli_query($db,$query);
    ?>
    
    <form action="#" method="post">
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <td>Select ISBN</td>
            <td>
                <select name="ISBN">
                <option value="">Select ISBN</option>
                <?php while($row = mysqli_fetch_assoc($result))
                {
                    echo "<option value='".$row['ISBN']."'>".$row['ISBN']."</option>";
                }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" name="Title" value=""></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="Author" value=""></td>
        </tr>
        <tr>
            <td>Edition</td>
            <td><input type="text" name="Edition" value=""></td>
        </tr>
        <tr>
            <td>Publication</td>
            <td><input type="text" name="Publication" value=""></td>
        </tr>
        <tr>
            <td><input type="submit" name="update" value="Update"></td>
            <td><input type="reset" value="Reset"></td>
        </tr>
    </table>
    </form>
    
    <br>
    <a href="SearchBooks.php"> To Search Book Information,Click here </a>
    <br>
    <a href="DisplayBooks.php"> To Display Book Information,Click here </a>
    <br>
    <a href="EnterBooks.php"> To Enter Book information,,Click here </a>

</body>
</html>