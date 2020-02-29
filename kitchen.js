const addIngredient = () => {
	const input = document.getElementById("input-ingredient");
	const list = document.getElementById("list-ingredient");
	if (list.childNodes.length >= 10) {
		return;
	}
	const item = document.createElement('li');
	console.log(list.childNodes.length);
	item.innerHTML = ` <div id="ingredientID${list.childNodes.length}" class="item-ingredient">
				    	<div class="delete-button-block">
				    		<button class="delete-button" onclick="removeIngredient(ingredientID${list.childNodes.length})">X</button>
				    	</div>
				    	<div class="ingredient-name-block">
				    		<span class="ingredient-name">${input.value}</span>
				    	</div>
				    </div>`
	list.appendChild(item);
}

const removeIngredient = (ingredientID) => {
	ingredientID.parentNode.removeChild(ingredientID);
	console.log(ingredientID);
}
