<?php
class FotoComponent extends Object {
	function createThumb($uploadPath, $fileName) {
		set_time_limit(48000);
		$cnt = 0;
		
		//Application Settings
		define("PHOTO_MAX_WIDTH",1920);       	// Maximum size a photo should be
		define("PHOTO_MAX_HEIGHT",1080);      	// Maximum size a photo should be
		define("PHOTO_QUALITY",95);  	     	// Quality for photo resizing
		define("SALT","user_"); 				// Helps with file naming
		
		//Add your local photos folders (with trailing slashes)
		$thumbdir = THUMB_UPLOAD_PATH . DS;	
		$uploadFilePath = $uploadPath . $fileName;
		
		list($width, $height, $type, $attr) = @getimagesize($uploadFilePath);
		
		//If square thumb file is needed (60x60)
		$thumbFile_t = $thumbdir . "t_" . $fileName;
		
		if (!file_exists($thumbFile_t)) {
			$this->resizePhoto($uploadFilePath, 60, 60,$thumbFile_t,true);
		}

		//If big thumb file is needed (240 max)
		$thumbFile_b = $thumbdir . "b_" . $fileName;
		if (!file_exists($thumbFile_b)) {
			if ($width > $height) {
				$newheight = Round($height * 240) / $width;
				$this->resizePhoto($uploadFilePath,240,$newheight,$thumbFile_b,false);
			}
			else {
				$newwidth = Round($width * 180) / $height;
				$this->resizePhoto($uploadFilePath,$newwidth,180,$thumbFile_b,false);
			}
		}
		
		//If normal file is needed (600 max)
		$thumbFile_n = $thumbdir . "n_" . $fileName;
		if (!file_exists($thumbFile_n)) {
			if ($width > $height) {
				$newheight = Round($height * 600) / $width;
				$this->resizePhoto($uploadFilePath,600,$newheight,$thumbFile_n,false);
			}
			else {
				$newwidth = Round($width * 450) / $height;
				$this->resizePhoto($uploadFilePath,$newwidth,450,$thumbFile_n,false);
			}
		}
		
		
		//If normal file is needed (1920 max)
		$maxFile = $thumbdir . $fileName;
		if (!file_exists($maxFile)) {
			if ($width > $height) {
				$newheight = Round($height * 1920) / $width;
				$this->resizePhoto($uploadFilePath,1920,$newheight,$maxFile,false);
			}
			else {
				$newwidth = Round($width * 1080) / $height;
				$this->resizePhoto($uploadFilePath,$newwidth,1080,$maxFile,false);
			}
			copy($maxFile, $uploadFilePath);
			unlink($maxFile);
		}		
		
		
		//If max file is needed
		
		
		$cnt++;
		if ($cnt == 10) {
			sleep(2);
			$cnt = 0;
		}	
	
	}
	
	function resizePhoto($original, $width, $height, $destination, $crop) {
		if ($originalImage  = @imagecreatefromjpeg($original)) {
			$originalWidth  = imagesx($originalImage);
			$originalHeight = imagesy($originalImage);
			$newImage  = imagecreatetruecolor($width, $height);
			if ($crop) {
				if ($originalWidth > $originalHeight) {
				   $offsetWidth = ($originalWidth-$originalHeight)/2;
				   $offsetHeight = 0;
				   $originalWidth = $originalHeight;
				} elseif ($originalHeight > $originalWidth) {
				   $offsetWidth = 0;
				   $offsetHeight = ($originalHeight-$originalWidth)/2;
				   $originalHeight = $originalWidth;
				} else {
				   $offsetWidth = 0;
				   $offsetHeight = 0;
				}
				imagecopyresampled($newImage, $originalImage, 0, 0, $offsetWidth, $offsetHeight, $width, $height, $originalWidth, $originalHeight);
			}
			else {
				imagecopyresampled($newImage, $originalImage, 0, 0, 0, 0, $width, $height, $originalWidth, $originalHeight);
			}
	
			//Create the image file
			touch($destination);
			imagejpeg($newImage, $destination, PHOTO_QUALITY);
			chmod($destination, 0644);
			imagedestroy($newImage);
			imagedestroy($originalImage);
			return true;
		}
		else {
			print "Couldn't load file: $original";
			return false;
		}
	}		
	
}	