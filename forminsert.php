<!DOCTYPE html>
<html>
<head>
	<title>Insertname Form</title>
<meta charset="utf-8">
</head>
<body>
  <form action = "insert.php" method = "post" id="CommentForm" >
    ชื่อ(ENGLISH ONLY!):<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
    ความรู้สึกของวันนี้:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
    <input type="submit" id="commentBtn">
  </form> 
</body>
</html>