<x-layout>

    <div class="row" style="margin-left:20%">
        <div class="col-lg-12">
            <div class="contact-area-wrapper" id="contact"><!-- contact area wrapper -->
                <span class="subtitle">Sign up</span>
                <h3 class="title">Register</h3>
                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor  tempor incididunt ut labore dolore magna.</p>
                <form action="/register" id="contact_form_submit" class="form" method="POST">
               @csrf
                    <div class="row">
                        <div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Your Username">
                                </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password"  name="password" class="form-control" id="password" placeholder="Your Password">
                            </div>
                        </div>
                    
                            <button class="submit-btn  btn-rounded gd-bg-1 mb-5" type="submit">Register</button>
                        </div>
                    </div>
                </form>






</x-layout>