<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5" style="max-width:400px">

<h3 class="mb-4 text-center">Login</h3>

<form action="logincontroller.php" method="post">

<div class="mb-3">
<input type="email" name="email" class="form-control" placeholder="Email">
</div>

<div class="mb-3">
<input type="password" name="pass" class="form-control" placeholder="Password">
</div>

<button class="btn btn-primary w-100">Login</button>

</form>

</div>

</body>
</html>