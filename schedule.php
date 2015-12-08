<?php 
$metas['title'] = "The Centre's Schedule | Check Availability";
$metas['description'] = "Check the Availibility at The Centre in Waverly, IA.";
$metas['keywords'] = "The Centre, schedule, availabilty";
include_once 'header.php';
?>

<style>
input, textarea {
	float:right;
	width:150px;
}

form div {
	margin: 10px 10px;
	padding: 15px 10px;
	width: 250px;
}

#errMsg {
	padding: 15px 10px;
	background-image: none;
	display: none;
}
</style>

<section>
	<article>
		<aside>
			<h2>Submit Your Request</h2>
			
			<div id="errMsg" class="error">Please fill all required fields.</div>
			
			<form id="bookNow" action="mail.php" method="post" >
				<div id="valName">Name: <input type="text" name="Name" id="Name"></div>
				<div id="valPhone">Phone: <input type="text" name="Phone" id="Phone"></div>
				<div id="valEmail">Email: <input type="text" name="Email" id="Email"></div>
				<div id="valDate">Date: <input type="text" name="Date" id="Date"></div>
				<div id="valBegin">Begin Time: <input type="text" name="Begin_Time" id="Begin_Time"></div>
				<div id="valEnd">End Time: <input type="text" name="End_Time" id="End_Time"></div>
				<div id="valDesc">Event <br />Description: <textarea name="Event_Desc" id="Event_Desc"></textarea></div>
				<div><input type="submit" value="Book it!" style="width:100%;"></div>
			</form>
		</aside>

		<h1 style="font-size: inherit;">The Centre's Schedule</h1>

		<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;height=700&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=truevaluewaverly%40gmail.com&amp;color=%23A32929&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23060D5E&amp;ctz=America%2FChicago" style=" border-width:0 " width="585" height="700" frameborder="0" scrolling="no"></iframe>
	</article>
	
<script>
$("form").submit(function() {
	var isError = false;

	if($.trim($("#Name").val()) == "") {
		$("#valName").addClass("error");
		isError = true;
	}
	if($.trim($("#Phone").val()) == "") {
		$("#valPhone").addClass("error");
		isError = true;
	}

	if(isError) {
		$("#errMsg").fadeIn("slow");
		return false;
	}
});
</script>

</section>

<?php include_once 'footer.php'; ?>