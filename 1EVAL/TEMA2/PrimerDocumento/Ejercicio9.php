<html>
    <head>
        <title>Activity 2 Lesson 3</title>
    </head>
    <body>
    <?php
        $code= 3;
        switch ($code) {
            case 0:
                echo "You have chose 0";
                break;
            case 1:
                echo "You have chose 1";
                break;
            case 2:
                echo "You have chose 2";
                break;
            case '3':
                echo "You have chose 3";
                break;
            default:
                echo "I do not know which one you selected";
                break;
        }
    ?>
    </body>
</html>