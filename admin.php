<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="./css/admin_style.css">


    <title>Dashboard</title>
</head>

<body>

    <nav>


        <div class="content">


            <div class="logo">

                <a href="index.html">
                    <i class="fa fa-arrow-left"></i>

                </a>
                <p>Dashboard </p>


            </div>

            <div>
                <button onclick=" window.location ='insert.php'" class="btu_add">
                    <span>+</span>

                    Add Course</button>
            </div>

        </div>


    </nav>


    
    <div class="table_section">







        <table>
            <thead>
                <tr>
                <th class="first_th">Num_course</th>
                    <th >Img</th>
                    <th>Name</th>
                    <th>Evaluation </th>
                    <th>price </th>
                    <th class="last_th">Action</th>
                </tr>


            </thead>


            <tbody>

                <?php

include "conveger.php";
$query="SELECT * FROM `info_course` ";
$result= mysqli_query($con,$query);
$i=0;
while ( $row = mysqli_fetch_assoc($result) ) 

            {
            ++$i;
  ?>

                <tr>

                <td><?php echo $i ?></td>
                    <td> <img src=<?php echo $row['img']?> alt=""></td>
                    <td><?php echo $row['Title']?></td>
                    <td>

                        <?php echo $row['Evaluation']?>
                        <i class="fas fa-star"></i>
                    </td>


                    <td><?php echo $row['price']?> $</td>



                    <td>


                        <a href="edit.php?id=<?php echo $row['id']?>" class="edit_bt">

                            <i class="fa-solid fa-pen-to-square"></i>

                        </a>

                        <a href=" delete.php?id=<?php echo $row['id']?>" class="delet_bt">

                            <i class="fa-solid fa-trash"></i>

                        </a>



                    </td>




                </tr>



                <?php

            }

?>


            </tbody>

        </table>


    </div>





















    <!-- <script>
    hidden() {

        document.querySelector("msg").setAttribute('hidden');

    }
    </script> -->




</body>

</html>