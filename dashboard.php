<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit();
}
include 'config.php';

// Liste des utilisateurs
$result = $conn->query("SELECT * FROM elearning");
?>
<h2>Tableau de bord Admin</h2>
<a href="add_user.php">Ajouter un utilisateur</a><br><br>
<table border="1">
<tr><th>ID</th><th>Nom</th><th>Email</th><th>Login</th><th>Rôle</th><th>Action</th></tr>
<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['login'] ?></td>
    <td><?= $row['role'] ?></td>
    <td><a href="delete_user.php?id=<?= $row['id'] ?>">Supprimer</a></td>
</tr>
<?php } ?>
</table>
