<!DOCTYPE html>
<html>

<head>

<title>Edit Employee</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">Edit Employee</h2>

<form action="update.php" method="post">

<input type="hidden" name="id" value="<?= $row['id'] ?>">

<div class="mb-3">
<input type="text" name="fname" value="<?= $row['f_name'] ?>" class="form-control">
</div>

<div class="mb-3">
<input type="text" name="lname" value="<?= $row['l_name'] ?>" class="form-control">
</div>

<div class="mb-3">
<input type="email" name="email" value="<?= $row['email'] ?>" class="form-control">
</div>

<div class="mb-3">
<input type="text" name="address" value="<?= $row['address'] ?>" class="form-control">
</div>

<button class="btn btn-primary">Update</button>

<a href="index.php" class="btn btn-secondary">Back</a>

</form>

</div>

</body>
</html>