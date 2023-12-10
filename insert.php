<?php
include "conveger.php";
if (isset($_POST["submit"])){
$img=$_POST['img'];
$nameCourse=$_POST['name'];
$numLessons=$_POST['Num-lessons'];
$Evaluation=$_POST['Evaluation'];
$Price=$_POST['Price'];
$Description=$_POST['Description'];
$Link=$_POST['Link'];

$query="INSERT INTO `info_course`(`id`, `img`, `num_lessons`, `Evaluation`, `Title`, `description`, `price`, `link`)
VALUES (null,'img_for_courses/assets/$img','$numLessons','$Evaluation','$nameCourse','$Description','$Price','$Link')";


$result= mysqli_query($con,$query);


if ($result) {
  header("Location: admin.php?msg=new record successfully");

}

};
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert</title>
    <link rel="stylesheet" href="./css/insert.css" />
  </head>

  <body>
    <nav>
      <div class="logo">Insert</div>
    </nav>

    <section class="contaner">
      <form action="" method="post">
        <div class="info-contaner">
          <div class="contaner-flex-img">
            <p class="lab-box-img">Add-img</p>
            <div class="add-img-contaner">
              <img id="img" src="" alt="" />

              <div class="choose-img">
                <label for="add_img">+</label>
                <input
                  type="file"
                  id="add_img"
                  accept="image/*"
                  id="imageInput"
                  name="img"
                  onchange="readURL(this)"
                  hidden
                  required />
              </div>
            </div>
          </div>

          <div class="contaner-flex-info">
            <div class="row">
              <div class="input-info">
                <label for="name">Name-course</label>
                <input type="text" id="name" name="name" required />
              </div>
              <div class="input-info">
                <label for="Num">Num-lessons</label>
                <input type="number" id="Num" name="Num-lessons" required />
              </div>
            </div>
            <div class="row">
              <div class="input-info">
                <label for="eva">Evaluation</label>
                <input type="number" id="eva" name="Evaluation" required />
              </div>
              <div class="input-info">
                <label for="Price">Price</label>
                <input type="number" id="Price" name="Price" required />
              </div>
            </div>

            <div class="input-info singl-input">
              <label for="des">Description </label>
              <input
                type="text"
                id="des"
                class="r-3"
                name="Description"
                required />
            </div>

            <div class="input-info singl-input">
              <label for="Link">Link</label>
              <input type="url" id="Link" class="r-4" name="Link" required />
            </div>

            <div class="row-bt">
              <div class="bt-info">
                <input
                  type="button"
                  id="name"
                  value="cancel"
                  onclick=" window.location =`admin.php`"
                  class="but" />
              </div>
              <div class="bt-info">
                <input
                  type="submit"
                  id="name"
                  value="Save"
                  name="submit"
              
                  class="but" />
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>

    <script src="./js/url_img_script.js"></script>
  </body>
</html>
