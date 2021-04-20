<?php
include_once('config.php');


if(isset($_POST["submit"])){
    $foodname = $_POST['foodname'];
    $area = $_POST['area'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $price =
     $_POST['price'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    $intro = $_POST['intro'];
    

   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $sql = "INSERT INTO `twfood` (`bid`, `foodname`, `area`, `date`, `address`,  `price`, `time`, `phone`, `intro`) VALUES (NULL, '$foodname', '$area', '$date', '$address', ' $price', ' $time', ' $phone', ' $intro')";
      
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
    <h6 class="display-4 text-center">美食餐廳資料新增<i class="bi bi-vector-pen"></i></h6>
    <?php
if(isset($msg)){
    echo'<p class="alert alert-success">'.$msg."</p>";
}
?>
    <form action="" method="post">

        <div class="container py-5 ">

            <div class="mb-3">
                <b><label for="foodname" class="form-label"style="font-size:20px">美食餐廳名稱</label></b>
                <input type="text" class="form-control" id="foodname" name="foodname" placeholder="請輸入...">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="area" id="area" value="1">
                    <b><label class="form-check-label" for="inlineRadio1">北部</label></b>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="area" id="area" value="2">
                   <b> <label class="form-check-label" for="inlineRadio2">中部</label>
                </b></div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="area" id="area" value="3">
                    <b><label class="form-check-label" for="inlineRadio2">南部</label>
                </b></div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="area" id="area" value="4">
                    <b> <label class="form-check-label" for="inlineRadio2">東部</label></b>
                </div>

            </div>


            <!--<div class="mb-3">
                <label for="author" class="form-label">作者</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="請輸入作者">
                
            </div>


           -->

            <div class="mb-3">
                <b><label for="date" class="form-label" style="font-size:20px">拍攝日期</label></b>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>
            </div>

            <div class="input-group mb-3 my-4">
                <label class="input-group-text" for="cover">上傳照片</label>
                <input type="file" class="form-control" id="cover" name="cover">
            </div>

            <div class="mb-3">
               <b> <label for="address" class="form-label"style="font-size:20px">店家地址</label></b>
                <input type="text" class="form-control" id="address" name="address" placeholder="請輸入...">

            </div>
            
          

        
        <div class="row">
            <div class="col">
            <div class="mb-3">
               <b> <label for="time" class="form-label"style="font-size:20px">營業時間</label></b>
                <input type="text" class="form-control" id="time" name="time" placeholder="請輸入...">
                
            </div>
            </div>
            <div class="col">
            <div class="mb-3">
               <b> <label for="time" class="form-label"style="font-size:20px">電話</label></b>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="請輸入...">   
            </div>
            </div>
        </div>
        


            <div class="mb-3"> 
               <b> <label for="price" class="form-label"style="font-size:20px">價格</label> </b>
                <textarea name="price" rows="2" cols="50"class="form-control"id="price" name="price" placeholder="請輸入..."></textarea>   
            </div>
           

               







                <!--<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="in" id="inlineCheckbox1" value="低價位">
  <label class="form-check-label" for="inlineCheckbox1">低價位</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="in"  id="inlineCheckbox2" value="中價位">
  <label class="form-check-label" for="inlineCheckbox2">中價位</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="in" id="inlineCheckbox2" value="高價位">
  <label class="form-check-label" for="inlineCheckbox2">高價位</label>
</div>

            </div>-->

            <div class="mb-3">
               <b> <label for="intro" class="form-label"style="font-size:20px">簡介</label></b>
                <textarea class="form-control ckeditor" name="intro" id="intro" class="80" rows="10"></textarea>
               
            
            </div>


            <!--  <div class="form-check">
                <input type="checkbox" class="form-check-input" id="pubyn" name="pubyn">
              <label class="form-check-label" for="pubyn">是否公布</label></div>-->


            
            
            <button type="submit" class="btn btn-primary my-8 " name="submit" style="float:right" >資料送出</button>
            
        </div>
</div>
    </form>




<?php include('footer.html'); ?>

  


