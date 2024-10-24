<?php
require_once '../init.php';

if (isset($_POST)) {
	$product_name = $_POST['product_name'];
	$product_code = "P" . time();
	$brand = $_POST['brand'];
	$p_catagory = $_POST['p_catagory'];
	$p_catagory_name = $obj->find('catagory', 'id', $p_catagory)->name;
	$product_source = $_POST['product_source'];
	$alert_quantity = $_POST['alert_quantity'];
	$user_id = $_SESSION['user_id'];

	// Handle file upload
	if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
		$fileTmpPath = $_FILES['product_image']['tmp_name'];
		$fileName = $_FILES['product_image']['name'];
		$fileSize = $_FILES['product_image']['size'];
		$fileType = $_FILES['product_image']['type'];
		$fileName = str_replace(' ', '_', $fileName);
		$fileName = time().$fileName;
		// Specify the directory to save the image
		$uploadFileDir = '../../uploads/';
		$dest_path = $uploadFileDir . $fileName;

		// Move the file to the uploads directory
		if (move_uploaded_file($fileTmpPath, $dest_path)) {
			// File is successfully uploaded
			// Add product to the database with the image file name
			$query = array(
				'product_name' => $product_name,
				'product_id' => $product_code,
				'brand_name' => $brand,
				'catagory_id' => $p_catagory,
				'catagory_name' => $p_catagory_name,
				'product_source' => $product_source,
				'image' => $fileName,  // Save the image filename in the database
				'alert_quantity' => $alert_quantity,
				'added_by' => $user_id,
			);

			$res = $obj->create('products', $query);
			if ($res) {
				echo "yes";
			} else {
				echo "Failed to add product";
			}
		} else {
			echo "There was an error moving the uploaded file.";
		}
	} else {
		echo "No image uploaded or there was an upload error.";
	}
}
