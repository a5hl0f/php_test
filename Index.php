
<?php include "header.php";?>
     
    <section class="vh-100 gradient-custom">
     
  <div class="container py-5 h-100">
  
 <?php include "lan_form.php"; ?>
   
   
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
       

            <div class="mb-md-5 mt-md-5 pb-2">

              <h2 class="fw-bold mb-2 text-uppercase"><?php echo _LOGIN_HEADER; ?></h2>
              <p class="text-white-50 mb-2"><?php echo  _LOGIN_PASS; ?></p>

              <div class="form-outline form-white mb-2">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX"> <?php echo _EMAIL; ?></label>
              </div>

              <div class="form-outline form-white mb-2">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX"><?php echo _PASSWORD; ?></label>
              </div>

              <p class="small mb-2 pb-lg-2"><a class="text-white-50" href="#!"><?php echo _FORGRT_PASWORD; ?></a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit"><?php echo _LOGIN; ?></button>

            

            <div>
              <p class="mb-0"><?php echo _Dont_have_acc; ?></p> <a href="signup.php" class="text-white-50 fw-bold"><?php echo _SIGNUP ; ?></a>
              
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <script>
     function changeLang(){
         document.getElementById('language_form').submit();
     }
    
 </script>
 
  
</body>
</html>