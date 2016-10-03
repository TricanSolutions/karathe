<?php
include './connection.php';

if (array_key_exists("catadd", $_POST)) {
//    print_r($_POST);
    //$id = $_POST['id'];
    $name = $_POST['name'];
    $status = $_POST['status'];
//    echo $status;
//    echo '"dfdfdfd"'.$name;
//    
//    
    $query = "INSERT INTO category (category,status) VALUES ('{$name} ',' {$status} ')";
    $result = mysqli_query($con, $query)or die(mysqli_error());
    if ($result) {
        echo 1;

    } else {
        
        echo 0;
    }
}
//------------------addsub category---------------------------------------------
if (array_key_exists("subcatadd", $_POST)) {
//    print_r($_POST);
    //$id = $_POST['id'];
    $catid = $_POST['catid'];
    $name2 = $_POST['name'];
    $status2 = $_POST['status2'];
//  echo $name2;
// echo $catid;
// echo  $status2;
//    
//    
    $query1 = "INSERT INTO sub_category (category_id,sub_category,status) VALUES ('{$catid}','{$name2} ',' {$status2} ')";
    $result2 = mysqli_query($con, $query1)or die(mysqli_error());
    //echo ("sdsdsds");
    if ($result2) {
        echo 1;

    } else {
        
        echo 0;
    }
}
//------------------------load category table-----------------------------------
if (array_key_exists("loadcat", $_POST)) {
    
    $query = "SELECT * FROM category";

    foreach ($con->query($query)as $row) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['category'] . "</td><td>" . $row['status'] . "</td><td>
           <input type='button'class='btn btn-info ' value='Edit' onClick='edit(" . $row['id'] . ")'><input type='button'class='btn btn-danger' value='Delete' onClick='del(" . $row['id'] . ")'></td></tr>";    
}
}

//----------------------load sub category table---------------------------------
if (array_key_exists("loadsubcat", $_POST)) {
    
    $query = "SELECT * FROM sub_category";

    foreach ($con->query($query)as $row) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['category_id'] . "</td><td>" . $row['sub_category'] . "</td><td>". $row['status'] . "</td><td>
           <input type='button'class='btn btn-info ' value='Edit' onClick='edit(" . $row['id'] . ")'><input type='button'class='btn btn-danger' value='Delete' onClick='del(" . $row['id'] . ")'></td></tr>";    
}
}
//----------------------load category dropdown----------------------------------
if (array_key_exists("loaddrop", $_POST)) {
   
  $data = array();

$query = "SELECT * FROM category";

$result =  mysqli_query($con,$query);
 while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    
   }

//--------------------load field from edit button-------------------------------
if (array_key_exists("fill", $_POST)) {
   
    $id = $_POST['id'];

$query = "SELECT
category.id,
category.category,
category.status

FROM
category
WHERE
category.id ='{$id}'";

//    foreach ($con->query($query)as $row) {

$data = array();
$result = $con->query($query);


 while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    
   }
///-------------------------------------------------------------------
//if (isset($_POST['catadd'])) {
//
//$name = $_POST['name'];
//$status = $_POST['status'];
//
//    $sql = "insert into category(category,status) values ('{$name}','{$status}')";
//    $result = mysqli_query($con, $sql);
//
//    if ($result) {
//        echo 1;
//    } else {
//
//        echo 0;
//    }
//} 