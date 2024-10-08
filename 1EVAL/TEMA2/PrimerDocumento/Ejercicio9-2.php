<html>
<head>
    <title>Activity 2 Lesson 3</title>
</head>
<body>
<?php
$code= 3;
$valor_devuelto= match ($code) {
     0=>  'You have chose 0',
     1=>  'You have chose 1',
     2=>  'You have chose 2',
     '3'=>  'You have chose 3',
    default=> 'I do not know which one you selected'
};
echo $valor_devuelto;

?>
</body>
</html>
