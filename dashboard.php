<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Protect this page
if (!is_logged_in()) {
    redirect('auth/login.php');
}

$stmt = $pdo->query("SELECT * FROM instruments ORDER BY id ASC");
$instruments = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Symphony</title>
    <link rel="stylesheet" href="css/music_instruments.css">
    <style>
        .dashboard-container { max-width: 1000px; margin: 100px auto; padding: 2rem; }
        .dashboard-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
        .dashboard-header h1 { color: var(--text-gold); }
        table { width: 100%; border-collapse: collapse; margin-top: 2rem; color: #fff; }
        th, td { padding: 1rem; text-align: left; border-bottom: 1px solid var(--border-color); }
        th { background: rgba(255, 255, 255, 0.05); color: var(--text-gold); }
        .inst-img { width: 60px; height: 60px; object-fit: cover; border-radius: 4px; }
    </style>
</head>
<body>
    <nav>
        <div class="logo">SYMPHONY</div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="auth/logout.php" class="btn" style="padding: 0.4rem 1rem;">Logout</a>
        </div>
    </nav>

    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <p>Member strictly protected area.</p>
        </div>
        
        <div class="section-header" style="text-align: left;">
            <h2>Instrument Database</h2>
            <p>Here are the cataloged instruments available in the system.</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Family</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($instruments as $inst): ?>
                <tr>
                    <td><img src="<?php echo htmlspecialchars($inst['image_url']); ?>" alt="<?php echo htmlspecialchars($inst['name']); ?>" class="inst-img"></td>
                    <td><strong><?php echo htmlspecialchars($inst['name']); ?></strong></td>
                    <td><span class="text-gold"><?php echo htmlspecialchars($inst['family']); ?></span></td>
                    <td><?php echo htmlspecialchars($inst['description']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
