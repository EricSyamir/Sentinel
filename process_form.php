<?php
// Retrieve form data
$file_path = $_POST['file_path'];

// Validate the file path (ensure it exists and is safe to use)
if (file_exists($file_path)) {
    // Process the file (e.g., read, move, or use it)
    $file_content = file_get_contents($file_path);
    echo "File content: " . htmlspecialchars($file_content) . "<br>";
} else {
    echo "File not found!";
}

?>