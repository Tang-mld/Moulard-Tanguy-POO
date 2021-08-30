<html>
<head>
    <?php
    include "parts/style.php";
    ?>
</head>
<body>

<div class="wrapper fadeInDown">
    <div id="formContent"><br>
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="Public/images/Logo-moto.png" id="icon" alt="User Icon" />
        </div><br>

        <!-- Login Form -->
        <form method="post" action="index.php?controller=secu&action=login">
            <input require type="text" id="login" class="fadeIn second" name="username" placeholder="login"><br>
            <input require type="text" id="password" class="fadeIn third" name="password" placeholder="password"><br><br>
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
        <div>
            <?php
            if(isset($errors)) {
                foreach ($errors as $error) {
                    echo('<p>'.$error.'</p>');
                }
            }
            ?>
        </div>
    </div>
</div>


</body>
</html>