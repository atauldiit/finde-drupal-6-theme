/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#customForm");
	var name = $("#name");
	var nameInfo = $("#nameInfo");
	var email = $("#email");
	var emailInfo = $("#emailInfo");
	var pass1 = $("#pass1");
	var pass1Info = $("#pass1Info");
	var pass2 = $("#pass2");
	var pass2Info = $("#pass2Info");
	var message = $("#message");
	
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	pass1.blur(validatePass1);
	pass2.blur(validatePass2);
	//On key press
	name.keyup(validateName);
	pass1.keyup(validatePass1);
	pass2.keyup(validatePass2);
	message.keyup(validateMessage);
	//On Submitting
	form.submit(function(){
		if(validateName() & validateEmail() & validatePass1() & validatePass2() & validateMessage())
			return true
		else
			return false;
	});
	
	//validation functions
	function validateEmail(){
		//testing regular expression
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			emailInfo.text("Gültige E-Mail bitte, Sie werden es brauchen, um sich anzumelden!");
			emailInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			email.addClass("error");
			emailInfo.text("Geben Sie eine gültige E-Mail bitte :P");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("Wir wollen Namen mit mehr als 3 Buchstaben!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text("Wie ist Ihr Name?");
			nameInfo.removeClass("error");
			return true;
		}
	}
	function validatePass1(){
		var a = $("#password1");
		var b = $("#password2");

		//it's NOT valid
		if(pass1.val().length <5){
			pass1.addClass("error");
			pass1Info.text("Denken Sie daran: Mindestens 5 Zeichen: Buchstaben, Zahlen und '_'");
			pass1Info.addClass("error");
			return false;
		}
		//it's valid
		else{			
			pass1.removeClass("error");
			pass1Info.text("Mindestens 5 Zeichen: Buchstaben, Zahlen und '_'");
			pass1Info.removeClass("error");
			validatePass2();
			return true;
		}
	}
	function validatePass2(){
		var a = $("#password1");
		var b = $("#password2");
		//are NOT valid
		if( pass1.val() != pass2.val() ){
			pass2.addClass("error");
			pass2Info.text("Passwörter nicht übereinstimmen!");
			pass2Info.addClass("error");
			return false;
		}
		//are valid
		else{
			pass2.removeClass("error");
			pass2Info.text("Kennwort bestätigen");
			pass2Info.removeClass("error");
			return true;
		}
	}
	function validateMessage(){
		//it's NOT valid
		if(message.val().length < 10){
			message.addClass("Fehler");
			return false;
		}
		//it's valid
		else{			
			message.removeClass("Fehler");
			return true;
		}
	}
});