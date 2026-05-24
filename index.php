<?php

session_start();

if(!isset($_SESSION['user'])){
header("Location:login.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Employees</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<?php

echo "<h4>Welcome ".$_SESSION['user']."</h4>";

require "db.php";

$db = new db();

$result = $db->get_data("emp");

?>

<a href="create.php" class="btn btn-success mb-3">Add Employee</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Address</th>
<th>Actions</th>
</tr>
</thead>

<tbody>

<?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>

<tr>

<td><?= $row['id'] ?></td>
<td><?= $row['f_name'] ?></td>
<td><?= $row['l_name'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['address'] ?></td>

<td>

<a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>

<a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>

<a href="logout.php" class="btn btn-secondary btn-sm">Logout</a>

</td>

</tr>

<?php endwhile; ?>

</tbody>

</table>

</div>

</body>
</html>