<html>
<head>
    <title>19BIT0292</title>
</head>
<body>
<img src="restricted_acess.jpg" alt="restrcted acess" width="300">
    <form method="post">
        EMAIL
        <input type="text" name="em"><br>
        PASSWORD<input type="password" name="pas"><br>
        <button type="submit">Sign In</button>
    </form>
    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") 
         {
            $email = $_POST['em'];
            $password = $_POST['pas'];
            if ($email=="bhaumik.tandan@gmail.com" && $password=="19BIT0292") 
            {
                echo "WELCOME";
            } 
            else 
                echo "WRONG CREDENTIALS";
         }
    ?>
</body>
</html>