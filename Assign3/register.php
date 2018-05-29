<?php


require_once ("header.php");
?>

		<!-- MAIN BODY -->
	   <div class="body">
			<h1>
			Survey
			</h1>
			
			<p class="bodyTxt">Register for this Program. </p>
		
	   
			<form  id="register" method="POST" action="register_process.php">
			<!-- action="http://mercury.ict.swin.edu.au/it000000/surveytest.php" -->
				<p>
					You can only do the quiz once you have sumbitted your details
					<button type="button" id="quiz"  disabled="disabled">Quiz</button>
					<button type="button" id="wipe"  >WipeData</button>
					<!--onclick="Quiz()"--><!--onclick="WipeData()"-->
				</p>
				
				<p>
					Topic name:
					<input type="text" name="topic" id="topic" required="required"/>
				</p>
				
				
				<div>
					<!-- text boxes-->
					<h2> Contact Details </h2>
					First name:
					<input type="text" name="firstName" id="firstName" maxLength="12" required="required"/>
					<br/>
					Last name:
					<input type="text" name="lastName" id="lastName" maxLength="20" required="required"/>
					<br/>
					Phone Number:
					<input type="text" name="Phone" id="Phone" placeholder="##########" maxLength="9999999999" required="required"/>
					
					<br/>
					<!-- email uses special email type to make sure it ias inputted correctly-->
					E-mail:
					<input type="email" name="Email" id="Email" placeholder="example@test.com" required="required"/>
				</div>
				<div>
					<h2> Address </h2>
					Street number:
					<input type="number" name="streetnumber"  required="required"/>
					<br/>
					Street Name:
					<input type="text" name="Address" id="Address" maxLength="40" required="required"/>
					<br/>
					Suburb:
					<input type="text" name="Suburb" id="Suburb" maxLength="20" required="required"/>
					<br/>
					<!-- drop down box-->
					State: 
			<!--<div>
				<img src="images/australia_regions.gif" usemap="#australia"
						alt="Map of Australia" title="Map of Australia"
						height="333" width="375"/>

				<map id="australia" name="australia">
					<area shape="poly" alt="WA Government Website"
						coords="126,40,127,209,35,253,1,123,65,96,112,33"
						href="http://www.wa.gov.au"
						title="WA Government Website"
						onmouseover="setFacts(0)"/>

					<area shape="poly" alt="NT Government Website"
						coords="129,123,129,41,159,4,206,16,192,40,210,53,211,122"
						href="http://www.nt.gov.au"
						title="NT Government Website"
						onmouseover="setFacts(1)"/>

					<area shape="poly" alt="Qld Government Website"
						coords="214,57,217,121,228,120,235,124,236,152,338,154,261,8,253,34,256,47,240,73"
						href="http://www.qld.gov.au"
						title="Qld Government Website"
						onmouseover="setFacts(2)"/>

					<area shape="poly" alt="SA Government Website"
						coords="128,208,130,199,129,129,230,130,229,266,165,204"
						href="http://www.sa.gov.au"
						title="SA Government Website"
						onmouseover="setFacts(3)"/>

					<area shape="poly" alt="ACT Government Website"
						coords="309,215,298,213,297,225,301,234,309,240,312,231,309,226"
						href="http://www.act.gov.au"
						title="ACT Government Website"
						onmouseover="setFacts(4)"/>

					<area shape="poly" alt="NSW Government Website"
						coords="234,216,234,159,339,159,344,166,342,188,337,207,319,228,311,246,291,229,268,226,260,230,253,223"
						href="http://www.nsw.gov.au"
						title="NSW Government Website"
						onmouseover="setFacts(5)"/>

					<area shape="poly" alt="VIC Government Website"
						coords="235,221,235,268,245,276,257,271,269,278,277,274,299,268,301,259,307,252,296,238,285,233,274,233,262,234,259,234,248,225"
						href="http://www.vic.gov.au"
						title="VIC Government Website"
						onmouseover="setFacts(6)"/>

					<area shape="poly" alt="TAS Government Website"
						coords="254,295,264,326,273,321,279,322,284,307,282,299,269,300"
						href="http://www.tas.gov.au"
						title="TAS Government Website"
						onmouseover="setFacts(7)"/>

					<area shape="default" alt="Map of Australia"
						href=""
						title="Map of Australia" />
				</map>
			</div>	-->
					<select name="State" id="State" required="required">
						
						<option value="" selected="selected">Select</option>
						<option value="VIC">Vic</option>
						<option value="NSW">NSW</option>
						<option value="QLD">QLD</option>
						<option value="NT">NT</option>
						<option value="SA">SA</option>
						<option value="WA">WA</option>
						<option value="TAS">TAS</option>
						<option value="ACT">ACT</option>
					</select>
					<br/>
					<!--<textarea name="State" id="State" required="required"></textarea>-->
					<!-- number anywhere between 0 and 9999 for postcode-->
					Postcode:
					<input type="number" name="PostCode" id="PostCode" placeholder="####" min="0000" max="9999" required="required"/>
					
				</div>
				
				<div>
					<h2> Other Details </h2>
					<!-- type passwrod hides text from view-->
					User password:
					<input type="password" name="psw" required="required"/>
				</div>
				<p>
					<!-- able to select dates from a calender-->
					Birthday:
					<input  name="DOB" id="Birthday" placeholder="yyyy-mm-dd"  pattern="\d{4}-\d{1,2}-\d{1,2}" required="required"/> 
					<!-- pattern="\d{1,2}/\d{1,2}/\d{4}"-->
				</p>
				<p>
					<br/>
					Gender
					<br/>
					<!-- option circles to pick one or the other-->
					<input type="radio" name="sex" value="male" required="required"/>Male
					<br/>
					<input type="radio" name="sex" value="female" required="required"/>Female
				</p>
				
				<div>
					<h2> Interest </h2>
					How many years have you been interested in User Agents?(between 1 and 10):
					<input type="number" name="quantity" min="1" max="10"/>
				</div>
				
				<p>
					How did you find out about this program? <br/>
					<input type="radio" name="main" value="find" />
					
					
					<select name="find">
						<option value="email">Email</option>
						<option value="wom">Word of mouth</option>
						<option value="ad">Advertisement</option>
						<option value="tv">TV</option>
						<option value="Internet">Internet</option>
					</select>
					<input type="radio" name="other" value="other"/>
					Other: 
					<input type="text" name="other"/>
				</p>
				<p>
					<textarea name="message" rows="10" cols="30">
						why are you interested in this?
					</textarea>
				</p>
				<p>
					I agree to the <a href="">Terms and Conditions:</a>
					<input type="checkbox" name="Terms" value="Terms" required="required"/>
					<br/>
					I wish to be subscribed to the email list:
					<input type="checkbox" name="maillist" value="maillist"/> 
				</p>
				<input type="reset" value="Reset" />
				<input type="submit" value="Submit"/>
			</form>
	   </div>
	 </div>
   <?
  require_once("footer.php");
  ?>