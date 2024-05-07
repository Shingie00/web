function saveData() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'save.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('result').innerHTML = xhr.responseText;
            document.getElementById('myForm').reset(); // Clear form after saving data
        }
    };
    xhr.send('name=' + name + '&email=' + email);
}
