<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Astron EITS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  // $this->load->view('inc/stylesheets'); 
  ?>

  <style>
    body {
      font-family: Calibri, Arial, Helvetica, sans-serif;
      font-size: 12px
    }

    table td {
      padding-bottom: 1.5em;
      padding-right: 1.5em;
      padding-left: 1.5em;
    }

    .mb-4 {
      margin-top: 2em;
      margin-bottom: 2em;
    }

    .font-weight-bold {
      font-weight: bold;
    }

    .font-weight-bolder {
      font-weight: bolder;
    }

    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    .text-indent {
      text-indent: 1.5em;
    }
  </style>
</head>

<body>
  <table style="width:20cm">
    <tbody>
      <tr>
        <td class="font-weight-bolder text-md my-auto" colspan="6" align="center"><img class="mr-2 mb-1" style="width: 60px;margin-right:1em" src="<?php echo base_url() ?>assets/img/astron-logo.png" alt=""><span style="margin-bottom:20px">PRO-FORMA INVOICE</span></td>
      </tr>
      <tr>
        <td colspan="2" style="width:8cm">
          <div class="container mb-4">
            <div class="row mb-2">
              <div class="col">
                <span class="font-weight-bold">CONSIGNER</span>
              </div>
            </div>
            <div class="row ml-3 text-indent">
              <br>
              <div class="col-12">
                ASTRON LIMITED
              </div>
              <div class="col-12">
                688, Galle Road, Ratmalana
              </div>
              <div class="col-12">
                Sri Lanka
              </div>
              <div class="col-12 d-flex">
                +94-112636741, +94-11-5566741
              </div>
              <div class="col-12 d-flex">
                +94-112636173
              </div>
              <div class="col-12 d-flex">
                www.astron.lk
              </div>
            </div>
          </div>
          <div class="container mb-4">
            <div class="row mb-2">
              <div class="col">
                <span class="font-weight-bold">CONSIGNEE</span>
              </div>
            </div>
            <div class="row ml-3 text-indent">
              <br>
              <div class="col-12">
                ASTRON LIMITED
              </div>
              <div class="col-12">
                688, Galle Road, Ratmalana
              </div>
              <div class="col-12">
                Sri Lanka
              </div>
              <div class="col-12">
                Sri Lanka
              </div>
              <div class="col-12">
                Sri Lanka
              </div>
              <div class="col-12 d-flex">
                Tel : +94-112636741, +94-11-5566741
              </div>
            </div>
          </div>
          <div class="container mb-4">
            <div class="row mb-2">
              <div class="col">
                <span class="font-weight-bold">NOTIFY PARTY</span>
              </div>
            </div>
            <div class="row ml-3 text-indent">
              <br>
              <div class="col-12">
                ASTRON LIMITED
              </div><br>
              <div class="col-12">
                688, Galle Road, Ratmalana
              </div>
              <div class="col-12">
                Sri Lanka
              </div>
              <div class="col-12">
                Sri Lanka
              </div>
              <div class="col-12">
                Sri Lanka
              </div>
              <div class="col-12 d-flex">
                Tel : +94-112636741, +94-11-5566741
              </div>
            </div>
          </div>
        </td>
        <td colspan="4" style="width:8cm">
          <div class="container mt-3">
            <div class="row ml-3">
              <div class="col-12 my-2 d-flex">
                Pro Forma Invoice No : <span class="font-weight-bold">PFI/EXP/MKNZ/USA/2021/2</span>
              </div><br>
              <div class="col-12 my-2 d-flex">
                Date : <span class="font-weight-bold">28th AUGUST 2020</span>
              </div><br>
              <div class="col-12 my-2 d-flex">
                Payment Terms : <span class="font-weight-bold">90 Days LC</span>
              </div><br>
              <div class="col-12 my-2 d-flex">
                INCOTERM : <span class="font-weight-bold">FOB</span>
              </div><br>
              <div class="col-12 my-2 d-flex">
                Delivery Terms : <span class="font-weight-bold">FOB</span>
              </div><br>
              <div class="col-12 my-2 d-flex">
                Country of Origin : <span class="font-weight-bold">SRI LANKA</span>
              </div><br>
              <div class="col-12 my-2 d-flex">
                Type of Packaging : <span class="font-weight-bold">Corrugated Boxes</span>
              </div><br>
              <div class="col-12 my-2 d-flex">
                Mode of Transport : <span class="font-weight-bold">Sea Freight</span>
              </div><br>
              <div class="col-12 my-2 d-flex">
                Beneficiary : <span class="font-weight-bold">Astron Limited, No. 688, Galle Road, Ratmalana</span>
              </div><br>
              <div class="col-12 mt-2 d-flex">
                Bank Details of Beneficiary : Seylan Bank PLC
              </div>
              <div class="col-12 d-flex">
                198. Galle Road, Ratmalana, Sri Lanka
              </div>
              <div class="col-12 d-flex">
                No. 0030-00175628-001
              </div>
              <div class="col-12 d-flex">
                Swift Code: SEYBLKLX
              </div>
              <div class="col-12 d-flex">
                A/C Number: 0030-001175628-001
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
      <tr class="new-item-rows table-success">
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
      </tr>

      <tr>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td colspan="3">Total Value FOB Colombo, Sri Lanka (USD) :</td>
        <td colspan="1">2134</td>
      </tr>
      <tr>
        <td colspan="3">Total FOB Colombo, Sri Lanka (USD) :</td>
        <td colspan="1">1234</td>
      </tr>
    </tbody>
  </table>

  <!-- Main Footer -->
  <?php $this->load->view('inc/scripts'); ?>

  <script type="text/javascript">
    // window.addEventListener("load", window.print());
  </script>
</body>

</html>