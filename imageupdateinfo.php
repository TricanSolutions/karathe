<?php
include './connection.php';
//---------- update poto + data---------------------------------
if (array_key_exists("upimg", $_POST)){
    
    //$fname = $_POST['username'];
$id = $_POST['id'];
$fname = $_POST['fname'];
$memno = $_POST['memno'];
$street1 = $_POST['street1'];
$street2 = $_POST['street2'];
$City = $_POST['City'];
$DOB = $_POST['DOB'];
$dojoname = $_POST['dojoname'];
$Grade = $_POST['Grade'];
$status = $_POST['status'];
$uptime = $_POST['uptime'];

//print_r($_POST);
//echo $name;.
$uploaddir = './imgg';
$filetype = $_FILES['file']['type'];
//echo $filetype;

if ($filetype == 'image/jpeg') {

    $filename = $fname . '.jpg';
    $uploadfile = $uploaddir . '/' . $filename;

    if (!file_exists($uploaddir)) {

        $createfolder = mkdir($uploaddir, 755, TRUE); //permission no
    }

    $image_location = $uploaddir . '/' . $filename;
    $upload_ok = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

    if ($upload_ok) {
        $sql = "UPDATE student 
            SET
            name_with_initials = '{$_POST['fname']}',
            membership_no = '{$_POST['memno']}',
            street_line1 = '{$_POST['street1']}',
            street_line2 = '{$_POST['street2']}',
            city = '{$_POST['City']}',
            name_of_dojo = '{$_POST['dojoname']}',
            date_of_birth='{$_POST['DOB']}',
            grade = '{$_POST['Grade']}',
            image='{$image_location}',
            create_time = '{$_POST['uptime']}',
            status = '{$_POST['status']}'
            WHERE id='$id'";

//        $sql = "INSERT INTO student (`image')VALUES ('$image_location')";
//             $sql = "UPDATE register set ('image')VALUES ('$image_location')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo json_encode(0); //success
        } else {
            echo json_encode(1); //query error
        }
    } else {
        echo json_encode(2); //move err
    }
} else {
    echo json_encode(800); //type not eqiua;l
}
    
}
if (array_key_exists("noimage", $_POST)){
    
//    echo 'no image ok';
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
    $result = mysqli_query($con, $sql5)or die(mysqli_error());
    //echo 'sssssssssssssssssssss';
   // echo grade;
    if ($result) {
        echo json_encode(0);
    } else {

         echo json_encode(1); //query error
    }
    
}

?>