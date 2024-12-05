<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>HARD CRUD</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
 <h1>STUDENTS OF CTU</h1>
 <a href="create.php">Add New Item</a>
 <table border="1">
 <tr>
 <th>ID</th>
 <th>Name</th>
 <th>Description</th>
 <th>Actions</th>
 </tr>
 <?php
 $stmt = $conn->query("SELECT * FROM table_items");
 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 echo "<tr>
 <td>{$row['ID']}</td>
 <td>{$row['name']}</td>
 <td>{$row['description']}</td>   
 <td>
 <a href='update.php?id={$row['ID']}'>Edit</a>
 <a href='delete.php?id={$row['ID']}'>Delete</a>
 </td>
 </tr>";
 }
 ?>
 </table>
</body>
</html>