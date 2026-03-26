<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
min-height:100vh;
background:linear-gradient(135deg,#667eea,#764ba2,#6dd5ed);
background-size:400% 400%;
animation:gradientBG 12s ease infinite;
display:flex;
justify-content:center;
align-items:center;
}

@keyframes gradientBG{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

.dashboard{
width:900px;
padding:40px;
border-radius:25px;
background:rgba(255,255,255,0.1);
backdrop-filter:blur(15px);
box-shadow:0 8px 32px rgba(0,0,0,0.3);
color:white;
}

.header{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:30px;
}

.header h1{
font-size:28px;
}

.login{
text-decoration:none;
padding:8px 20px;
border-radius:20px;
background:linear-gradient(45deg,#ff7eb3,#ff758c);
color:white;
transition:0.3s;
}

.logout:hover{
transform:scale(1.05);
box-shadow:0 0 10px rgba(255,255,255,0.5);
}

.cards{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:20px;
}

.card{
padding:25px;
border-radius:20px;
background:rgba(255,255,255,0.15);
text-align:center;
transition:0.3s;
}

.card:hover{
transform:translateY(-5px);
box-shadow:0 5px 15px rgba(0,0,0,0.3);
}

.card h2{
font-size:22px;
margin-bottom:10px;
}

.card p{
font-size:14px;
opacity:0.9;
}

.footer{
margin-top:30px;
text-align:center;
font-size:13px;
opacity:0.8;
}
</style>

</head>
<body>

<div class="dashboard">

<div class="header">
<h1>Dashboard Ustadzah Anditha</h1>
<a href="/login" class="login">Backburner</a>
</div>

<div class="cards">



</div>

<div class="footer">
Welcome to dashboard
</div>

</div>

</body>
</html>
