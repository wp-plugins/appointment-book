<?php
        $old=$this->options['new_date'];  // Get database date
        $newdate=date("d-m-Y", strtotime($old));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
jQuery(document).ready(function($){

var unavailableDates = ["<?php echo $newdate;?>"];
    function unavailable(date) {  // Hide sunday and holiday days
        var day = date.getDay();
        dmy = ("0"+date.getDate()).slice(-2) + "-" + ("0"+(date.getMonth()+1)).slice(-2) + "-" + date.getFullYear();
        if ($.inArray(dmy, unavailableDates) == -1) {
            return [true, ""];
            //return [(day > 0), ''];
        } else {
            return [false, "", "Unavailable"];
        }
    }

$( "#dtpicker" ).datepicker({
      changeMonth: true,//this option for allowing user to select month
      changeYear: true, //this option for allowing user to select from year range
      beforeShowDay: unavailable,
      minDate:0
    });
});
</script>
<title>New Appointment</title>
</head>
<body>
<div class="wrap">
<form id='frm' name='frm' action="" method='POST'>
<h2>Add Appointment</h2>
<table>
<tr>
    <td><label for="dtpicker">Date of Appointment</label></td>
    <td><input type="text" id="dtpicker" name="dtpicker"/></td>
    <span id="erdate" style="display:none; color:#F00">*Date must be required!</span>
    <span id="errdate" style="display:none; color:#F00">*Date must be today date!</span>
</tr>
<tr>
    <td><label for="txtappt">Appointment Name</label></td>
    <td><input type="text" id="txtappt" name="txtappt"/></td>
    <span id="erappt" style="display:none; color:#F00">*Appointment name required!</span>
    <span id="erappt1" style="display:none; color:#F00">*Must be string format!</span>
</tr>
<tr>
    <td><label for="txtemail">Email Address</label></td>
    <td><input type="email" id="txtemail" name="txtemail"/></td>
    <span id="eremail" style="display:none; color:#F00">*Please check the email id!</span>
</tr>
<tr>
    <td><label for="txtphone">Phone Number</label></td>
    <td><input type="text" id="txtphone" name="txtphone"/></td>
</tr>
<tr>
    <td></td>
    <td><input type="button" id="btnadd" name="btnadd" value="Add" class="button-primary"></td>
</tr>

<span id="error" style="color:#F00"></span>
<span id="success1" style="color:green"></span>
</table>
</form>
</div>
</body>
</html>