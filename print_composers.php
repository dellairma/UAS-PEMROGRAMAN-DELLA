<?php
include 'db.php';

$query = $pdo->query("SELECT * FROM composers");
$composers = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Composer</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f0fa;
            color: #4b0082;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #4b0082;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #6a1b9a;
            color: white;
        }
    </style>
</head>
<body>

<h1 style="text-align: center;">Data Composer</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Tahun Lahir</th>
    </tr>
    <?php foreach ($composers as $composer): ?>
    <tr>
        <td><?php echo $composer['id']; ?></td>
        <td><?php echo $composer['name']; ?></td>
        <td><?php echo $composer['birth_year']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>