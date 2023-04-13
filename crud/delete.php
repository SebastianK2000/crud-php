<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM 'crud' WHERE id = $id";
$resul = mysqli_query($conn, $sql);
if($result){
    headre("Location: index.php?msg=Record deleted succesfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
}
?>
