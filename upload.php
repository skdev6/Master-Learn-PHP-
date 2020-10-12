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
                <h1>Our First File Upload</h1> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem earum nam accusamus pariatur assumenda iste! Ipsa officiis doloremque quasi? Minima id quos voluptas atque quasi architecto. Perferendis id nulla asperiores.</p>
                <pre>
                <?php 
                    print_r( $_POST);
                    print_r($_FILES);

                    $allowedType = array(
                        "image/png",
                        'image/jpg',
                        'image/jpeg'
                    );

                    if($_FILES['photo']){


                        $totalFiels = count($_FILES['photo']["name"]);
                        for ($i=0; $i < $totalFiels; $i++) { 
                            if(in_array($_FILES['photo']['type'][$i], $allowedType)){
                                move_uploaded_file($_FILES['photo']['tmp_name'][$i], "files/ar/".$_FILES['photo']['name'][$i]);
                                print_r($_FILES['photo']['tmp_name'][$i]);
                            } 
                        }

                        
                        
                    }
                ?>
                </pre>
                <div class="row">
                    <div class="column column-60 column-ofsset-20">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <label for="first_name" class="d-block">First Name</label>
                        <input type="text" name="fname" id="first_name">
                        <label for="Last_name" class="d-block">Last Name</label>
                        <input type="text" name="lname" id="Last_name">
                        <label for="Photo_name" class="d-block">Photo</label>
                        <input type="file" name="photo[]" id="Photo_name">
                        <input type="file" name="photo[]" id="Photo_name">
                        <input type="file" name="photo[]" id="Photo_name">
                        <button type="submit">Submit</button>
                      </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>