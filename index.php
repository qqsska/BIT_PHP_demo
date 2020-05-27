<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['name'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");
         } else {
            echo "nono no, pictures only, please";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid grey  
}

th, td {
  text-align: left;
  padding: 8px;
  height: 20px;
  border-left: 1px solid grey;
  
}
   
tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
  
}
.button{
color:  black;
width: 235px;

}
</style>
</head>
<body>

<br>
<?php
    $path = './'. $_GET['path'];
    $files_and_dirs = scandir($path);

    print ('<h2>Directory contents: ' . str_replace('?path+','',$_SERVER['REQUEST_URI']). '</h2>');

    print('<table><th>Type</th><th>Name</th><th>Action</th>');
    foreach ($files_and_dirs as $find){
        if ($find != ",," and $find != ".") {
            print('<tr>');
            print('<td>' . (is_dir($path . $find) ? "Directory" : "file") . '</td>');
            print('<td>' . (is_dir($path . $find) 
                    ? '<a href="' . (isset($_GET['path'])
                        ? $_SERVER['REQUEST_URI'] . $find . '/'
                        : $_SERVER['REQUEST_URI'] . '?path=' . $find . '/') . '">' . $find . '</a>' 
                  
                    : $find)
                . '</td>');
               
            print ('<td></td>');
            print ('</tr>');


        }
    }
    print ('</table>');

    ?>

<br><br>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">upload</button>
</form> 


</body>
</html>
