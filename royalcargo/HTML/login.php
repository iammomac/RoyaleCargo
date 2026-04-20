<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title>Royal Cargo</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
<div class="login-wrapper">
    <div class="glow-ring"></div>
    <div class="login-box">
        <div class="logo">
    <span> <img src="../IMAGES/royal_cargo.png" alt="LOGO" width="150"></span>
</div>
        <h2>Login</h2>
        <input type="text" id="username" placeholder="Username">
        <input type="password" id="password" placeholder="Password">
        <button onclick="loginUser()">Login</button>
        <div class="links">
            <a href="#">Forget Password</a>
        </div>
    </div>
</div>



</body>

</html>

<script>
function loginUser() {
    const data = new FormData();

    data.append("username", document.getElementById("username").value);
    data.append("password", document.getElementById("password").value);

    fetch("../api/login.php", {
        method: "POST",
        body: data
    })
    .then(res => res.text())
    .then(response => {
        if (response === "success") {
            window.location.href = "dashboard.php";
        } else {
            alert("(-_-)   Wrong username or password   (-_-)");
        }
    });
}
</script>