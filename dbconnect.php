<?php
$written=0;
$max_upload_size=2000;
if(isset($_POST['submit'])) {
	$name=$_POST["username"];
	   if(!is_dir("./files/".$name))
		      {
			         mkdir("./files/".$name);
				    }
	if(count($_FILES['imagepath']['name']){
		$upload_dir = "./files/".$name."/" ;
		 for($i=0;$i<count($_FILES['imagepath']['name']); $i++)
		 {
					$temp_name = $_FILES["imagepath"]["tmp_name"][$i];
					$name=basename($_FILES["imagepath"]["name"][$i]);
					echo "$name"; 
					if( move_uploaded_file($temp_name,"$upload_dir/$name") ){
						$written=1;
				       	}

			}
	 }
	if($written==1)
	{
		 echo "<script>document.cookie='uploadfiles=true';window.location.href=window.location.origin+'/'</script>";
	}
	else
	{
		echo " data not inserted";
	}
}
?>
