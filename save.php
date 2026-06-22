


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<style>
html, body {
  margin: 0;
  padding: 0;
  font-family: arial;
}

img {
  width:100%;
  max-width:400px;
  margin: .25vw auto;
}


#covers {

}

.banner {
  background-color: #00B6C3;
  color: #fff;
  font-family: arial;
  padding: 20px;
}

h1, p {
  text-align: center;
}

h1 {
  font-size: 2.5em;
  text-transform: uppercase;
  font-family: "Times New Roman", Georgia, Serif;
}

button {
  background-color: #ED1923;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}

button:hover {
  background-color: #d60c13;
}
</style>
</head>
<body>
<div class="banner">
<h1>Celtic Knots</h1>
<p>Your knot has been created! <br><br>After you collect your sticker, you can go <a href="javascript:window.history.back();" style="font-weight:bold; color: #ddcc64;">BACK</a> and use the distinguish strands option to have a reference guide when coloring the sticker.</p>
</div>
<div id="covers">

<?php

$directory = 'uploads/';
$files = glob($directory . '*.jpg');

if ( $files !== false ){ $filecount = count( $files );}

//Get the base-64 string from data
$filteredData=substr($_POST['fileToUpload'], strpos($_POST['fileToUpload'], ",")+1);
$fileName = $_POST['fileName'];
 
//Decode the string
$unencodedData=base64_decode($filteredData);
 
//Save the image
file_put_contents($directory.$fileName .'_00'. $filecount .'.jpg', $unencodedData);
echo '<p>Please visit the attendant and ask to print: <b>'. $fileName .'_00'. $filecount .'.jpg</b><br><br>You can also save the image below to your phone.</p>';
echo '<img src="'. $directory . $fileName .'_00'. $filecount .'.jpg" style="margin: 0 auto; display:block; />';

?>

<?php $dirname = "public/";
$images = glob($dirname."*.jpg");
//foreach (array_reverse($images) as $image){
    //$filename = $file = basename($image);
  // echo '<img src="'.$image.'" />';
  //echo '<img src="'.$newest_file.'" />';
//}
?>

</div>
</body>
</html>

<script>
//setTimeout(function() {
//  window.location.href = "index.php";
//}, 10000);
</script>