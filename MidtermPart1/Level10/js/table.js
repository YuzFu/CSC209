let NRROWS = 10;
let FEATURES = ["A","B", "C", "D", "E", "F", "G", "H", "I", "J"];
let BASIC = ["fa fa-check","fa fa-remove","fa fa-check","fa fa-remove","fa fa-remove","fa fa-check","fa fa-remove","fa fa-check","fa fa-check","fa fa-remove"];
let PRO = ["fa fa-remove","fa fa-check","fa fa-check","fa fa-remove","fa fa-check","fa fa-check","fa fa-remove","fa fa-remove","fa fa-remove","fa fa-remove"];

function addRow(FEATURE, CHECKCROSSBASIC, CHECKCROSSPRO) {
  let table = document.getElementById('comparisonTable');
  let row = table.insertRow();
  let cell1 = row.insertCell(0);
  let cell2 = row.insertCell(1);
  let cell3 = row.insertCell(2);
  cell1.innerHTML = FEATURE;
  cell2.innerHTML = `<i class="${CHECKCROSSBASIC}"></i>`;
  cell3.innerHTML = `<i class="${CHECKCROSSPRO}"></i>`;
}

for (let i = 0; i < NRROWS; i++) {
  addRow(FEATURES[i], BASIC[i], PRO[i]);
}