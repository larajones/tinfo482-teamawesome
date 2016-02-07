<?php
	#start session
	session_start();
	
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}

	?>
<?php  include ('config/setup.php'); ?>

<!DOCTYPE html>
<html>
<head>
     <title> <?php  echo $page['title']. ' | ' . $site_title; ?>  </title>
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


    <?php  include (D_TEMPLATE.'/navigation.php'); ?>
    <h1>Admin Dashboard</h1>
    <div class = "row">
        <div class = "col-md-3">
        
            <?php
        
        if(isset($_GET['id'])) {
            
            $query = "SELECT * FROM pages WHERE id = $_GET[id]";
            $results = mysqli_query($dbc, $query);
            
            $opened = mysqli_fetch_assoc($results);  
        }
        ?>
                
       
            <!--get list of pages from pages table -->
            
            <div class = "list-group">
                

                
     <a class = "list-group-item " href="index.php">
   <i class = "fa fa-plus"> New Page</i></a>

            <?php 
	$query = "SELECT * FROM pages ORDER BY title ASC";
	$results = mysqli_query($dbc, $query);
	while($page_list = mysqli_fetch_assoc($results))  {
		$blurb = substr(strip_tags($page_list['body']), 0,160)
                ?>
                
    <a class = "list-group-item <?php selected($page_list['id'], $opened['id'],'active') ?>" href="index.php?id=<?php echo $page_list['id']?>">
    
     
    <h4 class="list-group-item-heading"><?php  echo $page_list['title']; ?></h4>
    <!--create description using substring function -->
    <p class = "list-group-item-text"><?php  echo $blurb; ?></p></a>
                  <?php  } ?>     
            </div>
        </div>
        <div class = "col-md-9">
        
        <?php
	
	if(isset($message)){
		echo $message;
	}
?>
        
        
   
        
        
        
        <form action = "index.php?id=<?php echo $opened['id'];?>" method = "post" role = "form">
            <!--form to create pages for site -->
            <div class = "form-group">
                <label for="title">Page Title: </label>
                <input class = "form-control" type = "text" name = "title" id = "title" value = "<?php echo $opened['title'];?>" placeholder = "Page Title"></input>
              </div>
                <div class = "form-group">
                <label for="user">User</label>
                <select class = "form-control" name = "user" id = "user">
                    <option value = "0">No User</option>
                    <?php
	$query = "SELECT id FROM users ORDER BY first ASC";
	$results = mysqli_query($dbc, $query);
	
        
        while ($user_list = mysqli_fetch_assoc($results)) {
		$user_data = data_user($dbc, $user_list['id']);
		?>
                <option value = "<?php  echo $user_data['id']  ?>"
                
                <?php if(isset($_GET['id'])){
                     
                      
                      selected($user_data['id'], $opened['user'],'selected' );
                }else {
                    
                 
                    
                     selected($user_data['id'], $user['id'],'selected' );
                }?>>
              
              <?php  echo  $user_data['fullname']; ?>
              </option>
             
             
              <?php  } ?>
                
                </select>
              </div>
                
                  <div class = "form-group">
                <label for="title">Page Slug: </label>
                <input class = "form-control" type = "text" name = "slug" id = "slug" value = "<?php echo $opened['slug'];?> " placeholder = "Page Slug"></input>
              </div>
        
             <div class = "form-group">
                <label for="title">Page Label: </label>
                <input class = "form-control" type = "text" name = "label" id = "label" value = "<?php echo $opened['label'];?> "placeholder = "Page Label"></input>
              </div>
        
        
        
                     <div class = "form-group">
                <label for="title">Page Header: </label>
                <input class = "form-control" type = "text" name = "header" id = "header" value = "<?php echo $opened['header'];?> "placeholder = "Page Header"></input>
              </div>
                     <div class = "form-group">
                <label for="title">Page Body: </label>
                
                
                <textarea class = "form-control editor" name = "body" id = "body" rows = "8" placeholder = "Page body"> <?php echo $opened['body'];?></textarea>
              </div>
            
            
            
            
            <button type = "submit" class = "btn btn-default">Save</button>
            <input type = "hidden" name = "submitted" value = "1">
            <input type = "hidden" name = "id" value"<?php echo $opened['id'];?>">    
        </form>    
        </div>
    </div>
    <?php  include (D_TEMPLATE.'/footer.php'); ?>
    <?php 
	
	if($debug == 1)  {
		include ('widgets/debug.php');
	}

	?>
</body>
</html>
