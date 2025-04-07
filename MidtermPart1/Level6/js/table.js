function addRow(CHECKCROSSBASIC, CHECKCROSSPRO) {
  let newROW = `<tr> <td>Sample text</td><td><i class="${CHECKCROSSBASIC}"></i></td><td><i class="${CHECKCROSSPRO}"></i></td></tr>`
  return newROW;
}

let NRROWS = 10;
let table = document.getElementById('comparisonTable')
for (let i = 0; i < NRROWS; i++) {
  const row = document.createElement('tr');
  row.innerHTML = addRow("fa fa-remove", "fa fa-check");
  table.appendChild(row);
}