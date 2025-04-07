let NRROWS = 2;
let FEATURES = ["Mary","Alice"];
let BASIC = ["fa fa-check","fa fa-remove"];
let PRO = ["fa fa-remove","fa fa-check"];
let table = document.getElementById('comparisonTable')

function addRow(FEATURE, CHECKCROSSBASIC, CHECKCROSSPRO) {
  let newROW = `<tr> <td>${FEATURE}</td><td><i class="${CHECKCROSSBASIC}"></i></td><td><i class="${CHECKCROSSPRO}"></i></td></tr>`
  return newROW;
}

for (let i = 0; i < NRROWS; i++) {
  const row = document.createElement('tr');
  row.innerHTML = addRow(FEATURES[i], BASIC[i], PRO[i]);
  table.appendChild(row);
}