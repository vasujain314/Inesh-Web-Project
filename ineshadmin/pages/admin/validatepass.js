
window.onload = function()
{ 
	flag = "no";
	matching = false ;
	flag7 = false ;
	flag8 = false;
}
function passwordhint()
{
document.getElementById("password2").style.visibility = "visible";
document.getElementById("password3").style.visibility = "visible";
	document.getElementById("password2").innerHTML = "<ul>" + "<li>"+ "Password should range from 8-15 letters" +"</li>" + "<li>"+ "Password should be from combination of alphabet(a-z OR A-Z),numbers(0-9) & underscore( _ )" +"</li>"+ "<li>" +"First Character must be an alphabet. "+ "</li>" +"</ul>"	
}
function showpassword()
{ 
     var a = document.getElementById("password").value.length ;
     //var b = document.getElementById("confirm").value;
	 var c = document.getElementById("password").value ;
document.getElementById("password2").style.visibility = "hidden";
document.getElementById("password3").style.visibility = "hidden"; 
if (matching)
	 {
		 if(document.getElementById("password").value != document.getElementById("confirm").value)
		 {
			document.getElementById("confirm1").innerHTML = "Passwords don't match"; 
			document.getElementById("confirmpic").style.visibility = "hidden";
			flag8 = false;
		 }
		 else
		 {
			document.getElementById("confirm1").innerHTML = ""; 
			document.getElementById("confirmpic").style.visibility = "visible";
			flag7 = true;
		 }
	 }
	var passw=  /^[A-Za-z]\w{7,14}$/; 
	if(a>0)
	{ 
if(c.match(passw))   
{   
document.getElementById("password1").innerHTML = ""
document.getElementById("passwordpic").style.visibility = "visible";
flag = "yes";
flag7 = true;
}
else
{
document.getElementById("password1").innerHTML = "Invalid Password format"
document.getElementById("passwordpic").style.visibility = "hidden";
document.getElementById("confirmpic").style.visibility = "hidden";
flag = "no";
flag7 = false;
}
	}
	if(a == 0)
	{
document.getElementById("password1").innerHTML = "Please Enter Password"
document.getElementById("passwordpic").style.visibility = "hidden"
flag = "no";
flag7 = false;	
	}
}
function showconfirm()
{ 
	var b = document.getElementById("confirm").value;
	var c = document.getElementById("password").value;
	if(flag == "yes")
	{
		if(b != c)
	{ 
	   
		document.getElementById("confirm1").innerHTML = "Passwords don't match"
		document.getElementById("confirmpic").style.visibility = "hidden"
		flag8 = false ;
	}
	else if(b == c)
	 {
		 
		 document.getElementById("confirm1").innerHTML = "" ;
		 document.getElementById("confirmpic").style.visibility = "visible" ;
		 flag8 = true ;
		 matching = true;
	 }
	
	}
	 else
	 {
		 document.getElementById("confirm").value = "" ;
		 document.getElementById("confirm1").innerHTML = "Enter password correctly first";
		 flag8 = false ;
	 }
	 
}