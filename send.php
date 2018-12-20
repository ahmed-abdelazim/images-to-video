<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Form validation example</title>
 
  <style>
#content { 
    overflow: hidden;
    width: 80%; 
    padding-top: 50px;
    margin-right: auto;
    padding-bottom:0px ;
    margin-left: auto;
}
    </style>
</head>

<body>

<div id="content">
    <form action="text.php" method="post">
    <div class="form-group">
        <label for="url">URL</label> 
        <input id="url" name="url" type="url" required="required" class="form-control here">
    </div>
    <div class="form-group">
        <label for="Message">Message</label> 
        <textarea id="Message" name="message" cols="40" rows="5" required="required" class="form-control"></textarea>
    </div> 
    <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

</body>
</html>