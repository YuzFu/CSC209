function updateUsers() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("userList").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../php/admin.php?fetch=1", true);
    xhttp.send();

    window.onload = updateUsers;
}
window.onload = updateUsers;
