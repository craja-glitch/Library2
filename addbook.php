<?php
include 'library.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];

    $sql = "INSERT INTO books (title, author) VALUES ('$title', '$author')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="POST" action="">
    <label>Book Title:</label>
    <input type="text" name="title" required>
    <br>
    <label>Author:</label>
    <input type="text" name="author" required>
    <br>
    <button type="submit">Add Book</button>
</form>
