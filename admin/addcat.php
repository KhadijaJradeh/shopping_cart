<?php 
  include "..\include\header.php";
  include "..\include\admin.php";  

if(isset($_POST['submitMain']))
{
  $name=$_POST['name'];
  $code=$_POST['code'];
  $description=$_POST['description'];
  $image=$_POST['image_name'];
  $price=$_POST['price'];
  if($name && $code && $image && $price && $description)
  {
    addProduct($name,$code,$image,$price,$description);
  }
}
?>
      <div id="middletxtheader">Category Page</div>
      <div id="middletxt1">
        <p>Enter the details of  Product</p>
      </div>
      <div id="middletxt">
        <form action="" method="post" name="frm_addcat" id="frm_addcat" enctype="multipart/form-data" class="form">
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
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Name : </strong></div></td>
                    <td width="128"><input class="form-control" type="textbox" name="name" id="name" maxlength="30"  value="" style="width:176px;"
                                           onChange="document.getElementById('name').value=trim(this.value);"/>
                  </tr>
                  <tr>
                    <td><div align="right"><strong><font color="#FF0000">*</font>Code : </strong></div></td>
                    <td width="128"><input class="form-control" type="textbox" name="code" id="code"  value="" maxlength="30" style="width:176px;"
                                      onchange="document.getElementById('code').value=trim(this.value);"/></td>
                  </tr>
                   <tr>
                    <td><div align="right"><font color="#FF0000">*</font><strong>Category Description :</strong></div>
                      <p align="right" class="example">(Maximum 100 characters) </p></td>
                    <td colspan="4"><textarea class="form-control" name="description" id="description" wrap="physical" cols="45" rows="5" title="Category Description Should not excide 100 characters!!" onchange=" document.getElementById('description').value=trim(this.value);"></textarea><br> Characters Remaining: <span id="charsLeft1">100</span>
				  </td>
                  </tr>
		   <tr>
                    <td><div align="right"><strong><font color="#FF0000">*</font>Image name: </strong></div></td>
                    <td width="128"><input class="form-control" type="textbox" name="image_name" id="image_name"  value="" maxlength="30" style="width:176px;" onchange="document.getElementById('image_name').value=trim(this.value);"/></td>
                  </tr>
			 <tr>
                    <td><div align="right"><strong><font color="#FF0000">*</font>Price: </strong></div></td>
                    <td width="128"><input class="form-control" type="textbox" name="price" id="price"  value="" maxlength="30" style="width:176px;" onchange="document.getElementById('price').value=trim(this.value);"/></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3" >&nbsp;&nbsp;&nbsp;<!--Onclick="return done(this.form);"-->
                      <input type="submit"  id="submitMain" name="submitMain" value="Add" Onclick="return check(this.form);" > 
                      &nbsp;&nbsp;&nbsp;
                      <input type="reset" id="subintr" name="subintr" value="Reset"  /></td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </form>
        <!-- end #middletxt -->
      </div>
    </div>
    <!-- end #mainContent -->
  </div>

  <!-- end #container -->
</div>