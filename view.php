<?php
    if($_SERVER["REQUEST_METHOD"] != 'POST' || empty($_POST["studentID"]))
    {
        header('location: ./');
    }
	require_once 'header.php';
?>
<!-- Code goes here -->
    <section id="main">
            <?php
                $dbconnector->getSwipesTable($_POST["studentID"]);
            ?>
    </section>
<?php
	require_once 'footer.php';
?>
