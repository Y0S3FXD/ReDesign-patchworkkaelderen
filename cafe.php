<?php
require_once 'start.php'; // Adjust the path to the actual location of start.php if necessary
require_once FRONTEND_INCLUDE . 'header.php';
?>
<header class="hero-section">
    <center>
    <div class="row container pt-2">
    <!--Store description-->
    <div class="col-md-6 p-3 text-center pt-5">
        <h1 class="display-4">Sy og Quiltecafé</h1>
        <p>Sy og quiltecafé har open i ulige uger og starter i uge 1. <br> Prisen er 50 kr. pr kop kafe og egen kop skal medbringes.
        </p>
    </div>
    <!--Table showcase-->
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        </style>
    <table style="width:50%">
        <tr>
            <th>Datoer</th>
            <th>Dage</th>
            <th>Tidspunkter</th>
        </tr>
        <tr>
            <td>2. januar</td>
            <td>tirsdag</td>
            <td>kl. 10-13</td>
        </tr>
        <tr>
            <td>4. januar</td>
            <td>torsdag</td>
            <td>kl. 14-17</td>
        </tr>
        <tr>
            <td>16. januar</td>
            <td>tirsdag</td>
            <td>kl. 10-13</td>
        </tr>
        <tr>
            <td>18. januar</td>
            <td>torsdag</td>
            <td>kl. 14-17</td>
        </tr>
        <tr>
            <td>30. januar</td>
            <td>tirsdag</td>
            <td>kl. 10-13</td>
        </tr>
        <tr>
            <td>1. februar</td>
            <td>torsdag</td>
            <td>kl. 14-17</td>
        </tr>
        <tr>
            <td>13. februar</td>
            <td>tirsdag</td>
            <td>kl. 10-13</td>
        </tr>
        <tr>
            <td>15. februar</td>
            <td>torsdag</td>
            <td>kl. 14-17</td>
        </tr>
        <tr>
            <td>27. februar</td>
            <td>tirsdag</td>
            <td>kl. 10-13</td>
        </tr>
        <tr>
            <td>29. februar</td>
            <td>torsdag</td>
            <td>kl. 14-17</td>
        </tr>
        <tr>
            <td>12. marts</td>
            <td>tirsdag</td>
            <td>kl. 10-13</td>
        </tr>
        <tr>
            <td>14. marts</td>
            <td>torsdag</td>
            <td>kl. 14-17</td>
        </tr>
        <tr>
            <td>26. marts</td>
            <td>tirsdag</td>
            <td>kl. 10-13</td>
        </tr>
    </table>
  </center>
</div>
</header>


<?php
require_once FRONTEND_INCLUDE . 'footer.php';
?>
