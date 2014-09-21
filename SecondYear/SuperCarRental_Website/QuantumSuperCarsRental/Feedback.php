<meta charset="UTF-16">
<!DOCTYPE html>
<html>
	<head>
		
		<title>Survey</title>
		
		<style type="text/css">		
		body {font-family: arial; color: black}
		table{text-align:center;}
		#col1,#col2,#col3,#col4{width: 100px; vertical-align:top}
		#r1,#r2{text-align:left}
		h2 {text-align:center}
		</style>
		
	</head>
	<body style="width: 980px; height: 2469px; position: absolute;">
		<h2 style="width: 458px; height: 32px; position: absolute; left: 263; top: 11px">A survey about this web page</h2><br/><br/>
		<form name="survey" method="post" action="mailto:miodasso@gmail.com" style="width: 458px; height: 2266px; position: absolute; left: 261; top: 100">
		
			<b>How often do you visit my site?</b><br/>
			<input type="radio" name="howoftenvisit" value="every_day" /> Every day<br/>
			<input type="radio" name="howoftenvisit" value="several_times_a_week" /> Several times a week<br/>
			<input type="radio" name="howoftenvisit" value="once_a_week" /> About once a week<br/>
			<input type="radio" name="howoftenvisit" value="several_times_a_month" /> Several times a month<br/>
			<input type="radio" name="howoftenvisit" value="once_a_month" /> About once a month<br/>
			<input type="radio" name="howoftenvisit" value="less_than_once_a_month" /> Less than once a month<br/>
			<input type="radio" name="howoftenvisit" value="first_visit" /> This is my first visit here<br/><br/>
			<hr/><br/>
			<b>How like are you to:</b><br/>
			<table>
			<tr>
			<td></td>
			<td id="col1">Very Likely</td>
			<td id="col2">Somewhat<br/>Likely</td>
			<td id="col3">Somewhat<br/>Unlikely</td>
			<td id="col4">Not At All Likely</td>
			</tr>
			<tr>
			<td id="r1">Return to this Web site?</td>
			<td><input type="radio" name="returnToThisSite" value="very_likely" /></td>
			<td><input type="radio" name="returnToThisSite" value="somewhat_likely" /></td>
			<td><input type="radio" name="returnToThisSite" value="somewhat_unlikely" /></td>
			<td><input type="radio" name="returnToThisSite" value="not_at_all_likely" /></td>
			</tr>
			<tr>
			<td id="r2">Recommend this Web site?</td>
			<td><input type="radio" name="recommendThisSite" value="very_likely" /></td>
			<td><input type="radio" name="recommendThisSite" value="somewhat_likely" /></td>
			<td><input type="radio" name="recommendThisSite" value="somewhat_unlikely" /></td>
			<td><input type="radio" name="recommendThisSite" value="not_at_all_likely" /></td>
			</tr>
			</table><br/>
			<hr/><br/>
			<b>What features had influenced your decision to continue using this website?</b><br/>
			<textarea rows="5" cols="40" wrap="soft" name="whycontinueusing"></textarea><br/><br/>
			<hr/><br/>
			<b>What is it about this site that you wold most like to see improved?</b><br/>
			<textarea rows="5" cols="40" wrap="soft" name="whattoimprove"></textarea><br/><br/>
			<hr/><br/>
			<b>What changes or additional features would you suggest for this website?</b><br/>
			<textarea rows="5" cols="40" wrap="soft" name="suggestions"></textarea><br/><br/>
			<hr/><br/>			
			<b>In a typical week, how many hours do you spend working on this website?</b><br/>
			<input type="radio" name="spendhoursaweek" value="0_1" /> 0 to 1<br/>
			<input type="radio" name="spendhoursaweek" value="1_2" /> 1 to 2<br/>
			<input type="radio" name="spendhoursaweek" value="2_4" /> 2 to 4<br/>
			<input type="radio" name="spendhoursaweek" value="4_10" /> 4 to 10<br/>
			<input type="radio" name="spendhoursaweek" value="more_than_10" /> More than 10<br/><br/>
			<hr/><br/>
			<b>How did you first hear about this site?</b><br/>
			<input type="radio" name="howdidyouhear" value="search_engine" /> Search engine<br/>
			<input type="radio" name="howdidyouhear" value="another_website" /> Another web site<br/>
			<input type="radio" name="howdidyouhear" value="newspaper_magazine_article" /> Newspaper/magazine article<br/>
			<input type="radio" name="howdidyouhear" value="friend_business_associate" /> Friend or business associate<br/>
			<input type="radio" name="howdidyouhear" value="advertisment" /> Advertisment<br/>
			<input type="radio" name="howdidyouhear" value="dont_know" /> Don't know/don't remember<br/>
			<input type="radio" name="howdidyouhear" onclick="this.form.elements['text'].disabled = !this.checked" /> Other <input type="text" name="text" disabled="disabled"/><br/><br/>
			<hr/><br/>
			
			<input type="submit" value="Submit" />
			<input type="reset" value="Clear" />
			<input type= "button" onclick="javascript:window.location.href='quantum_super_cars.php'"  value= "Return"><br/><br/>
			<hr/><br/>
			<b>Thank you for taking the time to give me your feedback.</b><br/><br/>
			<hr/><br/>
		</form>
	</body>
</html>