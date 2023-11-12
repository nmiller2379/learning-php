<!-- The code below includes opening and closing tags. The general rule is that if our program contains only php, we don't need the closing tag, but copilot recommended it so I put the closing tag in. This simple statement teaches us three things: 1) echo is used to print something; 2) text in single or double quotes indicates a string; 3) The semicolon is necessary. Without it we may get a parse error, unless we have our closing tag. It will assume a semicolon-->
<?php
$name = "David";
echo $name;

?>

<!-- Rules for variables in PHP: 1) Must start with a dollar sign; 2) Must start with letter or undescoe; 3) cannot start with a number; 4) cannot have special characters in variable name; 5) cannot use 'this' as variable name. This refers to an objeect. (Looks like 'this' is proobably a reserved keyword) -->

<!-- Variables are assigned by value instead of by reference. For example: -->
<?php
$x = 5;
$y = $x;
$x = 10;
echo $y; // will print 5
echo ' ';    
echo $x; // will print 10

// To assign by reference, use the ampersand (&) symbol. For example:
$x = 5;
$y = &$x;
$x = 10;
echo ' ';
echo $y; // will print 10
echo ' ';
echo $x; // will print 10
?>

<?php
$firstName = "David";
echo 'Hello $firstName'; // will print 'Hello $firstName' With single quotes, the variable is not evaluated. It is treated as a string.
?>

<?php
$lastName = "Powers";
echo "Hello $lastName"; // will print 'Hello Powers' With double quotes, the variable is evaluated. It is treated as a variable.
?>

<?php
$firstName = "Stacy";
echo "Hello {$firstName}"; // will print 'Hello Stacy' With double quotes, the variable is evaluated. It is treated as a variable. The brackets make it more human readable.
?>

<?php
$firstName = "Willy";
echo 'Hello ' . $firstName; // will print 'Hello Willy' With single quotes, the variable is not evaluated. It is treated as a string. The dot concatenates the string and the variable. The dot is the concatenation operator.
?>
