
function Add()
{
  try
  {
    var name = prompt('Введите имя:');
    if(name == "") throw new Exception;
    if(name == null) return;
    var phone = prompt('Введите номер телефона:');
    if(phone == "") throw new Exception;
    if(phone == null) return;
    return name;
     //if(isEmai(phone) == false) throw new Exception;
    //var message = encodeURIComponent(name);
    //var message2 = encodeURIComponent(phone);
    //window.location.href = 'Script.php?message'+message;//+message2;
    /*var table = document.getElementById(id).getElementsByTagName('tbody')[0];

    var row = document.createElement("tr");
    table.appendChild(row);
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");

    row.appendChild(td1);
    row.appendChild(td2);

    td1.innerHTML = name;
    td2.innerHTML = phone;*/
    //alert('Абонент успешно добавлен');
  }
  catch(ex)
  {
    alert('Ошибка добавления!\nПоля не должны быть пустыми!\nЛибо некорректные данные!\n'+ex.message);
  }
}
//-----------------------------------------------------
function Del()
{
  try
  {
    var name = prompt("Введите имя удаляемого абонента:");
    return name;
  }
  catch(ex)
  {
    alert('Ошибка удаления!');
  }
}
