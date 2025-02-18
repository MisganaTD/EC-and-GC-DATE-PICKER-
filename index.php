<html>
<head><title>Date Picker</title>
<!--- Now here use javascript and css -------->
<!--- javascript and css for E.C -------->
<link type="text/css" href="js/jquery.calendars.picker.css " rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.calendars.js"></script> 
<script type="text/javascript" src="js/jquery.calendars.plus.js"></script>
<script type="text/javascript" src="js/jquery.calendars.ethiopian-am.js"></script>
<script type="text/javascript" src="js/jquery.calendars.ethiopian.js"></script>
<script type="text/javascript" src="js/jquery.calendars.picker.js"></script> 
<script type="text/javascript">
function updateSelected(dates) {
	var jd = $.calendars.instance("ethiopian").newDate(dates[0].year(), dates[0].month(), dates[0].day()).toJD();
	var date1 = $.calendars.instance("ethiopian").fromJD(jd);
	("#sday").val(date1.day()); 
    $("#smonth").val(date1.month()); 
    $("#syear").val(date1.year()); 
	}
   $(function() {
	$("#registereddate").calendarsPicker($.extend({calendar: $.calendars.instance("ethiopian","en-GB"),
	 onSelect: updateSelected},$.calendars.picker.regional["en-GB"]));
	}); 
</script> 
<!--- javascript for G.C 
<script language="javascript" type="text/javascript" src="js/GCdatetimepicker.js"></script> ---->
</head>
<body>
<div style="background-color:AliceBlue;pading:5px;line-height:34px;text-align:center">
<h3><font color="green">Ethiopian and Gregorian Date calendar picker</font></h3>
<form name="myform" method="post" action="">
E.C Date: <input type="text" name="registereddate" id="registereddate" size="30px" readonly>

G.C Date: <input type="text" name="registerDate" id="registerDate" size="30px" readonly>
<a href="javascript:NewCal('registerDate','ddmmyyyy',false,24)">
<img src="cal.gif" width="16px" height="16px" alt="Pick a date"></a>

<input type="submit" name="submit" value="Register"/>
<input type="reset" name="reset" value="Reset"/>
</form>
</div>
</body>
</html>