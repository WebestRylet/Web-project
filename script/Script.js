function Add(id)
{
  try
  {
    var str = "";
    var name = prompt('Введите имя:');
    if(name == "") throw new Exception;
    if(name == null) return;
    if(id =='phone_tab') str = 'Введите номер телефона:';
    else if(id == 'mail_tab') str = 'Введите адрес электронной почты:';
    else if(id == 'skype_tab') str = 'Введите логин:';
    var phone = prompt(str);
    if(phone == "") throw new Exception;
    if(phone == null) return;
    if(!isEmail) throw new Exception;

    var table = document.getElementById(id).getElementsByTagName('tbody')[0];
    /*var newRow = table.insertRow(-1);
    var newCell = newRow.insertCell(0);
    var newText = document.createTextNode(name);
    newCell.appendChild(newText);
    var newCell = newRow.insertCell(1);
    var newText = document.createTextNode(phone);
    newCell.appendChild(newText);*/

    var row = document.createElement("tr");
    table.appendChild(row);
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");

    row.appendChild(td1);
    row.appendChild(td2);

    td1.innerHTML = name;
    td2.innerHTML = phone;
    alert('Абонент успешно добавлен');
  }
  catch(ex)
  {
    alert('Ошибка добавления!\nПоля не должны быть пустыми!\nЛибо некорректные данные!\n'+ex.message);
  }
 //var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
}
//-----------------------------------------------------
function isEmail() {
 var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
 if (re.test(str)) return true;
   else return false;
}
//-----------------------------------------------------
function Del()
{
  try
  {
    var name = prompt("Введите имя удаляемого абонента:")
    alert('Абонент успешно удален');
  }
  catch(ex)
  {
    alert('Ошибка удаления!');
  }
}
