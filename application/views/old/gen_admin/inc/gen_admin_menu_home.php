<style>
    .sf-menu a { margin-right:13px;}
</style>
<ul class="sf-menu">
    <li>
        <a href="../../../home.php" style="border-left:0px;">Home</a>
    </li>    
    <li class="current">
        <a href="#a">RR</a>
        <ul>
            <li class="current">
                <a href="#a">Urgent Products</a>
                <ul>
                    <li><a href="<?php echo base_url(); ?>warehouse/warehouse_controler/get_urgent_product">Add</a></li>
                </ul>
            <li><a href="<?php echo base_url(); ?>warehouse/warehouse_controler/create_rr">Create RR</a></li>
        </ul>
    </li>
    <li>
        <a href="#a">Stock Update</a>
        <ul>
            <li><a href="<?php echo base_url(); ?>warehouse/warehouse_controler/stock_update/raw">Raw materials</a></li>
            <li><a href="<?php echo base_url(); ?>warehouse/warehouse_controler/stock_update/packing">Packing materials</a></li>
        </ul>
    </li>    
    <li>
        <a href="<?php echo base_url(); ?>acc_receivable_controler/log_out">LogOut</a>
    </li>
</ul>