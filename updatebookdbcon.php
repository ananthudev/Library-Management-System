<!DOCTYPE html>
<html>
<head>
    <title>Update Book Information</title>
</head>
<body bgcolor="87ceeb">
    <h2>Update Book Information</h2>
    <?php
    include("DBConnection.php");

    $isbn = $_POST["isbn"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $edition = $_POST["edition"];
    $publication = $_POST["publication"];

    $query = "UPDATE book_info SET title='$title', author='$author', edition='$edition', publication='$publication' WHERE isbn='$isbn'";

    if (mysqli_query($db, $query)) {
        echo "Book information updated successfully";
        
    } else {
        echo "Error updating book information: " . mysqli_error($db);
    }

    mysqli_close($db);
?>
    <br>
    <a href="SearchBooks.php"> To Search for the Book information,Click here </a>
    <br>
    <a href="EnterBooks.php"> To Enter Book information,Click here </a>
    <br>
    <a href="DisplayBooks.php"> To Display Book information,Click here </a>
</body>
</html>