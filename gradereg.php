<?php

include './connection.php';
//--------------------------insert grade---------------------------------------
if (array_key_exists("gradeadd", $_POST)) {
//    print_r($_POST);
    //$id = $_POST['id'];
    $studid = $_POST['studid'];
    $Grade = $_POST['Grade'];
    $tdate = $_POST['tdate'];
    $Result = $_POST['Result'];
    $Examiner = $_POST['Examiner'];
    $status = $_POST['status'];


    $query = "INSERT INTO gradings (student_id,grade,tested_on,result,examiner,status) VALUES ('{$studid}','{$Grade}','{$tdate}','{$Result}','{$Examiner}','{$status}')";

    $result = mysqli_query($con, $query)or die(mysqli_error());

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
    $sql5 = "UPDATE gradings
            SET 
            student_id = '{$_POST['studid']}',
            grade = '{$_POST['Grade']}',
            tested_on='{$_POST['tdate']}',
            result = '{$_POST['Result']}',
            examiner = '{$_POST['Examiner']}',
            status = '{$_POST['status']}'
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
if (array_key_exists("loadgrade", $_POST)) {

    $query = "SELECT * FROM gradings";
    
    foreach ($con->query($query)as $row) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['student_id'] . "</td><td>" . $row['grade'] . "</td><td>" . $row['result'] . "</td><td>" . $row['examiner'] . "</td><td>" . $row['status'] . "</td><td>
           <input type='button'class='btn btn-info btn-xs col-sm-9 ' value='Edit' onClick='edit(" . $row['id'] . ")'>";
    }
}
//------------------fil txtbox by edit btn---------------------------------------
if (array_key_exists("fill", $_POST)) {

    $id = $_POST['id'];

    $query = "SELECT
gradings.id,
gradings.student_id,
gradings.grade,
gradings.tested_on,
gradings.result,
gradings.examiner,
gradings.status

FROM
gradings
WHERE
gradings.id ='{$id}'";

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
//--------------------load studen drp------------------------------------------
if (array_key_exists("loaddrop", $_POST)) {
   
  $data = array();

$query = "SELECT id,name_with_initials FROM student";

$result =  mysqli_query($con,$query);
 while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    
   }

