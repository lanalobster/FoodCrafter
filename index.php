<?php 
    require "./sessionInfo.php";
?>

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
                    <li><a href="./kitchen/kitchen.php">Кухня</a></li>
                    <li><a href="./recipes/recipes.php">Рецепти</a></li>
                </ul>
            </div>
            <div class="block-top-auth">
                <?php if (isset($_SESSION["nickName"])) :?>
                    <p class="nickname"><a href="userpage/userpage.php"><?php echo @$_SESSION["nickName"]; ?></p>
                    <p> <a href="logout.php">Вийти</p>
                <?php else : ?>
                    <p><a href="./login/login.php">Вхід</a></p>
                    <p><a href="./registration/registration.php">Реєстрація</a></p>
                <?php endif;?> 
            </div>
        </header>
        <div id="main-carousel" class="main-carousel">
            <div class="carousel-cell">
                <div class="cell1">
                    <div class="block1">
                        <h2>Розумний холодильник!</h2>
                        <div class="sup-text">
                            <p>Ми допоможемо підібрати рецепти з будь-яких інгредієнтів!</p>
                            <p>Ви готові почати творити?</p>
                        </div>   
                        <a href="./kitchen/kitchen.php" id="button-1" class="button1" 
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
                <p>Цей сайт для кожного, хто любить порадувати себе і близьких смакотою.</p>
                <p>Тут Ви зможете підібрати найкращий рецепт в залежності від інгредієнтів,</p>
                <p>які є у Вашому холодильнику, чим збережете себе від зайвого походу в машазин!</p>
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
                <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "Kindzmarauli13";
                    $dbname = "RecipeBook";

                    $conn = new mysqli($servername, $username, $password);

                    $sql = "SELECT * FROM $dbname.recipe LIMIT 4";
                    $result = $conn->query($sql);
                    while($recipe = $result->fetch_assoc()){
                        $recipeBlock = "<div class = 'col-lg-3 col-md-4 col-xs-6 thumb'>";
                        $recipeBlock .= "<a class='thumbnail' onclick='showRecipe(" . $recipe["id"] . ")'><img class='img-responsive' src='images/" . $recipe["image"] . "'>";
                        $recipeBlock .= " <div class='caption'><p>" . $recipe["name"] . "</p></div></a>";
                        $recipeBlock .= "</div>";
                        echo $recipeBlock; 
                    }
                    $conn->close();
                ?>
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
                        <div class="card">
                            <p><i class="fa fa-user"></i></p>
                            <?php require "./visitorCounter/visitorCounter.php"; ?>
                            <h3><?php echo $visitorCount?></h3>
                            <p>Людей переглянули цю сторінку!</p>
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
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js'></script>    
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script> 
    <script src="./index/print.js"></script>      
    <script src="./index/style.js"></script>
    <script src="./index/flickty.js"></script>
    <script src="./emailsInfo/printEmails.js"></script>
    <script src="./logging.js"></script>
</body>
</html>