<?php include 'db.php'; ?>
<?php
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $stmt = $conn->prepare("DELETE FROM table_items WHERE id = ?");
 $stmt->execute([$id]);
 header("Location: index.php");
}
?>