<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Library Management System</h2></center>
    <br>
 
    <?php
        include("DBConnection.php");
 
        $isbn=$_POST["isbn"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $edition=$_POST["edition"];
        $publication=$_POST["publication"];
 
        $query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);
    ?>
    <h3> Book information is inserted successfully </h3>
 
    <a href="SearchBooks.php"> To Search for the Book information,Click here </a>
    <br>
    <a href="EnterBooks.php"> To Enter Book information,Click here </a>
    <br>
    <a href="DisplayBooks.php"> To Display Book information,Click here </a>
 
</body>
</html>