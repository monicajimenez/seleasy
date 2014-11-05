<!DOCTYPE html>
<html lang="en-us">
        <div class="page-header-top">
            <div class="container">
                <h1>Sign in &amp; sign up <small>log into or create an account</small></h1>
            </div>
        </div>
        <body>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="span16">
                            <div id="signin">
                                <div class="title">Already a member? Sign in:</div>
                                <form action="<?php echo base_url('/dashboard')?>" method="post">
                                    <input type="hidden" name="next" value="/">
                                    <fieldset>
                                            <div class="clearfix">
                                            <label for="iusername"><span>Username:</span></label>
                                            <div class="input">
                                                <input tabindex="1" id="iusername" name="username" label="Username" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <label for="ipassword"><span>Password:</span></label>
                                            <div class="input">
                                                <input tabindex="2" id="ipassword" name="password" label="Password" value="" type="password">
                                            </div>
                                        </div>

                                        <div class="actions">
                                            <input tabindex="3" class="btn primary large" type="submit" value="Sign into your account">
                                            <p class="reset">Recover your <a tabindex="4" href="/signin/reset" title="Recover your username or password">username or password</a></p>
                                        </div>
                                    </fieldset>
                                </form>
                                
                            </div>
                            <div id="signup">
                                <div class="title">Create a new account:</div>

                                <form action="<?php echo base_url('/signup/createUser/')?>" method="post" class="form-stacked">
                                    <fieldset>
                                        <div class="clearfix">
                                            <label for="error">Error</label>
                                            <div class="input">
                                                <input id="isignup_username" tabindex="5" name="username" label="Username" value="" type="text">
                                                <p><?php if (isset($username)) echo $username;?></p>
                                                <p><?php if (isset($password)) echo $password;?></p>
                                                <p><?php if (isset($email)) echo $email;?></p>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <label for="isignup_username">Username:</label>
                                            <div class="input">
                                                <input id="isignup_username" tabindex="5" name="username" label="Username" value="" type="text">
                                                <span class="help-block">May contain letters, digits, dashes and underscores, and should be between 2 and 20 characters long.</span>
                                            </div>
                                        </div>
                                            <div class="clearfix">
                                            <label for="isignup_email">Email address:</label>
                                            <div class="input">
                                                <input id="isignup_email" tabindex="6" name="email" label="Email address" value="" type="text">
                                                <span class="help-block"><strong>Type carefully.</strong> You will be sent a confirmation email.</span>
                                            </div>
                                        </div>
                                            <div class="clearfix">
                                            <label for="isignup_password">Password:</label>
                                            <div class="input">
                                                <input id="isignup_password" tabindex="7" name="password" label="Password" value="" type="password">
                                                <span class="help-block">The longer the better. Include numbers for protein.</span>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <p class="clickedit">By clicking on the "Create your account" button below, you certify that you have read and agree to our <a href="/terms" title="Terms of use" target="_blank">terms of use</a> and <a href="/privacy" title="Privacy policy" target="_blank">privacy policy</a>.</p>
                                        </div>
                                        <div class="clearfix">
                                            <div class="input">
                                                <ul class="inputs-list">
                                                
                                                <li><label><input id="isignup_subscribe" tabindex="8" type="checkbox" name="subscribe" label="Subscribe" value="1"><span>Sign me up for the newsletter (provided by MailChimp)</span></label></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="actions"><input tabindex="9" class="btn success large" type="submit" value="Create your account"></div>
                                    </fieldset>
                                    <input type="hidden" name="hte" value="7ac41946639e91a3b90290b8ed6677e8d78413a410a6752d480556f0149d53f1">
                                    <input type="hidden" name="htv" value="5948b23477d74db082394284757b1a482db24af13db5434caa697a214b826dcb">
                                </form>
                            </div>
                        <script>$("#iusername").focus();</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <div class="push"></div>
                </div>
                <div id="footer">
                        <div class="container">
                                <footer>
                                        <p>
                                                <a href="/support" title="Buyer and seller support"><b>Support</b></a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="http://support.wrapbootstrap.com/" title="Knowledge base" target="_none"><b>Knowledge base</b></a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="/affiliates" title="Affiliates">Affiliates</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="/privacy" title="Privacy policy">Privacy</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="/terms" title="Terms of use">Terms</a>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<a href="/about" title="About us">About</a> <span class="pull-right">&copy; 2014 <a href="http://wrapmarket.com/" title="WrapMarket LLC" target="_blank">WrapMarket LLC</a></span>
                                        </p>
                                </footer>
                        </div>
                </div>
                <div id="subscribe_dialog">
                        <div class="shell">
                                <div class="topbar"><a class="close" href="#">Close</a></div>
                                <div class="inner"></div>
                        </div>
                </div>
                <div id="mask"></div>
                <script>$(document).ready(function(){ $(".alert-message").alert(); $("#bsw").twipsy(); });</script>
                <script type="text/javascript">
                        adroll_adv_id = "7ZLH3TJ7RFHP5IXPNREKUT";
                        adroll_pix_id = "FXS6CQLPC5G7ZN6YQH3GWR";
                        (function () {
                                var oldonload = window.onload;
                                window.onload = function(){
                                __adroll_loaded=true;
                                var scr = document.createElement("script");
                                var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                                scr.setAttribute('async', 'true');
                                scr.type = "text/javascript";
                                scr.src = host + "/j/roundtrip.js";
                                ((document.getElementsByTagName('head') || [null])[0] ||
                                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                                if(oldonload){oldonload()}};
                        }());
                </script>
        </body>
</html>
