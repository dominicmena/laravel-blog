<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div style='border: 3px solid black;'>
<h2>Register</h2>
<form action="/register" method="POST">
    @csrf
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="email"name="email">
    <input type="text" placeholder="password" name="password">
    <button>Register</button>
</form>
   </div>
</body>
</html>