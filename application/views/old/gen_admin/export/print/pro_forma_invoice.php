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
      font-size: 10px
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

    .indent {
      text-indent: 11.5em;
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
  <div style="height: 4.5cm;"></div>
  <center>
    <table style="width:20cm">
      <tbody>
        <tr>
          <td class="font-weight-bolder text-md my-auto" colspan="6" align="center" style="padding-bottom:0em">
            <img class="mr-2 mb-1" style="width: 60px;margin-right:1em" src="<?php echo base_url() ?>assets/img/astron-logo.png" alt="">
            <span style="position: relative;bottom: 10px;">PRO-FORMA INVOICE</span>
          </td>
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
                <div class="col-12 font-weight-bold">
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
                <div class="col-12 font-weight-bold">
                  <?php echo $consignee['ConsigneeName'] ?>
                </div>
                <div class="col-12">
                  <?php echo $consignee['ConsigneeDetails1'] ?>
                </div>
                <div class="col-12">
                  <?php echo $consignee['ConsigneeDetails2'] ?>
                </div>
                <div class="col-12">
                  <?php echo $consignee['ConsigneeDetails3'] ?>
                </div>
                <div class="col-12">
                  <?php echo $consignee['ConsigneeDetails4'] ?>
                </div>
                <div class="col-12 d-flex">
                  Tel: <?php echo $consignee['ConsigneeTel'] ?>
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
                <div class="col-12 font-weight-bold">
                  <?php echo $notify_party['NotifyPartyContact'] ?>
                </div><br>
                <div class="col-12">
                  <?php echo $notify_party['NotifyPartyName'] ?>
                </div>
                <div class="col-12">
                  <?php echo $notify_party['NotifyPartyDetails1'] ?>
                </div>
                <div class="col-12">
                  <?php echo $notify_party['NotifyPartyDetails2'] ?>
                </div>
                <div class="col-12">
                  <?php echo $notify_party['NotifyPartyDetails3'] ?>
                </div>
                <div class="col-12 d-flex">
                  <?php echo $notify_party['NotifyPartyDetails4'] ?>
                </div>
                <div class="col-12 d-flex">
                  Tel: <?php echo $notify_party['NotifyPartyTel'] ?>
                </div>
              </div>
            </div>
          </td>
          <td colspan="4" style="width:8cm">
            <div class="container mt-3">
              <div class="row ml-3">
                <div class="col-12 my-2 d-flex">
                  Pro Forma Invoice No : <span class="font-weight-bold">PFI/<?php echo $header['InvoiceNo'] ?></span>
                </div><br>
                <div class="col-12 my-2 d-flex">
                  Date : <span class="font-weight-bold"><?php echo $header['Date'] ?></span>
                </div><br>
                <div class="col-12 my-2 d-flex">
                  Payment Terms : <span class="font-weight-bold"><?php echo $header['PaymentTerms'] ?></span>
                </div><br>
                <div class="col-12 my-2 d-flex">
                  INCOTERM : <span class="font-weight-bold"><?php echo $header['INCOTERM'] ?></span>
                </div><br>
                <div class="col-12 my-2 d-flex">
                  Delivery Terms : <span class="font-weight-bold"><?php echo $header['DeliveryTerms'] ?></span>
                </div><br>
                <div class="col-12 my-2 d-flex">
                  Country of Origin : <span class="font-weight-bold"><?php echo $header['CountryofOrigin'] ?></span>
                </div><br>
                <div class="col-12 my-2 d-flex">
                  Type of Packaging : <span class="font-weight-bold"><?php echo $header['PackagingType'] ?></span>
                </div><br>
                <div class="col-12 my-2 d-flex">
                  Mode of Transport : <span class="font-weight-bold"><?php echo $header['TransportMode'] ?></span>
                </div><br>
                <div class="col-12 my-2 d-flex">
                  Beneficiary : <span class="font-weight-bold"><?php echo $header['Beneficiary'] ?></span>
                </div><br>
                <div class="col-12 mt-2 d-flex">
                  Bank Details of Beneficiary : <?php echo $header['BeneficiaryBankName'] ?>
                </div>
                <div class="col-12 d-flex indent">
                  <?php echo $header['BeneficiaryBankDetails1'] ?>
                </div>
                <div class="col-12 d-flex indent">
                  <?php echo $header['BeneficiaryBankDetails2'] ?>
                </div>
                <div class="col-12 d-flex indent">
                  <?php echo $header['BeneficiaryBankDetails3'] ?>
                </div>
                <div class="col-12 d-flex indent">
                  <?php echo $header['BeneficiaryBankDetails4'] ?>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="font-weight-bolder above-item-rows" align="center">
          <td width="5%">CODE</td>
          <td width="35%">PRODUCT</td>
          <td width="15%">STRENGTH/<br>PACK SIZE</td>
          <td width="15%">ORDER QUANTITY UNITS</td>
          <td width="15%">RATE<br>USD</td>
          <td width="15%">VALUE<br>USD</td>
        </tr>
        <?php
        $code = 1;
        $total = 0.00;
        foreach ($detail as $dtl) {
          $price = floatval($dtl['Price']);
          $qty = intval($dtl['Qty']);
          $value = $price * $qty;
          $total = $value + $total;
          $value = number_format(floatval($value), 2, '.', ' ');
        ?>
          <tr class="new-item-rows table-success">
            <td><?php echo $code ?></td>
            <td><?php echo $dtl['ProductName'] ?></td>
            <td><?php echo $dtl['PackSize'] ?></td>
            <td><?php echo $qty ?></td>
            <td><?php echo number_format(floatval($price), 2, '.', ' ') ?></td>
            <td><?php echo $value ?></td>
          </tr>
        <?php $code++;
        }
        ?>

        <tr>
          <td rowspan="2"></td>
          <td rowspan="2" class="font-weight-bold"></td>
          <td colspan="3" class="font-weight-bold">Total Value FOB Colombo, Sri Lanka (USD) :</td>
          <td colspan="1"><?php echo number_format(floatval($total), 2, '.', ' ') ?></td>
        </tr>
        <tr>
          <td colspan="3" class="font-weight-bold">Total FOB Colombo, Sri Lanka (USD) :</td>
          <td colspan="1"><?php echo number_format(floatval($total), 2, '.', ' ') ?></td>
        </tr>
      </tbody>
    </table>
  </center>
  <p align="center" class="font-weight-bold">We confirm products in this invoice are locally manufactured at Astron Limited, 688, Galle Road, Ratmalana, Sri Lanka</p>

  <!-- Main Footer -->
  <?php $this->load->view('inc/scripts'); ?>

  <script type="text/javascript">
    // window.addEventListener("load", window.print());
  </script>
</body>

</html>