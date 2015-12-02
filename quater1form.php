 
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Quarter Registration Form
                        </div>
<FORM METHOD="POST"   ACTION="addquarter.php"  enctype="multipart/form-data">
<table align="center" class=" table ">
      <tr>
            <td class="field-caption" >
                  <div align="left"> <span style="font-size: 14px">
                        <Strong>Quater 1 Budget </Strong>
                              </span>
                  </div>
            </td>
      
            <td>
        <INPUT NAME="budget" type="text" id="txtphone" class="form-control" value=""required='required' placeholder="budget"  onchange="checkno()">
            
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Physical Progress</Strong>
                </span>
        </div>
            </td>
      
            <td>
<div class="form-group input-group">
 <INPUT type="text" class="form-control" name="phys" value=""required='required' placeholder="example: 5"/>
 <span class="input-group-addon">%</span>
</div>
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Starting date </Strong>
                </span>
        </div>
            </td>
      
            <td>
 <INPUT type="date" name="start" class="form-control" value=""required='required' placeholder="YYY-MM-DD"/>
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Endimg date </Strong>
                </span>
        </div>
            </td>
      
            <td>
 <INPUT type="date" name="end" class="form-control" value=""required='required' placeholder="YYY-MM-DD"/>
            </td>
      </tr>
      
      <tr>
           <td>
                <button type="reset" class="btn btn-danger">RESET</button>
            </td>
            <td align='left'>
                <INPUT TYPE="submit" name='addUser' value='REGISTER' class="btn btn-success">
            </td>
      </tr>
</table>
</FORM>
                    </div>
                </div>
            </div>
 </div>
