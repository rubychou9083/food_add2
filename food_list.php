<?php
include_once('config.php');


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM `twfood`";

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
          <th>區域</th>
          <th>美食餐廳名稱</th>

          <th>店家地址</th>
         
          <th>營業時間</th>
          <th>電話</th>
          
          <th><a href="food_add.php">新增</a></th>

      
      </tr>

 


<?php include('footer.html'); ?>

<?php
    $btype = array('1'=>"北部", '2'=>"中部",'3'=>"南部",'4'=>"東部");

     foreach ($ds as $d){
      echo "<tr >";
      echo "<td >". $d['area'] . "</td>";
      echo '<td><a href="food_show.php?bid='. $d['bid'] . '">';
      echo  $d['foodname'] . "</a></td>";
      echo "<td>".$d['address'] . "</td>";
    
      echo "<td>".$d['time'] . "</td>";
      echo "<td>".$d['phone'] . "</td>";
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
