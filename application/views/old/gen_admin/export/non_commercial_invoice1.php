<?php
// $this->load->view('stores/inc/header');
?>

<script type="text/javascript">
  function addRow() {

    var itm_code = $('#txt_code').val();

    var itmid = $('#drp_itm').val();
    var drp_itm = document.getElementById('drp_itm');
    var itmtxt = drp_itm.options[drp_itm.selectedIndex].text;

    var itm_nm = $('#txt_itm').val();
    var salesunit = $('#txt_salesunit').val();
    var itmqty = $('#txt_qty').val();
    var rate = $('#txt_rate').val();
    var value = $('#txt_value').val();

    var itemid = 0;
    var itemname = '';
    if (itmtxt == '------ Select ------') {
      itemid = 0;
      itemname = itm_nm;
    } else {
      itemid = itmid;
      itemname = itmtxt;
    }

    if (itm_code != '' && itemname != '' && salesunit != '' && itmqty != '' && rate != '' && value != '') {

      var table = document.getElementById('trtbl');

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var cell1 = row.insertCell(0);
      var element1 = document.createElement("input");
      element1.type = "text";
      element1.name = "txtCode[]";
      element1.value = itm_code;
      element1.style.width = '100%';
      cell1.appendChild(element1);
      cell1.style.width = '10%';

      var cell2 = row.insertCell(1);
      var element2 = document.createElement("input");
      element2.type = "text";
      element2.name = "txtItemID[]";
      element2.value = itemid;
      element2.style.width = '100%';
      cell2.appendChild(element2);
      cell2.style.display = "none";
      cell2.style.width = '10%';

      var cell3 = row.insertCell(2);
      var element3 = document.createElement("input");
      element3.type = "text";
      element3.name = "txtItemName[]";
      element3.value = itemname;
      element3.style.width = '100%';
      cell3.appendChild(element3);
      cell3.style.width = '35%';

      var cell4 = row.insertCell(3);
      var element4 = document.createElement("input");
      element4.type = "text";
      element4.name = "txtItemQty[]";
      element4.value = itmqty;
      element4.style.width = '100%';
      element4.readOnly = true;
      cell4.appendChild(element4);
      cell4.style.width = '10%';

      var cell5 = row.insertCell(4);
      var element5 = document.createElement("input");
      element5.type = "text";
      element5.name = "txtSalesUnit[]";
      element5.value = salesunit;
      element5.style.width = '100%';
      cell5.appendChild(element5);
      cell5.style.width = '10%';

      var cell6 = row.insertCell(5);
      var element6 = document.createElement("input");
      element6.type = "text";
      element6.name = "txtRate[]";
      element6.value = rate;
      element6.style.width = '100%';
      element6.readOnly = true;
      cell6.appendChild(element6);
      cell6.style.width = '10%';

      var cell7 = row.insertCell(6);
      var element7 = document.createElement("input");
      element7.type = "text";
      element7.name = "txtValue[]";
      element7.value = value;
      element7.style.width = '100%';
      element7.readOnly = true;
      cell7.appendChild(element7);
      cell7.style.width = '10%';

      var cell18 = row.insertCell(7);
      var element8 = document.createElement("a");
      element8.setAttribute("href", "#");
      element8.name = "hrefremove[]";
      element8.setAttribute('onclick', 'deleteRow();');
      var linkText = document.createTextNode("Remove");
      element8.appendChild(linkText);
      cell18.appendChild(element8);
      cell18.style.width = '5%';
    }

  }

  function deleteRow() {

    var td = event.target.parentNode;
    var tr = td.parentNode;
    tr.parentNode.removeChild(tr);

  }

  function isNumberKey(evt, obj) {

    var charCode = (evt.which) ? evt.which : event.keyCode
    var value = obj.value;
    var dotcontains = value.indexOf(".") != -1;
    if (dotcontains)
      if (charCode == 46) return false;
    if (charCode == 46) return true;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }

  function calValue() {
    var qty = $('#txt_qty').val();
    var rt = $('#txt_rate').val();
    var val = (qty * rt).toFixed(2);
    $('#txt_value').val(val);
  }

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
  .head_text {
    font-size: 16px;
    font-weight: bold;
    color: #000;
  }

  .sub_head {
    font-weight: bold;
    font-size: 15px;
    color: #000;
  }

  .sub_data {
    font-size: 14px;
    font-weight: bold;
    color: #000;
  }

  .border_botom {
    border-bottom: 1px solid #837669;
  }

  .border_top {
    border-top: 1px solid #837669;
  }

  .border_left {
    border-left: 1px solid #837669;
  }

  .border_right {
    border-right: 1px solid #837669;
  }

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

