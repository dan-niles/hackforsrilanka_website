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

    footer {
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
                      <i class="far fa-file-alt" style="font-size: 2.5em;padding:10px"></i>
                      <h3 style="display:inline"> Commercial Invoice</h3>
                    </div>
                    <div class="col-7 my-auto">
                      <ul class="nav nav-pills float-right">
                        <!-- <li class="nav-item">
                          <a class="btn btn-jade float-right" data-toggle="collapse" href="#add_new_inquiry" aria-expanded="false" aria-controls="contentId">
                            <i class="fas fa-plus"></i> Add New
                          </a>
                        </li> -->
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="card">
                    <div class="card-body">

                      <div class="row">
                        <div class="form-group col-2">
                          <label for="">Country</label>
                          <select class="form-control select-2" name="drp_country" id="drp_country" required>
                            <option value="" selected hidden> ------ Select ------ </option>
                            <?php foreach ($countries as $key => $value) { ?>
                              <option title="<?php echo $value['CountryCode']; ?>" value="<?php echo $value['CountryID']; ?>"> <?php echo $value['CountryName']; ?> </option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group col-2">
                          <label for="">Customer</label>
                          <select class="form-control" name="drp_customer" id="drp_customer" required>
                            <option value="" selected hidden> ------ Select ------ </option>
                          </select>
                        </div>
                        <div class="form-group col-3">
                          <label for="">Pro-Forma Invoice No</label>
                          <select class="form-control select-2" name="drp_inv_no" id="drp_inv_no">
                          </select>
                        </div>
                        <div class="form-group col-1 my-auto ">
                          <button type="button" id="loadBtn" class="btn btn-jade mt-2">Load</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <form method="post" name="rd_form" id="rd_form" action="<?php echo base_url(); ?>gen_admin/gen_admin_controller/pro_forma_invoice1" OnSubmit="return confirmation();">
                    <div id='data-table-div' style="display:none" class="px-4">
                      <table id="customerTable" class="table table-bordered px-4" width="100%">
                        <tbody>
                          <tr>
                            <td class="font-weight-bolder text-md my-auto" colspan="6" align="center"><img class="mr-2 mb-1" style="width: 60px" src="<?php echo base_url() ?>assets/img/astron-logo.png" alt="">COMMERCIAL INVOICE</td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <div class="container mb-4">
                                <div class="row mb-2">
                                  <div class="col">
                                    <span class="font-weight-bold">CONSIGNER</span>
                                  </div>
                                </div>
                                <div class="row ml-3">
                                  <div class="col-12">
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="ConsignerName" id="ConsignerName" value="ASTRON LIMITED" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="ConsignerAddress1" id="ConsignerAddress1" value="688, Galle Road, Ratmalana" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="ConsignerAddress2" id="ConsignerAddress2" value="Sri Lanka" readonly>
                                  </div>
                                  <div class="col-12 d-flex">
                                    <input class="form-control form-control-sm" style="width: 55px;" type="text" value="Tel : " readonly><input class="form-control form-control-sm" type="text" name="ConsignerTel" id="ConsignerTel" value="+94-112636741, +94-11-5566741" readonly>
                                  </div>
                                  <div class="col-12 d-flex">
                                    <input class="form-control form-control-sm" style="width: 55px;" type="text" value="Fax : " readonly><input class="form-control form-control-sm" type="text" name="ConsignerFax" id="ConsignerFax" value="+94-112636173" readonly>
                                  </div>
                                  <div class="col-12 d-flex">
                                    <input class="form-control form-control-sm" style="width: 55px;" type="text" value="Web : " readonly><input class="form-control form-control-sm" type="text" name="ConsignerWeb" id="ConsignerWeb" value="www.astron.lk" readonly>
                                  </div>
                                </div>
                              </div>
                              <div class="container mb-4">
                                <div class="row mb-2">
                                  <div class="col">
                                    <span class="font-weight-bold">CONSIGNEE</span>
                                  </div>
                                </div>
                                <div class="row ml-3">
                                  <div class="col-12">
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="ConsigneeName" id="ConsigneeName" value="ASTRON LIMITED" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="ConsigneeDetails1" id="ConsigneeDetails1" value="688, Galle Road, Ratmalana" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="ConsigneeDetails2" id="ConsigneeDetails2" value="Sri Lanka" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="ConsigneeDetails3" id="ConsigneeDetails3" value="Sri Lanka" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="ConsigneeDetails4" id="ConsigneeDetails4" value="Sri Lanka" readonly>
                                  </div>
                                  <div class="col-12 d-flex">
                                    <input class="form-control form-control-sm" style="width: 55px;" type="text" value="Tel : " readonly>
                                    <input class="form-control form-control-sm" name="ConsigneeTel" id="ConsigneeTel" value="+94-112636741, +94-11-5566741" readonly>
                                  </div>
                                </div>
                              </div>
                              <div class="container mb-4">
                                <div class="row mb-2">
                                  <div class="col">
                                    <span class="font-weight-bold">NOTIFY PARTY</span>
                                  </div>
                                </div>
                                <div class="row ml-3">
                                  <div class="col-12 mb-3">
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="NotifyPartyContact" id="NotifyPartyContact" value="Mr. John Doe" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="NotifyPartyName" id="NotifyPartyName" value="ASTRON LIMITED" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="NotifyPartyDetails1" id="NotifyPartyDetails1" value="688, Galle Road, Ratmalana" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="NotifyPartyDetails2" id="NotifyPartyDetails2" value="Sri Lanka" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="NotifyPartyDetails3" id="NotifyPartyDetails3" value="Sri Lanka" readonly>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control form-control-sm" type="text" name="NotifyPartyDetails4" id="NotifyPartyDetails4" value="Sri Lanka" readonly>
                                  </div>
                                  <div class="col-12 d-flex">
                                    <input class="form-control form-control-sm" style="width: 55px;" type="text" value="Tel : " readonly>
                                    <input class="form-control form-control-sm" type="text" name="NotifyPartyTel" id="NotifyPartyTel" value="+94-112636741, +94-11-5566741" readonly>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td colspan="4">
                              <div class="container mt-3">
                                <div class="row ml-3">
                                  <div class="col-12 my-2 d-flex">
                                    <input type="hidden" name="EIHID" id="EIHID">
                                    <input type="hidden" name="PFIHID" id="PFIHID" value="0">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="Invoice No : " readonly>
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="PFINo" id="PFINo" value="PFI/EXP/MKNZ/USA/2021/2" readonly>
                                  </div>
                                  <div class="col-12 my-2 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="Date : " readonly>
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="Date" id="Date" value="28th AUGUST 2020" readonly>
                                  </div>
                                  <div class="col-12 my-2 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="Payment Terms : " readonly>
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="PaymentTerms" id="PaymentTerms" value="90 Days LC" readonly>
                                  </div>
                                  <div class="col-12 my-2 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="INCOTERM : " readonly>
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="INCOTERM" id="INCOTERM" value="FOB" readonly>
                                  </div>
                                  <div class="col-12 my-2 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="Delivery Terms : " readonly>
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="DeliveryTerms" id="DeliveryTerms" value="FOB" readonly>
                                  </div>
                                  <div class="col-12 my-2 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="Country of Origin : " readonly>
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="CountryofOrigin" id="CountryofOrigin" value="SRI LANKA" readonly>
                                  </div>
                                  <div class="col-12 my-2 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="Type of Packaging : " readonly>
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="PackagingType" id="PackagingType" value="Corrugated Boxes" readonly>
                                  </div>
                                  <div class="col-12 my-2 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="Mode of Transport : " readonly>
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="TransportMode" id="TransportMode" value="Sea Freight" readonly>
                                  </div>
                                  <div class="col-12 my-2 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="Beneficiary : " readonly>
                                    <input class="form-control form-control-sm font-weight-bold" type="text" name="Beneficiary" id="Beneficiary" value="Astron Limited, No. 688, Galle Road, Ratmalana" readonly>
                                  </div>
                                  <div class="col-12 mt-2 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="Bank Details of Beneficiary : " readonly>
                                    <input class="form-control form-control-sm" type="text" name="BeneficiaryBankName" id="BeneficiaryBankName" value="Seylan Bank PLC" readonly>
                                  </div>
                                  <div class="col-12 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="" readonly>
                                    <input class="form-control form-control-sm" type="text" name="BeneficiaryBankDetails1" id="BeneficiaryBankDetails1" value="198. Galle Road, Ratmalana, Sri Lanka" readonly>
                                  </div>
                                  <div class="col-12 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="" readonly>
                                    <input class="form-control form-control-sm" type="text" name="BeneficiaryBankDetails2" id="BeneficiaryBankDetails2" value="No. 0030-00175628-001" readonly>
                                  </div>
                                  <div class="col-12 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="" readonly>
                                    <input class="form-control form-control-sm" type="text" name="BeneficiaryBankDetails3" id="BeneficiaryBankDetails3" value="Swift Code: SEYBLKLX" readonly>
                                  </div>
                                  <div class="col-12 d-flex">
                                    <input class="form-control form-control-sm" style="width: 250px" type="text" value="" readonly>
                                    <input class="form-control form-control-sm" type="text" name="BeneficiaryBankDetails4" id="BeneficiaryBankDetails4" value="A/C Number: 0030-001175628-001" readonly>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="font-weight-bolder above-item-rows">
                            <td width="5%">CODE</td>
                            <td width="35%">PRODUCT</td>
                            <td width="15%">STRENGTH/PACK SIZE</td>
                            <td width="15%">ORDER QUANTITY UNITS</td>
                            <td width="15%">RATE USD</td>
                            <td width="15%">VALUE USD</td>
                          </tr>

                          <?php for ($i = 1; $i < 10; $i++) { ?>
                            <tr class="item-rows">
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          <?php } ?>

                          <tr>
                            <td rowspan="2"></td>
                            <td rowspan="2"></td>
                            <td colspan="3">Total Value FOB Colombo, Sri Lanka (USD) :</td>
                            <td colspan="1"><input type="text" class="form-control item-total" readonly></td>
                          </tr>
                          <tr>
                            <td colspan="3">Total FOB Colombo, Sri Lanka (USD) :</td>
                            <td colspan="1"><input type="text" class="form-control item-total" readonly></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="row">
                        <div class="col">
                          <!-- <button type="submit" name="submit" class="btn btn-lg btn-success">Save</button> -->
                        </div>
                      </div>
                    </div>
                  </form>
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
      var r = confirm("Are you sure you want to confirm?");
      if (r == true) {
        return true;
      } else {
        return false;
      }
    }

    $('#drp_country').change(function() {
      // $('#txt_inv_no_2').val($('#drp_customer option:selected').data('...'))
      var CountryID = $(this).val()
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
          $('#drp_customer').select2();
        }
      });
    });

    $(document).on('change', '#drp_customer', function() {
      var CustomerID = $('#drp_customer').val()
      var ShpType = 1
      $.ajax({
        type: "POST",
        url: "<?php echo base_url() ?>gen_admin/gen_admin_controller/fetch_pfi_inv_no",
        data: {
          CustomerID: CustomerID,
          ShpType: ShpType
        },
        dataType: "json",
        success: function(data) {
          if (data.response == true) {
            var records = data.records
            html = '<option value="" selected hidden> ------ Select ------ </option>'
            records.forEach(function(e) {
              html += '<option data-code="' + e.EIHID + '" title="' + e.EIHID + '" value="' + e.EIHID + '">PFI/' + e.InvoiceNo + '</option>'
            })
            $('#drp_inv_no').html(html)
          } else {
            html = '<option value="" selected hidden> ------ Select ------ </option>'
            $('#drp_inv_no').html(html)
          }
          $('#drp_inv_no').select2();
        }
      });
    })

    $(document).on('keyup', '.item-qty', function() {
      setSubTotal()
    })

    $(document).on('keyup', '.item-price', function() {
      setSubTotal()
    })

    function setTotal() {
      var Total = 0.00;
      $('.item-value').each(function() {
        Total = Total + parseFloat($(this).val());
      })
      $('.item-total').val(Total.toFixed(2))
    }

    function setSubTotal() {
      $('.item-rows').each(function() {
        var qty = parseInt($(this).find('.item-qty').val())
        var price = parseFloat($(this).find('.item-price').val())
        var subTotal = qty * price
        $(this).find('.item-value').val(subTotal.toFixed(2))
      })
      setTotal()
    }

    $(document).on('click', '#loadBtn', function() {
      var InquiryID = $('#drp_inv_no').val()
      console.log(InquiryID)
      $('#data-table-div').hide();
      if (InquiryID != "" && InquiryID != 0 && InquiryID != null) {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url() ?>gen_admin/gen_admin_controller/get_shipment_inq_details_for_pfi",
          data: {
            InquiryID: InquiryID
          },
          dataType: "json",
          beforeSend: function() {
            $('#loadBtn').html('<div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>')
            $('#loadBtn').prop('disabled', true)
          },
          success: function(data) {
            console.log(data)
            if (data.response == true) {
              for (var key in data.header) {
                $('#' + key).val(data.header[key]);
              }
              $('#PFINo').val(data.header.InvoiceNo)
              for (var key in data.consignee) {
                $('#' + key).val(data.consignee[key]);
              }
              for (var key in data.notify_party) {
                $('#' + key).val(data.notify_party[key]);
              }
              $('.item-rows').remove();
              var toAppend = ''
              var Code = 1;
              data.detail.forEach(function(e) {
                toAppend += '<tr class="item-rows">'
                toAppend += '<td>' + Code + '</td>'
                toAppend += '<td>'
                toAppend += '<input type="hidden" name="PFIDID[]" value="' + e.PFIDID + '">'
                toAppend += '<input type="hidden" name="CatID[]" value="' + e.CatID + '">'
                toAppend += '<input type="hidden" name="CatName[]" value="' + e.CatName + '">'
                toAppend += '<input type="hidden" name="Description[]" value="' + e.Description + '">'
                toAppend += '<input type="hidden" name="Remarks[]" value="' + e.Remarks + '" readonly>'
                toAppend += '<input type="hidden" name="ProductID[]" value="' + e.ProductID + '" readonly>'
                toAppend += '<input type="hidden" name="UOM[]" value="' + e.UOM + '" readonly>'
                toAppend += '<input class="form-control" name="ProductName[]" value="' + e.ProductName + '" readonly>'
                toAppend += '</td>'
                toAppend += '<td><input class="form-control" name="PackSize[]" value="' + e.PackSize + '"  readonly></td>'
                toAppend += '<td><input class="form-control item-qty" name="Qty[]" value="' + e.Qty + '"  readonly></td>'
                toAppend += '<td><input class="form-control item-price" name="Price[]" value="' + e.Price + '"  readonly></td>'
                var Value = e.Price * e.Qty
                toAppend += '<td><input class="form-control item-value" value="' + parseFloat(Value).toFixed(2) + '" readonly></td>'
                toAppend += '</tr>'
                Code++
              })
              $('.above-item-rows').after(toAppend);
              setTotal()
              $('#data-table-div').show();
            }
            $('#loadBtn').html('Load')
            $('#loadBtn').prop('disabled', false)
          }
        });
      }
    })
  </script>
</body>

</html>