<?php



function data_setting_value($dbc, $id)

{
    
$query = "SELECT * FROM settings WHERE id = '$id'";
$results = mysqli_query($dbc, $query);

$data = mysqli_fetch_assoc($results);
    
 return $data['value'];   
}


function data_page($dbc, $id)

{
    if(is_numeric($id)){
        
        $cond = "WHERE id = $id";
        
    }else{
        
        $cond = "WHERE slug = '$id'";
     
        
    }
    
    /*Page Setup Contain information for page using variable (get) to indentify what page
    we are on*/
    $query = "SELECT * FROM pages $cond";
    
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




?>
