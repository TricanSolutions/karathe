<?php

include './connection.php';

if (array_key_exists("studadd", $_POST)) {
//    print_r($_POST);
    //$id = $_POST['id'];
    //print_r($_POST);
    $fname = $_POST['fname'];
    $memno = $_POST['memno'];
    $street1 = $_POST['street1'];
    $street2 = $_POST['street2'];
    $City = $_POST['City'];
    //$dob = $_POST['DOB'];
    $dojoname = $_POST['dojoname'];
    $Grade = $_POST['Grade'];
    $datetime=$_POST['datetime'];
    $status = $_POST['status'];

//    print_r($_POST);
    
//    echo $status;
//    echo '"dfdfdfd"'.$name;
//    
//    
    $query = "INSERT INTO student (name_with_initials,membership_no,street_line1,street_line2,city,name_of_dojo,grade,create_time,status) VALUES ('{$fname} ',' {$memno} ',' {$street1} ',' {$street2} ',' {$City} ',' {$dojoname} ',' {$Grade} ','{$datetime} ', '{$status} ')";
//    $result=  mysqli_query($con,$query);
    $result = mysqli_query($con,$query)or die(mysqli_error());
   // echo 'fhsdfb';
    if ($result) {
        echo 1;

    } else {
        
        echo 0;
//    
   // $query = "INSERT INTO register (first,last,pass,confirmpass,tp,nic,basic_salory,education_qualifications,
    }
}
//-----------------------------update--------------------------------------------------

if (array_key_exists("studup", $_POST)) {

    $id = $_POST['id'];
    $sql5 = "UPDATE student
            SET 
            name_with_initials = '{$_POST['fname']}',
            membership_no = '{$_POST['memno']}',
            street_line1 = '{$_POST['street1']}',
            street_line2 = '{$_POST['street2']}',
            city = '{$_POST['City']}',
            name_of_dojo = '{$_POST['dojoname']}',
            date_of_birth='{$_POST['DOB']}',
            grade = '{$_POST['Grade']}',
            update_time = '{$_POST['uptime']}',
            status = '{$_POST['status']}'
            WHERE id='$id'";
            
            
// alert (grade);
    $result = mysqli_query($con, $sql5);
    //echo 'sssssssssssssssssssss';
   // echo grade;
    if ($result) {
        echo 1;
    } else {

        echo 0;
    }
}
//-----------------------load table---------------------------------------------
if (array_key_exists("loadstud", $_POST)) {
    
    $query = "SELECT * FROM student";

    foreach ($con->query($query)as $row) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name_with_initials'] . "</td><td>" . $row['membership_no'] . "</td><td>" . $row['name_of_dojo'] . "</td><td>" . $row['create_time'] ."</td><td>".$row['update_time']. "</td><td>" . $row['status'] . "</td><td>
           <input type='button'class='btn btn-info btn-xs col-sm-9' value='Edit' onClick='edit(" . $row['id'] . ")'>";    

        
//        <td>" . $row['street_line1'] . "</td><td>" . $row['street_line2'] . "</td><td>" . $row['city'] . "</td><td>" . $row['grade'] . "</td>
    }
}
//------------------fil txtbox by edit btn---------------------------------------
if (array_key_exists("fill", $_POST)) {
   
    $id = $_POST['id'];

$query = "SELECT
student.id,
student.name_with_initials,
student.membership_no,
student.street_line1,
student.street_line2,
student.city,
student.name_of_dojo,
 student.date_of_birth,
student.grade,
student.status,
student.image
FROM
student
WHERE
student.id ='{$id}'";

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
    $sql6 = "DELETE  FROM student
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
if (array_key_exists("logsystem", $_POST)) {

    if (isset($_POST['usname']) && !empty($_POST['usname']) && isset($_POST['password']) && !empty($_POST['password'])) {


        $uname = $_POST['usname'];
        $Password = $_POST['password'];

        $query = "SELECT
user.id,
user.name,
user.password,
user.telephone,
user.status,
user.type
FROM
user
WHERE
user.status=1 AND
user.name ='{$uname}'LIMIT 1";

//$count=0;

        $queryresult = $con->query($query);
        $count = mysqli_num_rows($queryresult);

        if ($count > 0) {
            $data = array();
            $result = $con->query($query);
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            foreach ($result as $ud) {
                if ($ud['password'] == $Password) {

                    session_start();
                    
                    $_SESSION['userid']=$ud['id'];
                    $_SESSION['name']=$ud['name'];
                    
                    $_SESSION['HTTP_USER_AGENT']=  md5($_SERVER['HTTP_USER_AGENT']);
                    
                    echo json_encode(array('msgType' => 0, 'msg' => 'succecfully login to system'));
                } else {
                    echo json_encode(array('msgType' => 1, 'msg' => 'password incorrect,plese check password'));
                }
            }
        } else {
            echo json_encode(array('msgType' => 2, 'msg' => 'user was not available in the datbase, plese check user name'));
        }
    } else {
        echo json_encode(array('msgType' => 3, 'msg' => 'please enter user name or password'));
    }
};