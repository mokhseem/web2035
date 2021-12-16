let setStyle = function (fontColor, fontSize) {
  let nodes = document.getElementsByClassName('listNumbers')[0].childNodes;
  for (let i = 0; i < nodes.length; i++) {
    if (nodes[i].nodeType === 1) {
      nodes[i].style.color = fontColor;
      nodes[i].style.fontSize = fontSize;
    }
  }
};