<?php 
    require "../sessionInfo.php";
    require "unsetFoundIds.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../index/header-footer.css">
	<link rel="stylesheet" type="text/css" href="kitchen.css">
    <link href="https://fonts.googleapis.com/css?family=Headland+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
      <!--For the icons:-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js'></script>    
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script> 
		
	<title>Kitchen</title>
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
                    <li><a href="kitchen.php">Кухня</a></li>
                    <li><a href="../recipes/recipes.php">Рецепти</a></li>
                    
                </ul>
            </div>
            <div class="block-top-auth">
                <?php if (isset($_SESSION["nickName"])) :?>
                    <p><?php echo @$_SESSION["nickName"]; ?></p>
                    <p> <a href="../logout.php">Вийти</p>
                <?php else : ?>
                    <p><a href="../login/login.php">Вхід</a></p>
                    <p><a href="../registration/registration.php">Реєстрація</a></p>
                <?php endif;?> 
            </div>
        </header>
        <div class="main-block">
	       <div class="input-block">
	       		<div class="main-header">
	       			<h1>Вибір інгредієнтів</h1>
	       		</div>
	       		<div class="input-body">
	       			<img class="input-img" src="../images/foodlogo.png" alt="">
                    <p id="hints"></p>
	       			<div class="add-form">
			       		<input autocomplete="off" id="input-ingredient" type="text"
                            placeholder="Введіть назву інгредієнта" name="uname" onkeyup="showHints(this.value)" required>
			       		<button class = "add-button" type="button" onclick="addIngredient()">Добавити</button>
					</div>
	       		</div>
	       </div>
	       <div class="output-block">
	       		<div class="main-header">
	       			<h1>Ваші інгредієнти</h1>
	       		</div>
				<ol id="list-ingredient">
				  
				</ol>
	       </div>
	       <div class="find-recipe-block">
	       		<div class="main-header">
	       			<h1>Пропоновані рецепти</h1>
                </div>
                    <div class="container-fluid">
                        <div class="row" id="recipes">
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
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class = "profiles">
                            <h4>МИ У СОЦІАЛЬНИХ МЕРЕЖАХ</h4>
                            <hr>
                            <ul>
                                <li>
                                    <a title = "FoodCraft Instagram Page" href="https://www.instagram.com/lanahudyma?r=nametag" class="fa fa-instagram"></a>
                                </li>
                                <li>
                                    <a title = "FoodCraft Facebook Page" href="https://www.facebook.com/ira.hudyma" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a class="fa fa-telegram" title = "FoodCraft Telegram Page" href="https://t.me/Ygleplastic28"></a>
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
		<script src="kitchen.js"></script>
        <script src="../emailsInfo/printEmails.js"></script>
	</div>
</body>
</html>