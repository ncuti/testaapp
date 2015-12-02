<div class="row">
                <div class="col-lg-12">
                    
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Destination</th>
                                            <th>Amount</th>
                                            <th>Payment Date</th>
                                        </tr>
                                    </thead>
                                     <tbody>
    <?php
    $jquery1="SELECT * from invoice where quart_id='$id' ";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
    while($jresult=mysql_fetch_array($jsend1))
    {
        
        echo"<tr>";
        echo"<td>".$jresult['destination']."</td>";
        echo"<td>".$jresult['amount']."</td>";
        echo"<td>".$jresult['payment_date']."</td>";
        echo"</tr>";
       
    }
?>
 </tbody>
</table>

   </div>
</div>