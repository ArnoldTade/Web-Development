
<?php 
    $title='index';
require_once 'includes/header.php';
?>
<!--
    First name
    Last name
    Date of Birth  (Use DatePicker)
    Specialty (Database Admin, Software Developer, Web Administrator)
    Email Address
    Contact Number
-->

<h1 class="text-center">Registration for IT Conference </h1>


<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formfirstname">First Name</label>
      <input type="text" class="form-control" id="formfirstname" placeholder="Your first name">
    </div>
    <div class="form-group col-md-6">
      <label for="formlastname">Last Name</label>
      <input type="text" class="form-control" id="formlastname" placeholder="Your first name">
    </div>
  </div>

  <label for="formlastname">Date of Birth</label>
<input id="datepicker" width="300" />

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>



    <label for="inputState">Specialty</label>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Database Admin
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
  Software Developer
  </label>
</div>


<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
  Web Developer
  </label>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Email Address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email Address">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group col-md-2">
      <label for="inputcontact">Contact Number</label>
      <input type="text" class="form-control" id="inputcontact" placeholder="Your Contact Number">
    </div>
  </div>



  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>


  <button type="submit" class="btn btn-primary btn-block" >Sign in</button>
</form>
    <?php require_once 'includes/footer.php' ?>