let getForm = function () {
  let result = {};

  result['name'] = document.getElementsByTagName('input')[0].value;
  result['surname'] = document.getElementsByTagName('input')[1].value;
  result['age'] = document.getElementsByTagName('input')[2].value;

  let polInputs = document.getElementsByName('sex');
  let radioSex = {};

  for (let i = 0; i < polInputs.length; i++) {
    if (polInputs[i].checked) {
      radioSex[polInputs[i].value] = { status: 'checked' };
    } else {
      radioSex[polInputs[i].value] = { status: String(polInputs[i].checked) };
    }
  };
  
  result['sex'] = radioSex;

  console.log(result);
  return result;
};