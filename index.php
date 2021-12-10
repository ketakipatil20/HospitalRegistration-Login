<html>
    <head>
        <title>
           HEALTH CARE SYSTEM
        </title>
        <meta charset="utf-8">
 
        <link rel="stylesheet" type="text/css" href="stle.css">.
    </head>
    <body>
    
    
    <div class="navbar"> 
      
      <div class="dropdown">
        <button class="dropbtn">More
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="#">hospital Details</a>
          <a href="#">Contact us</a>
        

          
        </div>
      </div> 
      

      <div class="dropdown">
      <button class="dropbtn">Sign Up<i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
         
          <button onclick="document.getElementById('id03').style.display='block'" style="width:auto; color:black; background-color:white; size: 1px; padding: 0px 5px 15px 0px; margin: 0px;">For Doctor</button>

          <div id="id03" class="modal">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form  action="userinfo.php" method="post" class="modal-content">
              <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="name"><b>Name</b></label>
                <input autocomplete="off" type="text" placeholder="Enter Name" name="name" required>

                <label for="email"><b>Email</b></label>
                <input autocomplete="off" type="text" placeholder="Enter Email" name="email" required>
                
                <label for="qualification"><b>Qualification Details</b></label>
                <input autocomplete="off" type="text" placeholder="Enter your qualification details" name="qualification" required>



                 <label for="hospitalAddrress"><b>Hospital's Address</b></label>
                 <input autocomplete="off" type="text" placeholder="Enter your Address" name="hospitalAddrress" required>

                 <label for="phoneno"><b>Enter your phone number</b></label><br>
                  <input autocomplete="off"  type="tel" id="phone" name="phoneno" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  required><br><br>
          
                <label for="password"><b>Password</b></label>
                <input  autocomplete="off" type="password" placeholder="Enter Password" name="password" required>
          
                <label for="repeatpassword"><b>Repeat Password</b></label>
                <input autocomplete="off" type="password" placeholder="Repeat Password" name="repeatpassword" required>
                
                <label>
                  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
          
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
                  <button type="submit" class="btn btn-success">Sign Up</button>
                </div>
              </div>
            </form>
          </div>
          
          <script>
          // Get the modal
          var modal = document.getElementById('id03');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          </script>
          
          </body>

          
           <button onclick="document.getElementById('id04').style.display='block'" style="width:auto;color:black; background-color:white; padding: 0px; margin: 0px; ">For Patient</button>

            <div id="id04" class="modal">
              <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
              <form class="modal-content" action="patientregistration.php" method="post">
                <div class="container">
                  <h1>Sign Up</h1>
                  <p>Please fill in this form to create an account.</p>
                  <hr>
                  <label for="name"><b>Name</b></label>
                  <input type="text" placeholder="Enter Name" name="name" required>
                  
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required>

                  <label for="patientaddress"><b>Address</b></label>
                  <input type="text" placeholder="Enter your Address" name="patientaddress"  required>

                  <label for="mobile"><b>Enter your 10 digit phone number</b></label>
                  <input type="tel" id="mob" name="mobile" pattern="+91-[0-9]{10}" value=
                  "+91" required><br><br>

                  <label for="date"><b>Date-of-Birth</b></label>
                  <input type="date" placeholder="Enter date" name="date" required>


                  <p><b>Please enter your gender</b></p>

                  <input type="radio" id="male" name="gender" value="male"> 
                  <label for="male">Male</label><br>

                  <input type="radio" id="female" name="gender" value="female"> 
                  <label for="male">Female</label><br>
                  
                  <input type="radio" id="others" name="gender" value="others"> 
                  <label for="others">Others</label><br><br>

                  
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
            
                  <label for="pswrepeat"><b>Repeat Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="pswrepeat" required>
                  
                  <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                  </label>
            
                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            
                  <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit"  class="btn btn-success" >Sign Up</button>
                  </div>
                </div>
              </form>
            </div>
            
            <script>
            // Get the modal
            var modal = document.getElementById('id04');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>
            
            </body>

        </div>
      </div>
      
        
          <a href="#home">Home</a>
          
         
    </div>
    
    <!--Dropdown Menu inside a Navigation Bar-->
    <!--Hover over the "Dropdown" link to see the dropdown menu.-->
    

        <center>
          <h2><b>Hospital Information System</b></h2>
          <h3><marquee><a href= "https://www.google.com/search?q=corona+update+maharashtra&oq=corona+updates&aqs=chrome.4.69i57j0i10i131i433i457j0i402l2j0i10i131i433l2j0i131i433j0j0i131i433j0i10.21709j0j7&sourceid=chrome">COVID-19 GUIDELINES</marquee></a></marquee></h3>
         
        </center>
        <!-- Button to open the modal login form -->
        <center>
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Patient Login</button>
          </center>
        <!-- The Modal -->
        <div id="id02" class="modal">
          <span onclick="document.getElementById('id02').style.display='none'"
          class="close" title="Close Modal">&times;</span>
        
          <!-- Modal Content -->
          <form class="modal-content animate" action="patlogin.php" method="post">
            <div class="imgcontainer">
              
            </div>
        
            <div class="container">
              <label for="name"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="name" required>
              
        
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
        
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>
        <script>
          // Get the modal
          var modal = document.getElementById('id02');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) 
          {
            if (event.target == modal) 
            {
              modal.style.display = "none";
            }
          }
          </script>
          
        <!-- Button to open the modal login form -->
       <center>
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Doctor's Login</button>
        </center>
         <!-- The Modal -->
        <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'"
         class="close" title="Close Modal">&times;</span>

         <!-- Modal Content -->
        <form class="modal-content animate" action="/action_page.php">
          <div class="imgcontainer">
      
          </div>

          <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

         <label for="psw"><b>Password</b></label>
         <input type="password" placeholder="Enter Password" name="psw" required>

     <center> <button type="submit" style="width:auto;"">Login</button></body></center>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <center><button type="button" onclick="document.getElementById('id02').style.display='block'" class="cancelbtn" style="width:auto;">Cancel</button></center>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>




<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) 
{
  if (event.target == modal) 
  {
    modal.style.display = "none";
  }
}
</script>

  

  </body>
</html>









