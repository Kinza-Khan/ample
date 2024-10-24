<?php 
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $brand = $_POST['brand'];
    $p_catagory = $_POST['p_catagory'];
    
    // Fetch the current category name for reference
    $p_catagory_name = $obj->find('catagory', 'id', $p_catagory)->name;
    
    $product_source = $_POST['product_source'];
    $alert_quantity = $_POST['alert_quantity'];
    $date = date('Y-m-d');

    // Prepare the query data
    $query = array(
        'product_name'    => $product_name,                
        'brand_name'      => $brand,                        
        'catagory_id'     => $p_catagory,                        
        'catagory_name'   => $p_catagory_name,                        
        'product_source'  => $product_source,                
        'alert_quantity'  => $alert_quantity,            
        'last_update_at'  => $date,            
    );

    // Handle file upload if an image is provided
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['product_image']['tmp_name'];
        $fileName = $_FILES['product_image']['name'];
        $fileName = str_replace(' ', '_', $fileName);
        $fileName = time() . '_' . $fileName; // Ensure unique filename
        $uploadFileDir = '../../uploads/';
        $dest_path = $uploadFileDir . $fileName;

        // Move the file to the uploads directory
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $query['image'] = $fileName; // Add the image filename to the query
        } else {
            echo "There was an error moving the uploaded file.";
            exit;
        }
    }

    // Update the product in the database
    $res = $obj->update('products', 'id', $id, $query);
    if ($res) {
        echo "Product edit successful";
    } else {
        echo "Failed to update product";
    }
} else {
    echo "Invalid request method.";
}
?>
