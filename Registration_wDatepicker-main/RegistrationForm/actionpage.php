<?php require_once 'include/header.php'?>
<style>
    body{
        text-align: center;
    }
    .card{
        text-align:left;
        
    }
</style>
<body>
<H1><b>KYUT MI DUHA!!!</b></H1>

<div class="card" style="width: 18rem;" style="margin-left: 30px;" >
<img src="..." class="caard-img-top" alt="...">
 <div class="card-body">
    <h5 class="card-title"><?php echo $_GET["firstname" ].' '. $_GET["lastname"];?></h5>
    <p class="card-text">
        Date of birth:<?php echo $_GET["dateofbirth"];?></li></P>
    <p class="card-text">
        Specialty:<?php echo $_GET["specialty"];?></li></p>
    <p class="card-text">
        Email:<?php echo $_GET["email"];?></li></p>
    <p class="card-text">
        Contact:<?php echo $_GET["contact"];?></li></p>
    <p class="card-text">
        Check:<?php echo $_GET["check"];?></li></p>
</div>
    
    

  </ul>
</div>
<br>
<br>
<?php require_once 'include/footer.php'?>
</body>
