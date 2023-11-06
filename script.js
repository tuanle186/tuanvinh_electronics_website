function validateLoginForm() {
    let x = document.forms["loginForm"]["username"].value;
    let y = document.forms["loginForm"]["pwd"].value

    if (x == "" && y == "") {
        alert("Vui lòng điền thông tin đăng nhập")
        return false;
    } else if (x == "") {
        alert("Vui lòng điền tên đăng nhập");
        return false;
    } else if (y == ""){
        alert("Vui lòng điền mật khẩu");
        return false;
    }
}
