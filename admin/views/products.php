    <h1>Products</h1>

        <div class = "col-md-9">
        
        <?php if(isset($message)){echo $message;}?>
            
        
        
        <form action = "index.php?page=products&id=<?php echo $opened['id'];?>" method = "post" role = "form">
            <!--form to create pages for site -->
            
            <div class = "form-group">
                <label for="ProductName">Product Name: </label>
                <input class = "form-control" type = "text" name = "ProductName" id = "ProductName" value = "<?php echo $opened['ProductName'];?>" placeholder = "ProductName Name" autocomplete = "off"></input>
              </div>
            
            
                        <div class = "form-group">
                <label for="ProductDescription">Product Description: </label>
                <input class = "form-control" type = "text" name = "ProductDescription" id = "ProductDescription" value = "<?php echo $opened['ProductDescription'];?>" placeholder = "ProductDescription" autocomplete = "off"></input>
              </div>
        
        
                <div class = "form-group">
                <label for="CategoryID">CategoryID</label>
                <input class = "form-control" type = "text" name = "CategoryID" id = "CategoryID" value = "<?php echo $opened['CategoryID'];?>" placeholder = "CategoryID Address" autocomplete = "off"></input>
              </div>
        
                <div class = "form-group">
                <label for="SupplierID">SupplierID</label>
                <input class = "form-control" type = "text" name = "SupplierID" id = "SupplierID" value = "<?php echo $opened['SupplierID'];?>" placeholder = "SupplierID Address" autocomplete = "off"></input>
              </div>
            
            
            <div class = "form-group">
                <label for="InitialCost">InitialCost</label>
                <input class = "form-control" type = "text" name = "InitialCost" id = "InitialCost" value = "<?php echo $opened['InitialCost'];?>" placeholder = "InitialCost Address" autocomplete = "off"></input>
              </div>
              
              <div class = "form-group">
                <label for="DateArrived">DateArrived</label>
                <input class = "form-control" type = "text" name = "DateArrived" id = "DateArrived" value = "<?php echo $opened['DateArrived'];?>" placeholder = "DateArrived Address" autocomplete = "off"></input>
              </div>
                           
             
            
            <button type = "submit" class = "btn btn-default">Save</button>
            <input type = "hidden" name = "submitted" value = "1">
            
            <?php if(isset($opened['id'])){  ?>
            
              <input type = "hidden" name = "id" value"<?php echo $opened['id'];?>">
              
           <?php }?>
            
        </form>    
        </div>
    </div>
    
            
