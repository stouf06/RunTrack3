<?php
if (session_id() == "") {
    session_start();
}

require_once('db_utilisateurs2.php');

try {
    $query = $pdo->prepare('SELECT * FROM utilisateurs');
    $query->execute();
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des utilisateurs : " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Liste des utilisateurs</h2>
        <?php if ($users): ?>
            <ul>
                <?php foreach ($users as $user): ?>
                    <li>
                        <?php echo htmlspecialchars($user['firstname']) . " " . htmlspecialchars($user['lastname']); ?>
                        <?php echo htmlspecialchars($user['email']) . "<br/><br/>"; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aucun utilisateur trouvé.</p>
        <?php endif; ?>
    </div>
</body>
</html>
