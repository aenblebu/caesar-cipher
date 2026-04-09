<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Daftar Pengguna</title>

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

.container{
width:800px;
padding:30px;
border-radius:20px;
background:rgba(255,255,255,0.1);
backdrop-filter:blur(15px);
box-shadow:0 8px 32px rgba(0,0,0,0.3);
color:white;
}

h2{
text-align:center;
margin-bottom:20px;
}

table{
width:100%;
border-collapse:collapse;
overflow:hidden;
border-radius:10px;
}

table th, table td{
padding:12px;
text-align:center;
}

table th{
background:rgba(255,255,255,0.2);
}

table tr{
background:rgba(255,255,255,0.1);
transition:0.3s;
}

table tr:hover{
background:rgba(255,255,255,0.2);
}

table td{
color:#fff;
}

.logout{
margin-top:20px;
text-align:center;
}

.logout a{
padding:10px 20px;
border-radius:30px;
background:linear-gradient(45deg,#ff7eb3,#ff758c);
color:white;
text-decoration:none;
transition:0.3s;
display:inline-block;
}

.logout a:hover{
transform:scale(1.05);
box-shadow:0 0 15px rgba(255,255,255,0.5);
}
</style>

</head>

<body>

<div class="container">

<h2>Daftar Pengguna</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
    </tr>
    @endforeach
</table>

<div class="logout">
    <a href="/logout">Logout</a>
</div>

</div>

</body>
</html>