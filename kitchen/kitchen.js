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
					   		<button class="delete-button" onclick="removeIngredient(ingredientID${list.childNodes.length})">X</button>
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

const removeIngredient = (ingredientID) => {
	alert("remove");
	$("#ingredientID").fadeOut();
	//ingredientID.parentNode.removeChild(ingredientID);
}

$(document).ready(() => {
    $("#button-1").mouseenter(() => {
        $("#button-1").css("border", "3px solid #f00500");
    });
    
    $("#button-1").mouseleave(() => {
        $("#button-1").css("border", "0px");
	});
	
	// <Ляна>
    $(":button").click(() => {
		if(!($("#input-ingredient").val())) {
			alert("Введіть назву інгредієнта");
		}
	});

	$(".item-ingredient").dblclick(() => {
		alert("Введіть назву інгредієнта");
	});
	// </Ляна>
});