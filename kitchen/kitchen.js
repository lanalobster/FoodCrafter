const addIngredient = () => {
	const input = document.getElementById("input-ingredient");
	const list = document.getElementById("list-ingredient");
	if (list.childNodes.length >= 10) {
		return false;
	} else if (input.value === ""){
		return false;
	}
	const item = document.createElement('li');
	item.id = `ingredientID${list.childNodes.length}`;
	console.log(list.childNodes.length);
	item.innerHTML =`<div class="item-ingredient">
					   	<div class="delete-button-block">
							   <button class="delete-button" onclick="removeIngredient(ingredientID${list.childNodes.length})">
							   		<span class="glyphicon glyphicon-remove"></span>  
							   </button>
					   	</div>
				    	<div class="ingredient-name-block">
				    		<span class="ingredient-name">${input.value}</span>
				    	</div>
					</div>`;	
	// <Ляна> 
	$.post("addIngredient.php",
		{
			ingredientName: input.value
		});//, (data) => {alert("Ingreds after adding:" + JSON.parse(data));});	
	$.post("findRecipes.php", (data) => {
			var recipeIds = JSON.parse(data);
			//alert("Found recipe ids in recipe search:" + recipeIds);
			const recipesDiv = document.getElementById("recipes");
			recipesDiv.innerHTML = '';
			for(var i = 0; i < recipeIds.length; ++i){
				$.get("generateRecipeBlock.php", {id: recipeIds[i]}, (innerHTML) =>
				{
					const recipesDiv = document.getElementById("recipes");
					const recipeBlock = document.createElement('div');
					recipeBlock.setAttribute('class', 'col-lg-3 col-md-4 col-xs-6 thumb');
					recipeBlock.innerHTML = innerHTML;
					recipesDiv.appendChild(recipeBlock);
				});
			}
		});
	// </Ляна> 
	if (list.childNodes.length <= 1) {
		list.appendChild(item);
	} else {
		list.insertBefore(item, list.childNodes[0]);
	}
	input.value = "";
	$("#hints").hide();
}
// </Ляна>

const removeIngredient = (ingredientID) => {
	// <Ляна>
	var ingredientName = $("#" + ingredientID.id).find("span.ingredient-name").text();
	$.post("removeIngredient.php",
		{
			ingredientName: ingredientName
		}); //, (data) => {alert("Ingreds after removing:" + JSON.parse(data));});	
	$.post("findRecipes.php", (data) => {
			var recipeIds = JSON.parse(data);
			//alert("Found recipe ids in recipe search:" + recipeIds);
			const recipesDiv = document.getElementById("recipes");
			recipesDiv.innerHTML = '';
			for(var i = 0; i < recipeIds.length; ++i){
				$.get("generateRecipeBlock.php", {id: recipeIds[i]}, (innerHTML) =>
				{
					const recipesDiv = document.getElementById("recipes");
					const recipeBlock = document.createElement('div');
					recipeBlock.setAttribute('class', 'col-lg-3 col-md-4 col-xs-6 thumb');
					recipeBlock.innerHTML = innerHTML;
					recipesDiv.appendChild(recipeBlock);
				});
			}
		});
	// </Ляна>
	$("#" + ingredientID.id).fadeOut("fast", function() {
		ingredientID.parentNode.removeChild(ingredientID);
	});
}

const showHints = (input) => {
	if(input == "")
	{
		$("#hints").hide();
		return;
	}
	$.get("../kitchen/showHints.php", 
	{
		input: input
	},	data => {
			var foundHints = data;
			if(String(foundHints) == "null")
			{
				$("#hints").text("Інгредієнта з такою назвою у нас не існує! ");
				return;
			}
			$("#hints").show();
			$("#hints").text("Можливо ви мали на увазі " + foundHints);  
	});
}
// <Ляна>

$(document).ready(() => {
	// <Орест>
    $("#button-1").mouseenter(() => {
        $("#button-1").css("border", "3px solid #f00500");
    });
    $("#button-1").mouseleave(() => {
        $("#button-1").css("border", "0px");
	});
	// </Орест>
});

const showRecipe = (recipeId) => {
	window.location = "../recipe/recipe.php?recipeId=" + recipeId;
}