const isPswValid = () => {
	let form = document.forms["registration-form"];
	if (form.psw.value != form.psw_repeat.value) {
		alert('Паролі не співпадають!');
		return false;
	} else {
		return true;
	}
};

const isEmailValid = () => {
	let form = document.forms["registration-form"]; 
	let text = form.email.value;
	let emailRE = /\S+@\S+\.\S+/;
	if (emailRE.test(text)) {
	  return true; 
	} else {
	  alert( "Неправильний формат пошти" );
	  return false;
	}
};

const isValid = () => {
	if (!isEmailValid()) {
		return false;
	} else if (!isPswValid()) {
		return false;
	}
	document.forms["registration-form"].submit();
	alert("Ви успішно зареєструвались!");
};

