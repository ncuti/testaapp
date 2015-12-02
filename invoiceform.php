 <div class="row">
    <div class="col-lg-12">
        <div class="text-right">
        <label class="label label-info "> After the Invoice Saving click This Button</label>
        <a href="projectview.php">
        <button class="btn btn-warning">FINISH</button>
        </a>
        </div>
    </div>
</div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Invoice Registration Form
                        </div>
<FORM METHOD="POST"   ACTION="addinvoice.php"  enctype="multipart/form-data">
<table align="center" class=" table ">
      <tr>
            <td class="field-caption" >
                  <div align="left"> <span style="font-size: 14px">
                        <Strong>Amount </Strong>
                              </span>
                  </div>
            </td>
      
            <td>
        <INPUT NAME="amount" type="text" id="txtphone" class="form-control" value=""required='required' placeholder="amount"  onchange="checkno()">
            
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Destination</Strong>
                </span>
        </div>
            </td>
      
            <td>
                <select class="form-control" name="dest">
                    <option value="construictor">construictor</option>
                    <option value="supervisor">supervisor</option>
                </select>
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Payment Date</Strong>
                </span>
        </div>
            </td>
      
            <td>
 <INPUT type="date" name="pay" class="form-control" value=""required='required' placeholder="YYY-MM-DD"/>
            </td>
      </tr>
      <tr>
            <td align='left'>
                <INPUT TYPE="submit" name='addUser' value='Save' class="btn btn-success">
            </td>
      </tr>
</table>
</FORM>
                    </div>
                </div>
            </div>
