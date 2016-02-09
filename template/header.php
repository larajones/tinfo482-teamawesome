<?php 
session_start();
#start session
if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}

	?>
<?php  include ('config/setup.php'); ?>

<!DOCTYPE html>
<html>
<head>
   <title> <?php  echo $site_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php  include ('config/css.php'); ?>
    <?php  include ('config/js.php'); ?>
    
    
  <script type="text/javascript" src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '.editor',
    theme: 'modern',
    plugins: [
      'code advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
  });
  </script>
  
  
</head>
<body>
    <div id = "wrap">
        

    <?php  include (D_TEMPLATE.'/navigation.php'); ?>
