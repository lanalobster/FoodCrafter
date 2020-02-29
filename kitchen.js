const addIngredient = () => {
	const input = document.getElementById("input-ingredient");
	const list = document.getElementById("list-ingredient");
	if (list.childNodes.length >= 10) {
		return;
	} else if (input.value === ""){
		return;
	}
	const item = document.createElement('li');
	item.id = `ingredientID${list.childNodes.length}`;
	console.log(list.childNodes.length);
	item.innerHTML = ` <div class="item-ingredient">
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
	input.value = "";
}

const removeIngredient = (ingredientID) => {
	ingredientID.parentNode.removeChild(ingredientID);
}
