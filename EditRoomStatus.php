<?php
require_once('View/Page.php');
$page = new Page;
$page->setTitle('Create-Receive');
$page->startBody();
?>
<!--body-->       
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              หน้าหลัก 
              <small>เปลี่ยนแปลงสถานะห้อง</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
              <li class="active">เปลี่ยนแปลงสถานะห้อง</li>
            </ol>
          </section>
          <!-- Main content -->
          <section class="content">
          <?php 
           require('view/EditRoomStatus.php');        
          ?>          
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
<?php
$page->endBody();
echo $page->render('view/template.php');
require_once('AppStart/ScripPage.php');
?> 
 <script type="text/javascript" language="javascript">
      $(document).ready(function () {
        var dataTable = $('#myTableRoomStatusOut').DataTable({
            "processing": true,
            "serverSide": true,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
          "ajax": {
            url: "controllers/EditRoomStatusTable.php", // json datasource           
            type: "post",  // method  , by default get
            error: function () {  // error handling
              $(".employee-grid-error").html("");
              $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">ไม่พบข้อมูล</th></tr></tbody>');
              $("#employee-grid_processing").css("display", "none");
            }
          }
        });
      });

      $(function () {        
        //Date range picker
        $('#datebook').datepicker({
            format: "dd/mm/yyyy",
            startDate: "now",            
            todayBtn: true,
            language: "th",
            daysOfWeekHighlighted: "0,6",
            autoclose: true,
            orientation: "bottom auto",
            todayHighlight: true
        });
        
      });
    </script>
   
