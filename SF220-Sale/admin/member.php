<?php

  include 'header.php';
  include 'navbar.php';
  include 'sidebar-menu.php'; 

  $act = (isset($_GET['act'])) ? $_GET['act'] :'';
    if ($act == 'add') {
        include 'member-form-data.php';
    } else if ($act == 'delete') {
        include 'member-delete.php';
    } else if ($act == 'edit') {
        include 'member-form-edit.php';
    }else{
        include 'member-list.php';
    }

  include 'footer.php';

?>
