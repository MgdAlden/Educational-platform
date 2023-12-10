<?php
include "conveger.php";

$id=$_GET['id'];
$query_id="SELECT * FROM `info_course` WHERE id = $id  LIMIT 1";
$result_id=mysqli_query($con,$query_id);
$row=mysqli_fetch_assoc($result_id);
$imgvalue=$row['img'];


if (isset($_POST["submit"])){
// if ($_POST['img']!=='') {
//    $img= $_POST['img'];
// }else{
//   $img=$imgvalue;
// };  

$img=$_POST['img']!==''?"img_for_courses/assets/".($_POST['img'])."":$row['img'] ;
$nameCourse=$_POST['name'];
$numLessons=$_POST['Num-lessons'];
$Evaluation=$_POST['Evaluation'];
$Price=$_POST['Price'];
$Description=$_POST['Description'];
$Link=$_POST['Link'];

$query="UPDATE `info_course` SET `img`='$img',`num_lessons`='$numLessons',`Evaluation`='$Evaluation',`Title`='$nameCourse',`description`='$Description',`price`='$Price',`link`='$Link' WHERE id=$id";

$result= mysqli_query($con,$query);


if ($result) {
    header("Location: admin.php?msg=new record successfully");
}else{
    header("Location: admin.php?msg=error record");

}
 
 

 
  

};

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit</title>
    <link rel="stylesheet" href="./css/insert.css" />
</head>

<body>
    <nav>
        <div class="logo">Edit</div>
    </nav>




    <section class="contaner">
        <form action="" method="post">
            <div class="info-contaner">
                <div class="contaner-flex-img">
                    <p class="lab-box-img">Add-img</p>
                    <div class="add-img-contaner">
                        <img id="img" src="<?php echo $row['img'] ?>" alt="" />

                        <div class="choose-img">
                            <label for="add_img">+</label>
                            <input type="file" id="add_img" accept="image/*" id="imageInput" name="img"
                                onchange="readURL(this)" 
                                value="<?php echo $row['img'] ?>"
                  hidden
                                />
                        </div>
                    </div>
                </div>  
                
          






            <div class="contaner-flex-info">
                <div class="row">
                    <div class="input-info">
                        <label for="name">Name-course</label>
                        <input type="text" id="name" name="name" value="<?php echo $row['Title']?>" required />
                    </div>
                    <div class="input-info">
                        <label for="Num">Num-lessons</label>
                        <input type="number" id="Num" name="Num-lessons" value="<?php echo $row['num_lessons']?>"
                            required />
                    </div>
                </div>
                <div class="row">
                    <div class="input-info">
                        <label for="eva">Evaluation</label>
                        <input type="number" id="eva" name="Evaluation" value="<?php  echo $row['Evaluation']?>"
                            required />
                    </div>
                    <div class="input-info">
                        <label for="Price">Price</label>
                        <input type="number" id="Price" name="Price" value="<?php echo $row['price']?>" required />
                    </div>
                </div>

                <div class="input-info singl-input">
                    <label for="des">Description </label>
                    <input type="text" id="des" class="r-3" name="Description" value="<?php echo $row['description']?>"
                        required />
                </div>

                <div class="input-info singl-input">
                    <label for="Link">Link</label>
                    <input type="url" id="Link" class="r-4" name="Link" value="<?php echo $row['link']?>" required />
                </div>

                <div class="row-bt">
                    <div class="bt-info">
                        <input type="button" id="name" value="cancel" onclick=" window.location =`admin.php`"
                            class="but" />
                    </div>
                    <div class="bt-info">
                        <input type="submit" id="name" value="Update" name="submit" class="but" />
                    </div>
                </div>
            </div>
            </div>
        </form>
    </section>

    <script src="./js/url_img_script.js"></script>
</body>

</html>