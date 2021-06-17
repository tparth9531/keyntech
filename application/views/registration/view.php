<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Registration</title>
  </head>
  <body>
    <div class="container">
      <h3>Welcome to KeynTech</h3>

      <form action="" class="was-validated" method="POST" enctype="multipart/form-data" id="reg_form">

        <div class="form-group">
          <label for="username">Username:</label>

          <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="email_id">Email ID:</label>

          <input type="email" class="form-control" id="email_id" placeholder="Enter Email ID" name="email_id" required>

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="cpwd">Re-enter Password:</label>
          <input type="password" class="form-control" id="cpwd" placeholder="Enter password" name="cpwd" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="input-group date form-group" data-provide="datepicker">
          <label for="dob">Date of Birth:</label>
          <input type="text" class="form-control" id="dob" name="dob" required>
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>

        

        <div class="form-group">
          <label for="mobile">Mobile Number:</label>

          <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile" required>

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="add_1">Address Line 1:</label>

          <textarea class="form-control" id="add_1" name="add_1" placeholder="Address Line 1" required></textarea>

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="add_2">Address Line 2:</label>

          <textarea class="form-control" id="add_2" name="add_2" placeholder="Address Line 2" required></textarea>

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="city">City:</label>

          <input type="text" class="form-control" id="city" placeholder="Enter Your City" name="city" required>

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="state">State:</label>

          <input type="text" class="form-control" id="state" placeholder="Enter Your State" name="state" required>

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="country">Country:</label>

          <input type="text" class="form-control" id="country" placeholder="Enter Your Country" name="country" required>

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="reason">Reason For Registration:</label>

          <textarea class="form-control" id="reason" name="reason" placeholder="Reason for Registration" required></textarea>

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        
        
        <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
      </form>



      <strong><?php if(isset($totalFiles)) echo "Successfully uploaded ".count($totalFiles)." files"; ?></strong>

      <form method='post' action="<?php echo base_url('registration/uploadImage')?>" enctype='multipart/form-data'>

        <input type='file' name='files[]' multiple=""> <br/><br/>
        <input type='submit' value='Upload' name='upload' />

      </form>




    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

      $( document ).ready(function() {
        
        $('#reg_form').submit(function(event){

          event.preventDefault();

          $.ajax({
            url:"<?php echo base_url('registration/get_data')?>",
            type:'POST',
            data: new FormData(this),
            dataType:'json',
            contentType:false,
            processData:false,
            success:function(response){
              alert(response);
            }
          });



        });
      });

      

    </script>
  </body>
</html>