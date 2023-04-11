

    <?php require_once 'include/header.php'?>
    <body>
        <h1>Hello World!</h1>
    </body>
    <?php require_once 'include/footer.php'?>

    <h3 class="text-center">registration for IT Conference</h3>
<form method="GET" action="actionpage.php">
    <div class="form-group">
    <label for="firstname" class="form-label">First Name</label>
    <input required type="text" class="form-control" id="firstname" name="firstname" >

    <div class="form-group">
    <label for="lastname" class="form-label">Last Name</label>
    <input required type="text" class="form-control" id="lastname" name="lastname">

    <div class="mb-3">
    <label for="datepicker" class="form-label" >Date of Birth</label>
    <input required type="text" class="form-control" id="datepicker" name="dateofbirth">

    <div class="mb-3">
    <label for="specialty" class="form-label">Specialty</label><br><br>
    <input required type="radio" name="specialty" >
    <label for="DA">Database Admin</label><br>
    <input required type="radio" name="specialty" >
    <label for="SD">Software Developer</label><br>
    <input required type="radio" name="specialty" >
    <label for="WA">Web Administrator</label><br>
 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="cn" class="form-label">Contact Number</label>
    <input required type="text" class="form-control" id="contact" name="contact">

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="check" name="check">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" style="height:50px; width: 2000px;">Submit</button>

</form>
 
