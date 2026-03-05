<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hospital Login</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(120deg,#0f2027,#203a43,#2c5364);
}

.login-container{
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    padding:40px;
    width:350px;
    border-radius:20px;
    box-shadow:0 8px 32px rgba(0,0,0,0.3);
    text-align:center;
    color:white;
}

.login-container h2{
    margin-bottom:25px;
    font-weight:600;
}

.input-group{
    margin:15px 0;
}

input{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    outline:none;
    font-size:15px;
}

button{
    width:100%;
    padding:12px;
    margin-top:15px;
    border:none;
    border-radius:10px;
    background:#00c6ff;
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#0072ff;
    transform:scale(1.05);
}
</style>
</head>

<body>

<div class="login-container">
    <h2>Hospital Admin Login</h2>

    <div class="input-group">
        <input type="text" placeholder="Username" id="username">
    </div>

    <div class="input-group">
        <input type="password" placeholder="Password" id="password">
    </div>

    <button onclick="login()">Login</button>
</div>

<script>
function login(){
    var user=document.getElementById("username").value;
    var pass=document.getElementById("password").value;

    if(user==="admin" && pass==="1234"){
        window.location.href="dashboard.php";
    }else{
        alert("Invalid Login");
    }
}
</script>

</body>
</html>