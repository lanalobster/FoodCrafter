<?php 
    require "../sessionInfo.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FoodCrafter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../index/header-footer.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Headland+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
      <!--For the icons:-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="block-body">
        <header>
            <div class="logo">
                <a href="../index.php">
                    <h1>
                        <span class="food">Food</span><span class="craft">Craft</span>
                    </h1>  
                </a>
            </div>
            <div class="top-menu">
                <ul>
                    <li><a href="../kitchen/kitchen.php">Кухня</a></li>
                    <li><a href="../recipes/recipes.php">Рецепти</a></li>
                    <li><a href="">Замовити</a></li>
                </ul>
            </div>
            <div class="block-top-auth">
                <?php if (isset($_SESSION["nickName"])) :?>
                    <p class="nickname"><?php echo @$_SESSION["nickName"]; ?></p>
                    <p> <a href="/logout.php">Вийти</p>
                <?php else : ?>
                    <p><a href="login.php">Вхід</a></p>
                    <p><a href="../registration/registration.php">Реєстрація</a></p>
                <?php endif;?>    
            </div>  
        </header>
        <div class="main-block">
           <div class="central-block">
                <h2>Вхід</h2>
                <!-- <Orest> -->
                <div class="test"></div>   
                <form class="login-form" action="login.php" method="get">
                    <label for="uname"><b>Електронна пошта</b></label>
                    <input type="text" placeholder="Введіть електронну пошту" id = "uname" name="email">
                    <label for="psw"><b>Пароль</b></label>
                    <input type="password" placeholder="Введіть пароль" id="psw" name="psw">
                    <button name="do_login" class="login-button" type="submit">Увійти</button>
                </form>
                <!-- </Orest> -->
            </div>
        </div>  
        <footer>
            <div class="container-fluid footer-block">
                <div class="row">
                    <div class="col-sm-3">
                        <div class = "addresses">
                            <h4>НАС МОЖНА ЗНАЙТИ ТУТ</h4>
                            <hr>
                            <ul class="list-inline">
                                <li>
                                    <address>
                                        Sakharova St, 31<br>
                                        3rd Floor<br>
                                        Lviv, 72080<br>
                                        Ukraine<br>
                                    </address>
                                </li>
                                <li>
                                    <address>
                                        Zubrivska St, 25A<br>
                                        1st Floor<br>
                                        Lviv, 74209<br>
                                        Ukraine<br>
                                    </address>
                                </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-sm-3">
                        <div class = "emails">
                            <h4>НАПИШІТЬ НАМ</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class = "social-profiles">
                            <h4>МИ У СОЦІАЛЬНИХ МЕРЕЖАХ</h4>
                            <hr>
                            <ul class="list-inline">
                                <li>
                                    <a class="btn btn-lg btn-floating btn-social-icon btn-instagram" title = "FoodCraft Instagram Page" href="https://www.instagram.com/lanahudyma?r=nametag">
                                        <span class="fa fa-instagram"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-lg btn-social-icon btn-facebook" title = "FoodCraft Facebook Page" href="https://www.facebook.com/ira.hudyma">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-lg btn-social-icon btn-telegram" title = "FoodCraft Telegram Page" href="https://t.me/Ygleplastic28">
                                        <span class="fa fa-telegram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row rights">
                    <div class="col-sm-11">
                        <p>©2020 FoodCraft.com. All Rights Reserved.</p>
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-default" onclick="changePage()">Друк</button>
                    </div>
                </div>
            </div>
        </footer>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js'></script>    
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script> 
    <script src="login.js"></script> 
    <script src="../emailsInfo/printEmails.js"></script> 
    </div>
</body>
</html>