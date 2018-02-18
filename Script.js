function isEmail() {
 var str = document.getElementById("email").value;
 var status = document.getElementById("status");
 var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
 if (re.test(str)) status.innerHTML = "Адрес правильный";
   else alert("Адрес неверный");
 if(isEmpty(str)) status.innerHTML = "Поле пустое";
}
function isEmpty(str){
 return (str == null) || (str.length == 0);
}
