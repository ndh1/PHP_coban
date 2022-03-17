<?php 
    if ( isset($_GET["name"]) & isset($_GET["age"]) )
    {
        echo "Welcome ". $_GET['name'] ."<br>";
        echo "Your age ". $_GET['age'] ."<br>";
        die();
    }
    if ( isset($_POST["name"]) & isset($_POST["age"]) )
    {
        echo "Welcome ". $_POST['name'] ."<br>";
        echo "Your age ". $_POST['age'] ."<br>";
        die();
    }
    
?>
<html>
    <body>
        <form action="Get&Post.php" method="GET">
            GET
            <br>
            Name:
            <input type="text" name="name">
            Age:
            <input type="text" name="age">
            <input type="submit">
        </form>

        <form action="Get&Post.php" method="POST">
            POST
            <br>
            Name:
            <input type="text" name="name">
            Age:
            <input type="text" name="age">
            <input type="submit">
        </form>

    </body>
</html>

<?php 
    
?>
