<?php



function data_user($dbc, $id) {
    
    
if(is_numeric($id)) {
    
    $cond = "where id = '$id'";
} else

    $cond = "where email = '$id'";
    

$query = "SELECT * FROM users $cond";


$results = mysqli_query($dbc, $query);
$data = mysqli_fetch_assoc($results);

$data['fullname'] = $data['first']. ' ' .$data['last'];
$data['fullname_reverse'] = $data['last']. ' ' .$data['first']; 


return $data;
    
}


function data_setting_value($dbc, $id)

{
    
$query = "SELECT * FROM settings WHERE id = '$id'";
$results = mysqli_query($dbc, $query);

$data = mysqli_fetch_assoc($results);
    
 return $data['value'];   
}


function data_page($dbc, $id)

{
    /*Page Setup Contain information for page using variable (get) to indentify what page
    we are on*/
    $query = "SELECT * FROM pages WHERE id = $id";
    
    $result = mysqli_query($dbc, $query);
    
    $data = mysqli_fetch_assoc($result);
 
    $data['body_nohtml'] = strip_tags($data['body']);
    
    if($data['body'] == $data['body_nohtml'])
    
    {
        
        $data['body_formatted'] = '<p>'.$data['body'].'</p>';
    
    }else {
        
        $data['body_formatted'] = $data['body'];
    }
    
    return $data;   
}


function data_product($dbc, $id) {
    
  
$query = "SELECT * FROM Products WHERE id = '$_GET[id]'";
            $results = mysqli_query($dbc, $query);


$results = mysqli_query($dbc, $query);
$data = mysqli_fetch_assoc($results);

//$data['fullname'] = $data['ProductDescription']. ' ' .$data['ProductName'];
$data['Productname_reverse'] = $data['ProductName']. ' ' .$data['ProductDescription']; 


return $data;
    
}

function data_supplier($dbc, $id) {
    
  
$query = "SELECT * FROM Suppliers WHERE id = '$_GET[id]'";
            $results = mysqli_query($dbc, $query);


$results = mysqli_query($dbc, $query);
$data = mysqli_fetch_assoc($results);

//$data['fullname'] = $data['ProductDescription']. ' ' .$data['ProductName'];
$data['Suppliername_reverse'] = $data['SupplierName']. ' ' .$data['SupplierEmail']; 


return $data;
    
}
    




?>
