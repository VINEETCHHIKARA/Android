 <?php  

	$file_path = "images/";
	$image=$_POST["HINH"];
	
	if(!file_exists($file_path)){
		mkdir($file_path,0777,ture);
	}
	$file_path=$file_path.rand()."_".time().".jpeg";

	if(file_put_contents($file_path,base64_decode($image)))	{
		echo json_encode(["message"=>"file has been uploaded",
		"status"=>"ok"]);
	}else {
	echo json_encode(["message"=>"file is not uploaded","status"=>"Error"]);
	}
?>  