<?php

include './connection.php';
//--------------------------insert grade---------------------------------------
if (array_key_exists("comadd", $_POST)) {
//    print_r($_POST);
    //$id = $_POST['id'];
    $studid=$_POST['studid'];
    $comname = $_POST['comname'];
    //$date = $_POST['date'];
    $comgrade = $_POST['comgrade'];
    $place= $_POST['place'];
    $comstatus = $_POST['comstatus'];

//    print_r($_POST);
//    echo $status;
//    echo '"dfdfdfd"'.$name;
//    
//    
    $query = "INSERT INTO competition (student_id,name_of_competition,grade,palce,status) VALUES ('{$studid} ',' {$comname} ','{$comgrade} ',' {$place} ','{$comstatus} ')";

    $result=  mysqli_query($con,$query)or die(mysqli_error());
   

    // echo 'fhsdfb';
    if ($result) {
        echo 1;
    } else {

        echo 0;
    }
}
//-----------------------------update--------------------------------------------------

if (array_key_exists("gradeup", $_POST)) {

    $id = $_POST['id'];
    $sql5 = "UPDATE competition
            SET 
            
            student_id = '{$_POST['studid']}',
            name_of_competition = '{$_POST['comname']}',
            grade = '{$_POST['comgrade']}',
            palce = '{$_POST['place']}',
            status='{$_POST['comstatus']}' 
            WHERE id='$id'";


// alert (grade);
    $result = mysqli_query($con, $sql5)or die(mysqli_error());
    //echo 'sssssssssssssssssssss';
    // echo grade;
    if ($result) {
        echo 1;
    } else {

        echo 0;
    }
}
//-----------------------load table---------------------------------------------
if (array_key_exists("loadcom", $_POST)) {

    $query = "SELECT * FROM competition";
    
    foreach ($con->query($query)as $row) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['student_id'] . "</td><td>" . $row['name_of_competition'] . "</td><td>" . $row['grade'] . "</td><td>" . $row['palce'] . "</td><td>" . $row['status'] . "</td><td>
           <input type='button'class='btn btn-info btn-xs col-sm-9' value='Edit' onClick='edit(" . $row['id'] . ")'>";
    }
}
//------------------fil txtbox by edit btn---------------------------------------
if (array_key_exists("fill", $_POST)) {

    $id = $_POST['id'];

    $query = "SELECT
competition.id,
competition.student_id,
competition.name_of_competition,
competition.grade,
competition.palce,
competition.status

FROM
competition
WHERE
competition.id ='{$id}'";

//    foreach ($con->query($query)as $row) {

    $data = array();
    $result = $con->query($query);


    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
}
//------------------delete------------------------------------------------
if (array_key_exists("del", $_POST)) {

    $id = $_POST['id'];
    $sql6 = "DELETE  FROM gradings
            WHERE id='$id'";
    $result = mysqli_query($con, $sql6)or die(mysqli_error());
    //echo 'sssssssssssssssssssss';
    if ($result) {
        echo 1;
    } else {

        echo 0;
    }
}
//----------------LOGGING-----------------------------
//---------------------logging--------------------------------------------------

