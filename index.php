    <?php

	include 'functions.php';
	?>
	<!DOCTYPE html>
    <html lang="en">
    <head>

       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript"  src="employee.js"></script>
    
            

       
        
    </head>
    <body>
        <div id="wrap">
            <div class="container">
                <div class="row">
                    <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Form Name - Technical Suneja</legend>
                            <!-- File Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="filebutton">Select File</label>
                                <div class="col-md-4">
                                    <input type="file" name="file" id="file" class="input-large" required>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                                <div class="col-md-4">
                                    <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                                </div>
                            </div>
                        </fieldset>
                     


<div id='mapping'  class="form-horizontal" action="" method="post">

    <h4> Mapping </h4>
    <div id='p1'>
    <h6> EMPLOYEE CODE</h6>
    <select id="selectNumber" name="emp" >
    <option>Choose a Column</option>
</select>
</div>
<div id='p2'>
    <h6> NAME </h6>
    <select id="selectNumber2" name="name">
    <option>Choose a Column</option>
</select>
</div>
<div id='p3'>
    <h6> DEPARTMENT </h6>
    <select id="selectNumber3" name="Depatment">
    <option>Choose a Column</option>
</select>
</div>
<div id='p4'>
    <h6> Date Of Birth </h6>
    <select id="selectNumber4" name="Dateob">
    <option>Choose a Column</option>
</select>
</div>
<div id='p5'>
    <h6> Join Date </h6>
    <select id="selectNumber5" name="Join">
    <option>Choose a Column</option>
</select>
</div>

</div>
</form>



               </div>
                <?php
                   get_all_records();
                ?>
				   
            </div>
        </div>
    </body>
    </html>