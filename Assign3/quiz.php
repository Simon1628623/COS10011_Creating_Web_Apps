<?php

require_once ("header.php");

?>

		<!-- MAIN BODY -->
	   
			<h1>
			Quiz (1 minute)
			</h1>
			
			<span id="timer"></span>
			<form  id="quiz" method="POST"  action="quiz_process.php"  novalidate="novalidate" >
				
					<div>
						<h2>Q1.What the purpose of user agent header files</h2>
						<br/>
						<!-- option circles to pick one or the other-->
						<input type="radio" name="question1" id="A" value="correct" />To identify browsers to load the specific website designed.
						<br/>
						<input type="radio" name="question1" id="B" value="wrong" />To use the internet
						<br/>
						<input type="radio" name="question1" id="C" value="wrong" />TO identify the user to load the specific website
					</div>
					
					<div>
						<br/>
						<h2>Q2.Which are real webbrowsers</h2>
						mozilla chrome<input type="checkbox" name="question2" id="mchrome" value="wrong" />
						<br/>
						Google Chrome<input type="checkbox" name="question2" id="chrome" value="correct" />
						<br/>
						Mozilla Firefox<input type="checkbox" name="question21" id="firefox" value="correct" />
						<br/>
						Safari<input type="checkbox" name="question22" id="safari" value="correct" />
						<br/>
						Google Firefox<input type="checkbox" name="question2" id="gfirefox" value="wrong" />
					</div>
					
					<div>
						<h2>Q3.What is a user agent?</h2>
						<input type="text" name="question3" id="question3" value="identifier"/>
						<br/>
					</div>
					
					<!-- drop down box-->
					<div>
						<h2>Q4.What is the most popular user agent:</h2>
						<select name="question4" id="question4" >
							
							<option value="" selected="selected">Select</option>
							<option value="Chrome">Google Chrome</option>
							<option value="IE">Internet Explorer</option>
							<option value="Firefox">Firefox</option>
							<option value="Safari">Safari</option>
							<option value="Android">Android</option>
							<option value="iPhone">iPhone</option>
							<option value="Opera">Opera</option>
							<option value="UC">UC Browser</option>
						</select>
					</div>
					
					<p>
					<textarea name="message" placeholder="any extra notes you want to include?" rows="10" cols="30">
					</textarea>
					</p>
				
				
				
								
				<input type="reset" value="Reset" />
				<input type="submit" value="Check Answers"/>
			</form>
	   </div>
 <?
  require_once("footer.php");
  ?>