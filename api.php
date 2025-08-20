<?php
include 'library.php';
header("Content-Type: application/json");

$action = $_GET['action'] ?? '';

if ($action === 'events') {
    // Static data just for demo
    $events = [
        ["title" => "Book Fair", "date" => "2025-08-25"],
        ["title" => "Author Meetup", "date" => "2025-09-01"]
    ];
    echo json_encode($events);

} elseif ($action === 'popular-books') {
    $popularBooks = [
        ["title" => "1984", "author" => "George Orwell"],
        ["title" => "To Kill a Mockingbird", "author" => "Harper Lee"]
    ];
    echo json_encode($popularBooks);

} elseif ($action === 'books') {
    $result = $conn->query("SELECT title, author FROM books");
    $books = [];
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
    echo json_encode($books);

} else {
    echo json_encode(["error" => "Unknown action"]);
}
