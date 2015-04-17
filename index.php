<?php
	require_once 'header.php';
	
?>
<!-- Code goes here -->
    <section id="main">
        <h2>
            Search
        </h2>
        <form method="post" action="./View.php">
            <input id="search" type="text" name="search"/>
            <input type="submit" name="submit" value="Search"/>
        </form>
    </section>
<?php
	require_once 'footer.php';
?>
