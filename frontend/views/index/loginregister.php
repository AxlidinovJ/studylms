<?php
$this->title  = "Instructors";
$this->params['title'] = $this->title; 
$this->params['breadscrumb'] = $this->title;
?>

<section class="container user-log-block">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <!-- user log form -->
            <form action="#" class="user-log-form">
                <h2>Login Form</h2>
                <div class="form-group">
                    <input type="text" class="form-control element-block" placeholder="Username or email address *">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control element-block" placeholder="Password *">
                </div>
                <div class="btns-wrap">
                    <div class="wrap">
                        <label for="rem2" class="custom-check-wrap fw-normal font-lato">
                            <input type="checkbox" id="rem2" class="customFormReset">
                            <span class="fake-label element-block">Remember me</span>
                        </label>
                        <button type="submit"
                            class="btn btn-theme btn-warning fw-bold font-lato text-uppercase">Login</button>
                    </div>
                    <div class="wrap text-right">
                        <p>
                            <a href="#" class="forget-link">Lost your Password?</a>
                        </p>
                    </div>
                </div>
            </form>

        

        </div>
        <div class="col-xs-12 col-md-6">
            <!-- user log form -->
            <form action="#" class="user-log-form">
                <h2>Register Form</h2>
                <div class="form-group">
                    <input type="email" class="form-control element-block" placeholder="Email address *">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control element-block" placeholder="Password *">
                </div>
                <div class="btns-wrap">
                    <div class="wrap">
                        <button type="submit"
                            class="btn btn-theme btn-warning fw-bold font-lato text-uppercase">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>