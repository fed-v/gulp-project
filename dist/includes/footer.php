	<div>
		<p id="copyright">&copy;<span id="year">&nbsp;</span> - All rights reserved.</p>
	</div>
			
	<script type="text/javascript">
		
		// <![CDATA[

		//CREATE INSTANCE OF THE DATE OBJECT	
		var date = new Date();	
					
		//EXTRACT FOUR DIGIT YEAR AND ADD TO SPAN
		document.getElementById('year').innerHTML = date.getFullYear();
				
		// ]]>
		
	</script>