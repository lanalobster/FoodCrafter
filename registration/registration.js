// </Orest>
$("input").focus(function() {
	$(this).css("color", "black");
});

$("input").blur(function() {
	$(this).css("color", "grey");
});
// </Orest>
const foodAdjectives = ["Warm", "Bitter", "Disgusting",
	"Awesome", "Bittersweet", "Frosty", "Grilled",
	"Scrambled", "Sweet"]

const foodNames = ["Pasta", "Fries", "Ice Cream" ,
	 "Bread", "Rice", "Pancakes", "Burger", "Pizza",
	 "Pumpkin", "Pie", "Chicken", "Banana", "Apple", 
	 "Bagel", "Muffins", "Sauce", "Peanut", "Cake",
	 "Cheesecake", "Cheese",  "Bread"];

const getRandomInteger = (max) => {
	return Math.floor(Math.random() * max );
}

const generateNick = () =>{
	let date = new Date();
	let nickInput = document.getElementById('nick-name');
	nickInput.value = foodAdjectives[getRandomInteger(foodAdjectives.length)] + 
		"_" + foodNames[getRandomInteger(foodNames.length)] + "_" + 
		date.getMilliseconds();
}
// <Ляна>
const changeInputColor = () =>{
	$(document).ready(() => {
		$("input").each(function(){
			if($(this).val() == "")
				$(this).css('backgroundColor', '#FF7B40');
		})	
	});
}

$(document).ready(() => {
	$("input").change(function(){
		$(this).css('backgroundColor', 'white');
	})	
});
// </Ляна>