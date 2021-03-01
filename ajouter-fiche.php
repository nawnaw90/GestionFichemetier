 <?php
 require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    $selectAll = database::selectAllVisible();

    // echo "<pre>";
    // print_r($selectAll);
    // echo "</pre>";
    

if(!isset($_SESSION['user'])){
  header('Location:index.php');}
else {
if (isset($_POST['ajouter-fiche'])) {
    //FONCTION REQUETE PREPAREE ICI POUR AJOUTER LA FICHE
    

	$target_dir = "images/";
	$newFileName = $target_dir .$_POST['code_ROM'].'.'. pathinfo($_FILES["image"]["name"] ,PATHINFO_EXTENSION); //get the file extension and append it to the new file name
	// $target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($newFileName,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["image"]["tmp_name"]);
	  if($check !== false) {
	    echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	  } else {
	    echo "File is not an image.";
	    $uploadOk = 0;
	  }
	}

	// Check if file already exists
	if (file_exists($newFileName)) {
	  echo "Sorry, file already exists.";
	  $uploadOk = 0;
	}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG ou PNG files are allowed.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $newFileName)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

var_dump($_POST);
    database::createFiche($_POST['competence']);
    foreach($_POST['competence'] as $value)
    {
        var_dump($value);
        database::createCompetencesFichemetier($value);
    }
    
header('Location:connexion.php');


}
echo $connexion->generateCreateFiche($selectAll,$_SESSION,"ajouter");


  
    

}

