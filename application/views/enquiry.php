            <!-- Section: enquiry -->
            <section id="Enquiry" class="home-section bg-gray paddingbot-60">
                <div class="container marginbot-50">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="section-heading text-center">
                                    <h2 class="h-bold">Suffereing With Sex Related Problems</h2>
                                    <p>Contact Us for Medical Consultation</p>
                                </div>
                            </div>
                            <div class="divider-short"></div>
                        </div>
                    </div>
                </div>

                <div class="container" id="enquiryform">
                    
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="row form-group">
                                <label>Name:</label>
                                <input name="txtname" type="text" id="txtname" class="form-control" pattern="[a-zA-Z ]*$" title="Anter a valid name" placeholder="Enter Your Name" />
                            </div>
                            <div class="row form-group">
                                  <label>Age:</label>
                                <input name="txtage" type="text" id="txtage" class="form-control" pattern="[0-9]{2}" title="Enter 2 digits" placeholder="Enter Your Age" />
                            </div>
                               <div class="row form-group">
                                <label>Email:</label>
                                <input name="txtemail" type="email" id="txtemail" class="form-control" placeholder="Enter Your Email" />
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="row form-group">
                                  <label>Contact Number:</label>
                                <input name="txtcontact" type="text" id="txtcontact" class="form-control" pattern="[0-9]{10}" title="Enter a valid 10 digit number" placeholder="Enter Your Contact" />
                            </div>
                            <div class="row form-group">
                                 <label>Problem:</label>
                                <input name="txtproblem" type="text" id="txtproblem" class="form-control" pattern="[a-zA-Z ]*$" title="Enter only Alphabets" placeholder="Enter Your Problem" />
                            </div>
                               <div class="row form-group">
                                   <br />
                                 <input type="submit" name="btnsubmit" value="Submit" id="btnsubmit" class="btn btn-danger" />
                                <label id="lblmsg"></label>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <img src="<?php echo base_url();?>assets/img/formbg.jpg" class="img-responsive" />
                        </div>
                </div>

            </section>
            <!-- /Section: enquiry -->