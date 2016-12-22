<?php 
//exif file data
//data yang ditambahkan lagi
 $exif = exif_read_data('edit.jpg',null,true,true);
 ?>
 <pre>
 	<?php print_r($exif) ?>
 </pre>

 
<?php echo '<img src="data:'.$exif['COMPUTED']['Thumbnail.MimeType'].';base64,'.base64_encode($exif['THUMBNAIL']['THUMBNAIL']).'" alt="" />'; ?>


 <!-- 
 // http://fatfolderdesign.com/554/get-photo-exif-data-with-php -->
