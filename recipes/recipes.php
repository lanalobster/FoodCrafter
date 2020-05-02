<?php 
    require "../sessionInfo.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FoodCrafter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../index/header-footer.css">
    <link rel="stylesheet" type="text/css" href="recipes.css">
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
                    <li><a href="">Рецепти</a></li>
                    <li><a href="">Замовити</a></li>
                </ul>
            </div>
            <div class="block-top-auth">
                <?php if (isset($_SESSION["nickName"])) :?>
                    <p class="nickname"><?php echo @$_SESSION["nickName"]; ?></p>
                    <p> <a href="/logout.php">Вийти</p>
                <?php else : ?>
                    <p><a href="../login/login.php">Вхід</a></p>
                    <p><a href="../registration/registration.php">Реєстрація</a></p>
                <?php endif;?> 
            </div>
        </header>
        <div class="main-title-container">
            <p class="main-title">КАКАО З ПЕРЦЕМ ЧИЛІ ТА РОМОМ</p>
        </div>
        <div class="main-container">
            <div class="left-container">
                <div class="image-block">
                    <img id="cocoa-image" class="cocoa-image  img-responsive" src="../images/recipeCocoa.jpg" alt="Cocoa">
                </div>
                <div class="ingredients-block">
                    <p class="ingredients-title">Інгредієнти</p>
                    <table class="table table-striped">
                        <tbody>
                          <tr>
                            <td>Чорний шоколад</td>
                            <td>50 г</td>
                          </tr>
                          <tr>
                            <td>Апельсинова цедра</td>
                            <td>¼ г</td>
                          </tr>
                          <tr>
                            <td>Вершки, 10 %</td>
                            <td>100 мл</td>
                          </tr>
                          <tr>
                            <td>Какао-порошок</td>
                            <td>1 ст. л.</td>
                          </tr>
                          <tr>
                            <td>Цукор</td>
                            <td>1 ч. л.</td>
                          </tr>
                          <tr>
                            <td>Ром</td>
                            <td>1 ст. л.</td>
                          </tr>

                          <tr>
                            <td>Перець чилі</td>
                            <td>½ дрібки</td>
                          </tr>
                          <tr>
                            <td>Морська сіль</td>
                            <td>½ дрібки.</td>
                          </tr>
                          <tr>
                            <td>Маршмелоу / збиті вершки</td>
                            <td>за смаком</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="right-container">
                <div class="recipe-stage-container">
                    <p class="recipe-title-block">Приготування</p>
                    <div class="recipe-cooking">
                        <p class="stage-number">Етап 1</p>
                        <p class="stage-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu 
                        </p>
                        <p class="stage-number">Етап 2</p>
                        <p class="stage-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu 
                        </p>
                        <p class="stage-number">Етап 3</p>
                        <p class="stage-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu 
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu 
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu  
                        </p>
                        <p class="stage-number">Етап 4</p>
                        <p class="stage-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu 
                        </p>
                        <p class="stage-number">Етап 5</p>
                        <p class="stage-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu 
                        </p>
                        <p class="stage-number">Етап 6</p>
                        <p class="stage-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu 
                        </p>
                        <p class="stage-number">Етап 7</p>
                        <p class="stage-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Quas doloremqu, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas doloremqu 
                        </p>
                    </div>
                </div>
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
                            <p>lana.gudyma15@gmail.com</p>
                            <p>or4uk15@gmail.com</p>
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
    </div>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js'></script>    
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script> 
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="../themes/switcher.js"></script>
    <script src = "recipes.js"></script>    
    <script src = "histogram.js"></script>
</body>
</html>