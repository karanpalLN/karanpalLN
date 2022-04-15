<?php include('header-inner.php') ?>
<div class="main-wrapper inner--page">
   <section class="login">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3">
               <div class="login-content">
                  <div class="heading-text text-center">                     
                     <h3>Sign In</h3>
                     <text>New to Driva? <a href="signup.php">Sign Up</a></text>
                  </div>
                  <div class="social-btns">
                     <a href="#" class="primary-btn fb"><i class="fab fa-facebook-f"></i>Continue with Facebook</a>
                     <a href="#" class="primary-btn google"><i class="fab fa-google"></i>Continue with Google</a>
                     <a href="#" class="primary-btn apple"><i class="fab fa-apple"></i>Continue with Apple</a>
                  </div>
                  <div class="seprator-text">
                     <p>or continue with email</p>
                  </div>
                  <div class="login-form">
                     <form>
                        <div class="form-group">
                           <label>Username</label>
                           <input type="text" name="username">
                        </div>  
                        <div class="form-group">
                           <label>Password</label>
                           <input type="Password" name="Password">
                        </div> 
                        <div class="form-group text-center">
                           <a href="javascript:void;" class="primary-btn mb-2" id="success">Login</a>
                           <text><a href="forgot-password.php"><span class="colorgreen"><b>Forgot password?</b></span></a></text>  
                        </div> 
                     </form>
                  </div>                  
               </div>
            </div>           
         </div>
      </div>
   </section>
</div>
<?php include('footer.php') ?>