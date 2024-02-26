<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <!-- Eventuelle yderligere styles her -->
</head>

<body>
    <h1>Welcome, Admin!</h1>

    <h2>Kurser</h2>
    <table border="1"> <!-- Tilføjet border for at gøre tabellinjerne synlige -->
        <tr>
            <th>ID</th>
            <th>Kursus Navn</th>
            <th>Beskrivelse</th>
            <th>Start Dato</th>
            <th>Slut Dato</th>
            <th>Max Deltagere</th>
            <th>Ledige Pladser</th>
        </tr>
        <?php foreach ($alle_kursus as $kursus) : ?>
            <tr>
                <td><?php echo htmlspecialchars($kursus->KursusID); ?></td>
                <td><?php echo htmlspecialchars($kursus->KursusNavn); ?></td>
                <td><?php echo htmlspecialchars($kursus->Beskrivelse); ?></td>
                <td><?php echo htmlspecialchars($kursus->StartDato); ?></td>
                <td><?php echo htmlspecialchars($kursus->SlutDato); ?></td>
                <td><?php echo htmlspecialchars($kursus->MaxDeltagere); ?></td>
                <td><?php echo htmlspecialchars($kursus->LedigePladser); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Produkter</h2>
    <table border="1"> <!-- Tilføjet border for at gøre tabellinjerne synlige -->
        <tr>
            <th>Kategori ID</th>
            <th>Navn</th>
        </tr>
        <?php foreach ($alle_kategorier as $c) : ?>
            <tr>
                <td><?php echo htmlspecialchars($c->id); ?></td>
                <td><?php echo htmlspecialchars($c->name); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="logout.php">Logout</a>
</body>

</html>