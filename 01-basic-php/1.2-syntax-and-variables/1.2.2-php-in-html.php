<!-- PHP in HTML -->
<!DOCTYPE html>
<html>
<body>
<!-- The opening PHP tag in the example below is the same as what we have been using to open our PHP, it's just faster. It's good if we just need to print something. If we need process code, we'll want to enclose the code block within PHP opening and closing tags. -->
<h1>
    <?= "My first PHP script!";
    ?>
</h1>
<!-- We can echo out HTML directly form within PHP -->
<p>My first paragraph.</p>
<?php
    $x = 10;
    $y = 5;
    echo '<p>'. $x . ', '.$y . '</p>';
    // The above can be useful for things like dynamically generating HTML tables. But it's not a best practice to mix PHP and HTML like this. It's better to use PHP to process the data and then use HTML to display it.

    # in PHP, the # symbol is used for single line comments.

    // This is also a single line comment.

    /* This is a multi-line comment
    that spans multiple lines  Don't nest multi-line comments*/

?>
</body>
</html>
