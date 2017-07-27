<html>
<head>
<title>
INDIAN WILDLIFE
</title>
<link href="zoo.css" type="text/css" rel="stylesheet">
</head>
<!--tbl1 start-->
    
    <table width="100%" border="0" cellpadding="0" cellspacing="0" height="36">
      <tbody><tr>
        <td width="30%" align="LEFT" background="image\hd-wildlife-tour-bg1.jpg" height="36">

<!--new head ends-->
        
        </td>
        <td width="70%" background="image\hd-wildlife-tour-bg1.jpg" height="36">

<!--top txt start-->
            
        </td>
      </tr>
    </tbody></table>

<!--tbl1 end-->
<!--tbl2 start-->
    
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td width="755"><nobr><img src="image\hd-wildlife-tour-img1.jpg" alt="India Wildlife Adventure" width="229" height="190"><img src="image\hd-wildlife-tour-img2.jpg" alt="India Wildlife Adventure" width="345" height="190"><img src="image\hd-wildlife-tour-img3.jpg" alt="India Wildlife Adventure" width="181" height="190"></nobr></td>
        <td width="50%" background="image\hd-wildlife-tour-bg2.jpg"><img src="image\hd-wildlife-tour-bg2.jpg" width="25" height="1"></td>
      </tr>
    </tbody></table>


<table vspace="0" width="100%" border="0" cellpadding="0" cellspacing="0" hspace="0">
      <tbody><tr>
        <td class="top-lnk" width="178" align="CENTER" background="image\Untitled1.jpg" height="29"><br>
        <a href="Home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="centuries.html">Senturies
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="">Trekking India</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="safari.php">Safari India</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <!-- <a href="">Gallery</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
        <a href="wild.php">Contact form</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      </td>
      </tr>
    </tbody></table>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
function validate_form(form)
{
	with(form)
	{
		if(txtarrival.value=="" || txtarrival.value==null)
		{
			alert("Plese enter Arrival");
			txtarrival.focus();
			return false;
		}
		if(tstyle.selectedIndex == 0)
		{
			alert("Please Select tour style!!");
			tstyle.focus();
			return false;
		}
		if(duration.selectedIndex == 0)
		{
			alert("enter duration");
			duration.focus();
			return false;
		}
		if(budget.selectedIndex == 0)
		{
			alert("Please Select budget!");
			budget.focus();
			return false;
		}
		if(txtname.value=="" || txtname.value==null)
		{
			alert("Plese enter name");
			txtname.focus();
			return false;
		}
		if(country.selectedIndex == 0)
		{
			alert("Please Select country!");
			country.focus();
			return false;
		}
		
	
	
		if(txtemail.value=="" || txtemail.value==NULL)
		{
			alert("Type email");
			return false;
		}
		if(txtphno.value.length!=10)
		{
			alert("Mobile No should be of 10 character!!") ;
			txtphno.focus();
			return false;
		}
		
		
		
		
		
		
	}
	
	return true;
}

function temail()
{
	var e=document.txtemail;
	if(e.value=="^[\\w-_\.]*[\\w-_\.]\@[\\w]\.+[\\w]+[\\w]$")
	{
		alert("plz enter in proper format");
		return false;

	}
	return true;
}
</script>
</head>

<body>
<form name="form" method="post" action="reg.php" onsubmit="return temail()">
<h2 align="center"><font color="#3333FF">CONTACT OUR TOUR PLANNER</h2></font>
<table width="443" border="2" align="center" bgcolor="#00FF99">
<h2
<tr>
      <td width="183" height="43" align="right">Arrival :(dd/mm/yyyy) </td>
      <td colspan="2" align="left">
        <input name="txtarrival" type="text" size="35" />
      </td>
    </tr>
    <tr>
      <td width="183" height="43" align="right">People: </td>
      <td colspan="2" align="left">
        <select name="aud" >
        	<option >Adult</option>
            <option >1</option>
                    	<option >2</option>
                                	<option >3</option>
                                            	<option >4</option>
                                                        	<option >5</option>
                                                                    	<option >6</option>
         </select>
      
      
      <select name="kid">
      <option >kid</option>
      <option >2</option>
                    	<option >3</option>
                                	<option >4</option>
                                            	<option >5</option>
      </td>
    </tr>
    <tr>
      <td width="183" height="43" align="right">Tour Style: </td>
      <td colspan="2" align="left">
        <select name="tstyle" >
        <option>-select--</option>
        	<option >Honey Moon</option>
            <option >Family vacatin</option>
                    	<option >Business Traveller</option>
                                	<option >Casual Vacation</option>
                                            	
         </select>
      </td>
      </tr>
      <tr>
      <td width="183" height="43" align="right">Duration: </td>
      <td colspan="2" align="left">
        <select name="duration" >
        <option >--select--</option>
        	<option >1-3 days</option>
            <option >4-8 days</option>
                    	<option >8-14 days</option>
                                	<option >2-3 weeks</option>
                                            	
         </select>
      </td>
      </tr>
      <tr>
      <td width="183" height="43" align="right">Budget: </td>
      <td colspan="2" align="left">
        <select name="budget" >
        <option >--select--</option>
        	<option >Economy</option>
            <option >Standard</option>
                    	<option >Luxury</option>
                                	
                                            	
         </select>
      </td>
      </tr>
      
      
      
    </table>
    
    <hr />
    <h2 align="center" ><font color="#3333FF">YOUR CONTACT INFORMATION</h2></font>
    <table border="2" align="center" width="443" bgcolor="#00FF99">
    <tr>
      <td width="183" height="43" align="right">Name : </td>
      <td colspan="2" align="left">
        <input name="txtname" type="text" size="35" />
      </td>
    </tr>
     <tr>
      <td width="183" height="43" align="right">Country: </td>
      <td colspan="2" align="left">
        <select name="country" >
        <option >--select--</option>
        	<option >india</option>
            <option >South Africa</option>
                    	<option >Canada</option>
                                	<option >France</option>
                                            	
         </select>
      </td>
      </tr>
       <tr>
      <td width="183" height="43" align="right">Email : </td>
      <td colspan="2" align="left">
        <input name="txtemail" type="text" size="35" />
      </td>
    </tr>
    
    <tr>
      <td width="183" height="43" align="right">Phone Numer: </td>
      <td colspan="2" align="left">
        <input name="txtphno" type="text" size="35" />
      </td>
    </tr>
    <tr>
      
      <td width="95" height="43" align="center" colspan="2"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" onClick="return validate_form(form)" />
      <input type="reset" name="Reset" id="button" value="Reset" /></td>
    </tr>
    </table>
    </form>
    
    
      
<br>
<br>
 

<!--Ind Foot start-->
    
    <table width="100%">
      <tbody><tr>
        <td align="right">Created by kush & Dhaval        </td>
      </tr>
      
    </tbody></table>

<!--Ind Foot end-->
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="36">
      <tbody><tr>
        <td width="30%" align="LEFT" background="image\hd-wildlife-tour-bg1.jpg" height="36">

<!--new head ends-->
        
        </td>
        <td width="70%" background="image\hd-wildlife-tour-bg1.jpg" height="36">

<!--top txt start-->
            
        </td>
      </tr>
    </tbody></table>

</body>
</html>