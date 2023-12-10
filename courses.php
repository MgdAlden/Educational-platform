<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Courses</title>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="css/courses_style.css">


</head>

<body>






    <!-- header section starts  -->

    <header class="header">

        <section class="flex">

            <a href="#home" class="logo">educa.</a>

            <nav class="navbar">
                <a href="index.html">home</a>

                <a href="#">courses</a>
                <a href="index.html">login</a>

            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </section>

    </header>

    <!-- header section ends -->







    <div class="img_parent">

        <div class="img"></div>




    </div>













    <!-- Start coures -->
   
    
    
    <div class="coures">
        <div class="container">
            <h2 class="special-heading">BEST COURSES</h2>

            <div class="coures-content">


                <?php

            include "conveger.php";
            
            
            
            if (isset($_GET['page'])) {
        $page=$_GET['page'];
            }else{
            
            $page=1;
            }
            $num_course=9;
            $start_from=($page-1)*9;
            
       
            
                $query="SELECT * FROM `info_course` limit $start_from,$num_course ";
             $result= mysqli_query($con,$query);

             while ( $row = mysqli_fetch_assoc($result) ) {
            ?>
                <div class="card">

                    <img src=<?php echo $row['img']?> alt="">
                    <div class="info">

                        <ul>
                            <li>
                                <i class="fas fa-book-open"></i>

                                <?php echo $row['num_lessons']?> Lesson
                            </li>



                            <li>
                                <?php echo $row['Evaluation']?>
                                <i class="fas fa-star"></i>

                            </li>
                        </ul>

                        <h3><?php echo $row['Title']?></h3><br>




                        <div class="div_descriptios">

                            <p><?php echo $row['description']?> </p>

                        </div>




                        <div class="div_down">


                            <hr>


                            <ul>
                                <li>
                                    $<?php echo $row['price']?>

                                </li>



                                <li>

                                    <a href="<?php echo $row['link']?>" class="next_a" target="_blank">next</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>

                <?php
             }
             ?>








            </div>
        </div>
    </div>

    <!-- End coures -->








    <div class="move">
        <div class="moveCont">

            <?php
 include "conveger.php";
$co_query="SELECT * FROM `info_course`";
$co_result=mysqli_query($con,$co_query);
$total_record=mysqli_num_rows($co_result);
$total_page=ceil($total_record/$num_course);


// $page=10;
if ($page>1) {
echo "
 <a  href='courses.php?page=".($page-1)." '   class='bt_move Previousr'><</a>

";
}else{
echo"<p   class='dis'></p>";


}




for ($i=2; $i < $total_page; $i++) { 




if($i<=5 || ($total_page-5)<$i){
echo " <a  href='courses.php?page=".($i)." '   class='move_page_num'>".($i)."</a>  ";
}else if($i>5||$i<8){
echo " <p class='point'>.</p>";
}


   
}







if ($page<$total_page) {
echo "
 <a  href='courses.php?page=".($page+1)." '   class='bt_move next'>></a>

";
}else{
echo"<p   class='dis'></p>";


}









           
            ?>


        </div>

    </div>






















    <!-- footer section starts  -->

    <footer class="footer">

        <section>

            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100010406580813&mibextid=ZbWKwL"
                    class="fab fa-facebook-f" target="_blank"></a>
                <a href="https://twitter.com/MjdRys" target="_blank" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin" target="_blank"></a>
                <a href="#" class="fab fa-instagram" target="_blank"></a>
                <a href="https://github.com/MgdAlden" class="fab fa-github" target="_blank"></a>
            </div>

            <div class="credit">
          &copy; copyright 2022/12/2 by <span>M_IS_Y</span> | all rights
          reserved!
        </div>
        </section>

    </footer>

    <!-- footer section ends -->











<script src="./js/script.js"></script>


</body>

</html>