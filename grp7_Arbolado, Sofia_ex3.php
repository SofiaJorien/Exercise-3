<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

<?php


$phpContent = "Here is a php file that created of Grp7 for exercise number 3 in Integrative Programming\n";
$NewFile = file_put_contents("Exercise3.php", $phpContent);

// File name
$filename = "Exercise3.php";

// Check if the file exists using file_exists()
if (file_exists($filename)) {
    echo"<b>File exists!</b><br>";
    
    // Read the contents of the file using file_get_contents()
    $file_content = file_get_contents($filename);
    echo "<b>This is the File Content:</b><br>";
    echo nl2br($file_content) . "<br>";

    // Read the file line by line using file()
    $file_lines = file($filename);
    echo "<b>This content while using file()</b>:<br>";
    foreach ($file_lines as $line) {
        echo nl2br($line);
    }
} else {
    echo "File does not exist! Creating a new file.<br>";
    
    // file_put_contents()
    $new_content = "Hello My name is Sofia Arbolado.\nI'am a 3rd Year IT College Student.";
    file_put_contents($filename, $new_content);
    echo "File created and content written using file_put_contents().<br>";
}
?>

</body>
</html>