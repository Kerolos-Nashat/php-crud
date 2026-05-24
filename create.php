<!DOCTYPE html>
<html>

<head>

<title>Add Employee</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">Add Employee</h2>

<form action="store.php" method="post" enctype="multipart/form-data">

<div class="mb-3">
<input type="text" name="fname" class="form-control" placeholder="First Name">
</div>

<div class="mb-3">
<input type="text" name="lname" class="form-control" placeholder="Last Name">
</div>

<div class="mb-3">
<input type="email" name="email" class="form-control" placeholder="Email">
</div>

<div class="mb-3">
<input type="text" name="address" class="form-control" placeholder="Address">
</div>

<div class="mb-3">
<input type="password" name="password" class="form-control" placeholder="Password">
</div>

<button class="btn btn-success">Save</button>

<a href="index.php" class="btn btn-secondary">Back</a>

</form>

</div>

</body>
</html>