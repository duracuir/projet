<?php
session_start();

	require '../connexionBD.php';

	if (isset($_POST['submit'])) {
		$newFileName = $_POST['filename'];
		if (empty($newFileName)) {
			$newFileName = "gallery";
		} else {
			$newFileName = strtolower(str_replace("", "-", $newFileName));
		}
		$imageTitle = $_POST['filetitle'];
		$imageDesc = $_POST['filedesc'];
		$file = $_FILES['file'];

		$filename = $file["name"];
		$fileType = $file["type"];
		$fileTempName = $file["tmp_name"];
		$fileError = $file["error"];
		$fileSize = $file["size"];

		$fileExt = explode(".", $filename);
		$fileActualExt = strtolower(end($fileExt));

		$allowed  = array('jpg', 'jpeg', 'png');

		if (in_array($fileActualExt,$allowed)) {
			if($fileError === 0) {
				if ($fileSize < 2000000) {
					$imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
					$fileDestination = "../images/gallery/" . $imageFullName;


					if (empty($imageTitle) || empty($imageDesc)) {
						header("location: ../gallery.php?upload=empty");
						exit();
					} else{

					$sql = "UPDATE membres SET titleGallery = :titleGallery , descGallery = :descGallery, photos = :photos WHERE username = :username;";
						$stmt = $pdo->prepare($sql)	;
						$stmt->execute(["titleGallery"=>$imageTitle, "descGallery"=>$imageDesc, "photos"=>$imageFullName, "username"=>$_SESSION['username']]);

							move_uploaded_file($fileTempName, $fileDestination);

							header("Location: ../biographie.php?upload=success");
						}


						}
					// }
				} else {
					echo "File size is too big!";
				}
			} else {
				echo "You had an error!";
				exit();
			}
		} else {
			echo "You need to upload a proper file type!";
			exit();
		}
	