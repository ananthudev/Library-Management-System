<!DOCTYPE HTML>
<html>
    <body bgcolor="87ceeb">
    <center><h2>Library Management System</h2></center>
    <br>
 
    <?php
include("DBConnection.php");

// $search = $_REQUEST["search"];
$search = isset($_REQUEST["search"]) ? $_REQUEST["search"] : '';


$query = "select ISBN,Title,Author,Edition,Publication from book_info where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)
//if(mysqli_num_rows($result)>0) ivide isset method vaikan noki nadanila


{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5">
    <tr>
        <th> ISBN </th>
        <th> Title </th>
        <th> Author </th>
        <th> Edition </th>
        <th> Publication </th>
        <th> Delete </th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
        <td><?php echo $row["ISBN"];?> </td>
        <td><?php echo $row["Title"];?> </td>
        <td><?php echo $row["Author"];?> </td>
        <td><?php echo $row["Edition"];?> </td>
        <td><?php echo $row["Publication"];?> </td>
        <td>
            <form action="DeleteBooks.php" method="post">
                <input type="hidden" name="ISBN" value="<?php echo $row['ISBN']; ?>">
                <input type="submit" name="delete" value="Delete">
            </form>
        </td>
    </tr>
    <?php
    }
    }
    else
    echo "<center>No books found in the library by the name - $search </center>" ;
    ?>   
</table>
<a href="SearchBooks.php"> To Search for the Book Information,Click here </a>
<br>
<a href="EnterBooks.php"> To Enter Book information,Click here </a>
<br>
<a href="DisplayBooks.php"> To Display Book information,Click here </a>
<br>
<a href="UpdateBooks.php"> To Update Book Information,Click here </a>

</body>
