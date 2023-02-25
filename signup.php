

<?php include "header.php"; ?>
     
   <section class="vh-100 gradient-custom">
    
     
     
  <div class="container py-4 h-100">
   <?php include "lan_form.php"; ?>
   
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-3 pb-1 pb-md-0 mb-md-3"><?php echo _REGISTRATION_FORM; ?></h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-1">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName"><?php echo _FIRST_NAME;?></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName"><?php echo _LAST_NAME;?></label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-2 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label"><?php echo _BIRTHDAY ?></label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <h6 class="mb-2 pb-1"><?php echo _GENDER;?> </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender"><?php echo _FEMALE; ?></label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender"><?php echo _MALE;?></label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender"><?php echo _OTHER;?></label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-2 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress"><?php echo _EMAIL;?></label>
                  </div>

                </div>
                <div class="col-md-6 mb-2 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber"><?php echo _PHONE_NUMBER;?></label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg">
                    <option value="1" disabled><?php echo _CHOSE_OPTION;?> </option>
                    <option value="2"><?php echo _SUBJECT_1;?></option>
                    <option value="3"><?php echo _SUBJECT_2;?></option>
                    <option value="4"><?php echo _SUBJECT_3;?></option>
                  </select>
                  <label class="form-label select-label"><?php echo _CHOSE_OPTION;?></label>

                </div>
              </div>

              <div class="mt-2 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="<?php echo _SUBMIT ;?>" />
              </div>

            </form>
            <div class="mt-2 pt-2">
               <a href="   index.php " class="btn btn-primary"><?php echo _LOGIN ;?></a>
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