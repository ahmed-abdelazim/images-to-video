<?php
if (isset($_POST['message'])){
   $json = json_encode($_POST);
   $myfile = file_put_contents('output.json', $json , LOCK_EX); 
}
$txt =json_decode(file_get_contents('output.json','r'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1" />
<style>
    @font-face {
    font-family: "normal-font";
    src: url("normal.ttf");
}
body {
    background-image: url(<?php echo $txt['url'];?>); */
    background-repeat: no-repeat;
    background-color: #000;
    background-size: 100vw 100vh;
  }

#text {
    position: absolute;
    top: 0;
    left: 0;
    width: 95vw;
    height: 95vh;
    overflow: hidden;
}  

h1 {
    font-size: 4vw;
    font-family: "normal-font";
    text-align: justify;
    direction: rtl;
    margin: 20px;
    color: white;
    text-shadow:
       8px 8px 0 #000,
     -2px -2px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
  }
  .wrapper:after {
    padding-top: 100%; /*Sets ratio*/
    display: block;
    content: '';
}  
</style>
<title>untitled</title>
<link rel="stylesheet" href="" />
</head>
<body>
<div id="text">
    <h1>
        <?php echo $txt['message'];?>
    </h1>
</div>
<script src=""></script>
</body>
</html>