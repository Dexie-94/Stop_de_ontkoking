<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>
    <?php var_dump($conn); ?>
    <h1>THIS IS A TEST</h1>
    <?php if ($qRows > 0): ?>
    <div class="container">
    <?php foreach ($result as $row): ?>
    <div>
        <strong>Name:</strong> <?= $row['Name'] ?><br>
        <strong>Unique:</strong> <?= $row['Unique'] ?><br>
    </div>
    <?php endforeach; ?>
    </div>
    <?php else: ?>
    <p>NO RESULTS</p>
    <?php endif; ?>
</body>
</html>