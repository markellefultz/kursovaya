var pass = prompt("Введите пароль администратора:", "");
if (pass == null) window.location = "index.html";
else if (pass.toLowerCase() == "pass")  
      window.location = "admlog.html";
else 
{
	alert("пароль неверный");
	 window.location = "index.html";

}
