<div class="d-flex justify-content-end">
      <form   method="get" style="width:200px;" action="" id="language_form">
       <div class="form-group" >
           <select name="lang"  class="form-control " onchange="changeLang()" >
               <option value="en"<?php if(isset($_SESSION['lang']) && $_SESSION['lang']=='en'){echo "selected";}?> >
               English</option>
               <option value="hi"<?php if(isset($_SESSION['lang']) && $_SESSION['lang']=='hi'){echo "selected";}?>>Hindi</option>
           </select>
       </div>
   </form>
   </div>