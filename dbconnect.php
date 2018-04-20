 <?php
   $max_upload_size=10000;
   $MAXIMUM_FILESIZE=$max_upload_size*1024*1024;
   $name=$_POST["username"];
   if(!is_dir("./files/".$name))
   {
   mkdir("./files/".$name);
   }
   $uploaddir="./files/".$name."/";
  $temp=$uploaddir.basename($_FILES['imagepath']['name']);
  #$pic="files/".$_FILES['imagepath']['name'];
  #$var=move_uploaded_file($temp,$pic);
  if($_FILES['imagepath']['size']<$MAXIMUM_FILESIZE){
  if(move_uploaded_file($_FILES['imagepath']['tmp_name'],$temp)){
  /*echo "upload success!! go to uploadfiles/files to see all the uploaded files";*/
  echo "<script>document.cookie='uploadfiles=true';window.location.href=window.location.origin+'/filebrowser/index.html'</script>";
  }
  else
  {
          echo "data not inserted";
  }
  }
  else{
          echo "size_error";
  }
  ?>
  



