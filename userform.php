 
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Registration Form
                        </div>
<FORM METHOD="POST"   ACTION="adduser.php"  enctype="multipart/form-data">
<table align="center" class=" table ">
      <tr> <td class="field-caption" >
            <div align="left">
                <span style="font-size: 14px">
                        <Strong>Last Name</Strong>
                </span>
            </div>
            </td>
 <td><input name="lastname" id="phone" type="text" class="form-control" value="" required='required' placeholder="last name"/>
     </td>
</tr>
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>First Name</Strong>
                </span>
        </div>
            </td>
         
            <td>
        <input name="firstname" class="form-control" id="phone" type="text" class="dc-input" value=""required='required' placeholder="first name"/>
       
            </td>
      </tr>
      
      
      <tr>
              <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Gender </Strong>
                </span>
        </div>
            </td>
           
           
            <td class="field-caption" >
                       <div class="form-group">
                      
                       <label class="radio-inline">
                      <input type="radio" name="Gender" value="1">Male
                      </label>
                      <label class="radio-inline">
                      <input type="radio" name="Gender" value="0">Female
                      </label>
            </div>
        
            </td>
      </tr>
      
<tr> <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>User Status</Strong>
                </span>
        </div>
</td> <td>
 <select name="type" class="form-control">
           <option value="Cordinator">Cordinator</option>
           <option value="Engineer">Engineer</option>
</select>
   
</td>
</tr>

<tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Email </Strong>
                </span>
        </div>
            </td>
      
            <td>
        <input name="Email" type="email" class="form-control" id="phone"  value=""required='required' placeholder="example@yahoo.com" />
       
            </td>
      </tr>
      
      
      <tr>
            <td class="field-caption" >
                  <div align="left"> <span style="font-size: 14px">
                        <Strong>PassWord </Strong>
                              </span>
                  </div>
            </td>
      
            <td>
        <INPUT NAME="Password" id="passwoord" type="password" class="form-control" value=""required='required' placeholder="enter your password">
            
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>PassWord </Strong>
                </span>
        </div>
            </td>
      
            <td>
 <INPUT id="passwoord2" type="password" class="form-control" value=""required='required' placeholder="retype your password"
        onchange="return reload2(document.getElementById('passwoord').value, document.getElementById('passwoord2').value)">
    
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" > <div align="left"><span
style="font-size: 14px">
<Strong>Profile Picture </Strong> </span>
</div>
            </td>
        <td>
        <input name="picture" type="file" class="form-control"
        value=""/> 
            </td>
      </tr>

      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Phone Number </Strong>
                </span>
        </div>
            </td>
     
            <td>
 <INPUT name="Phone" id="txtphone" type="text" class="form-control" value=""required='required' placeholder="Phone Number" onchange="checkno()">
   
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