<div id="page" style="width:100%;padding:0px;">
  <div align="right"></div>
  <div id="content" style="width:100%; ">
    <div class="post">
      <h2 align="right" class="title">&nbsp;</h2>
      <h2 align="center" class="title"> Non-Commercial Invoice </h2>
    </div>
  </div>
  <div style="clear: both; padding-left:10px;">
    <form method="post" name="rd_form" id="rd_form" action="<?php echo base_url(); ?>gen_admin/gen_admin_controller/non_commercial_invoice/" OnSubmit="return confirmation();">
      <div align="center">
        <table width="100%" border="0">
          <tr>
            <td width="120" height="33"><strong> Invoice No :</strong></td>
            <td><input style="width:250px;" type="text" name="txt_inv_no" id="txt_inv_no">&nbsp;</td>
            <td width="120"><strong> Consigner :</strong></td>
            <td><textarea style="width:250px;" type="text" name="txt_cnsgnr" id="txt_cnsgnr"></textarea>&nbsp;</td>
          </tr>
          <tr>&nbsp;</tr>
          <tr>
            <td width="120"><strong> Buyer / Notify Party :</strong></td>
            <td><textarea style="width:250px;" type="text" name="txt_buyer" id="txt_buyer"></textarea>&nbsp;</td>
            <td width="120"><strong> Consignee :</strong></td>
            <td><textarea style="width:250px;" type="text" name="txt_cnsgnee" id="txt_cnsgnee"></textarea>&nbsp;</td>
          </tr>
          <tr>&nbsp;</tr>
          <tr>
            <td width="120"><strong> Terms of Payment :</strong></td>
            <td><textarea style="width:250px;" type="text" name="txt_topay" id="txt_topay"></textarea>&nbsp;</td>
            <td width="120"><strong> Country of Origin :</strong></td>
            <td><input style="width:250px;" type="text" name="txt_coo" id="txt_coo">&nbsp;</td>
            <td width="120"><strong> Type of Packaging :</strong></td>
            <td><input style="width:200px;" type="text" name="txt_top" id="txt_top">&nbsp;</td>
          </tr>
          <tr>&nbsp;</tr>
        </table>
      </div>
      <div align="center">
        <table width="100%" border="0" bgcolor="#F0FFEA">
          <tr>
            <td width="120"><strong> Packing List :</strong></td>
            <td>
              <select style="width:250px;height:25px;float:left;" name="drp_fgs_pl_itm" id="drp_fgs_pl_itm">
                <option value="0" selected> ------ Select ------ </option>
              </select>
            </td>
            <td width="120"><strong> Code :</strong></td>
            <td><input style="width:150px;" type="text" name="txt_code" id="txt_code">&nbsp;</td>
          </tr>
          <tr>&nbsp;</tr>
          <tr>&nbsp;</tr>
          <tr>
            <td width="120"><strong> Item :</strong></td>
            <td>
              <select style="width:150px;height:25px;float:left;" name="drp_itm" id="drp_itm">
                <option value="0" selected> ------ Select ------ </option>
              </select>
              <input type='hidden' id='txt_itm_val' name='txt_itm_val' />
              <br><br>
              <input style="width:250px;" type="text" name="txt_itm" id="txt_itm">
            </td>
            <td width="120"><strong> Sales Unit :</strong></td>
            <td><input style="width:150px;" type="text" name="txt_salesunit" id="txt_salesunit">&nbsp;</td>
          </tr>
          <tr>&nbsp;</tr>
          <tr>&nbsp;</tr>
          <tr>
            <td width="120"><strong> Qty :</strong></td>
            <td><input style="width:150px;" type="text" name="txt_qty" id="txt_qty" value="0" onchange="calValue();" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
            <td width="120"><strong> Rate (USD) :</strong></td>
            <td><input style="width:150px;" type="text" name="txt_rate" id="txt_rate" value="0" onchange="calValue();" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
          </tr>
          <tr>
            <td width="120"><strong> Value (USD) :</strong></td>
            <td><input style="width:150px;" type="text" name="txt_value" id="txt_value" value="0" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
            <td>
              <div><input type="button" name="btn_add" id="btn_add" value="Add" OnClick="addRow();"></div>
            </td>
          </tr>
          <tr>&nbsp;</tr>
        </table>
        <br><br>
        <div align="center">
          <div id='TrTableDiv'>
            <table id='trtbl' width="100%" border="0">
              <tr class="table_head">
                <td style="background-color:#CCC;width:10%;" class="border_botom border_top border_right">&nbsp;&nbsp; Code &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%;display:none;" class="border_botom border_top border_right">&nbsp;&nbsp; Item ID &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:35%" class="border_botom border_top border_right">&nbsp;&nbsp; Item Name &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Qty &nbsp;</td>
                <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Sales Unit &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Rate &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Value &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:5%" class="border_botom border_top border_right"></td>
              </tr>
              <tr>
                <td colspan="10">&nbsp;</td>
              </tr>
            </table>
          </div>
          <br><br>
        </div>
        <button type="Submit" name="Submit" id="Submit" value="test" style="height:20px;width:100px;">Submit</button>
    </form>
    <div style="height:300px;"></div>
  </div>
</div>

<!-- end #page -->
<!-- end #footer -->

<div align="center">
  <?php
  $this->load->view('inc/footer.php');
  ?>
</div>
</body>

</html>