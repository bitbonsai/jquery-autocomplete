<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
      "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <meta http-equiv="content-language" content="en" />
  <title>jQuery key/value json jquery autocomplete demo</title>
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="jquery.autocomplete.js" type="text/javascript"></script>
<style>
/* demo */
label
{
	display:block;	
}


/* autocomplete */
input.autocomplete-loading
{
	background-image:url(autocomplete.gif);
	background-position: center right;
	background-repeat:no-repeat;
}
ul.autocomplete 
{
    position: absolute;
    overflow: hidden;
    background-color: #fff;
    border: 1px solid ButtonShadow;
    margin: 0px;
    padding: 0px;
    list-style: none;
    color: #000;
	display:none;
	z-index:1000;
}
ul.autocomplete li 
{
  display: block; 
  padding: 0.3em; 
  overflow: hidden;
  width: 100%;
  cursor:pointer;
}

ul.autocomplete li.selected 
{
  background-color: Highlight ; 
  color: #fff;
}
</style>
</head>
<body>
<div>
<h1>jQuery key/value json jquery autocomplete demo</h1>
<p><? if ($_POST) { echo '<b>Post values</b> > '; print_r($_POST); } ?></p>
<p>Press submit to see $_POST values</p>
<form method="post" action="">
<label for="text">Enter php, javascript, mysql etc it will display all blog post that have the keyword in title</label>
<input type="text" name="example" id="example" size="60"/>
<script>
$("input#example").autocomplete("autocomplete-ajax.php");
</script>
<br/>
<input type="submit" value="submit">
</form>
</div>
</body>
</html>
