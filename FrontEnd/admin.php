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
            <th>Handling</th>
        </tr>
        <?php foreach ($alle_kursus as $kursus) : ?>
            <tr>
                <form action="" method="post">
                    <td><?php echo $kursus->KursusID; ?>
                        <input type="hidden" name="KursusID" value="<?php echo $kursus->KursusID; ?>">
                    </td>
                    <td><input type="text" name="KursusNavn" value="<?php echo $kursus->KursusNavn; ?>"></td>
                    <td><input type="text" name="Beskrivelse" value="<?php echo $kursus->Beskrivelse; ?>"></td>
                    <td><input type="date" name="StartDato" value="<?php echo $kursus->StartDato; ?>"></td>
                    <td><input type="date" name="SlutDato" value="<?php echo $kursus->SlutDato; ?>"></td>
                    <td><input type="number" name="MaxDeltagere" value="<?php echo $kursus->MaxDeltagere; ?>"></td>
                    <td><input type="number" name="LedigePladser" value="<?php echo $kursus->LedigePladser; ?>"></td>
                    <td><input type="submit" name="UpdateKursus" value="Opdater"></td>
                </form>
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
                <td><?php echo $c->id; ?></td>
                <td><?php echo $c->name; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h2>Tilmed En Person</h2>
    <form action="" method="post">
        <label for="Navn">Navn</label>
        <input type="text" name="Navn" id="Navn" required>
        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email" required>
        <label for="Telefon">Telefon</label>
        <input type="text" name="Telefon" id="Telefon" required>
        <label for="KursusID">Kursus Navn</label>
        <select id="KursusID" name="KursusID" required>
            <?php foreach ($alle_kursus as $s) : ?>
                <option value=<?php echo $s->KursusID; ?>>
                    <?php echo $s->KursusNavn; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="TilmedKursus" value="Tilmeld">
    </form>
    </body>

    </html>