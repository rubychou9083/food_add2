<?php
include_once('config.php');


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM `members`";

 $sth = $conn->prepare($sql);

 $sth->execute();

 $ds = $sth->fetchAll(PDO::FETCH_ASSOC); 

//print_r($ds);
//foreach ($ds as $d){
  //echo "書名:" . $d['bookname'];
  //echo "作者:" . $d['author'];
  //echo "<hr>";
    //}




 
} catch(PDOException $e) {
  echo "無法連線Connection failed: " . $e->getMessage();
}

$conn = null;
?>

<?php include('header.html'); ?>

<table class="table">
      <tr>
          <th>帳號</th>
          <th>密碼</th>

          <th>姓名</th>
         
          <th>信箱</th>
        
          
          <th><a href="food_add.php">新增</a></th>

      
      </tr>

 


<?php include('footer.html'); ?>

<?php

     foreach ($ds as $d){
      echo "<tr >";
      echo "<td >". $d['acc'] . "</td>";
     
    
      echo "<td>".$d['pass'] . "</td>";
      echo "<td>".$d['name'] . "</td>";
      echo "<td>".$d['addr'] . "</td>";
     
      echo "<td>";
      echo '<a href="food_edit.php?bid='. $d['bid'].'">修改 </a>';
      echo '<a href="food_delete.php?bid='. $d['bid'].'"onclick="return confirm(\'確定刪除這筆資料嗎\');">刪除</a>';
      echo "</td>";
      echo "</tr>";
    } 
    
  ?>
      </table>
     </div>


   
     <?php include('footer.html'); ?>
