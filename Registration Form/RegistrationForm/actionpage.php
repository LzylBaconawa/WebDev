<?php require_once 'include/header.php';
    require_once 'db/conn.php';

    $title ='Success';
    require_once 'include/header.php';
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        //extract valus from the $_POST array
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dateofbirth'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $specialty = $_POST['specialty'];

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["name"]. PATHINFO_EXTENSION);
    $target_dir ='uploads/';
    $destination = "$target_dir$contact.$ext";
    move_uploaded_file($orig_file,$destination);

    //call function to insert and track if success or not
    $isSuccess = $crud->insert($firstname, $lastname, $dateofbirth, $email, $contact, $specialty);
    $specialtyName =$crud->getSpecialtyById($specialty);

    if($isSuccess){
        SendEmail::SendMail($email, 'Welcome to IT Conference 2019','You have successfully registered for this years IT conference');
        inlude 'includes/actionpagemessage.php';
    }
    else{
        include 'includes/errormessage.php';
    }
    }

?>
      


<div class="card" style="width: 18rem;" >
<img src="<?php echo $destination; ?>" class="rounded-circle" style="width: 20%; height: 20%" />
 <div class="card-body">
    <h5 class="card-title"><?php echo $_POST["firstname" ].' '. $_POST["lastname"];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $specialtyName['name'];?></h6>

    <p class="card-text">
        Date of birth:<?php echo $_POST["dateofbirth"];?></P>
    <p class="card-text">
        Email:<?php echo $_POST["email"];?></p>
    <p class="card-text">
        Contact:<?php echo $_POST["contact"];?></p>
    <p class="card-text">
        Check:<?php echo $_POST["check"];?>
</div>
</div>
    
    
<br>
<br>
<br>
<br>
<br>
<?php require_once 'include/footer.php'?>
</body>
