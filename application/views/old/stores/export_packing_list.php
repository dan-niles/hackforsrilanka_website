<?php 
$this->load->view('stores/inc/header');

$shipment_type = array("COM" => "Commercial", "NONCOM" => "Non-Commercial");

?>

<script type="text/javascript">

    $(document).ready(function(){

       $('#drp_type').change(function(){   
        var dc = document.getElementById("drp_type");
        var selectedText = dc.options[dc.selectedIndex].text;
        document.getElementById("txt_type_val").value = selectedText;
        
        var id=$(this).val();
                $('#drp_ordr').html('');

                var html = '';
                html += '<option value = "0" selected> ------ Select ------ </option>';

                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url : "<?php echo base_url(); ?>stores/stores_controller/epl_get_selected_order_headers",
                    data : "type_id="+id,                                       
                    success: function(msg){                        
                        var i;
                        for(i=0; i<msg.length; i++){
                            html += '<option title='+msg[i].Description+' value='+msg[i].EIHID+'>'+msg[i].Description+'</option>';
                        }
                        $('#drp_ordr').html(html);
                    }
                });               

                return false;
       });
       
       $('#drp_ordr').change(function(){   
        var dc = document.getElementById("drp_ordr");
        var selectedText = dc.options[dc.selectedIndex].text;
        document.getElementById("txt_ordr_val").value = selectedText;
        
        
                var typ_id=$('#drp_type').val();
                var id=$(this).val();
                $('#drp_itm').html('');

                var html = '';
                html += '<option value = "0" selected> ------ Select ------ </option>';

                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url : "<?php echo base_url(); ?>stores/stores_controller/epl_get_selected_order_details",
                    data : "type_id="+typ_id+"&ordr_id="+id,                                       
                    success: function(msg){                        
                        var i;
                        for(i=0; i<msg.length; i++){
                            html += '<option title='+msg[i].ItemName+' value='+msg[i].EIDID+'>'+msg[i].ItemName+'</option>';
                        }
                        $('#drp_itm').html(html);
                    }
                });               

                return false;
        });
        
    });

    function calVolume() {
        var bnum=$('#txt_bnum').val();
        var len=$('#txt_l').val();
        var wid=$('#txt_w').val();
        var hei=$('#txt_h').val();        

        var vol = (len * wid * hei).toFixed(4);
        var totvol = (bnum * len * wid * hei).toFixed(4);

        $('#txt_vol').val(vol);
        $('#txt_tvol').val(totvol);
    }
    
    function calWeight() {
        var bnum=$('#txt_bnum').val();
        var gw=$('#txt_gw').val();        
        var wei = (bnum * gw).toFixed(4);
        $('#txt_tgw').val(wei);
    }
    
    function addRow() {

        var ordrid=$('#drp_ordr').val();
        
        var itmid=$('#drp_itm').val();        
        var drp_itm = document.getElementById('drp_itm');
        var itmtxt=drp_itm.options[drp_itm.selectedIndex].text;
        
        var itm_nm=$('#txt_itm').val();        
        var itmqty=$('#txt_qty').val();
        var brange=$('#txt_brange').val();
        var bnum=$('#txt_bnum').val();
        var bl=$('#txt_l').val();
        var bw=$('#txt_w').val();
        var bh=$('#txt_h').val();
        var vol=$('#txt_vol').val();
        var tvol=$('#txt_tvol').val();
        var gw=$('#txt_gw').val();
        var tgw=$('#txt_tgw').val();
        
        if (itmqty != 0 && itmqty != '' && bnum != 0 && bnum != ''
            && bl != 0 && bl != '' && bw != 0 && bw != '' && bh != 0 && bh != ''
            && vol != 0 && vol != '' && tvol != 0 && tvol != ''
            && gw != 0 && gw != '' && tgw != 0 && tgw != ''){
        
            var itemid = 0;
            var itemname = '';
            if (itmtxt == '------ Select ------'){itemid= 0; itemname = itm_nm;} else {itemid= itmid; itemname = itmtxt;}

            var table = document.getElementById('trtbl');

            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "text";
            element1.name = "txtOrderID[]";
            element1.value = ordrid;
            element1.style.width = '100%';
            cell1.appendChild(element1);
            cell1.style.display = "none";
            cell1.style.width = '5%';

            var cell2 = row.insertCell(1);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = "txtItemID[]";
            element2.value = itemid;
            element2.style.width = '100%';
            cell2.appendChild(element2);
            cell2.style.display = "none";
            cell2.style.width = '5%';

            var cell3 = row.insertCell(2);
            var element3 = document.createElement("input");
            element3.type = "text";
            element3.name = "txtItemName[]";
            element3.value = itemname;
            element3.style.width = "100%";
            cell3.appendChild(element3);
            cell3.style.width = "15%";

            var cell4 = row.insertCell(3);
            var element4 = document.createElement("input");
            element4.type = "text";
            element4.name = "txtItemQty[]";
            element4.value = itmqty;
            element4.style.width = '100%';
            cell4.appendChild(element4);
            cell4.style.width = '5%';

            var cell5 = row.insertCell(4);
            var element5 = document.createElement("input");
            element5.type = "text";
            element5.name = "txtBoxRange[]";
            element5.value = brange;
            element5.style.width = '100%';
            element5.readOnly = true;
            cell5.appendChild(element5);
            cell5.style.width = '5%';

            var cell6 = row.insertCell(5);
            var element6 = document.createElement("input");
            element6.type = "text";
            element6.name = "txtBoxNumber[]";
            element6.value = bnum;
            element6.style.width = '100%';
            element6.readOnly = true;
            cell6.appendChild(element6);
            cell6.style.width = '5%';

            var cell7 = row.insertCell(6);
            var element7 = document.createElement("input");
            element7.type = "text";
            element7.name = "txtBoxLength[]";
            element7.value = bl;
            element7.style.width = '100%';
            element7.readOnly = true;
            cell7.appendChild(element7);
            cell7.style.width = '5%';

            var cell8 = row.insertCell(7);
            var element8 = document.createElement("input");
            element8.type = "text";
            element8.name = "txtBoxWidth[]";
            element8.value = bw;
            element8.style.width = '100%';
            element8.readOnly = true;
            cell8.appendChild(element8);
            cell8.style.width = '5%';

            var cell9 = row.insertCell(8);
            var element9 = document.createElement("input");
            element9.type = "text";
            element9.name = "txtBoxHeigth[]";
            element9.value = bh;
            element9.style.width = '100%';
            element9.readOnly = true;
            cell9.appendChild(element9);
            cell9.style.width = '5%';        

            var cell10 = row.insertCell(9);
            var element10 = document.createElement("input");
            element10.type = "text";
            element10.name = "txtBoxVolume[]";
            element10.value = vol;
            element10.style.width = '100%';
            element10.readOnly = true;
            cell10.appendChild(element10);
            cell10.style.width = '10%';

            var cell11 = row.insertCell(10);
            var element11 = document.createElement("input");
            element11.type = "text";
            element11.name = "txtTotalVolume[]";
            element11.value = tvol;
            element11.style.width = '100%';
            element11.readOnly = true;
            cell11.appendChild(element11);
            cell11.style.width = '10%';        

            var cell12 = row.insertCell(11);
            var element12 = document.createElement("input");
            element12.type = "text";
            element12.name = "txtGrossWeigth[]";
            element12.value = gw;
            element12.style.width = '100%';
            element12.readOnly = true;
            cell12.appendChild(element12);
            cell12.style.width = '10%';        

            var cell13 = row.insertCell(12);
            var element13 = document.createElement("input");
            element13.type = "text";
            element13.name = "txtTotalGrossWeigth[]";
            element13.value = tgw;
            element13.style.width = '100%';
            element13.readOnly = true;
            cell13.appendChild(element13);
            cell13.style.width = '10%';

            var cell14 = row.insertCell(13);
            var element14 = document.createElement("a");
            element14.setAttribute("href", "#");
            element14.name = "hrefremove[]";
            element14.setAttribute('onclick', 'deleteRow();');
            var linkText = document.createTextNode("Remove");
            element14.appendChild(linkText);
            element14.style.width = '100%';
            cell14.appendChild(element14);
            cell14.style.width = '5%';
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


    function confirmation(){
        var r=confirm("Are you sure you want to confirm?");
        if (r==true){
            return true;
        }
        else{
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
      <h2 align="center" class="title"> Export Packing List </h2>
    </div>
  </div>
  
  <div style="clear: both; padding-left:10px;">
   <div align="center" style=" color:#F00; background-color:#FFD9DA;width: 30%; margin-left:33%; border-radius:5px;"><b>
        <?php if (isset($msg)) { echo $msg; } ?>
      </b></div>
  
    <form method="post" name="rd_form" id="rd_form" action="<?php echo base_url(); ?>stores/stores_controller/export_packing_list/" OnSubmit="return confirmation();">
      <div align="center">
        <table width="100%" border="0">
            <tr>
              <td width="120"><strong> Type :</strong></td>
              <td>
                  <select style="width:250px;height:25px;float:left;" name="drp_type" id="drp_type">
                        <option value = "" selected> ------ Select ------ </option>
                        <?php foreach($shipment_type as $key => $value) { ?>
                          <option title="<?php echo htmlspecialchars($value); ?>" value="<?php echo $key; ?>"> <?php echo htmlspecialchars($value); ?> </option>
                        <?php } ?>
                  </select>
                  <input type='hidden' id='txt_type_val' name='txt_type_val' />
              </td>            
              <td width="120"><strong> Order :</strong></td>
              <td>
                  <select style="width:250px;height:25px;float:left;" name="drp_ordr" id="drp_ordr" >
                        <option value = "0" selected> ------ Select ------ </option>                      
                  </select>
                  <input type='hidden' id='txt_ordr_val' name='txt_ordr_val' />
              </td>
            </tr>
            <tr>
              <td width="120"><strong> Customer Name :</strong></td>
              <td colspan="3"><input style="width:725px;" type="text" name="txt_cname" id="txt_cname">&nbsp;</td>
            </tr>          
            <tr>&nbsp;</tr>
            <tr>&nbsp;</tr>
        </table>
      </div>
      <div align="center">
        <table width="100%" border="0" bgcolor="#F0FFEA">
            <tr>
              <td width="100"><strong> Item :</strong></td>            
              <td colspan="3">
                  <select style="width:500px;height:25px;float:left;" name="drp_itm" id="drp_itm" >
                        <option value = "0" selected> ------ Select ------ </option>                      
                  </select>
                  <input type='hidden' id='txt_itm_val' name='txt_itm_val' />
                  <input style="width:500px;" type="text" name="txt_itm" id="txt_itm">
              </td>
              <td width="100"><strong> Qty :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_qty" id="txt_qty" value="0" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
            </tr>
            <tr>
              <td width="100"><strong> Box Range :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_brange" id="txt_brange">&nbsp;</td>
              <td width="100"><strong> Number of Boxes :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_bnum" id="txt_bnum" value="0" onchange="calVolume();calWeight();" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
            </tr>
            <tr>
              <td width="100"><strong> Length :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_l" id="txt_l" value="0" onchange="calVolume();" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
              <td width="100"><strong> Width :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_w" id="txt_w" value="0" onchange="calVolume();" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
              <td width="100"><strong> Height :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_h" id="txt_h" value="0" onchange="calVolume();" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
            </tr>
            <tr>
              <td width="100"><strong> Volume :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_vol" id="txt_vol" value="0">&nbsp;</td>
              <td width="100"><strong> Total Volume :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_tvol" id="txt_tvol" value="0">&nbsp;</td>
            </tr>
            <tr>
              <td width="100"><strong> Box Gross Weight :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_gw" id="txt_gw" value="0" onchange="calWeight();" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
              <td width="100"><strong> Total Gross Weight :</strong></td>
              <td><input style="width:100px;" type="text" name="txt_tgw" id="txt_tgw" value="0" onkeypress="return isNumberKey(event,this)">&nbsp;</td>
              <td><div align="center"><input type="button" name="btn_add" id="btn_add" value="Add" OnClick="addRow();"></div></td>
            </tr>          
            <tr>&nbsp;</tr>
        </table>
          <br><br>
      <div align="center">
      <div id='TrTableDiv'>
      <table id='trtbl' width="100%" border="0">
        <tr class="table_head">                                                
            <td style="background-color:#CCC;width:5%;display:none;" class="border_botom border_top border_right">&nbsp;&nbsp; OrderID &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:5%;display:none;" class="border_botom border_top border_right">&nbsp;&nbsp; ItemID &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:15%" class="border_botom border_top border_right">&nbsp;&nbsp; Name &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:5%" class="border_botom border_top border_right">&nbsp;&nbsp; Qty &nbsp;</td>
            <td style="background-color:#CCC;width:5%" class="border_botom border_top border_right">&nbsp;&nbsp; Box Range &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:5%" class="border_botom border_top border_right">&nbsp;&nbsp; Box No. &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:5%" class="border_botom border_top border_right">&nbsp;&nbsp; Length &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:5%" class="border_botom border_top border_right">&nbsp;&nbsp; Width &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:5%" class="border_botom border_top border_right">&nbsp;&nbsp; Height &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Box Volume &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Total Volume &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Box Weight &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:10%" class="border_botom border_top border_right">&nbsp;&nbsp; Total Weight &nbsp;&nbsp;</td>
            <td style="background-color:#CCC;width:5%" class="border_botom border_top border_right"></td>
        </tr>
        <tr><td colspan="10">&nbsp;</td></tr>        
      </table>
      </div>
      </div>
          &nbsp;<br>
          &nbsp;<br>
      <div align="center">
          <button type="Submit" name="Submit" id="Submit" value="" style="height:20px;width:100px;">Submit</button>
      </div>
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
</body></html>
