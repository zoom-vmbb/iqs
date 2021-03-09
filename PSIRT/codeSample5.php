The following code is utilized to allow users to upload avatar images to the application. Identify any existing vulnerabilities.

<?php
  if(!empty($_FILES["avatar"]))
  {
    // Upload outside of the document root (/var/www) to keep it hacker safe
    $uploaddir = "/data/avatars/";
    
    // Check uploaded file mimetype sent in the Content-Type header of the multipart POST
    if(!eregi('image/', $_FILES["avatar"]["type"])) {
      echo 'The uploaded file is not an image please upload a valid file!';
      exit(0);
    }

    // Clean up any directory traversal characters in the filename
    $safe_name = str_replace("../", "", $_FILES["avatar"]["name"]);

    // For windows
    $safe_name = str_replace("..\\", "", $safe_name);

    //Copy the file to some permanent location
    if(move_uploaded_file($_FILES["avatar"]["tmp_name"], $uploaddir.$safe_name))
    {
      echo "Avatar Uploaded!";
    }
    else
    {
      echo "There was a problem when uploading the file!";
    }
  }
?>
