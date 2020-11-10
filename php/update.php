<html>
<body>
  <form action="form_update.php" method="post"  >
    <input type="hidden" name="old_title" value=" <?php echo $_GET['id'] ?>"
<p> <input type="text"  value=" <?php echo $_GET['id'] ?>" name="title" ></p>
<p><textarea name="description">  <?php echo file_get_contents('data/'.$_GET['id']);?> </textarea>
  <p><input type="submit" value="submit"></p>

</body>
</html>
