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
    <?php
        include("DBConnection.php");
        if (isset($_POST["isbn"]) && isset($_POST["title"]) && isset($_POST["author"]) && isset($_POST["edition"]) && isset($_POST["publication"])) {
            $isbn = $_POST["isbn"];
            $title = $_POST["title"];
            $author = $_POST["author"];
            $edition = $_POST["edition"];
            $publication = $_POST["publication"];
    
            $query = "SELECT * FROM book_info WHERE isbn = '$isbn'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) > 0) {
                echo "<script type='text/javascript'>alert('Error: ISBN already exists. Book already exists.'); window.location.href='EnterBooks.php';</script>";
            } else {
                $query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
                $result = mysqli_query($db, $query);
                echo "<script type='text/javascript'>alert('Book information is inserted successfully'); window.location.href='EnterBooks.php';</script>";
            }
    
        } else {
            echo "<script type='text/javascript'>alert('Error: Missing information to insert book.'); window.location.href='EnterBooks.php';</script>";
        }
    ?>
</body>
</html>
    