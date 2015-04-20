<?php
	require_once 'header.php';
    if($_SERVER["REQUEST_METHOD"] != 'POST')
    {

    }
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
                $dbconnector->getSwipes($_POST())
            ?>
    </section>
    <pre>
        <?php $dbconnector->getUser(); ?>
    </pre>
<?php
	require_once 'footer.php';
?>
