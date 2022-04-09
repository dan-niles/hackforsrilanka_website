<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Astron EITS</title>

  <?php $this->load->view('inc/stylesheets'); ?>
</head>
<script type="text/javascript">
  function confirmation() {
    var r = confirm("Are you sure you want to confirm?");
    if (r == true) {
      return true;
    } else {
      return false;
    }
  }
</script>
<style>
  @media print {
    body {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: 12px;
    }

    #footer {
      display: none;
    }

    #button {
      display: none;
    }

    #header-wrapper {
      display: none;
    }

    .title_new {
      font-size: 12px;
      display: block;
    }

    .title {
      display: none;
    }

    #print {
      display: none;
    }

    #rd_form {
      display: none;
    }
  }
</style>

<body class="hold-transition sidebar-mini text-sm">
  <div class="wrapper">

    <!-- Navbar -->
    <?php $this->load->view('inc/navbar'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php $this->load->view('inc/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="card widget-card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-5">
                      <i class="fas fa-user-tie" style="font-size: 2.5em;padding:10px"></i>
                      <h3 style="display:inline">Export Customer Details</h3>
                    </div>
                    <div class="col-7 my-auto">
                      <ul class="nav nav-pills float-right">
                        <li class="nav-item">
                          <a class="btn btn-jade float-right" data-toggle="collapse" href="#add_new_customer" aria-expanded="false" aria-controls="contentId">
                            <i class="fas fa-plus"></i> Add New
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="collapse" id="add_new_customer">
                        <div class="card">
                          <div class="card-body">
                            <form method="post" name="rd_form" id="rd_form" action="<?php echo base_url(); ?>gen_admin/gen_admin_controller/export_customer/" OnSubmit="return confirmation();">
                              <div align="center">
                                <table width="100%" border="0">
                                  <tr>
                                    <td class="align-middle" width="120"><strong> Country :</strong></td>
                                    <td>
                                      <select class="form-control select-2" style="width:250px;float:left;" name="drp_country" id="drp_country" required>
                                        <option value="" selected hidden> ------ Select ------ </option>
                                        <?php foreach ($countries as $value) { ?>
                                          <option title="<?php echo $value['CountryCode']; ?>" value="<?php echo $value['CountryID'] ?>"> <?php echo $value['CountryName'] ?> </option>

                                        <?php } ?>
                                      </select>
                                    </td>
                                    <td width="120" class="align-middle"><strong> Customer Code :</strong></td>
                                    <td class="align-middle"><input class="form-control" style="width:250px;" type="text" name="txt_ccode" id="txt_ccode" required></td>
                                  </tr>
                                  <tr>
                                    <td width="120"><strong> Name :</strong></td>
                                    <td colspan="3"><input class="form-control mb-3" style="width:455px;" type="text" name="txt_cname" id="txt_cname" required></td>
                                  </tr>
                                  <tr>
                                    <td width="120"><strong>Official Address 1 :</strong></td>
                                    <td><input class="form-control" style="width:250px;" type="text" name="txt_oa1" id="txt_oa1" required></td>
                                    <td width="120"><strong>Address 2 :</strong></td>
                                    <td><input class="form-control" style="width:250px;" type="text" name="txt_oa2" id="txt_oa2"></td>
                                  </tr>
                                  <tr>
                                    <td width="120"><strong>Address 3 :</strong></td>
                                    <td><input class="form-control mb-3" style="width:250px;" type="text" name="txt_oa3" id="txt_oa3"></td>
                                    <td width="120"><strong>Address 4 :</strong></td>
                                    <td><input class="form-control mb-3" style="width:250px;" type="text" name="txt_oa4" id="txt_oa4"></td>
                                  </tr>
                                  <tr>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td width="130"><strong>Delivery Address 1 :</strong></td>
                                    <td><input class="form-control" style="width:250px;" type="text" name="txt_da1" id="txt_da1" required></td>
                                    <td width="120"><strong>Del Address 2 :</strong></td>
                                    <td><input class="form-control" style="width:250px;" type="text" name="txt_da2" id="txt_da2"></td>
                                  </tr>
                                  <tr>
                                    <td width="120"><strong>Del Address 3 :</strong></td>
                                    <td><input class="form-control mb-3" style="width:250px;" type="text" name="txt_da3" id="txt_da3"></td>
                                    <td width="120"><strong>Del Address 4 :</strong></td>
                                    <td><input class="form-control mb-3" style="width:250px;" type="text" name="txt_da4" id="txt_da4"></td>
                                  </tr>
                                  <tr>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td width="120"><strong>Contact Person :</strong></td>
                                    <td><input class="form-control" style="width:250px;" type="text" name="txt_cp" id="txt_cp"></td>
                                    <td width="120"><strong>Tel :</strong></td>
                                    <td><input class="form-control" style="width:250px;" type="text" name="txt_ctel" id="txt_ctel"></td>
                                  </tr>
                                  <tr>
                                    <td width="120"><strong>Mobile :</strong></td>
                                    <td><input class="form-control" style="width:250px;" type="text" name="txt_mob" id="txt_mob"></td>
                                    <td width="120"><strong>Fax :</strong></td>
                                    <td><input class="form-control" style="width:250px;" type="text" name="txt_fax" id="txt_fax"></td>
                                  </tr>
                                  <tr>
                                    <td width="120"><strong>Email :</strong></td>
                                    <td><input class="form-control" style="width:250px;" type="email" name="txt_email" id="txt_email" required></td>
                                  </tr>
                                  <tr>
                                    <td><button class="btn btn-lg btn-success mt-3" type="Submit" name="Submit" id="Submit" value="test">Submit</button></td>
                                  </tr>
                                </table>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id='TrTableDiv'>
                    <table id="customerTable" class="table table-bordered table-striped" width="100%">
                      <thead>
                        <th class="border_botom border_top border_right">ID</th>
                        <th class="border_botom border_top border_right">Country</th>
                        <th class="border_botom border_top border_right">Code</th>
                        <th class="border_botom border_top border_right">Customer Name</th>
                        <th class="border_botom border_top border_right">Official Address</th>
                        <th class="border_botom border_top border_right">Delivery Address</th>
                        <th class="border_botom border_top border_right">Contact</th>
                        <th class="border_botom border_top border_right">Phone</th>
                        <th class="border_botom border_top border_right">Email</th>
                        <th class="border_botom border_top border_right"></th>

                      </thead>
                      <?php
                      if (!empty($cus_list)) {
                        foreach ($cus_list as $cus_info) {
                          $actv_stat = "";
                          if ($cus_info->Status == 0) {
                            $actv_stat = "bgcolor='#FEC2BB'";
                          }
                          $output = '';
                          $output .= "<tr " . $actv_stat . " class='border_bottom border_top border_right'>";
                          $output .= "<td>" . $cus_info->CustomerID . "</td>";
                          $output .= "<td width='10%'>" . $cus_info->CountryName . "</td>";
                          $output .= "<td width='10%'>" . $cus_info->CustomerCode . "</td>";
                          $output .= "<td width='20%'>" . $cus_info->CustomerName . "</td>";
                          $output .= "<td width='10%'>" . $cus_info->OfficialAddress1 . ", " . $cus_info->OfficialAddress2 . ", " . $cus_info->OfficialAddress3 . ", " . $cus_info->OfficialAddress4 . "</td>";
                          $output .= "<td width='10%'>" . $cus_info->DeliveryAddress1 . ", " . $cus_info->DeliveryAddress2 . ", " . $cus_info->DeliveryAddress3 . ", " . $cus_info->DeliveryAddress4 . "</td>";
                          $output .= "<td width='10%'>" . $cus_info->ContactPerson . "</td>";
                          $output .= "<td width='10%'>" . $cus_info->ContactNoLand . "</td>";
                          $output .= "<td width='10%'>" . $cus_info->Email . "</td>";
                          $output .= "<td width='10%'>";
                          $output .= "<center>";
                          $output .= "<button type='button' class='btn btn-light edit-btn' data-toggle='modal' data-id='" . $cus_info->CustomerID . "'/><i class='fas fa-edit'></i></button>";
                          $output .= "<form method='post' name='rd_form' id='rd_form' class='display-inline' action='" . base_url() . "gen_admin/gen_admin_controller/export_customer/' OnSubmit='return confirmation()'>";
                          if ($cus_info->Status == 1) {
                            $output .= "<button type='submit' name='Delete_Submit' value='" . $cus_info->CustomerID . "' class='btn btn-danger'/><i class='fas fa-trash'></i></button>";
                          }
                          $output .= "</form>";
                          $output .= "</center>";
                          $output .= "</td>";
                          $output .= "</tr>";

                          echo $output;
                        }
                      }
                      ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#edit_cus_modal">
      Launch
    </button>

    <!-- Modal -->
    <div class="modal fade" id="edit_cus_modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i class='fas fa-edit'></i> Edit Export Customer Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" name="edit_rd_form" id="edit_rd_form" action="<?php echo base_url(); ?>gen_admin/gen_admin_controller/export_customer/">
            <div class="modal-body">
              <div align="center">
                <table width="100%" border="0">
                  <tr>
                    <td class="align-middle" width="120"><strong> Country :</strong></td>
                    <td>
                      <select class="form-control select-2" style="width:250px;float:left;" name="edit_drp_country" id="edit_drp_country" required>
                        <option value="" selected hidden> ------ Select ------ </option>
                        <?php foreach ($countries as $value) { ?>
                          <option title="<?php echo $value['CountryCode']; ?>" value="<?php echo $value['CountryID'] ?>"> <?php echo $value['CountryName'] ?> </option>

                        <?php } ?>
                      </select>
                    </td>
                    <td width="120" class="align-middle"><strong> Customer Code :</strong></td>
                    <td class="align-middle"><input class="form-control" style="width:250px;" type="text" name="edit_txt_ccode" id="edit_txt_ccode"></td>
                  </tr>
                  <tr>
                    <td width="120"><strong> Name :</strong></td>
                    <td colspan="3"><input class="form-control mb-3" style="width:250px;" type="text" name="edit_txt_cname" id="edit_txt_cname" required></td>
                  </tr>
                  <tr>
                    <td width="120"><strong>Official Address 1 :</strong></td>
                    <td><input class="form-control" style="width:250px;" type="text" name="edit_txt_oa1" id="edit_txt_oa1" required></td>
                    <td width="120"><strong>Address 2 :</strong></td>
                    <td><input class="form-control" style="width:250px;" type="text" name="edit_txt_oa2" id="edit_txt_oa2"></td>
                  </tr>
                  <tr>
                    <td width="120"><strong>Address 3 :</strong></td>
                    <td><input class="form-control mb-3" style="width:250px;" type="text" name="edit_txt_oa3" id="edit_txt_oa3"></td>
                    <td width="120"><strong>Address 4 :</strong></td>
                    <td><input class="form-control mb-3" style="width:250px;" type="text" name="edit_txt_oa4" id="edit_txt_oa4"></td>
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <td width="130"><strong>Delivery Address 1 :</strong></td>
                    <td><input class="form-control" style="width:250px;" type="text" name="edit_txt_da1" id="edit_txt_da1" required></td>
                    <td width="120"><strong>Del Address 2 :</strong></td>
                    <td><input class="form-control" style="width:250px;" type="text" name="edit_txt_da2" id="edit_txt_da2"></td>
                  </tr>
                  <tr>
                    <td width="120"><strong>Del Address 3 :</strong></td>
                    <td><input class="form-control mb-3" style="width:250px;" type="text" name="edit_txt_da3" id="edit_txt_da3"></td>
                    <td width="120"><strong>Del Address 4 :</strong></td>
                    <td><input class="form-control mb-3" style="width:250px;" type="text" name="edit_txt_da4" id="edit_txt_da4"></td>
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <td width="120"><strong>Contact Person :</strong></td>
                    <td><input class="form-control" style="width:250px;" type="text" name="edit_txt_cp" id="edit_txt_cp"></td>
                    <td width="120"><strong>Tel :</strong></td>
                    <td><input class="form-control" style="width:250px;" type="text" name="edit_txt_ctel" id="edit_txt_ctel"></td>
                  </tr>
                  <tr>
                    <td width="120"><strong>Mobile :</strong></td>
                    <td><input class="form-control" style="width:250px;" type="text" name="edit_txt_mob" id="edit_txt_mob"></td>
                    <td width="120"><strong>Fax :</strong></td>
                    <td><input class="form-control" style="width:250px;" type="text" name="edit_txt_fax" id="edit_txt_fax"></td>
                  </tr>
                  <tr>
                    <td width="120"><strong>Email :</strong></td>
                    <td><input class="form-control" style="width:250px;" type="email" name="edit_txt_email" id="edit_txt_email" required></td>
                  </tr>
                </table>
              </div>

            </div>
            <div class="modal-footer">
              <input type="hidden" name="edit_cus_id" id="edit_cus_id">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="submit" name="Edit_Submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Main Footer -->
    <?php $this->load->view('inc/footer'); ?>


  </div>
  <!-- ./wrapper -->

  <!-- SCRIPTS -->
  <?php $this->load->view('inc/scripts'); ?>
  <?php if ($this->session->flashdata('opr_success')) { ?>
    <script>
      toastr.success('<?php echo $this->session->flashdata('opr_success') ?>')
    </script>
  <?php } ?>
  <script>
    $(document).ready(function() {
      $('.select-2').select2();
      $('#customerTable').dataTable({
        "pageLength": 50
      });
    });

    $(document).on('click', '.edit-btn', function() {
      var CustomerID = $(this).data('id')
      $.ajax({
        type: "POST",
        url: "<?php echo base_url() ?>gen_admin/gen_admin_controller/fetch_export_customers/" + CustomerID,
        data: {
          CustomerID: CustomerID
        },
        dataType: "json",
        success: function(data) {
          console.log(data)
          if (data.response == true) {
            var records = data.records[0]
            $('#edit_cus_id').val(records.CustomerID)
            $('#edit_drp_country').val(records.CountryID)
            $('#edit_drp_country').trigger('change');
            $('#edit_txt_ccode').val(records.CustomerCode)
            $('#edit_txt_cname').val(records.CustomerName)
            $('#edit_txt_oa1').val(records.OfficialAddress1)
            $('#edit_txt_oa2').val(records.OfficialAddress2)
            $('#edit_txt_oa3').val(records.OfficialAddress3)
            $('#edit_txt_oa4').val(records.OfficialAddress4)
            $('#edit_txt_da1').val(records.DeliveryAddress1)
            $('#edit_txt_da2').val(records.DeliveryAddress2)
            $('#edit_txt_da3').val(records.DeliveryAddress3)
            $('#edit_txt_da4').val(records.DeliveryAddress4)
            $('#edit_txt_cp').val(records.ContactPerson)
            $('#edit_txt_ctel').val(records.ContactNoLand)
            $('#edit_txt_mob').val(records.ContactNoMobile)
            $('#edit_txt_fax').val(records.Fax)
            $('#edit_txt_email').val(records.Email)
            $('#edit_cus_modal').modal('show')
          }
        }
      });
    })
  </script>
</body>

</html>