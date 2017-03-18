<?php 
  include "..\include\header.php";
  include "..\include\admin.php";  

if(isset($_POST['submitMain']))
{
  $code=$_POST['code'];
  if(!empty($code))
  {
    deleteProduct($code);
  }
}
?>
      <div >
        <p>Enter the details of  Product</p>
      </div>
      
      <div id="middletxt">
        <form action="" method="post" name="frm_delcart" id="frm_delcart" enctype="multipart/form-data">
          <table width="100%" border=0>
            <tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear">Category Master</th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Mandatory	Fields &nbsp; </span></div></td>
                  </tr>
                  
                  <tr>
                    <td><div align="right"><strong><font color="#FF0000">*</font>Code : </strong></div></td>
                    <td width="128"><input class="form-control" type="textbox" name="code" id="code"  value="" maxlength="30" style="width:176px;"
                                      onchange="document.getElementById('code').value=trim(this.value);"/></td>
                  </tr>
                  
		  
			
                  <tr>
                    <td></td>
                    <td colspan="3" >&nbsp;&nbsp;&nbsp;<!--Onclick="return done(this.form);"-->
                      <input type="submit"  id="submitMain" name="submitMain" value="Delete" Onclick="return check(this.form);" > 
                      &nbsp;&nbsp;&nbsp;
                      <input type="reset" id="subintr" name="subintr" value="Reset"  /></td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </form>
        <!-- end #middletxt -->
      </div>
<?php
include "../include/footer.php";
?>