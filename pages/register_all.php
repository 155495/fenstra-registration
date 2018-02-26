<form action="db_pages/db_registerall.php" method="post" enctype="multipart/form-data">
<div class="col-md-6">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" pattern="[a-zA-Z\s]+" class="form-control" placeholder="Enter Name" required="required">
      </div>
      
      <div class="form-group">
        <label>College</label>
        <input type="text" name="college" class="form-control" placeholder="Enter College" required="required">
      </div>
      
      <div class="form-group">
        <label>Mobile Number</label>
        <input type="tel" pattern="[789][0-9]{9}" name="pnum" class="form-control" placeholder="Enter Mobile Number" required="required">
      </div>
      
      <div class="form-check">
          <input type="checkbox" name="veg" class="form-check-input">
           <label class="form-check-label">Are You Veg</label>
      </div>
      
     <button type="submit" id="checkBtn" class="btn btn-danger">Submit</button>
  	<button type="reset" class="btn btn-default">Reset</button>
   </div>
      		<div class="col-md-6">
                      <div class="well">
                      <label>Select Events</label>
                      <div class="form-check">
                                <input type="checkbox" name="thunt" class="checkbox_check" id="thuntid"  class="form-check-input">
                                <label class="form-check-label">Treasure Hunt</label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" id="coding" name="coding" class="form-check-input">
                                <label class="form-check-label">Coding</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" id="bstgang" name="bstgang" class="form-check-input">
                                <label class="form-check-label">Best Gang</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" name="adfilm" id="adfilm" class="form-check-input">
                                <label class="form-check-label">AD Film</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" name="bstprsonality" id="bstprsonality"  class="form-check-input">
                                <label class="form-check-label">Best Personality</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" name="gnerlqz" id="gnerlqz"class="form-check-input">
                                <label class="form-check-label">General Quiz</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" name="innovation" id="innovation" class="form-check-input">
                                <label class="form-check-label">Innovation</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" name="webdesing" id="webdesing" class="form-check-input">
                                <label class="form-check-label">Web Designing</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" name="gaming" id="gaming" class="form-check-input">
                                <label class="form-check-label">Gaming</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" name="photography" id="photography" class="form-check-input">
                                <label class="form-check-label">Photography</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" name="paprprestntion" id="paprprestntion" class="form-check-input">
                                <label class="form-check-label">Paper Presentation</label>
                              </div>
                              
                              <div class="form-check">
                                <input type="checkbox" name="spotevents" id="spotevents" class="form-check-input">
                                <label class="form-check-label">Spot Eventz</label>
                              </div>
                      </div>
                 </div>
      
      
      
     
     <!--<script>
	 function onClickHandler(){
		 /*document.getElementById("coding").disabled = true;
		 document.getElementById("bstgang").disabled = true;
		 document.getElementById("adfilm").disabled = true;
		 document.getElementById("bstprsonality").disabled = true;
		 document.getElementById("gnerlqz").disabled = true;
		 document.getElementById("innovation").disabled = true;
		 document.getElementById("webdesing").disabled = true;
		 document.getElementById("gaming").disabled = true;
		 document.getElementById("photography").disabled = true;
		 document.getElementById("paprprestntion").disabled = true;
		 document.getElementById("spotevents").disabled = true;
		*/
		
		if ($('input.checkbox_check').is(':checked')) {
		document.getElementById("coding").disabled = true;	
		document.getElementById("bstgang").disabled = true;
		 document.getElementById("adfilm").disabled = true;
		 document.getElementById("bstprsonality").disabled = true;
		 document.getElementById("gnerlqz").disabled = true;
		 document.getElementById("innovation").disabled = true;
		 document.getElementById("webdesing").disabled = true;
		 document.getElementById("gaming").disabled = true;
		 document.getElementById("photography").disabled = true;
		 document.getElementById("paprprestntion").disabled = true;
		 document.getElementById("spotevents").disabled = true;
		}
		else{
			document.getElementById("coding").disabled =false;
			document.getElementById("bstgang").disabled = false;
		 document.getElementById("adfilm").disabled = false;
		 document.getElementById("bstprsonality").disabled = false;
		 document.getElementById("gnerlqz").disabled = false;
		 document.getElementById("innovation").disabled = false;
		 document.getElementById("webdesing").disabled = false;
		 document.getElementById("gaming").disabled = false;
		 document.getElementById("photography").disabled = false;
		 document.getElementById("paprprestntion").disabled = false;
		 document.getElementById("spotevents").disabled = false;
			}
		 }
	 </script>--> 
      
  
</form>
