<?php 
  include "..\include\header.php";   
  if(!empty($_SESSION["admin"]))
  {
      header("location:admloghome.php");
  }

  if(!empty($_POST['username']))
  {
    if(login($_POST['username'],$_POST['password']))
    {
      header("location:admloghome.php");
    }
    $error = "Wrong username or password";
  }
?>
 <script language="javascript">
  function check()
  {
   if(document.getElementById("username").value =="")
   {
    alert('Please Enter Admin name !!'); 
    document.getElementById("username").focus();
    return false;
   }
   if(document.getElementById("password").value =="")
   {
    alert('Please Enter password !!');
    document.getElementById("password").focus();
    return false;
   }
   if (isUcase(document.getElementById("username").value) == false || isUcase(document.getElementById("password").value) == false)
   {
    alert("Admin Name and Password not match!!");
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
    document.getElementById("username").focus();
    return false;
   }
  }
 </script>

  <div id="mainContent">
    <div id="mainContent1">
    <div id="middletxtheadermain">
      <div id="middletxtheader"></div>
      <?php
        if(isset($error))
        {
          echo "<h2 style='color:red'>$error</h2>";
        }
      ?>
      <div id="middletxt1">
      <h1>  <p>&nbsp Please Enter the Login Details.</p> </h1>
      </div>
      </div>
      <div id="middletxt">
        <form action="" method="post" name="frm_admlogin" id="frm_admlogin" enctype="multipart/form-data">
          <table width="100%" border=0>
            <!--<tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear"></th>
                  </tr>-->
	 <tr>
                 <td width="245" height="37"><div align="center"><strong><font color="#FF0000">*</font>Admin Name : </strong></div></td>
                 <td width="128"><input type="textbox" name="username" id="username" maxlength="20" style="width:176px;"
                                   onChange="document.getElementById('username').value=trim(this.value);"/>
                                   </td>
              </tr>
              <tr>
                 <td width="245" height="37"><div align="center"><strong><font color="#FF0000">*</font>Password : </strong></div></td>
                 <td width="128"><input type="password" name="password" id="password" maxlength="10" style="width:176px;"
                                   onChange="document.getElementById('password').value=trim(this.value);"/></td>
              </tr>
                  <tr>
                   <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="left"><font color="#FF0000">*</font><span class="style3"> Required  &nbsp; </span></div></td>
                  </tr>
             
              <tr>
                 <td colspan="3" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="submit" id="Login" name="submitMain" value="Login" Onclick="return check(this.form);" />
                 &nbsp;&nbsp;&nbsp;
                 </td>
              </tr>
              </table></td>
            </tr>
          </table>
        </form>

<?php
include "../include/footer.php";
?>