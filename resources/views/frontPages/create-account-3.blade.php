@include('partials.header')

      

        <!-- Start first section  Area -->
        <section class="home-about-area pt-120 banner-area">
            <div class="container">
                <div class="row align-items-top justify-content-between">
                    <div class="col-lg-3 col-md-2 home-about-left text-center ">
                        <h3 class="text-uppercase">LET'S ADD SOME SECURITY</h3>
                        <p>
                            Hey! Watch your back and use a password you can remember
                        </p>
                        

                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-9 col-md-6  ">
                                <div class="pt-1" style="width:70px; height:70px; border:3px solid #aaa; border-radius:100%; display: inline-block;font-size:4em; margin:0;" >
                                    <p class="text-center align-middle"><i class="fa fa-star"></i></p>
                                </div>
                            </div>

                            <div class="col-md-9 col-md-6 justify-content-center">
                                <div style="width:4px; height:40px; border:3px solid #000; display: inline-block;font-size:20pt;"></div>
                            </div>

                            <div class="col-md-9 col-md-6 " >
                                <div class="pt-1" style="width:70px; height:70px; border:3px solid #aaa; border-radius:100%; display: inline-block;font-size:4em; margin:0;" >
                                    <p class="text-center align-middle"><i class="fa fa-star"></i></p>
                                </div>
                            </div>
                            <div class="col-md-9 col-md-6 justify-content-center">
                                <div style="width:4px; height:40px; border:3px solid #000; display: inline-block;font-size:20pt;"></div>
                            </div>

                            <div class="col-md-9 col-md-6 text-black">
                                <div class="pt-20" style="width:70px; height:70px; border:3px solid #000; border-radius:100%; display: inline-block;font-size:4em; margin:0;" >
                                    <p class="text-center align-middle">3</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-7 col-md-8 rounded mx-auto d-block" style="margin-top:-8px;">
                        <img class="img-fluid" src="{{asset('asset/img/114360.png')}}" alt="" style="">
                    </div>
                </div>
                <div class="row " style="margin-bottom:10px;">
                   
                    <div class="col-lg-12 col-md-12 home-about-right">
                     
                        <form action="{{url('/store-account/step-3')}}" method="POST">
                            @csrf
                            <div class="row">
                               
                                <div class="col-md-4">
                                    <label for="email">Email Address:</label>
                                    <input type="email" name="email" value="{{old('email')}}" id="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail Address'" required class="single-input" style="border-bottom:2px solid #000;">
                                    <small style="color:#e96b58;">@error('email'){{$message}}@enderror </small>
                                </div>
                                <div class="col-md-3">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" id="password"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input  @error('password') is-invalid @enderror" required autocomplete="new-password" style="border-bottom:2px solid #000;">
                                    <small style="color:#e96b58;">@error('password'){{$message}}@enderror </small>
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="password_confirmation">Confirm Password:</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required class="single-input" required autocomplete="new-password" style="border-bottom:2px solid #000;">
                                </div>
                                <div class="col-md-1 mt-20" style="text-align:center;">
                                    <button class="btn" style="background:transparent;padding:0;"><i class="fa fa-arrow-circle-o-right" style="font-size:xxx-large"></i></button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>	
        </section>
        <!-- End first section Area -->
       
     
        <!-- start footer Area -->
      @include('partials.footer')