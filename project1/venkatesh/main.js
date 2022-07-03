function register()
{
	alert('Do you want to register');
	var uname = document.getElementById("uname").value;
	var pwd = document.getElementById("pwd").value;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var email = document.getElementById("email").value;
	var mobile = document.getElementById("mobile").value;
	var gender = document.getElementsByName("gender").value;
	var address = document.getElementById("address").value;

	window.location.href = "add.php?var1=" + fname + "&var2=" + lname+ "&var3=" + email+ "&var4=" + mobile+ "&var5=" + gender+ "&var6=" + address+ "&var7=" + uname+ "&var8=" + pwd;
	alert('registerd');
}
function cancel()
{
	var conf = confirm("Are you sure, Do you want to cancel opertion?");
        if (conf == true) {
            close();
		}
}
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
			location.replace("register.html")
            return false;
        }
        return true;
}
function signup()
{
	location.replace("register.html")
}
function login()
{
	location.replace("login.html")
}
function checkEqual()
{
	var uname2 = document.getElementById("uname2").value;
	var pwd2 = document.getElementById("pwd2").value;

	window.location.href = "get.php?var9=" + uname2+ "&var10=" + pwd2;
}