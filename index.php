<?php
	require_once 'header.php';
	
?>
<!-- Code goes here -->
    <script>
        function setFocus()
        {
            document.getElementById("studentID").focus();
        }

        function validateForm(){
            var x = document.forms["inputForm"]["studentID"].value;
            var error;
            if (x == null || x == " "){
             document.getElementById("alert").innerHTML = "Invalid Read please try again";
            document.getElementById("studentID").focus();


            return false;

            }
            var validator = new RegExp(/(APIN)\w+%\w+\?|(BOI)\w+%\w+\?/g);
           var isValueValid = validator.test(x);

            if (!(isValueValid)){
                var error = "Invalid card please us a CWI student ID card";
                document.getElementById("alert").innerHTML = error;
                document.getElementById("studentID").value = ' ';
                document.getElementById("studentID").focus();

                return false;
            }

        }
    </script>
    <section id="box">
        <h2>
            Search
        </h2>
        <div class="logform">
            <form method="post" action="./view.php">
                <input class="inputbox" id="studentID" type="text" name="studentID"/>
                <input class="subbttn" type="submit" name="submit" value="Search"/>
            </form>
        </div>
    </section>
<?php
	require_once 'footer.php';
?>
