<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

include 'db.php';

// Fetch projects
$sql = "SELECT id, title, description, languages, url FROM projects";
$projects = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content here -->
</head>
<body>
    <h1>Admin Dashboard</h1>
    <a href="admin_add_project.php">Add New Project</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Languages/Frameworks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($project = $projects->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($project['title']); ?></td>
                <td><?php echo htmlspecialchars($project['description']); ?></td>
                <td><?php echo htmlspecialchars($project['languages']); ?></td>
                <td>
                    <a href="admin_edit_project.php?id=<?php echo $project['id']; ?>">Edit</a>
                    <a href="admin_delete_project.php?id=<?php echo $project['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Include your scripts here -->

</body>
</html>
