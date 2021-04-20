<?php
include_once('config.php');


if(isset($_POST["submit"])){
    $acc = $_POST['acc'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $addr = $_POST['addr'];
   
   
    
   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $sql = "INSERT INTO `members` (`bid`,`acc`,`pass`,`name`,`addr`) VALUES (NULL, '$acc', '$pass', '$name', '$addr')";
      
        $sth = $conn->prepare($sql);
      
       $sth->execute();
       $msg="資料新增成功";
      
       //$ds = $sth->fetchAll(PDO::FETCH_ASSOC); 
      
      
      
       
      } catch(PDOException $e) {
        echo "無法新增資料Connection failed: " . $e->getMessage();
      }
      
      $conn = null;




}


?>
<?php include('header.html'); ?>

    <div class="container py-5 " style="background-color: rgb(238, 164, 174);">
    <h6 class="display-4 text-center">會員資料新增<i class="bi bi-vector-pen"></i></h6>
    <?php
if(isset($msg)){
    echo'<p class="alert alert-success">'.$msg."</p>";
}
?>
    <form action="" method="post">

        <div class="container py-5 ">

            <div class="mb-3">
                <b><label for="acc" class="form-label"style="font-size:20px">帳號:</label></b>
                <input type="text" class="form-control" id="acc" name="acc" placeholder="請輸入...">
            </div>

            <div class="mb-3">
                <b><label for="foodname" class="form-label"style="font-size:20px">密碼:</label></b>
                <input type="text" class="form-control" id="pass" name="pass" placeholder="請輸入...">
            </div>


            <div class="mb-3">
                <b><label for="foodname" class="form-label"style="font-size:20px">姓名:</label></b>
                <input type="text" class="form-control" id="name" name="name" placeholder="請輸入...">
            </div>


            <div class="mb-3">
                <b><label for="foodname" class="form-label"style="font-size:20px">信箱:</label></b>
                <input type="text" class="form-control" id="addr" name="addr" placeholder="請輸入...">
            </div>

          
               
            <input type="reset">
            <button type="submit" class="btn btn-primary my-8 " name="submit" style="float:right" >資料送出</button>
            
        </div>
</div>
    </form>




    <?php include('footer.html'); ?>