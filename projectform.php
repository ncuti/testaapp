 
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Project Registration Form
                        </div>
<FORM METHOD="POST"   ACTION="addproject.php"  enctype="multipart/form-data">
<table align="center" class=" table ">
      <tr> <td class="field-caption" >
            <div align="left">
                <span style="font-size: 14px">
                        <Strong>Name</Strong>
                </span>
            </div>
            </td>
 <td><input name="name" id="phone" type="text" class="form-control" value="" required='required' placeholder="Project Name"/>
     </td>
</tr>
      
 <tr> <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Engineer Of the Project</Strong>
                </span>
        </div>
</td> <td>
 <select name="engineer" class="form-control">
    <?php
    $jquery1="SELECT * from user where Status='Engineer'  order by Firstname";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
   while( $jresult=mysql_fetch_array($jsend1))
   {
      ?>
   
<option value="<?php echo $jresult['user_Id']?>"><?php echo $jresult['Firstname']." ".$jresult['Lastname']   ?></option>
<?php
}
?>
</select>
   
</td>
</tr>     
      
<tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Founders From</Strong>
                </span>
        </div>
            </td>
         
            <td>
        <input name="founder" class="form-control" id="phone" type="text" class="dc-input" value=""required='required' placeholder="example: UN, Woldbank, ..."/>
       
            </td>
      </tr>
<tr> <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Constructor Company</Strong>
                </span>
        </div>
</td> <td>
  <input name="constructor" class="form-control" id="phone" type="text" class="dc-input" value=""required='required' placeholder="name"/>
       
</td>
</tr>

<tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Supervisor Company</Strong>
                </span>
        </div>
            </td>
      
            <td>
        <input name="supervisor" type="text" class="form-control" id="phone"  value=""required='required' placeholder="name" />
       
            </td>
      </tr>
      
      
      <tr>
            <td class="field-caption" >
                  <div align="left"> <span style="font-size: 14px">
                        <Strong>Total Budget </Strong>
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
            <td class="field-caption" colspan="2" > <div align="left"><span
style="font-size: 14px">
<Strong>Project Description </Strong> </span>
</div>
</td></tr><tr>
        <td colspan="2">
        <textarea name="desc"   placeholder=" write here The Descrption of the Project" class="form-control" required='required'></textarea>
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
