
<?php if(isset($opened['id'])){  ?>
<script>
    
    
    
    $(document).ready(function() {
        
        
        Dropzone.autoDiscover = false;
        
        var myDropzone = new Dropzone("#avatar-dropzone");
        
        myDropzone.on("sucess", function(file){
            
            $("#avatar").load("ajax/avatar.php?id<?php echo $opened['id']; ?>");
            
            
        })
        
        
    });
    
    
    
</script>    
    
 <?php }?>
    
    
    <h1>Users</h1>
  
    <div class = "row">
        <div class = "col-md-3">
        
            <?php
        
        if(isset($_GET['id'])) {
            
            $query = "SELECT * FROM users WHERE id = '$_GET[id]'";
            $results = mysqli_query($dbc, $query);
            
            $opened = mysqli_fetch_assoc($results);  
        }
        ?>
        
        

       
            <!--get list of pages from pages table -->
            
            <div class = "list-group">
                

                
    <a class = "list-group-item " href="?page=users"><i class = "fa fa-plus"> New User</i></a>

            <?php 
	$query = "SELECT * FROM users ORDER BY last ASC";
	$results = mysqli_query($dbc, $query);
	while($list = mysqli_fetch_assoc($results))  {
		
                
            $list = data_user($dbc, $list['id']);   
            //$blurb = substr(strip_tags($list['body']), 0,160)
               
               
                ?>
                
    <a class = "list-group-item
    <?php selected($list['id'], $opened['id'],'active') ?>"href="index.php?page=users&id=<?php echo $list['id']?>">
    
     
    <h4 class="list-group-item-heading"><?php  echo $list['fullname_reverse']; ?></h4>
    <!--create description using substring function -->
   
    <!--<p class = "list-group-item-text"><//?php  echo $blurb; ?></p>-->
    </a>
                
                
                  <?php  } ?>     
            </div>
        </div>
        <div class = "col-md-9">
        
        <?php if(isset($message)){echo $message;}?>
        
        <?php if($opened['avatar'] != '') {?>
        
        <div id = "avatar">
            
              <img src ="../uploads/<?php echo $opened['avatar']; ?>">
            
        </div>
             
          <?php  } ?>
        
        
        
        <form action = "index.php?page=users&id=<?php echo $opened['id'];?>" method = "post" role = "form">
            <!--form to create pages for site -->
            
            <div class = "form-group">
                <label for="first">First Name: </label>
                <input class = "form-control" type = "text" name = "first" id = "first" value = "<?php echo $opened['first'];?>" placeholder = "First Name" autocomplete = "off"></input>
              </div>
            
            
                        <div class = "form-group">
                <label for="last">Last Name: </label>
                <input class = "form-control" type = "text" name = "last" id = "last" value = "<?php echo $opened['last'];?>" placeholder = "Last Name" autocomplete = "off"></input>
              </div>
        
        
                <div class = "form-group">
                <label for="email">Email Address: </label>
                <input class = "form-control" type = "text" name = "email" id = "email" value = "<?php echo $opened['email'];?>" placeholder = "Email Address" autocomplete = "off"></input>
              </div>
            
            
            
            
                <div class = "form-group">
                <label for="status">Status</label>
                <select class = "form-control" name = "status" id = "status">
                   <option value = "0"<?php if(isset($_GET['id'])){selected('0', $opened['status'],'selected' );}?> >
                    Inactive</option>
                    <option value = "1"<?php if(isset($_GET['id'])){selected('1', $opened['status'],'selected' );} ?> >
                    Active</option>

                </select>
              </div>
                
                  <div class = "form-group">
                <label for="password">Password: </label>
                <input class = "form-control" type = "password"
                       name = "password" value "" id = "password" Placeholder = "Password" autocomplete = "off"></input>
              </div>
        
                     <div class = "form-group">
                <label for="passwordv">Verify Password: </label>
                <input class = "form-control" type = "password"
                       name = "passwordv" id = "passwordv" Placeholder = "Veryify Password" autocomplete = "off"></input>
              </div>
        
            
            
            <button type = "submit" class = "btn btn-default">Save</button>
            <input type = "hidden" name = "submitted" value = "1">
            
            <?php if(isset($opened['id'])){  ?>
            
              <input type = "hidden" name = "id" value"<?php echo $opened['id'];?>">
              
           <?php }?>
            
        </form>
           <?php if(isset($opened['id'])){  ?>
        
        <form action="uploads.php?id=<?php echo $opened['id'];?>" class = "dropzone" id="avatar-dropzone">
            
  
            <input type = "file" name = "file">
            
        </form>
        
           <?php }?>
        
        </div>
    </div>
    
