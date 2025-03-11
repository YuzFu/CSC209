const currentDate = new Date();
const currentMonth = currentDate.getMonth();
const currentYear = currentDate.getFullYear();
const today = currentDate.getDate(); 

const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

document.getElementById('currentMonth').innerHTML = monthNames[currentMonth];
document.getElementById('currentYear').innerHTML = currentYear;

const firstDay = new Date(currentYear, currentMonth, 1).getDay();
const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

let days = "";
for (let i = 1; i <= daysInMonth; i++) {
    if (i === today) {
        days += `<li><span class="active">${i}</span></li>`; 
    } else {
        days += `<li>${i}</li>`;
    }
}

document.querySelector(".days").innerHTML = days;
