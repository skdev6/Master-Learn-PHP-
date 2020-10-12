<?php 
define('DB_NAME', 'F:\_Desktop_\_learning\_Learn_PHP\php.local.com\crud\data\db.txt');
function seed(){
    
    $data = array(
        array(
            "id" => 1,
            "fname"=>'Sumon',
            "lname"=>"khan",
            "roll"=>'20'
        ),
        array(
            "id" => 2,
            "fname"=>'Redoy',
            "lname"=>"Haldar",
            "roll"=>'50'
        ),
        array(
            "id" => 3,
            "fname"=>'Zubayer',
            "lname"=>"Hossain",
            "roll"=>'10'
        ),
        array(
            "id" => 4,
            "fname"=>'Sume Akter',
            "lname"=>"khan",
            "roll"=>'12'
        ),
        array(
            "id" => 5,
            "fname"=>'Rina Talukdar',
            "lname"=>"khan",
            "roll"=>'2'
        ),
        array(
            "id" => 6,
            "fname"=>'Shahin',
            "lname"=>"khan",
            "roll"=>'5' 
        ),
        array(
            "id" => 7,
            "fname"=>'Sakin',
            "lname"=>"khan",
            "roll"=>'9'
        ),
    );
    $SerializeData = serialize($data);
    file_put_contents(DB_NAME,$SerializeData, LOCK_EX);
}

function genaretReport(){
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData); ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th style="width:25%; text-align:right;">Action</th>
        </tr>
        <?php 
            foreach($students as $student){
                ?>
                    <tr>
                        <td><?php printf('%s %s', $student['fname'], $student['lname']); ?></td>
                        <td><?php printf('%s', $student['roll']); ?></td>
                        <td style="text-align:right;"><?php printf('<a href="/crud/index.php?task=edite&id=%s">Edite</a> | <a class="delete" href="/crud/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id']); ?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    
<?php }

function addStudent($fname,$lname,$roll){
    $found = false;
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);

    foreach($students as $_student){
        if($_student['roll'] === $roll){
            $found = true;
            break;
        }
    }
    if(!$found){
        $newId = getNewId($students);
        $student = array(
            "id" => $newId,
            "fname"=>$fname,
            "lname"=>$lname,
            "roll"=>$roll
        );
        array_push($students, $student);
        $serializeData = serialize($students);
        file_put_contents(DB_NAME,$serializeData, LOCK_EX );
        return true;
    }
    return false;

}

function getStudent($id){
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);
    foreach($students as $student){
        if($id == $student['id']){
            return $student;
        }
    }
    return false;
}

function updateStudent($id, $fname,$lname,$roll){
    $found = false;
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);

    foreach($students as $_student){
        if($_student['roll'] == $roll && $_student['id'] != $id ){
            $found = true;
            break;
        }
    }
    if(!$found){
        $students[$id - 1 ]['fname'] = $fname;
        $students[$id - 1 ]['lname'] = $lname;
        $students[$id - 1 ]['roll'] = $roll;
        $serializeData = serialize($students);
        file_put_contents(DB_NAME,$serializeData, LOCK_EX );
        return true;
    }
    return false;
}

function deleteStudent($id){
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);
    unset( $students[$id -1 ]);
    $serializeData = serialize($students);
    file_put_contents(DB_NAME,$serializeData, LOCK_EX );
}

function printRaw(){
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);
    print_r($students);
}



function getNewId($students){
    $maxId = max(array_column($students,'id'));
    return $maxId + 1;
}


?>