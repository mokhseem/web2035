let getForm = function () {
  let polInputs = document.getElementsByName('pol');
  let result = {};
  for (let i = 0; i < polInputs.length; i++) {
    if (polInputs[i].checked) {
      result[polInputs[i].value] = { status: 'checked' };
    } else {
      result[polInputs[i].value] = { status: String(polInputs[i].checked) }
    }
  }
  return result;
};
console.log(getForm());