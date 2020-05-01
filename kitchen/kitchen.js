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

	if (list.childNodes.length <= 1) {
		list.appendChild(item);
		console.log("option 1");
	} else {
		list.insertBefore(item, list.childNodes[0]);
		console.log("option 2");
	}
}
// </Ляна>
const removeIngredient = (ingredientID) => {
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
	$.get("http://localhost:8080/FoodCrafter/kitchen/showHints.php", 
	{
		input: input
	}, function(data){
		var foundHints = data;
		if(String(foundHints) == "null")
		{
			$("#hints").hide();
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
	
	// <Ляна>
    $(":button").click(() => {
		if(!($("#input-ingredient").val())) {
			alert("Введіть назву інгредієнта");
		}
	});
	// </Ляна>
});