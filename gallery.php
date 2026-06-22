


<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<style>
html, body {
  margin: 0;
  padding: 0;
  font-family: arial;
}


#covers {
padding:10px;
display: grid;
grid-template-columns: repeat(3, 1fr);
}

@media (min-width: 800px) {
    #covers {
    grid-template-columns: repeat(7, 1fr);
    }
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

.knot{
    position: relative;
    display:block;
    float:left;
    font-size: 10px;
}

.knot img{
    width: 100%;
}

.link{
    color: black;
    position: relative;
    bottom: 0;
    word-break: break-all;
    display: table;
    margin: 0 auto;
}

@media (min-width: 800px) {
    .link{
        color: transparent;
        position: absolute;
        bottom: 0;
    }
}

</style>
</head>
<body>
<div class="banner">
<h1>Celtic Knots Gallery</h1>
<!-- <p>Your knot has been created! <br><br>After you collect your sticker, you can go <a href="javascript:window.history.back();" style="font-weight:bold; color: #ddcc64;">BACK</a> and use the distinguish strands option to have a reference guide when coloring the sticker.</p>
 -->
</div>
<div id="covers">

<?php $dirname = "uploads/";
$images = glob($dirname."*.jpg");
foreach (array_reverse($images) as $image){
    $parts = explode('/', $image);
    $filename = $file = basename($image);
  echo '<div class="knot"><img src="'.$image.'" /><br><a class="link" href="#" onclick="PrintImage(\'http://www.idiophonebox.com/celtic/'.$image.'\'); return false;">'.array_pop($parts).'</a></div>';
}
?>

</div>
</body>
</html>

<script>

    function ImageToPrint(source)
    {
        return "<html style='margin:0;'><head><scri"+"pt>function step1(){\n" +
                "setTimeout('step2()', 10);}\n" +
                "function step2(){window.print();window.close()}\n" +
                "</scri" + "pt></head><body style='margin:0;' onload='step1()'>\n" +
                "<img style='margin:5px auto 0 auto; display:block;' src='" + source + "' /></body></html>";
    }
    
    function PrintImage(source)
    {
        var Pagelink = "about:blank";
        var pwa = window.open(Pagelink, "_new");
        pwa.document.open();
        pwa.document.write(ImageToPrint(source));
        pwa.document.close();
    }

</script>