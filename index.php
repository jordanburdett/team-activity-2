<!DOCTYPE html>
<html>
    <head>
    <title>PHP forms</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
<body>

<div class="container-fluid">
        <h1 class="display-1">Team Activity #2</h1>
    </div>

    <div class="row">
    
            <div class="col">
                <h3 class="display-4">Form!
                </h3>


        
                <?php
                /**********************************************************
                * Create the form using php for stretch
                */

                // Loop through these to create the radio buttons
                $majors = array("Computer Science", "Web Design and Development",
                    "Computer Information Technology", "Computer Engineering");
                
                foreach($majors as $major) {
                    echo "<div class='radio' id='majorRadios'><label><input type='radio' name='majorRadio'>" . $major . "</label></div>";
                }
                
                ?>

                
            </div>
        </div>



</body>
</html>