
<script type="text/javascript">

function HideForm() {
  var x = document.getElementById("divform");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
    
</script>

<div id="page" style="width:100%;padding:0px;">
  
    <div id="content" style="width:100%;">
        <div class="post">      
          <h2 align="center" class="title" onclick="HideForm();"> Export Packing List - <?php echo $plh[0]->EPLAHID; ?></h2>
        </div>
    </div>

    <div align="center"  id="divform">
        <form method="post" name="rd_form" id="rd_form" action="<?php echo base_url(); ?>gen_admin/gen_admin_controller/view_export_packing_list/">
          <div align="center">
          <table width="100%" border="0">
              <tr>
                <td width="100"><strong> Packing List :</strong></td>
                <td>
                    <select style="width:250px;height:25px;float:left;" name="drp_pl" id="drp_pl">
                        <option value = "" selected> ------ Select ------ </option>
                        <?php foreach($pl as $plist) { ?>
                          <option title="<?php echo htmlspecialchars($plist->EPLHID); ?>" value="<?php echo $plist->EPLHID; ?>"> <?php echo htmlspecialchars($plist->EPLHID);echo ' - ';echo htmlspecialchars($plist->Customer) ?> </option>
                        <?php } ?>
                    </select>
                </td>
                <td><button type="Submit" name="Submit" id="Submit" value="test" style="height:20px;width:100px;">View</button></td>
              </tr>
          </table>
          </div>
        </form>
    </div>
      
    <div align="center">
        <table width="100%" border="0">
            <tr>
              <td width="100"><strong> Invoice No :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->InvoiceNo; ?></td>
              <td width="100"><strong> Date :</strong></td>
              <td>&nbsp;<?php echo date('Y-m-d'); ?></td>
            </tr>
            <tr>
              <td width="100"><strong> Consigner :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->Consigner; ?></td>
              <td width="100"><strong> Consigner Bank Details :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->ConsignerBank; ?></td>
            </tr>
            <tr>&nbsp;</tr>
            <tr>
              <td width="100"><strong> Buyer / Notify Party :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->Buyer; ?></td>
              <td width="100"><strong> Consignee :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->Consignee; ?></td>
            </tr>          
            <tr>&nbsp;</tr>
            <tr>
              <td width="100"><strong> Terms of Payment :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->PaymentTerms; ?></td>
              <td width="100"><strong> Mode of Transport :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->TransportMethod; ?></td>
            </tr>          
            <tr>&nbsp;</tr>
            <tr>
              <td width="100"><strong> Port of <br>Loading :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->LoadingPort; ?></td>
              <td width="100"><strong> Port of Discharge :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->DischargePort; ?></td>
            </tr>          
            <tr>&nbsp;</tr>
            <tr>
              <td width="100"><strong> Country of Origin :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->OriginCountry; ?></td>
              <td width="100"><strong> Type of Packaging :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->PackagingType; ?></td>
            </tr>          
            <tr>&nbsp;</tr>
        </table>
    </div>
    
    <div align="center">
        <table id='trtbl' width="100%" border="0">
            <tr>
                <td style="background-color:#CCC;width:3%">&nbsp;&nbsp; Box No &nbsp;&nbsp;</td>              
                <td style="background-color:#CCC;width:10%">&nbsp;&nbsp; Item Name &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:5%">&nbsp;&nbsp; Sales Unit &nbsp;</td>
                <td style="background-color:#CCC;width:5%">&nbsp;&nbsp; Item Qty &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:5%">&nbsp;&nbsp; Number of Boxes &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:9%">&nbsp;&nbsp; Box Length &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:9%">&nbsp;&nbsp; Box Width &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:9%">&nbsp;&nbsp; Box Height &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:9%">&nbsp;&nbsp; Box Volume &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:9%">&nbsp;&nbsp; Total Volume &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%">&nbsp;&nbsp; Gross Weight &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%">&nbsp;&nbsp; Total Gross Weight &nbsp;&nbsp;</td>              
            </tr>
        </table>
  </div>
    
</div>

</body></html>
