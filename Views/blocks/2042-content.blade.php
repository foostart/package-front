 <?php
$url_path = url('/');
?>

<div class="type-2042">
    <div class="form">
        <div class="form-content relative">
            <div class="container form-fields">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="span6">
                            <img src="<?php echo $url_path ?>/images/student.png" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="span6">
                            <div class="student-form">
                                <div class="header">
                                    <h2>Student Form</h2>
                                    <p>Learn how to build websites &amp; apps, write code or start a business.</p>
                                </div>
                                <form class="form-data" action="#">
                                    <div class="input">
                                        <input type="text" placeholder="Name"/>
                                        <input type="text" placeholder="Email ID"/>
                                        <input type="text" placeholder="Phone Number"/>

                                        <select class="form-control-course" placeholder="Select Course">
                                            <option value="select">Please Select Course</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                        </select>
                                    </div>

                                    <div class="gender">
                                        <span>
                                            <input name="gender" type="radio" value="" id="male"/>
                                            <label for="male">Male</label>
                                        </span>
                                        <span>
                                            <input name="gender" type="radio" value="" id="female"/>
                                            <label for="female">Female</label>
                                        </span>
                                    </div>

                                    <div>
                                        <input class="btn-style" type="button" name="SubscribeButton" value="Submit"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bg1" class="skrollable"></div>
            <div id="bg2" class="skrollable"></div>
            <div id="bg3" class="skrollable"></div>
    </div>
</div>
</div>
<div class="clearfix"></div>