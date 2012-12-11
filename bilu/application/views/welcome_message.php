<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Bookmark Application</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://underscorejs.org/underscore-min.js"></script>
    <script src="http://ajax.cdnjs.com/ajax/libs/backbone.js/0.3.3/backbone-min.js"></script>
    <script src="/bilu/home.js"></script>
    
<body>

<form action="index.php/welcome/save" method="post">
<input type-"text" name="title" />
<input type="text" name="url" />
<input type="text" name="tags"/>
<input type="submit" value="save" />

</form>

<br/><br/>
<strong>Search</strong>
<div id="search_template"></div>
</body>    
  

</html>
