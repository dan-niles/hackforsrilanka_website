<?php
//$this->load->view('stores/inc/header');
?>

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
    
  <div id="content" style="width:100%; ">
    <div class="post">
      <h2 align="right" class="title">&nbsp;</h2>
      <h2 align="center" class="title" onclick="HideForm();"> Packing List - <?php echo $plh[0]->EPLHID; ?></h2>
    </div>
  </div>
  
  <div id="divform">
    <form method="post" name="rd_form" id="rd_form" action="<?php echo base_url(); ?>stores/stores_controller/view_export_packing_list/">
      <div align="center">
        <table width="60%" border="0">
            <tr>
              <td width="120"><strong> Packing List :</strong></td>
              <td>
                  <select style="width:250px;height:25px;float:left;" name="drp_pl" id="drp_pl">
                        <option value = "" selected> ------ Select ------ </option>
                        <?php foreach($pl as $plist) { ?>
                          <option title="<?php echo htmlspecialchars($plist->EPLHID); ?>" value="<?php echo $plist->EPLHID; ?>"> <?php echo htmlspecialchars($plist->EPLHID);echo ' - ';echo htmlspecialchars($plist->Customer) ?> </option>
                        <?php } ?>
                  </select>                  
              </td>
              <td width="120">&nbsp;</td>
              <td><button type="Submit" name="Submit" id="Submit" value="" style="height:20px;width:100px;">View</button></td>
            </tr>            
        </table>
      </div>      
    </form>  
  </div>
    
  <div align="center">
        <table width="80%" border="0">
            <tr>
              <td width="150"><strong> PLID :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->EPLHID; ?></td>            
              <td width="150"><strong> Type :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->Type; ?></td>
            </tr>
            <tr>
              <td width="150"><strong> Customer Name :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->Customer; ?></td>
              <td width="150"><strong> Created Date :</strong></td>
              <td>&nbsp;<?php echo $plh[0]->CreatedDate; ?></td>
            </tr>          
            <tr>&nbsp;</tr>
            <tr>&nbsp;</tr>
        </table>
   </div>
    <br><br>
  <div align="center">
        <table width="100%" border="0" rules="rows">
            <tr class="table_head">                
                <td style="background-color:#CCC;width:15%">&nbsp;&nbsp; Name &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:5%">&nbsp;&nbsp; Qty &nbsp;</td>
                <td style="background-color:#CCC;width:5%">&nbsp;&nbsp; Box Range &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:5%">&nbsp;&nbsp; Box No. &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:5%">&nbsp;&nbsp; Length &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:5%">&nbsp;&nbsp; Width &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:5%">&nbsp;&nbsp; Height &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%">&nbsp;&nbsp; Box Volume &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%">&nbsp;&nbsp; Total Volume &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%">&nbsp;&nbsp; Box Weight &nbsp;&nbsp;</td>
                <td style="background-color:#CCC;width:10%">&nbsp;&nbsp; Total Weight &nbsp;&nbsp;</td>                
            </tr>
            <?php
                $sum_boxes=0;$sum_tot_vol=0;$sum_gross_wei=0;
                foreach ($pld as $pd) {
                    $sum_boxes+= $pd->BoxNumber;
                    $sum_tot_vol+= $pd->TotalBoxVolume;
                    $sum_gross_wei+= $pd->TotalGrossWeigth;
            ?>
                <tr>                
                    <td style="width:15%"><?php echo $pd->ItemName; ?></td>
                    <td style="width:5%"><?php echo $pd->ItemQty; ?></td>
                    <td style="width:5%"><?php echo $pd->BoxRange; ?></td>
                    <td style="width:5%"><?php echo $pd->BoxNumber; ?></td>
                    <td style="width:5%"><?php echo $pd->BoxLength; ?></td>
                    <td style="width:5%"><?php echo $pd->BoxWidth; ?></td>
                    <td style="width:5%"><?php echo $pd->BoxHeight; ?></td>
                    <td style="width:10%"><?php echo $pd->BoxVolume; ?></td>
                    <td style="width:10%"><?php echo $pd->TotalBoxVolume; ?></td>
                    <td style="width:10%"><?php echo $pd->GrossWeigth; ?></td>
                    <td style="width:10%"><?php echo $pd->TotalGrossWeigth; ?></td>                
                </tr>
            <?php } ?>
                <tr>                
                    <td style="width:15%"></td>
                    <td style="width:5%"></td>
                    <td style="width:5%"></td>
                    <td style="width:5%"><span style="border-bottom:double black;"><strong><?php echo $sum_boxes; ?></strong></span></td>
                    <td style="width:5%"></td>
                    <td style="width:5%"></td>
                    <td style="width:5%"></td>
                    <td style="width:10%"></td>
                    <td style="width:10%"><span style="border-bottom:double black;"><strong><?php echo $sum_tot_vol; ?></strong></span></td>
                    <td style="width:10%"></td>
                    <td style="width:10%"><span style="border-bottom:double black;"><strong><?php echo $sum_gross_wei; ?></strong></span></td>                
                </tr>
        </table>
   </div>
    <br><br>
   <div align="left">
        <table width="30%" border="0">
            <tr>
              <td width="10"><strong> Signature:</strong></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;..........................&nbsp;&nbsp;&nbsp;&nbsp;</td>            
              <td width="150"><strong> Date:</strong></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;..........................&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>            
        </table>
   </div>
</div>
<!-- end #page --> 
<!-- end #footer -->

<div align="center">
  <?php 
//$this->load->view('inc/footer.php'); 
?>
</div>
</body></html>
