let buildNames = function (nameList, parrentNode) {
  let root = document.getElementsByClassName(parrentNode)[0];
  if (root !== undefined) {
    for (let i = 0; i < nameList.length; i++) {
      let li = document.createElement('li');
      li.innerText = nameList[i];
      root.append(li);
    }
    return true;
  } else {
    return false;
  }
};
//buildNames(['Вася', 'Тася', 'Кира', 'Жорж'], 'list');