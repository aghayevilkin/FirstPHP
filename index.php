<?php
include 'header.php'
?>

<form method="POST" action="process.php">
        <label class="form-label">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Name">

        <label class="form-label">Surname</label>
        <input class="form-control" type="text" name="surname" placeholder="Surname">

        <label class="form-label">Gender</label>
        <input type="radio" name="gender" value="Boy">Boy
        <input type="radio" name="gender" value="Girl">Girl
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="m-3">
Select image to upload:
<input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
</div>
<button type="submit" class="btn btn-primary">Upload Image</button>
</form>

<?php
readfile("test.txt"); //Sunucuda Var olan Files okur

echo "<br>";
echo "<br>";

$files=fopen("test.txt","r") or die("File Error");

// echo fread($files,filesize("test.txt")); //Filenin Tamamini okur
echo fgets($files); //Filenin ilk setrini okur
// echo fgetc($files); //Filenin Tek bir Herfini okur
fclose($files);


include 'footer.php'
?>