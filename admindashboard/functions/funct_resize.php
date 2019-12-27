<?php
function image_resize($src_image,$filename,$destination,$new_width)
{
	
	if(file_exists($src_image))
	{
		$orig_size = getimagesize($src_image);				
		$excess_width = $orig_size[0] - $new_width;
		
		if($excess_width > 0)
		{
			$width_reduce = $excess_width / $orig_size[0];
			$less_width = $orig_size[0] * $width_reduce;
			$less_height = intval($orig_size[1] * $width_reduce);	
			$new_width = $orig_size[0] - $less_width;
			$new_height = $orig_size[1] - $less_height;
			$new_image = @imagecreatefromjpeg($src_image);
			$new_dest=imagecreatetruecolor($new_width, $new_height);
			imagecopyresampled($new_dest, $new_image, 0, 0, 0, 0, $new_width, $new_height, $orig_size[0], $orig_size[1]) or die("cannot copy");
			imagejpeg($new_dest,"$destination/".$filename,75);
		} else {
			move_uploaded_file($src_image,"$destination/".$filename);
		}
	}
	
}
	
?>