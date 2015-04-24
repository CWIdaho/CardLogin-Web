<?php
	require_once 'header.php';
?>
<!-- Code goes here -->
    <section id="main">
        <table border='1'>
            <tr>
                <th>Student ID</th>
                <th>Location ID</th>
                <th>Date</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Cumulative Time</th>
            </tr>
            <?php
                if($_SERVER["REQUEST_METHOD"] == 'POST')
                {
                    $dbconnector->getSwipes($_POST["search"]);
                }
            ?>
        </table>
    </section>
<?php
	require_once 'footer.php';
?>
