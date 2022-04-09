<?php
// $this->load->view('gen_admin/inc/header-home');
?>
<style>
  #page {
    padding: 0 0px;
    width: 100%;
  }

  #content {
    width: 100%;
  }

  .ui-sortable-placeholder {
    border: 1px dotted black;
    visibility: visible !important;
    height: 50px !important;
  }

  .ui-sortable-placeholder * {
    visibility: hidden;
  }

  .column {
    width: 250px;
  }

  .ui-accordion .ui-accordion-content {
    padding: 0px;

  }

  .ui-accordion .ui-accordion-header {
    height: 25px;
    padding-left: 25px;
    margin-top: 5px;
  }

  .ui-accordion .ui-accordion-header .ui-icon {
    margin-top: -11px;
  }

  .ui-accordion .ui-accordion-icons {
    padding-left: 10px;
  }
</style>
<script>
  $(function() {
    $("#accordion").accordion({
      collapsible: true,
      autoHeight: false,
      active: false
    });

  });
</script>
<div id="page">
  <div align="right"></div>
  <div id="content">
    <div class="post">
      <h2 align="right" class="title">&nbsp;</h2>
      <h2 align="center" class="title">- Welcome to General Administration -</h2>
      <div align="center" style="width:100%;">
        <table width="100%" height="92%" border="0" bordercolor="#FFFFFF">
          <tr>
            <td width="755" align="left" valign="top" class="style4">
              <table width="100%" border="0" bordercolor="#FFFFFF">
                <tr>
                  <td width="60" height="60" align="center" valign="middle"><img src="../../../images/Icon/acc-cheque.png" width="40" height="40" /></td>
                  <td width="131" height="60"><a href="<?php echo base_url(); ?>gen_admin/gen_admin_controller/export_customer">Customer</a></td>
                  <td width="30"></td>
                  <td width="60" height="60" align="center" valign="middle"><img src="../../../images/Icon/acc-cheque.png" width="40" height="40" /></td>
                  <td width="106" height="60"><a href="<?php echo base_url(); ?>gen_admin/gen_admin_controller/shipment_inquiry">Promotional Order</a></td>
                  <td width="30"></td>
                  <td width="60" height="60" align="center" valign="middle"><img src="../../../images/Icon/acc-cheque.png" width="40" height="40" /></td>
                  <td width="131" height="60"><a href="<?php echo base_url(); ?>gen_admin/gen_admin_controller/export_packing_list">Packing List</a></td>
                  <td width="30"></td>
                  <td width="60" height="60" align="center" valign="middle"><img src="../../../images/Icon/acc-cheque.png" width="40" height="40" /></td>
                  <td width="106" height="60"><a href="<?php echo base_url(); ?>gen_admin/gen_admin_controller/non_commercial_invoice">Non-commercial Invoice</a></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <div style="height:300px;"></div>
      </div>
    </div>
  </div>

  <div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
<!-- end #footer -->

<div align="center">
  <?php
  // $this->load->view('inc/footer.php');
  ?>
</div>
</body>

</html>