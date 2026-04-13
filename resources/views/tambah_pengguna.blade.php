<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tambah Pengguna</title>

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
font-size:26px;
}

.input-group{
margin-bottom:20px;
text-align:left;
}

.input-group label{
font-size:13px;
margin-left:5px;
color:#eee;
}

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
transition:0.3s;
}

.input-group input:focus{
border:1px solid #00c6ff;
background:rgba(255,255,255,0.2);
box-shadow:0 0 10px rgba(0,198,255,0.6);
}

button{
width:100%;
padding:12px;
border:none;
border-radius:30px;
background:linear-gradient(45deg,#00c6ff,#0072ff);
color:white;
font-size:16px;
cursor:pointer;
transition:0.3s;
}

button:hover{
transform:scale(1.05);
box-shadow:0 0 15px rgba(255,255,255,0.5);
}

.back{
margin-top:15px;
display:block;
color:#ddd;
font-size:13px;
text-decoration:none;
}
</style>

</head>

<body>

<div class="container">

<h2>Tambah Pengguna</h2>

<form method="POST" action="/store">
@csrf

<div class="input-group">
    <label>Email</label>
    <input type="email" name="email" placeholder="Masukkan email" required>
</div>

<div class="input-group">
    <label>Password</label>
    <input type="text" name="password" placeholder="Masukkan password" required>
</div>

<button type="submit">Simpan</button>

</form>

<a href="/daftar_pengguna" class="back">← Kembali</a>

</div>

</body>
</html>