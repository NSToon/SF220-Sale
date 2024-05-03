<?php

if(isset($_GET['id']) && $_GET['act']=='delete'){

    $id = $_GET['id'];
    
    $stmtdel = $condb->prepare('DELETE FROM tb_member WHERE id=?');
    $stmtdel->bind_param('i', $id);
    $stmtdel->execute();

    if($stmtdel->affected_rows == 1){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "ลบข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "member.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
        exit();
    }else{
       echo '<script>
             setTimeout(function() {
              swal({
                  title: "เกิดข้อผิดพลาด",
                  type: "error"
              }, function() {
                  window.location = "member.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }

}

?>
