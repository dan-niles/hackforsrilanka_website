<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Astron EITS</title>

  <?php $this->load->view('inc/stylesheets'); ?>
</head>
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
                      <i class="fas fa-truck" style="font-size: 2.5em;padding:10px"></i>
                      <h3 style="display:inline"> Shipment Inquiry</h3>
                    </div>
                    <div class="col-7 my-auto">
                      <ul class="nav nav-pills float-right">
                        <li class="nav-item">
                          <a class="btn btn-jade float-right" data-toggle="collapse" href="#add_new_inquiry" aria-expanded="false" aria-controls="contentId">
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
                      <div class="collapse" id="add_new_inquiry">
                        <div class="card">
                          <div class="card-body">
                            <form method="post" name="rd_form" id="rd_form" action="<?php echo base_url(); ?>gen_admin/gen_admin_controller/shipment_inquiry/" OnSubmit="return confirmation();">
                              <div class="form-row align-items-center">
                                <div class="col-2">
                                  <label>Shipment Type :</label>
                                  <select class="form-control" name="shp_type" id="shp_type" required>
                                    <option value="" selected hidden> ------ Select ------ </option>

                                    <option value="1">Commercial Order</option>
                                    <option value="1">Non Commercial Order</option>

                                  </select>
                                </div>
                                <div class="col-1">
                                  <label>Inquiry Type :</label>
                                  <select class="form-control" name="drp_inq_cat" id="drp_inq_cat">
                                    <option value="" selected hidden> - Select - </option>
                                    <?php foreach ($inquiry_type as $key => $value) { ?>
                                      <option title="<?php echo $value['ShortCode']; ?>" value="<?php echo $value['InquiryTypeID']; ?>"> <?php echo $value['InquiryType']; ?> </option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-row align-items-center">
                                <div class="col-2">
                                  <label>Country :</label>
                                  <select class="form-control select-2" name="drp_country" id="drp_country" required>
                                    <option value="" selected hidden> ------ Select ------ </option>
                                    <?php foreach ($countries as $key => $value) { ?>
                                      <option title="<?php echo $value['CountryCode']; ?>" value="<?php echo $value['CountryID']; ?>"> <?php echo $value['CountryName']; ?> </option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="col-2">
                                  <label>Customer :</label>
                                  <select class="form-control" name="drp_customer" id="drp_customer" required>
                                    <option value="" selected hidden> ------ Select ------ </option>
                                  </select>
                                  <input type='hidden' id='txt_cus_val' name='txt_cus_val' />
                                </div>
                                <div class="col-1"></div>

                                <div class="col-1"></div>
                                <div class="col-5">
                                  <label>Description :</label>
                                  <textarea class="form-control" type="text" name="txt_desc" id="txt_desc"></textarea><br>
                                </div>
                              </div>
                              <div class="form-row mb-3 align-items-center">
                                <div class="col-2 d-flex my-auto">
                                  <label class="mr-2">Invoice No :</label><br><br>
                                  <input class="form-control" style="width:80px;" type="text" name="txt_inv_no_1" id="txt_inv_no_1" value="EXP" readonly><span class="mx-1 mb-1 text-lg">/</span>
                                  <input class="form-control" style="width:80px;" type="text" name="txt_inv_no_2" id="txt_inv_no_2" value="..." readonly><span class="mx-1 mb-1 text-lg">/</span>
                                  <input class="form-control" style="width:80px;" type="text" name="txt_inv_no_3" id="txt_inv_no_3" value="..." readonly><span class="mx-1 mb-1 text-lg">/</span>
                                  <input class="form-control" style="width:80px;" type="text" name="txt_inv_no_5" id="txt_inv_no_4" value="<?php echo date('Y') ?>" readonly><span class="mx-1 mb-1 text-lg">/</span>
                                  <input class="form-control" style="width:80px;" type="text" name="txt_inv_no_6" id="txt_inv_no_5" value="<?php echo $txt_inv_no_5 ?>" readonly>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-1">
                                  <label>Weight :</label>
                                  <input class="form-control" style="width:100px;" type="text" name="txt_weight" id="txt_weight">
                                </div>
                                <div class="col-1">
                                  <label>Courier Cost :</label>
                                  <input class="form-control" type="text" name="txt_cour_cost" id="txt_cour_cost">
                                </div>
                                <div class="col-2">
                                  <label>&nbsp;</label>
                                  <select class="form-control" style="width:100px;" name="drp_cur" id="drp_cur">
                                    <?php foreach ($currency as $key => $value) { ?>
                                      <option title="<?php echo $value['CurrencyCode']; ?>" value="<?php echo $value['CurrencyID']; ?>" <?php echo ($value['CurrencyCode'] == 'USD') ? 'selected' : '' ?>> <?php echo $value['CurrencyCode']; ?> </option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="col-1">
                                  <label>AWB :</label>
                                  <input class="form-control" style="width:100px;" type="text" name="txt_awb" id="txt_awb">
                                </div>
                              </div>
                              <div class="form-row align-items-center">
                                <div class="col-2">
                                  <label>Remarks :</label>
                                  <input class="form-control" style="width:600px;" type="text" name="txt_remarks" id="txt_remarks">
                                </div>
                              </div>
                              <div style="height:30px;"></div>
                              <div align="center">
                                <table width="100%" border="0">
                                  <tr>
                                    <td width="10%"><strong> Category :</strong><br>
                                      <select class="form-control" style="width:200px;" name="drp_itm_cat" id="drp_itm_cat">
                                        <option value="" selected hidden> ------ Select ------ </option>
                                        <option value="0">Product</option>
                                        <?php foreach ($itm_cat_list as $itm_cat_set) { ?>
                                          <option title="<?php echo $itm_cat_set->MainCategory; ?>" value="<?php echo $itm_cat_set->CategoryID; ?>"> <?php echo $itm_cat_set->MainCategory ?> </option>
                                        <?php } ?>
                                      </select>
                                    </td>
                                    <td width="40%">
                                      <div id="drp_itm_div" style="display: none;">
                                        <strong>Product Name</strong><br>
                                        <select class="form-control select-2" style="width:250px;" name="drp_itm_add" id="drp_itm_add">
                                          <option value="0" selected hidden> ------ Select ------ </option>
                                        </select>
                                      </div>
                                    </td>
                                    <td width="100"><strong>Description</strong><br>
                                      <input class="form-control" style="width:100px;" type="text" name="txt_manual_itm_desc" id="txt_manual_itm_desc">
                                    </td>
                                    <td width="50"><strong>Qty</strong><br>
                                      <input class="form-control" style="width:50px;" type="text" name="txt_manual_itm_qty" id="txt_manual_itm_qty" value="0" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                                    </td>
                                    <td width="50"><strong>UOM</strong><br>
                                      <input class="form-control" style="width:50px;" type="text" name="txt_manual_itm_uom" id="txt_manual_itm_uom" value="">
                                    </td>
                                    <td width="50"><strong>Unit Price</strong><br>
                                      <input class="form-control" style="width:70px;" type="text" name="txt_manual_itm_price" id="txt_manual_itm_price" value="0" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                                    </td>
                                    <td width="115"><strong> Remarks :</strong><br>
                                      <input class="form-control" style="width:100px;" type="text" name="txt_manual_itm_remarks" id="txt_manual_itm_remarks">
                                    </td>
                                    <td>
                                      <br>
                                      <div><input class="btn btn-primary" type="button" name="Add" id="Add" value="Add" OnClick="addRow();"></div>
                                    </td>
                                  </tr>
                                  <tr>&nbsp;</tr>
                                </table>
                              </div>
                              <div style="height:30px;"></div>
                              <div id='TrTableDiv' align="center" width="100%">
                                <table class="table table-sm" id='TrTable' width="100%" border="0">
                                  <tr class="table_head" width="100%">
                                    <td style="background-color:#CCC;display:none;" class="border_botom border_top border_right">&nbsp;&nbsp; CatID &nbsp;&nbsp;</td>
                                    <td style="background-color:#CCC;display:none;" class="border_botom border_top border_right">&nbsp;&nbsp; ItemID &nbsp;&nbsp;</td>
                                    <td style="background-color:#CCC;width:50%" class="border_botom border_top border_right">&nbsp;&nbsp; Item Name &nbsp;</td>
                                    <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Qty &nbsp;&nbsp;</td>
                                    <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; UOM &nbsp;&nbsp;</td>
                                    <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Unit price &nbsp;&nbsp;</td>
                                    <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Remarks &nbsp;&nbsp;</td>
                                    <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right"></td>
                                  </tr>
                                  <tr width="100%">
                                    <td colspan="11">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
                              <button class="btn btn-success btn-lg" type="Submit" name="Submit" id="Submit" value="test">Submit</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id='TrTableDiv'>
                    <table id="customerTable" class="table table-bordered table-striped" width="100%">
                      <thead>
                        <th class="border_botom border_top border_right">Ref. No</th>
                        <th class="border_botom border_top border_right">Invoice No.</th>
                        <th class="border_botom border_top border_right">Shipment Type</th>
                        <th class="border_botom border_top border_right">Inquiry Type</th>
                        <th class="border_botom border_top border_right">Country</th>
                        <th class="border_botom border_top border_right">Customer</th>
                        <th class="border_botom border_top border_right">Remarks</th>
                        <th class="border_botom border_top border_right"></th>

                      </thead>
                      <?php foreach ($inq_list as $inq_info) {
                        $actv_stat = "";
                        if ($inq_info->Status == 0) {
                          $actv_stat = "bgcolor='#FEC2BB'";
                        }
                        if ($inq_info->ShpType == 1) {
                          $ShpType = 'Commercial Order';
                        } else {
                          $ShpType = 'Non Commercial Order';
                        }
                        $output = '';
                        $output .= "<tr " . $actv_stat . " class='border_bottom border_top border_right'>";
                        $output .= "<td width='5%'>" . $inq_info->EIHID . "</td>";
                        $output .= "<td width='10%'>" . $inq_info->InvoiceNo . "</td>";
                        $output .= "<td width='15%'>" . $ShpType . "</td>";
                        $output .= "<td width='10%'>" . $inq_info->OfficialAddress1 . "</td>";
                        $output .= "<td width='15%'>" . $inq_info->CountryName . "</td>";
                        $output .= "<td width='15%'>" . $inq_info->CustomerName . "</td>";
                        $output .= "<td width='10%'>" . $inq_info->Remarks . "</td>";
                        $output .= "<td width='10%'>";
                        $output .= "</td>";
                        $output .= "</tr>";

                        echo $output;
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

    <!-- Main Footer -->
    <?php $this->load->view('inc/footer'); ?>


  </div>
  <!-- ./wrapper -->

  <!-- SCRIPTS -->
  <?php $this->load->view('inc/scripts'); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.select-2').select2();
    });

    function confirmation() {
      var count = $('input[name="txttrcattxt"]').length;
      console.log(count)
      if (count > 0) {
        var r = confirm("Are you sure you want to confirm?");
        if (r == true) {
          return true;
        } else {
          return false;
        }
      } else {
        return false
      }
    }
  </script>
  <?php if ($this->session->flashdata('opr_success')) { ?>
    <script>
      toastr.success('<?php echo $this->session->flashdata('opr_success') ?>')
    </script>
  <?php } ?>
  <script type="text/javascript">
    $(document).ready(function() {

      $('#drp_customer').change(function() {
        document.getElementById("txt_cus_val").value = $(this).val();
        $('#txt_inv_no_2').val($('#drp_customer option:selected').data('code'))
      });

      $('#drp_country').change(function() {
        $('#txt_inv_no_2').val($('#drp_customer option:selected').data('...'))
        var CountryID = $(this).val()
        $.ajax({
          type: "POST",
          url: "<?php echo base_url() ?>gen_admin/gen_admin_controller/fetch_countries/" + CountryID,
          data: {
            CountryID: CountryID
          },
          dataType: "json",
          success: function(data) {
            if (data.response == true) {
              var record = data.records[0]
              $('#txt_inv_no_3').val(record.CountryCode)
            }
          }
        });
        var id = null
        var status = null
        var CustomerName = null
        $.ajax({
          type: "POST",
          url: "<?php echo base_url() ?>gen_admin/gen_admin_controller/fetch_export_customers/null/null/null/" + CountryID,
          data: {
            CountryID: CountryID,
            id: id,
            status: status,
            CustomerName: CustomerName,

          },
          dataType: "json",
          success: function(data) {
            console.log(data)
            if (data.response == true) {
              var records = data.records
              html = '<option value="" selected hidden> ------ Select ------ </option>'
              records.forEach(function(e) {
                html += '<option data-code="' + e.CustomerCode + '" title="' + e.CustomerCode + '" value="' + e.CustomerID + '">' + e.CustomerName + '</option>'
              })
              $('#drp_customer').html(html)
            } else {
              html = '<option value="" selected hidden> ------ Select ------ </option>'
              $('#drp_customer').html(html)
            }
          }
        });
      });

      $('#drp_inq_cat').change(function() {
        document.getElementById("txt_inq_cat_val").value = $(this).val();
      });

      $('#drp_cur').change(function() {
        document.getElementById("txt_inq_cour_cur_val").value = $(this).val();
      });

      $('#drp_itm_cat').change(function() {
        var id = $(this).val();
        $('#drp_itm_add').html('');
        if (id == 0) {
          $.ajax({
            type: "POST",
            dataType: 'json',
            url: "<?php echo base_url(); ?>gen_admin/gen_admin_controller/fetch_products",
            data: "catid=" + id,
            dataType: "json",
            success: function(data) {
              var html = '';
              html += '<option value = "0" selected hidden> ------ Select ------ </option>';
              var records = data.records
              records.forEach(function(e) {
                html += '<option value="' + e.ProductID + '">' + e.Description + '</option>';
              })
              $('#drp_itm_add').html(html);
              $('#drp_itm_add').select2();
              $('#drp_itm_div').show();
            }
          });
        } else {
          $('#drp_itm_div').hide();
        }
        return false;
      });
    });

    function addRow() {

      var catid = $('#drp_itm_cat').val();
      if (catid == '') {
        toastr.error('Please select a category')
        return false
      }
      var drp_cat = document.getElementById('drp_itm_cat');
      var cattxt = drp_cat.options[drp_cat.selectedIndex].text;

      if (catid == '0') {
        var itmid = $('#drp_itm_add').val();
        if (itmid == '0') {
          toastr.error('Please select a product')
          return false
        }
        var drp_itm = document.getElementById('drp_itm_add');
        var itmtxt = drp_itm.options[drp_itm.selectedIndex].text;
      } else {
        var itmid = 0
        var itmtxt = ""
      }

      var itmdesc = $('#txt_manual_itm_desc').val();
      var itmqty = $('#txt_manual_itm_qty').val();

      if (itmqty == '0') {
        $('#txt_manual_itm_qty').addClass("red-border");
        $('#txt_manual_itm_qty').focus();
        toastr.error('Please enter a valid quantity')
        return false
      } else {
        $('#txt_manual_itm_qty').removeClass("red-border");
      }

      var itmuom = $('#txt_manual_itm_uom').val();
      var itmprice = $('#txt_manual_itm_price').val();
      var itmremarks = $('#txt_manual_itm_remarks').val();

      var table = document.getElementById('TrTable');

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var cell1 = row.insertCell(0);
      var element1 = document.createElement("input");
      element1.type = "text";
      element1.name = "txttrcatid[]";
      element1.value = catid;
      cell1.appendChild(element1);
      cell1.style.display = "none";

      var cell2 = row.insertCell(1);
      var element3 = document.createElement("input");
      element3.type = "text";
      element3.name = "txttritmid[]";
      element3.value = itmid;
      cell2.appendChild(element3);
      cell2.style.display = "none";

      var cell3 = row.insertCell(2);
      var element2 = document.createElement("input");
      element2.type = "text";
      element2.name = "txttrcattxt[]";
      element2.value = cattxt;
      element2.placeholder = "Category";
      element2.style.width = '30%';
      cell3.appendChild(element2);

      var element4 = document.createElement("input");
      element4.type = "text";
      element4.name = "txttritmtxt[]";
      element4.value = itmtxt;
      element4.required = "required";
      element4.placeholder = "Name";
      element4.style.width = '40%';
      cell3.appendChild(element4);

      var element5 = document.createElement("input");
      element5.type = "text";
      element5.name = "txttritmdesc[]";
      element5.value = itmdesc;
      element5.placeholder = "Description";
      cell3.appendChild(element5);
      cell3.style.width = '50%';

      var cell4 = row.insertCell(3);
      var element6 = document.createElement("input");
      element6.type = "text";
      element6.name = "txttritmqty[]";
      element6.value = itmqty;
      cell4.appendChild(element6);
      cell4.style.width = '10%';

      var cell5 = row.insertCell(4);
      var element7 = document.createElement("input");
      element7.type = "text";
      element7.name = "txttritmuom[]";
      element7.value = itmuom;
      cell5.appendChild(element7);
      cell5.style.width = '10%';

      var cell6 = row.insertCell(5);
      var element8 = document.createElement("input");
      element8.type = "text";
      element8.name = "txttritmprice[]";
      element8.value = itmprice;
      cell6.appendChild(element8);
      cell6.style.width = '10%';

      var cell7 = row.insertCell(6);
      var element9 = document.createElement("input");
      element9.type = "text";
      element9.name = "txttrremarks[]";
      element9.value = itmremarks;
      cell7.appendChild(element9);
      cell7.style.width = '10%';

      var cell8 = row.insertCell(7);
      var element10 = document.createElement("a");
      element10.setAttribute("href", "#");
      element10.name = "hreftrremove[]";
      element10.setAttribute('onclick', 'deleteRow();');
      var linkText = document.createTextNode("Remove");
      element10.appendChild(linkText);
      cell8.appendChild(element10);
      cell8.style.width = '10%';

      $("#drp_itm_cat").val("");
      $("#drp_itm_add").val("0");
    }

    function deleteRow() {
      var td = event.target.parentNode;
      var tr = td.parentNode;
      tr.parentNode.removeChild(tr);
    }
  </script>
</body>

</html>