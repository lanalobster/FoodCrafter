<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">   
    <title>FoodCrafter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./index/header-footer.css">
    <link rel="stylesheet" type="text/css" href="./index/style.css">
    <link href="https://fonts.googleapis.com/css?family=Headland+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
      <!--For the icons:-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</style>
<body>
    <div id="block-body">
        <header id="main-header">
            <div class="logo">
                <a href="index.php">
                    <h1>
                        <span class="food">Food</span><span class="craft">Craft</span>
                    </h1>  
                </a>
            </div>
            <div class="top-menu">
                <ul>
                    <li><a href="../kitchen/kitchen.html">Кухня</a></li>
                    <li><a href="../recipes/recipes.html">Рецепти</a></li>
                    <li><a href="">Замовити</a></li>
                </ul>
            </div>
            <div class="block-top-auth">
                <p><a href="../login/login.html"class="auth-link">Вхід</a></p>
                <p><a href="../registration/registration.html"class="auth-link">Реєстрація</a></p>
            </div>
        </header>
        <div id="main-carousel" class="main-carousel">
            <div class="carousel-cell">
                <div class="cell1">
                    <div class="block1">
                        <h2>Розумний холодильник!</h2>
                        <div class="sup-text">
                            <p>Lorem ipsum dolor sit amet, consectetur </p>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>   
                        <a href="../kitchen/kitchen.html" id="button-1" class="button1" 
                        style = "font-size: 16px; color: white;">
                            Перейти до кухні!
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-cell">
                <div class="cell2">
                    
                </div>
            </div>
            <div class="carousel-cell">
                <div class="cell3">
                    
                </div>
            </div>
        </div>
        <div class="desciption-block" id = "desciption-block">
            <h1 class="desciption-block-header">Що тут можна знайти?</h1>
            <div class="desciption-block-supporttext">
                <p>Lorem ipsum dolor sit amet, consectetur</p>
                  <p>adipisicing elit. Itaque quae</p> 
                <p>voluptas, maxime corporis repellendus</p>
            </div>
            <div class="desciption-block-bottom">
                <p>Всі вкусняхи для тебе!</p>
            </div>
        </div>
        <div id="popular-recipe-block" class="popular-recipe-block">
            <div class="popular-recipe-block-header">
                <p>Наші пропозиції</p>
            </div>
            <div class="popular-recipe-block-cells">
                <div class="recipe1 recipe-block"></div>
                <div class="recipe2 recipe-block"></div>
                <div class="recipe3 recipe-block"></div>
                <div class="recipe4 recipe-block"></div>
            </div>
        </div>
        <div id="inspiration-block" class ="inspiration-block">
            <div class = "inspiration-image">
               <div class = "inspiration-cite">
                   <p>
                       "При великих неприємностях я відмовляю собі в усьому, крім їжі та напоїв."<span> Оскар Уайльд </span> 
                   </p>
               </div>
            </div>
            <div class = "inspiration-text">
                <h2 class="inspiration-text-header">Їжа</h2>
                <hr>
                <div class = "inspiration-text-suptext">
                     <p>Одне слово, а скільки щастя! Кожен інгредієнт, змішуючись з іншими, робить справжнє диво. Дуже хочеться вивчити кожен шматочок їжі, дізнатися, як вона робиться. Чим оригінальніше блюдо, тим більше воно подобається людям. Вам теж хочеться навчитися створювати таку красу? </p>
                </div> 
                <div class = "inspiration-text-bottom">
                    <p>Успіхів!</p>
                </div>      
            </div>
        </div>

        <!-- <Ляна> -->
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
                    <!-- <Орест>    -->
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-default" onclick="changePage()">Друк</button>
                    </div>
                    <!-- </Орест>  -->
                </div>
            </div>
        </footer>
        <!-- </Ляна> -->
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="../themes/switcher.js"></script>
    <script type='text/javascript' src='https:/s/ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js'></script>    
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script> 
    <script src="./index/print.js"></script>      
    <script src="./index/style.js"></script>
    <script src="./index/flickty.js"></script>
</body>
</html>