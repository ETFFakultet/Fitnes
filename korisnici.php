<?php
require_once ('konekcija.php');
require_once ('konfiguracija.php');
include 'predlozak/head.php';
$sql = 'SELECT * FROM clan ORDER BY ime';
$result = $conn->query($sql,PDO::FETCH_ASSOC) ;
$users = $result->fetchAll();

$i = 0;
?>

<!DOCTYPE html>
<head>
    <link href="<?php echo $putanjaAPP; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table class="table table-inverse">
        <thead>
        <tr>
            <th>#</th>
            <th>Ime</th>
            <th>ID</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($users as  $user):?>
        <tr>
            <th scope="row"><?php echo $i ; ?></th>
            <td><?php echo $user['ime'] ?></td>
            <td><?php echo $user['id'] ?></td>

        </tr>
        <?php $i++; endforeach; ?>

        </tbody>
    </table>
    <a href="http://localhost/Fitnes/index.php""> Pocetna </a>
</body>
</html>
