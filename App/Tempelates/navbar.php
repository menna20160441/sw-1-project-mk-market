<?php
$userName = isset($_SESSION['username'])?$_SESSION['username']:'';
$url = isset($_SESSION['url'])?$_SESSION['url']:'';
$logout = isset($_SESSION['logout'])?$_SESSION['logout']:'';
$img = $_SESSION['img'];
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo $url?>/../Global/Index.php">MK_Market</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style=" flex-flow: row-reverse;">
    <ul class="form-inline">
        <span class="userimg"><img src="<?php echo $url?>/controllers/Admin/Uploads/images/<?php echo $img; ?>"></span>
        <li style="color:rgba(225, 215, 215, 0.9);"><a class="username" href="<?php echo $url?>/controllers/Admin/C_Admin.php?action=UpdateProfile&id=<?php echo $_SESSION['ID']; ?>"><?php echo $userName ;?></a></li>

        <li class="dropdown notify">
          <span class="red"></span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" aria-haspopup="false">
            <i class="fa fa-bell">

            </i>
          </a>
          <ul class="dropdown-menu">
            <li>
              
            </li>
          </ul>
        </li>

        <li>
            <a href="<?php echo $logout?>Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </li>
      </ul>

  </div>

</nav>
