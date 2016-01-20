<?php
if($_POST["PHPSESSID"]!="")
{
	session_id($_POST["PHPSESSID"]);
	//session_name("your_session_name"); uncomment this if your session has a name
	session_start();
}

function sanitize_string($chaineNonValide) {
	$chaineNonValide = str_replace("'", "", $chaineNonValide);
	$chaineNonValide = str_replace("\"", "", $chaineNonValide);
	$chaineNonValide = utf8_decode($chaineNonValide);
	$chaineNonValide = strtolower($chaineNonValide);
    $chaineNonValide = preg_replace('`\s+`', '-', trim($chaineNonValide));
	$a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ?';
    $b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-';
    $chaineValide=strtr($chaineNonValide,utf8_decode($a), $b);
	$c = "&~#{([|`\^])}$¤£µ*ù%§!:/;,?<>.°''\"";
	$chaineValide=strtr($chaineValide,utf8_decode($c),"");
	$chaineValide=strtr($chaineValide,"+","_");
	
	$chaineValide=preg_replace('/([-])\1+/', '-', $chaineValide);
	$chaineValide=preg_replace('/([_])\1+/', '_', $chaineValide);
	return utf8_encode($chaineValide);
}

if($_POST["action"]=="upload")
{
	if(!empty($_FILES))
	{
		$result = array();
		$tempFile = $_FILES["Filedata"]["tmp_name"];
		$targetPath = $_POST["path"];
		$pathinfo = pathinfo($_FILES['Filedata']['name']);
		$fileExt = $pathinfo["extension"];
		if($fileExt!="php" && $fileExt!="php5" && $fileExt!="php4" && $fileExt!="php3" && $fileExt!="html" && $fileExt!="htm" && $fileExt!="js") {
			$fileName = stripslashes($pathinfo["filename"]); //  . time()
			$fileName = sanitize_string($fileName);
			$targetFile =  $targetPath . $fileName . "." . $fileExt;

			if(move_uploaded_file($tempFile, $targetFile))
			{
				
				// Redimnesionnement Image principal //////////////////////////////
				require_once("functions.php");

				list($width_targetFile, $height_targetFile) = getimagesize($targetFile); 

				if(!(int)$_POST["wMax"]) $_POST["wMax"]=0;
				if(!(int)$_POST["hMax"]) $_POST["hMax"]=0;
				
				$width_new=$width_targetFile;
				$height_new=$height_targetFile;

				if ($height_new>$_POST["hMax"] && $_POST["hMax"]>0){
					$height_new = $_POST["hMax"];
					$width_new = round($_POST["hMax"] / ($height_targetFile/$width_targetFile));
				} 
				if ($width_new>$_POST["wMax"] && $_POST["wMax"]>0 ){
					$width_new = $_POST["wMax"];
					$height_new = round($_POST["wMax"] / ($width_targetFile/$height_targetFile));
				} 


				if($width_new!=$width_targetFile || $height_new!=$height_targetFile) { 
					resizeImage( $width_new, $height_new, $targetFile, $targetFile); 
				}
				//////////////////////////////

				if((int)$_POST["text_watermark_thumbnails"])
				{
					//textWatermark
					$textWatermarks = array();
					$i = 0;
					while($_POST["text_watermark_width".$i]!="")
					{
						$textWatermarks[$i]["text"] = $_POST["text_watermark_text".$i];
						$textWatermarks[$i]["width"] = $_POST["text_watermark_width".$i];
						$textWatermarks[$i]["height"] = $_POST["text_watermark_height".$i];
						$textWatermarks[$i]["background_color"] = $_POST["text_watermark_background_color".$i];
						$textWatermarks[$i]["text_color"] = $_POST["text_watermark_text_color".$i];
						$textWatermarks[$i]["bg_transparency"] = $_POST["text_watermark_bg_transparency".$i];
						$textWatermarks[$i]["text_transparency"] = $_POST["text_watermark_text_transparency".$i];
						$textWatermarks[$i]["font"] = $_POST["text_watermark_font".$i];
						$textWatermarks[$i]["font_size"] = $_POST["text_watermark_font_size".$i];
						$textWatermarks[$i]["text_x"] = $_POST["text_watermark_text_x".$i];
						$textWatermarks[$i]["text_y"] = $_POST["text_watermark_text_y".$i];
						$textWatermarks[$i]["right"] = $_POST["text_watermark_right".$i];
						$textWatermarks[$i]["bottom"] = $_POST["text_watermark_bottom".$i];
						$i++;
					}
					if(count($textWatermarks))
					{
						require_once("functions.php");
						$imagesize = getimagesize($targetFile);
						$width = $imagesize[0];
						$height = $imagesize[1];
						resizeImage($width, $height, $targetFile, $targetFile, array(), $textWatermarks);
					}
				}
				if((int)$_POST["watermark_thumbnails"])
				{
					//watermark
					$watermarks = array();
					$i = 0;
					while($_POST["watermark_path".$i]!="")
					{
						$watermarks[$i]["path"] = $_POST["watermark_path".$i];
						$watermarks[$i]["bottom"] =  $_POST["watermark_bottom".$i];
						$watermarks[$i]["right"] =  $_POST["watermark_right".$i];
						$i++;
					}
					if(count($watermarks))
					{
						require_once("functions.php");
						$imagesize = getimagesize($targetFile);
						$width = $imagesize[0];
						$height = $imagesize[1];
						resizeImage($width, $height, $targetFile, $targetFile, $watermarks);
					}
				}
				//generate thumbnails after the main file is uploaded
				if($_POST["thumbnails"]!="")
				{
					require_once("functions.php");
					$thumbnailsExplode = explode(",", $_POST["thumbnails"]);
					if($_POST["thumbnailsFolders"]!="")
						$thumbnailsFoldersExplode = explode(",", $_POST["thumbnailsFolders"]); 
					if($_POST["thumbnailsCrop"]!="") 
						$thumbnailsCropExplode = explode(",", $_POST["thumbnailsCrop"]); 
					
					$result["thumbnails"] = array();
					for($i=0; $i<count($thumbnailsExplode); $i++)
					{
						
						$dimensions = explode("x", trim($thumbnailsExplode[$i]));
						$sourceFile = $targetFile;
						$destinationFile = (trim($thumbnailsFoldersExplode[$i])!="" ? trim($thumbnailsFoldersExplode[$i]):$targetPath) . $fileName .  $_POST["svig"] . $i .  "." . $fileExt;
						resizeImage($dimensions[0], $dimensions[1], $sourceFile, $destinationFile,array(),array(),$_POST["thumbnailsCrop"]); // $thumbnailsCropExplode[$i]							
						$result["thumbnails"][] = $fileName . $_POST["svig"] . $i . "." . $fileExt;
					}
				}  
				if(!(int)$_POST["text_watermark_thumbnails"])
				{
					//textWatermark
					$textWatermarks = array();
					$i = 0;
					while($_POST["text_watermark_width".$i]!="")
					{
						$textWatermarks[$i]["text"] = $_POST["text_watermark_text".$i];
						$textWatermarks[$i]["width"] = $_POST["text_watermark_width".$i];
						$textWatermarks[$i]["height"] = $_POST["text_watermark_height".$i];
						$textWatermarks[$i]["background_color"] = $_POST["text_watermark_background_color".$i];
						$textWatermarks[$i]["text_color"] = $_POST["text_watermark_text_color".$i];
						$textWatermarks[$i]["bg_transparency"] = $_POST["text_watermark_bg_transparency".$i];
						$textWatermarks[$i]["text_transparency"] = $_POST["text_watermark_text_transparency".$i];
						$textWatermarks[$i]["font"] = $_POST["text_watermark_font".$i];
						$textWatermarks[$i]["font_size"] = $_POST["text_watermark_font_size".$i];
						$textWatermarks[$i]["text_x"] = $_POST["text_watermark_text_x".$i];
						$textWatermarks[$i]["text_y"] = $_POST["text_watermark_text_y".$i];
						$textWatermarks[$i]["right"] = $_POST["text_watermark_right".$i];
						$textWatermarks[$i]["bottom"] = $_POST["text_watermark_bottom".$i];
						$i++;
					}
					if(count($textWatermarks))
					{
						require_once("functions.php");
						$imagesize = getimagesize($targetFile);
						$width = $imagesize[0];
						$height = $imagesize[1];
						resizeImage($width, $height, $targetFile, $targetFile, array(), $textWatermarks);
					}
				}
				if(!(int)$_POST["watermark_thumbnails"])
				{
					//watermark
					$watermarks = array();
					$i = 0;
					while($_POST["watermark_path".$i]!="")
					{
						$watermarks[$i]["path"] = $_POST["watermark_path".$i];
						$watermarks[$i]["bottom"] =  $_POST["watermark_bottom".$i];
						$watermarks[$i]["right"] =  $_POST["watermark_right".$i];
						$i++;
					}
					if(count($watermarks))
					{
						require_once("functions.php");
						$imagesize = getimagesize($targetFile);
						$width = $imagesize[0];
						$height = $imagesize[1];
						resizeImage($width, $height, $targetFile, $targetFile, $watermarks);
					}
				}
			}
			else
				$result["error"] .= " Upload failed!";
		}
		else
			$result["error"] .= " Cannot upload " . $fileExt . " files!";
	
		$result["path"] = $targetPath;
		$result["filename"] = $fileName . "." . $fileExt;
		$result["extension"] = $fileExt;
		echo json_encode($result);
		exit();
	}
}
else if($_POST["action"]=="remove")
{
	$message = "";
	/*if you uploading files to other than files directory, you've got to change it in three below lines
	in function pathinfo, in if statement and in unlink function*/
	$pathInfo = pathinfo("files/".stripslashes($_POST["filename"]));
	if($pathInfo['dirname']=="files")
	{
		if(!@unlink("files/".stripslashes($_POST["filename"])))
			 $message = "Error - file not found! ";
	}
	else
		$message = "Security error!";
	echo $message;
}
?>