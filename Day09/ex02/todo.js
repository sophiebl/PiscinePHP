var elem_nbr = 0;
var todo_list = '';
var splt = '<<splt>>';
var dom_save = getCookie('todoList');

window.onload = () => {
  if (dom_save) {
    todo_list = dom_save.split(splt);
    todo_list.pop();
    todo_list.forEach(function(todo) {
      ft_add_todo(todo);
    });
    todo_list = dom_save;
    setCookie('todoList', todo_list, 30);
  }
}

function ft_get_todo() {
  todo = prompt("Veuillez renseigner le nouveau to do :");
  ft_add_todo(todo);
}

function ft_add_todo(todo) {
  var mydiv = document.getElementById('ft_list');
  todo_list = todo_list + todo + splt;
  if (!todo || todo == '')
    return;
  var element = document.createElement('div');
  element.setAttribute('id', 'elem' + elem_nbr++);
  element.setAttribute('class', 'todo');
  element.addEventListener('click', () => {
    if (confirm('Delete to do ?')) {
      element.parentNode.removeChild(element);
      setCookie('todoList', todo_list.replace(todo.textContent + splt, ''), 30);
    }
  });
  todo = document.createTextNode(todo);
  element.appendChild(todo);
  mydiv.insertBefore(element, mydiv.firstChild);
  setCookie('todoList', todo_list, 30);
}

function setCookie(cname, cvalue, exmin) {
  var d = new Date();
  d.setTime(d.getTime() + (exmin * 24 * 60 * 60 * 1000));
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + "";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return 0;
}