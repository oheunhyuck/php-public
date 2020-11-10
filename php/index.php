<!doctype html>
<html>
<head>
  <?php
function title(){
  echo $_GET['id'].'<br>';
}
function List_files($file){
$files = scandir($file);
$i = 0;
while(count($files) > $i){
  if($files[$i]!='.'&& $files[$i]!='..')
  echo "<li><a href=\"index.php?id=$files[$i]\">$files[$i]</a></li>";
  $i=$i+1;
}
}
function Past_files(){
    echo file_get_contents('data/'.$_GET['id']);

}


  ?>
<title><?php title();?></title>
</head>
<body>
  <h1><a href="index.php"> web</a><h1>
    <ul>
  <?php
  List_files('data');

   ?>
    </ul>
<br>
<a href="create.php">create</a>

   <?php

   if(isset($_GET['id'])){?>
    <a href="update.php?id=<?php echo $_GET['id']; ?>">update</a>
    <form action="delete.php " method="post">
  <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
  <input type="submit" value="delete"
</form>
    <?php
  title();
 Past_files();


   }
   else{
     echo '<h1>'.'Hello PHP'.'</h1>';
   }
?>

    <body>
      </html>
