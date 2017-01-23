<div id="wrap" class="grid_1200">
[ <div class="login-panel">
  <section class="container">
     <div class="row">
        <div class="col-md-6">
           <div class="page-content">
              <h2>ലോഗ് ഇൻ </h2>
              <div class="form-style form-style-3">
                 <form method = "post" action="login.php">
                    <div class="form-inputs clearfix">
                       <p class="login-text">
                          <input name = "username" type="text" value="പ്രയോക്തൃ നാമം" onfocus="if (this.value == 'പ്രയോക്തൃ നാമം') {this.value = '';}" onblur="if (this.value == '') {this.value = 'പ്രയോക്തൃ നാമം';}">
                          <i class="icon-user"></i>
                       </p>
                       <p class="login-password">
                          <input name = "password" type="password" value="പാസ്‌വേര്‍ഡ്" onfocus="if (this.value == 'പാസ്‌വേര്‍ഡ്') {this.value = '';}" onblur="if (this.value == '') {this.value = 'പാസ്‌വേര്‍ഡ്';}">
                          <i class="icon-lock"></i>
                          <a href="#">പ്രയോക്തൃ നാമമോ പാസ്‍വേര്‍ഡോ മറന്നുപോയോ?</a>
                       </p>
                    </div>
                    <p class="form-submit login-submit">
                       <input type="submit" value="ലോഗ് ഇൻ " class="button color small login-submit submit">
                    </p>
                    <div class="rememberme">
                       <label><input type="checkbox" checked="checked"> എന്‍റെ പ്രയോക്തൃ നാമം ഓര്‍മിക്കുക</label>
                    </div>
                 </form>
              </div>
           </div>
        </div>
        <div class="col-md-6">
           <div class="page-content Register">
              <h2>പുതിയ അക്കൗണ്ട് സൃഷ്ടിക്കുക</h2>
              <p><b>ഇപ്പോള്‍ത്തന്നെ ഒരു അക്കൗണ്ട് ഇല്ലേ?</b></p>
              <a class="button color small signup">അക്കൗണ്ട് സൃഷ്ടിക്കുക</a>
           </div>
        </div>
     </div>
  </section>
</div>
<div class="panel-pop" id="signup">
  <h2>പുതിയ അക്കൗണ്ട് സൃഷ്ടിക്കുക<i class="icon-remove"></i></h2>
  <div class="form-style form-style-3">
     <form method = "post" action = "register.php">
        <div class="form-inputs clearfix">
           <p>
              <label class="required">പ്രയോക്തൃ നാമം<span>*</span></label>
              <input type="text" name ="username">
           </p>
           <p>
              <label class="required">ഇമെയിൽ<span>*</span></label>
              <input type="email" name = "email">
           </p>
           <p>
              <label class="required">പാസ്‌വേര്‍ഡ്<span>*</span></label>
              <input type="password" name = "password">
           </p>
           <p>
              <label class="required">പാസ്‍വേര്‍ഡ് വീണ്ടും<span>*</span></label>
              <input type="password" name="password2">
           </p>
        </div>
        <p class="form-submit">
           <input type="submit" value="അക്കൗണ്ട് തുടങ്ങൂ" class="button color small submit">
        </p>
     </form>
  </div>
</div>
<div class="panel-pop" id="lost-password">
  <h2>പാസ്‍വേര്‍ഡ് നഷ്ടപ്പെട്ടോ<i class="icon-remove"></i></h2>
  <div class="form-style form-style-3">
    <h3>നിങ്ങള്‍ ചെയ്യേണ്ടത്</h3>
    <p>ലോഗ് ഇൻ ചെയ്യാന്‍ സാധിക്കുന്നില്ലെങ്കിൽ തുടരാൻ കഴിയേണ്ടതിനു പ്രയോക്തൃ നാമവും ഇമെയിലും ടൈപ്പ് ചെയ്യുക </p>
     <form method = "post" action="login.php">
        <div class="form-inputs clearfix">
           <p>
              <label class="required">പ്രയോക്തൃ നാമം<span>*</span></label>
              <input type="text" name = "username">
           </p>
           <p>
              <label class="required">ഇമെയിൽ<span>*</span></label>
              <input type="email" name = "email">
           </p>
        </div>
        <p class="form-submit">
           <input type="submit" value="പുനഃക്രമീകരിക്കുക" class="button color small submit">
        </p>
     </form>
     <div class="clearfix"></div>
  </div>
</div>

              