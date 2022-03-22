<!DOCTYPE html>
<html>
    <body>
        <?php
        $name="Aleksandros Doci";
        $credits=14;
        $gpa=3.8;
        echo "Welcome to my fist .php page. My name is $name!<br>";
        echo var_dump($name);
        echo "<br>";
        echo var_dump($credits);
        echo "<br>";
        echo var_export($gpa);
        echo "<br>";
        if($credits>=12){
            echo "You are a full time student!";
            echo "<br>";
        }
        else{
            echo "You are not a full time student!";
            echo "<br>";
        }
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        ?>
    </body>
</html>
