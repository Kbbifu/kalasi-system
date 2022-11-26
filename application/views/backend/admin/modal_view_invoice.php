<?php
$edit_data = $this->db->get_where('invoice', array('invoice_id' => $param2))->result_array();
foreach ($edit_data as $row):
?>
<center>
    <a onClick="PrintElem('#invoice_print')" class="btn btn-default btn-icon icon-left hidden-print pull-right">
        Imprimer Recu
        <i class="entypo-print"></i>
    </a>
</center>

    <br><br>

    <div id="invoice_print">
        <table width="100%" border="0">
            <tr>
                <td align="right">
                    <h5><?php echo ('Date Creation'); ?> : <?php echo date('d M,Y', $row['creation_timestamp']);?></h5>
                    <h5><?php echo ('Libellé'); ?> : <?php echo $row['title'];?></h5>
                    <h5><?php echo ('Description'); ?> : <?php echo $row['description'];?></h5>
                    <h5><?php echo ('Status'); ?> : <?php echo $row['status']; ?></h5>
                </td>
            </tr>
        </table>
        <hr>
        <table width="100%" border="0">    
            <tr>
                <td align="left"><h4><?php echo ('Payment à'); ?> </h4></td>
                <td align="right"><h4><?php echo ('Payer par'); ?> </h4></td>
            </tr>

            <tr>
                <td align="left" valign="top">
                    <?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?><br>
                    <?php echo $this->db->get_where('settings', array('type' => 'address'))->row()->description; ?><br>
                    <?php echo $this->db->get_where('settings', array('type' => 'phone'))->row()->description; ?><br>            
                </td>
                <td align="right" valign="top">
                    <?php echo $this->db->get_where('student', array('student_id' => $row['student_id']))->row()->name; ?><br>
                    <?php 
                        $class_id = $this->db->get_where('student' , array('student_id' => $row['student_id']))->row()->class_id;
                        echo ('Classe') . ' ' . $this->db->get_where('class', array('class_id' => $class_id))->row()->name;
                    ?><br>
                    
                </td>
            </tr>
        </table>
        <hr>

        <table width="100%" border="0">    
            <tr>
                <td align="right" width="80%"><?php echo ('Montant Total'); ?> :</td>
                <td align="right">CDF<?php echo $row['amount']; ?></td>
            </tr>
            <tr>
                <td align="right" width="80%"><h4><?php echo ('Montant Payé'); ?> :</h4></td>
                <td align="right"><h4>CDF<?php echo $row['amount_paid']; ?></h4></td>
            </tr>
            <?php if ($row['due'] != 0):?>
            <tr>
                <td align="right" width="80%"><h4><?php echo ('Reste'); ?> :</h4></td>
                <td align="right"><h4>CDF<?php echo $row['due']; ?></h4></td>
            </tr>
            <?php endif;?>
        </table>

        <hr>

        <!-- payment history -->
        <h4><?php echo ('Historique Payment'); ?></h4>
        <table class="table table-bordered table-hover" width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th><?php echo ('Date'); ?></th>
                    <th><?php echo ('Montant'); ?></th>
                    <th><?php echo ('Methode'); ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $payment_history = $this->db->get_where('payment', array('invoice_id' => $row['invoice_id']))->result_array();
                foreach ($payment_history as $row2):
                    ?>
                    <tr>
                        <td><?php echo date("d M, Y", strtotime($row2['jour'])); ?></td>
                        <td>CDF<?php echo $row2['amount']; ?></td>
                        <td>
                            <?php 
                                if ($row2['method'] == 1)
                                    echo ('Cash');
                                if ($row2['method'] == 2)
                                    echo ('Banque');
                                if ($row2['method'] == 3)
                                    echo ('Carte');
                              
                            ?>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        
        </table>
    </div>
<?php endforeach; ?>


<script type="text/javascript">

    // print invoice function
    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data)
    {
        var mywindow = window.open('', 'invoice', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Invoice</title>');
        mywindow.document.write('<link rel="stylesheet" href="assets/css/neon-theme.css" type="text/css" />');
        mywindow.document.write('<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>