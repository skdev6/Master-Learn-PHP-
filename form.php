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

                <?php 
                    $fname = "";
                    $lname = "";
                    $checked = "";
                    
                ?>

                <?php
                    if(isset($_REQUEST['fname'])){ 
                        //$fname = htmlspecialchars($_REQUEST['fname']);
                        $fname = filter_input(INPUT_POST,'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } 
                    if(isset($_REQUEST['lname'])){ 
                        $lname = htmlspecialchars($_REQUEST['lname']);
                    }

                    if(isset($_REQUEST['cbl']) && $_REQUEST['cbl'] === '1'){
                            $checked = 'checked';
                    }

                    function isCheck($inputName, $inputValue){
                        if($_REQUEST[$inputName] && is_array($_REQUEST[$inputName]) && in_array($inputValue, $_REQUEST[$inputName])){
                            echo "checked";
                        }
                    }

                    function ForCheck($inputValue){ 
                        if($_REQUEST['furites'] && is_array($_REQUEST['furites']) && in_array($inputValue, $_REQUEST['furites'])){
                            echo "checked";
                            $checkVal = $_REQUEST['furites'];
                        }
                    }

                    

                    if(isset($_REQUEST['furites'])){
                       foreach($_REQUEST['furites'] as $val){
                            echo $val."<br>";
                       }
                    }

                 ?>
                <div class="row">
                    <div class="column column-60 column-ofsset-20">
                        <ul>
                            <li><?php echo $fname; ?></li>
                            <li><?php echo $lname; ?></li>
                        </ul>
                        <form method="POST">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                            <div class="checkb">
                                <input type="checkbox" name="cbl" value="1" id="checkbox" <?php echo $checked;?>>
                                <label for="checkbox">Some Checkbox</label>
                            </div>
                            
                            <div class="checkb">
                                <input type="checkbox" name="furites[]" value="Orenge" id="Orenge" <?php ForCheck("Orenge"); ?>>
                                <label for="Orenge">Orenge</label>
                            </div>
                            <div class="checkb">
                                <input type="checkbox" name="furites[]" value="mango" id="mango" <?php ForCheck("mango"); ?>>
                                <label for="mango">mango</label>
                            </div>
                            <div class="checkb">
                                <input type="checkbox" name="furites[]" value="bannana" id="bannana" <?php ForCheck("bannana"); ?>>
                                <label for="bannana">bannana</label>
                            </div>

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>