<?php
	require_once 'header.php';

?>
<!-- Code goes here -->
    <section id="box">
        <h2>
            Weekly Report
        </h2>
        <?php
            $dbconnector->getWeeklyReportTable();
        ?>
    </section>
<?php
	require_once 'footer.php';
?>
