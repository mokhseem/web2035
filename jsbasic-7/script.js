var getCookies = function () {
  let template = '';
  if (typeof Cookies.get('login') !== 'undefined') {
    template += 'login: ' + Cookies.get('login') + '<br>';
  }
  if (typeof Cookies.get('password') !== 'undefined') {
    template += 'password: ' + Cookies.get('password') + '<br>';
  }
  document.getElementsByClassName('saveCookie')[0].innerHTML = template;
}

let login = async function () {
  let username = document.getElementById('login').value;
  let password = document.getElementById('password').value;
  Cookies.set('login', username);
  Cookies.set('password', password);
  await getCookies();
}