<?php 
    include_once "from2functions.php";
   $furits =  array("Mango","Apple","Bananna","Oreaqng","pach");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/milligram.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Our First Form</h1> 
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem earum nam accusamus pariatur assumenda iste! Ipsa officiis doloremque quasi? Minima id quos voluptas atque quasi architecto. Perferendis id nulla asperiores.</p>
                <p>
                    <?php 
                        // if(isset($_POST['furits'])){

                        //     if(!empty($_POST['furits'])){
                        //         printf("You have selected value: %s", filter_input(INPUT_POST,'furits', FILTER_SANITIZE_STRING));
                        //     }else{
                        //         echo "Please Select again";
                        //     }
                        // }

                        

                        // if(isset($_POST['furits']) && count($_POST['furits']) > 0){
                        //     printf("Your Selected Valus: %s", join(", ",$_POST['furits']));
                        // }

                        if(isset($_POST['furits']) && count($_POST['furits']) > 0){
                           foreach($_POST['furits'] as $sVal){
                            echo $sVal."<br>";
                           }
                        }
                    ?>
                </p>
                <div class="row">
                    <div class="column column-60 column-ofsset-20">
                       <form action="" method="POST">
                       <select style="height:300px;" name="furits[]" id="furits" multiple>
                           <option value="" disabled selected>Select Your Name</option>
                           <?php DisplayOption($furits); ?>
                       </select> 
                       <button type="submit">Submit</button>
                       </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>