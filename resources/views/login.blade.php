<html>
<head>
<meta charset="UTF-8">
<title>Login </title>

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
background: linear-gradient(135deg,#667eea,#764ba2,#6dd5ed);
background-size: 400% 400%;
animation: gradientBG 12s ease infinite;
}

@keyframes gradientBG{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

.container{
width:350px;
padding:40px;
border-radius:20px;
background:rgba(255,255,255,0.1);
backdrop-filter:blur(15px);
box-shadow:0 8px 32px rgba(0,0,0,0.3);
text-align:center;
color:white;
}

.container h2{
margin-bottom:25px;
font-size:28px;
letter-spacing:1px;
}

.input-group{
margin-bottom:20px;
text-align:left;
}

/* LABEL */
.input-group label{
font-size:13px;
margin-left:5px;
color:#eee;
}

/* INPUT (INI YANG DIPERBAGUS 🔥) */
.input-group input{
width:100%;
padding:12px 15px;
margin-top:5px;
border:1px solid rgba(255,255,255,0.3);
border-radius:12px;
outline:none;
background:rgba(255,255,255,0.1);
color:white;
font-size:14px;
backdrop-filter:blur(5px);
transition:all 0.3s ease;
}

/* FOCUS EFFECT */
.input-group input:focus{
border:1px solid #ff7eb3;
background:rgba(255,255,255,0.2);
box-shadow:0 0 10px rgba(255,126,179,0.6);
}

/* PLACEHOLDER */
.input-group input::placeholder{
color:#ddd;
opacity:0.8;
}

button{
width:100%;
padding:12px;
border:none;
border-radius:30px;
background:linear-gradient(45deg,#ff7eb3,#ff758c);
color:white;
font-size:16px;
cursor:pointer;
transition:0.3s;
}

button:hover{
transform:scale(1.05);
box-shadow:0 0 15px rgba(255,255,255,0.5);
}

.footer{
margin-top:15px;
font-size:12px;
opacity:0.8;
}
</style>

</head>
<body>

<div class="container">

<h2>Login</h2>

<form action="/login" method="POST">
    @csrf

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan username">
    </div>

    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password">
    </div>

    <button type="submit">Login</button>
</form>

</div>

</body>
</html>