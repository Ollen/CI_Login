<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello | Home</title>

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/home.css">
</head>

<body class="amber">
  <div class="container">
    <h1 class="greet">
      Good Morning,
      <br>
      <?php if(isset($_SESSION['firstname'])):  ?>
        <?php echo trim(json_encode($_SESSION['firstname']),'"')?>
      <?php else: ?>
       User!
     <?php endif ?>
    </h1>

    <footer>
      <h1 class="navigation right-align">
        <a href="<?php echo site_url();?>" class="white-text">profile</a>
        //
        <a href="<?php echo site_url();?>" class="white-text">logout</a>
      </h1>

    </footer>
  </div>
</body>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script type="text/javascript">
</script>
</html>
