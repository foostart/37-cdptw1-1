<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-869">
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <!--FIX BUTTON REGISTER-->
                <!-- <input type="submit" name="login" value="Login"/><br/> -->
                <!-- Button trigger modal -->
                <button type="button" class="btn-login" data-toggle="modal" data-target="#modal_login">Login</button>

                <!-- Modal -->
                <div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalLogin">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    Please fill your form.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-9 register-right">
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Apply as a Employee</h3>
            <div class="row register-form">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                    </div>
                    <div class="form-group">
                        <div class="maxl">
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="male" checked>
                                <span> Male </span> 
                            </label>
                            <label class="radio inline"> 
                                <input type="radio" name="gender" value="female">
                                <span>Female </span> 
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option class="hidden"  selected disabled>Please select your Security Question</option>
                            <option>What is your Birthdate?</option>
                            <option>What is Your old Phone Number</option>
                            <option>What is your Pet Name?</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                    </div>

                    <!--FIX BUTTON REGISTER-->
                    <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-reigster-employee" data-toggle="modal" data-target="#modal_register_employee">Register</button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_register_employee" tabindex="-1" role="dialog" aria-labelledby="modalEmployee" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalEmployee">Register</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                        Your application has been submitted successfully
                        Thank you for your application. We will get back to you as soon as possible.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">DONE</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <h3  class="register-heading">Apply as a Hirer</h3>
    <div class="row register-form">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name *" value="" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name *" value="" />
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email *" value="" />
            </div>
            <div class="form-group">
                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password *" value="" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
            </div>
            <div class="form-group">
                <select class="form-control">
                    <option class="hidden"  selected disabled>Please select your Security Question</option>
                    <option>What is your Birthdate?</option>
                    <option>What is Your old Phone Number</option>
                    <option>What is your Pet Name?</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="`Answer *" value="" />
            </div>
            <!-- <input type="submit" class="btnRegister"  value="Register"/> -->

            <!--FIX BUTTON REGISTER-->
            <!-- <input type="submit" class="btnRegister"  value="Register"/> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn-register-hirer" data-toggle="modal" data-target="#modal_register_hirer">Register</button>

            <!-- Modal -->
            <div class="modal fade" id="modal_register_hirer" tabindex="-1" role="dialog" aria-labelledby="modalHirer" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalHirer">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                Your application has been submitted successfully
                Thank you for your application. We will get back to you as soon as possible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">DONE</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>