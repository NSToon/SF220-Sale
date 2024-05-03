  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-body">
              <div class="card card-primary">
                <!-- form start -->
                <form action="" method="post">

                  <div class="card-body">

                    <div class="form-group row">
                      <label class="col-sm-2">firstname</label>
                      <div class="col-sm-4">
                        <input type="text" name="name" class="form-control" placeholder="firstname" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2">lastname</label>
                      <div class="col-sm-4">
                        <input type="text" name="surname" class="form-control" placeholder="lastname" required>
                      </div>
                    </div>

                    <div class="form-group row">

                      <label class="col-sm-2"></label>
                      <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="member.php" class="btn btn-danger">ยกเลิก</a>
                      </div>
                    </div>
                  </div> <!-- /.card-body -->
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
    <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
  if (isset($_POST["name"]) && isset($_POST['surname'])) {
    // ประกาศตัวแปรรับค่า
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    // เตรียมคำสั่ง SQL
    $sql = "INSERT INTO tb_member (name, surname) VALUES (?, ?)";

    // เตรียมคำสั่ง SQL
    $stmtInsert = $condb->prepare($sql);

    // ผูกค่ากับพารามิเตอร์
    $stmtInsert->bind_param('ss', $name, $surname);

    // ประมวลผลคำสั่ง SQL
    $result = $stmtInsert->execute();

    // ปิดการเชื่อมต่อฐานข้อมูล
    $condb->close();

    // ตรวจสอบผลลัพธ์
    if($result){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "เพิ่มข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "member.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
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