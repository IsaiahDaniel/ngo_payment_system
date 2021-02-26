<?php include "includes/header.php"; ?>
  
  <?php include "includes/nav.php"; ?>

  <br> <br> <br> <br>

  <div class="donation-container">   
    <div class="donation-box">
	      <div class="title bg-dark">Donation Information</div>
          <div class="fields">
            <input type="text" id="firstName" placeholder="First Name"> 
            <input type="text" id="lastName" placeholder="Last Name"> 
            <input type="text" id="email" placeholder="Email"> 
          </div>
          
          <div class="amount">
            <div class="button">$30</div>
            <div class="button">$50</div>
            <div class="button">$100</div>
            <div class="button" type="number">$<input type="text" class="set-amount" placeholder=""> </div>
          </div>
          
          <!-- <div class="switch">
            <input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
            <label for="one-time" class="switch-label switch-label-off">One-Time</label>
            <input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
            <label for="monthly" class="switch-label switch-label-on">Monthly</label>
            <span class="switch-selection"></span>
          </div> -->
      
			    <!-- <div class="checkboxes">
            <input type="checkbox" id="receipt" class="checkbox" />
            <label for="receipt">Email Me A Receipt</label>
            <br />
            <input type="checkbox" id="anon" class="checkbox" />
            <label for="anon">Give Anonymously</label>
            <br />
            <input type="checkbox" id="list" class="checkbox" />
            <label for="list">Add Me To Email List</label>  
			    </div>
			     -->
			    <div class="confirm"></div>    
	        <div class="donate-button bg-dark"><i class="fa fa-credit-card"></i> Donate Now</div>
    </div>        
  </div>


<?php include "includes/footer.php"; ?>
