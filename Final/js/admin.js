function updateUsers() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("userList").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../php/5_admin.php?fetch=1", true);
    xhttp.send();

    window.onload = updateUsers;
}
window.onload = updateUsers;
