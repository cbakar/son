function checkPass() { 
	var pass1 = document.getElementById('password');
	var pass2 = document.getElementById('passwordVerify');
	var goodColor = "#00CCFF";
	var badColor = "#EF4136";
	
	if( pass1.value == pass2.value ) {
		pass2.style.backgroundColor = goodColor;
		pass1.style.backgroundColor = goodColor;
	} else {
		pass1.style.backgroundColor = badColor;
		pass2.style.backgroundColor = badColor;
	}
}


function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 46 || charCode > 57)) {
        return false;
    }
    return true;
}


function doSomething(e) {
	if (!e) var e = window.event;
	alert(e.type);
}