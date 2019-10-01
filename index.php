<!DOCTYPE html>
<html>
    <head>
    <title>PHP forms</title>
    <link rel="stylesheet" href="styles.css">
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
        <div class="container">
            <h2>Form</h3>

            <form method="post" action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                <?php
                    /**********************************************************
                    * Create the form using php for stretch
                    */

                    // Loop through these to create the radio buttons
                    $majors = array("Computer Science", "Web Design and Development",
                        "Computer Information Technology", "Computer Engineering");
            
                    foreach($majors as $major) {
                        echo "<div class='radio' id='majorRadios'><label for='" . $major . "'><input type='radio' name='majorRadio'> " . $major . "</label></div>";
                    }
                
                ?>
                </div>
                <div class="form-group">
                    <label for="comments">Comments:</label>
                    <input type="text" class="form-control" id="comments" id="comments" placeholder="Additional comments" name="comments";>
                </div>
            </form>
        


        </div>
        </div>
    </div>



</body>
</html>