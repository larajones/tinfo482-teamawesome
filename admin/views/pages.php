    <h1>Page Manager</h1>
  
    <div class = "row">
        <div class = "col-md-3">
        
            <?php
        
        if(isset($_GET['id'])) {
            
            $query = "SELECT * FROM pages WHERE id = '$_GET[id]'";
            $results = mysqli_query($dbc, $query);
            
            $opened = mysqli_fetch_assoc($results);  
        }
        ?>
                
       
            <!--get list of pages from pages table -->
            
            <div class = "list-group">
                

                
     <a class = "list-group-item " href="?page=pages"><i class = "fa fa-plus"> New Page</i></a>

            <?php 
	$query = "SELECT * FROM pages ORDER BY title ASC";
	$results = mysqli_query($dbc, $query);
	
        while($list = mysqli_fetch_assoc($results))  {
		$blurb = substr(strip_tags($list['body']), 0,160)
                ?>
                
    <div id="page_<?php echo $list['id']; ?>" class = "list-group-item <?php selected($list['id'], $opened['id'],'active') ?>" 
    
     
    <h4 class="list-group-item-heading"><?php  echo $list['title']; ?>
    
    <span class =  "pull-right">
        
        <a href = "" id = "del_<?php echo $list['id']; ?>" class = "btn btn-delete btn-danger"><i class = "fa fa-trash-o"></i></a>
        <a href = "index.php?page=pages&id=<?php echo $list['id'] ?>" class = "btn btn-default"><i class = "fa fa-chevron-right"></i></a>
    
    
    
    </span>
    
    
    </h4>
    <!--create description using substring function -->
    <p class = "list-group-item-text"><?php  echo $blurb; ?></p>
    
    </div>
                  <?php  } ?>     
            </div>
        </div>
        <div class = "col-md-9">
        
        <?php
	
	if(isset($message)){echo $message;}
?>
        
        <form action = "index.php?page=pages&id=<?php echo $opened['id'];?>" method = "post" role = "form">
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
                <label for="slug">Page Slug: </label>
                <input class = "form-control" type = "text" name = "slug" id = "slug" value = "<?php echo $opened['slug'];?> " placeholder = "Page Slug"></input>
              </div>
        
             <div class = "form-group">
                <label for="label">Page Label: </label>
                <input class = "form-control" type = "text" name = "label" id = "label" value = "<?php echo $opened['label'];?> "placeholder = "Page Label"></input>
              </div>
        
        
        
                     <div class = "form-group">
                <label for="header">Page Header: </label>
                <input class = "form-control" type = "text" name = "header" id = "header" value = "<?php echo $opened['header'];?> "placeholder = "Page Header"></input>
              </div>
                     <div class = "form-group">
                <label for="body">Page Body: </label>
                
                
                <textarea class = "form-control editor" name = "body" id = "body" rows = "8" placeholder = "Page body"> <?php echo $opened['body'];?></textarea>
              </div>
            
            
            
            
            <button type = "submit" class = "btn btn-default">Save</button>
            <input type = "hidden" name = "submitted" value = "1">
    
          <?php if(isset($opened['id'])){  ?>
            
              <input type = "hidden" name = "id" value"<?php echo $opened['id'];?>">
              
           <?php }?>
     
        </form>    
        </div>
    </div>
    
