<?php
    //ข้อมูลสมาชิก
    // ทำการสร้างคำสั่ง SQL
    $sql = "SELECT * FROM tb_member";

    // เตรียมคำสั่ง SQL
    $stmt = $condb->prepare($sql);

    // ประมวลผลคำสั่ง SQL
    $stmt->execute();

    // รับข้อมูล
    $rsmember = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

?>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>จัดการข้อสมาชิก
                <a href="member.php?act=add" class="btn btn-info">+ user</a>
            </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
    <!-- /.card -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width='5%' class='text-center'>NO.</th>
                    <th width='85%'>name-lastname</th>
                    <th width='5%' class='text-center'>update</th>
                    <th width='5%' class='text-center'>delete</th>
                  </tr>
                  </thead>
                  <tbody>

                <?php
                $i = 1; 
                foreach($rsmember as $row){ ?>
                  <tr>
                    <td align="center"><?php echo $i ++ ?></td>
                    <td><?=$row['name'].' '.$row['surname']?></td>
                    <td align="center">
                        <a href="member.php?id=<?=$row['id']?>&act=edit" class="btn btn-primary">update</a></td>
                    <td align="center">
                        <a href="member.php?id=<?=$row['id']?>&act=delete" class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล');">delete</a></td>
                  </tr>
                <?php } ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->