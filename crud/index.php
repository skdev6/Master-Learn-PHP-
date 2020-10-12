<?php 
    require_once "inc/functions.php";

    $info = '';
    if($_GET['task']){
        $task = $_GET['task'];
    }else{
        $task = 'report';
    }
    if('seed' === $task){ 
        seed();
        $info = "Seeding is complete";
    }

    $fname = '';
    $lname = '';
    $roll = '';
    if(isset($_POST['submit'])){ 
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
        $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING); 

        if($id){
            if($fname != "" && $lname != "" && $roll != ""){

                $result = updateStudent($id, $fname,$lname,$roll);
                if($result){
                    header("location: /crud/index.php?tast=report");
                }else{
                    $error = 1;
                }
            }  
        }else{
            if($fname != "" && $lname != "" && $roll != ""){
                $result = addStudent($fname,$lname,$roll);
                if($result){
                    header("location: /crud/index.php?tast=report");
                }else{
                    $error = 1;
                }
            }            
        }

    }

    if($task === 'delete'){
        $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_STRING);
        deleteStudent($id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href=".../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/milligram.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 pt-50 column-offset-20">
                <h2>Project -2 CRUD oparetions</h2>
                <p>A simple crud opration project using plain file and phph</p>
                <?php include_once('inc/template/nav.php'); ?>
                <p >
                    <?php 
                        if($info != ''){
                            echo $info; 
                        }
                    ?>
                </p>
            </div>
        </div>
        
        <?php  if($error == 1){ ?>
            <div class="row">
            <div class="column column-60 pt-50 column-offset-20">
                <blockquote>
                    Duplicat Roll
                </blockquote>
            </div>
            </div>
        <?php  }?>         
       
        <div class="row">

            <?php if($task == 'report'): ?>
                <div class="column column-60 pt-50 column-offset-20">
                    <?php genaretReport(); ?>
                    <pre>
                        <?php
                            printRaw();
                        ?>
                    </pre>
                </div>
            <?php endif; ?>
            <?php if($task == 'add'): ?>
                <div class="column column-60 pt-50 column-offset-20">
                    <form action="/crud/index.php?task=add" method="POST">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" value="<?php echo $fname?>">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" value="<?php echo $lname?>">
                        <label for="roll">Roll</label>
                        <input type="number" name="roll" id="roll" value="<?php echo $roll?>">
                        <button type="submit" class="button-primary" name="submit">Submit</button>
                    </form>
                </div>
            <?php endif; ?>
            <?php if($task == 'edite'):
                $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
                $student = getStudent($id); 
                if($student):
            ?>
                <div class="column column-60 pt-50 column-offset-20">
                    <form action="" method="POST">
                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?>">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" value="<?php echo $student['lname'];?>">
                        <label for="roll">Roll</label>
                        <input type="number" name="roll" id="roll" value="<?php echo $student['roll'];?>">
                        <button type="submit" class="button-primary" name="submit">Submit</button>
                    </form>
                </div>
            <?php endif; endif; ?>
        </div>
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>