<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operations</title>
</head>
<body>
<h1>String Operations</h1>
<h2>1. Concatenation</h2>
<?php
        $str1 = "Hello";
        $str2 = "World";
        $concatenated = $str1 . " " . $str2;
        echo "Concatenated String: " . $concatenated;
    ?>
<h2>2. String Length</h2>
    <?php
        $length = strlen($concatenated);
        echo "Length of String: " . $length;
    ?>

<h2>3. String Position</h2>
    <?php
        $position = strpos($concatenated, "World");
        echo "Position of 'World' in String: " . $position;
    ?>
 <h2>4. Substring Extraction</h2>
    <?php
        $substring = substr($concatenated, 2, 5);
        echo "Extracted Substring: " . $substring;
    ?>


<h2>5. String Replacement</h2>
    <?php
        $replaced = str_replace("World", "PHP", $concatenated);
        echo "String after Replacement: " . $replaced;
    ?>
</body>
</html>