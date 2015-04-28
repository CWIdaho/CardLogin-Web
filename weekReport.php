<?php
    $_displayTable = FALSE;
    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        $_displayTable = TRUE;
    }
	require_once 'header.php';
?>
<!-- Code goes here -->
    <section id="box">
        <h2>
            Weekly Report
        </h2>
        <form method="post" action="./weekReport.php">
            <label>Beginning of week:</label><input type="date" name="bWeek" id="bWeek"/><br/>
            <label>End of week:</label><input type="date" name="eWeek" id="eWeek"/><br/>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            if($_displayTable)
            {
                $dbconnector->getWeeklyReportTable($_POST["bWeek"], $_POST["eWeek"]);
            }
        ?>
        <button onclick="goBack()">Go Back</button>

<script>
  
function goBack() {
    window.history.back();
}
</script>

    </section>
<?php
	require_once 'footer.php';
?>
