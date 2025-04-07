function addRow(CHECKCROSSBASIC, CHECKCROSSPRO) {
  let newROW = `<tr> <td>Sample text</td><td><i class="${CHECKCROSSBASIC}"></i></td><td><i class="${CHECKCROSSPRO}"></i></td></tr>`
  return newROW;
}

document.getElementById('testRow').innerHTML = addRow("fa fa-remove", "fa fa-check");