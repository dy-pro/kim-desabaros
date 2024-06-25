@extends('layouts.user.master')

@section('content')
<div id="contact-1-2" class="contact-1-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 margin-bm50">
                <div class="margin-r50">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="widgettitle">Call Us</h5>
                            <p>081398400900<br>081910301822</p>
                            <h5 class="widgettitle">Main Office</h5>
                            <p>Jl. Mengger Hilir No.31, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa
                                Barat 40267</p>
                        </div>
                        /col-md-6 -->
                        <div class="col-md-6">
                            <h5 class="widgettitle">Email Us</h5>
                            <p>nesphoria@gmail.com</p>
                            <h5 class="widgettitle margin-t30">Follow Us</h5>
                            <ul class="social-media social-list">
                                <li><a class="social-facebook" href="#" target="_blank">Facebook</a></li>
                                <li><a class="social-twitter" href="#" target="_blank">Twitter</a></li>
                                <li><a class="social-instagram" href="#" target="_blank">Instagram</a></li>
                            </ul>
                        </div> 
                        <!-- /col-md-6 -->
                    <!-- </div> -->
                    <!-- /row -->
                </div>
            </div>
            <!-- /col-lg-6 -->
           <div class="col-lg-6">
                <div id="contact-form-holder">
                    <form method="post" id="contact-form" action="#">
                        <div class="row">
                            <div class="col-md-4 margin-b30">
                                <input type="text" name="name" class="comm-field" placeholder="Name" />
                            </div>
                            <div class="col-md-4 margin-b30">
                                <input type="text" name="email" class="comm-field" placeholder="Email" />
                            </div>
                            <div class="col-md-4 margin-b30">
                                <input type="text" name="phone" class="comm-field" placeholder="Phone" />
                            </div>
                        </div>
                        <div class="margin-b30">
                            <textarea name="message" id="msg-contact" rows="5" placeholder="Message"></textarea>
                        </div>
                        <p class="antispam">Leave this empty: <input type="text" name="url" /></p>
                        <p><input type="submit" value="Send message" class="submit" /></p>
                    </form>
                </div>
                <!--contact-form-holder-->
                 <div id="output-contact"></div>
            </div>

            <!-- /col-lg-6 -->
            <!-- email -->
        <div class="col-lg-6">
<div class="portfolio-masonry-container">
<form action="#">
<div class="input-box">
<div class="input-field field">
  <input type="text" placeholder="Full Name" id="name" class="item" autocomplete="off">
  <div class="error-txt">Full Name can't be blank</div>
</div>
<div class="input-field field">
  <input type="text" placeholder="Email Address" id="email" class="item" autocomplete="off">
  <div class="error-txt email">Email Address can't be blank</div>
</div>
</div>
<div class="input-box">
<div class="input-field field">
  <input type="text" placeholder="Phone Number" id="phone" class="item" autocomplete="off">
  <div class="error-txt">Phone Number can't be blank</div>
</div>
<div class="input-field field">
  <input type="text" placeholder="Subject" id="subject" class="item" autocomplete="off">
  <div class="error-txt">Subject can't be blank</div>
</div>
</div>
<div class="textarea-field field">
<textarea name="" id="message" cols="30" rows="10" placeholder="Your Message" class="item" autocomplete="off"></textarea>
</div>
<button type="submit">Send Message</button>
</form>
</div>
</div>

            <!-- /email -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION 2
@endsection