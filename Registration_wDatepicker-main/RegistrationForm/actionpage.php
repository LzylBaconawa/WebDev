<?php require_once 'include/header.php'?>
<style>
    body{
        text-align: center;
    }
    .card{
        text-align:center;
        
    }
</style>
<body>
<H1><b>KYUT MI DUHA!!!</b></H1>

<div class="card" style="width: 18rem;" style="margin-left: 30px;" >
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $_GET["firstname" ].' '. $_GET["lastname"];?></li>
    <li class="list-group-item"><?php echo $_GET["dateofbirth"];?></li>
    <li class="list-group-item"><?php echo $_GET["specialty"];?></li>
    <li class="list-group-item"><?php echo $_GET["email"];?></li>
    <li class="list-group-item"><?php echo $_GET["contact"];?></li>
    <li class="list-group-item"><?php echo $_GET["check"];?></li>

  </ul>
</div>
<br>
<br>
<?php require_once 'include/footer.php'?>
</body>
