@include('partials.header')

      

        <!-- Start first section  Area -->
        <section class="home-about-area pt-120 banner-area">
            <div class="container">
                <div class="row align-items-top justify-content-between">
                    <div class="col-lg-3 col-md-2 home-about-left text-center ">
                        <h3 class="text-uppercase">GET STARTED</h3>
                        <p>
                            Start off in 3 simple steps
                        </p>
                        

                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-9 col-md-6 justify-content-center text-black">
                                <div class="pt-20" style="width:70px; height:70px; border:3px solid #000; border-radius:100%; display: inline-block;font-size:4em; margin:0;" >
                                    <p class="text-center align-middle">1</p>
                                </div>
                            </div>

                            <div class="col-md-9 col-md-6 justify-content-center">
                                <div style="width:4px; height:40px; border:3px solid #000; display: inline-block;font-size:20pt;"></div>
                            </div>

                            <div class="col-md-9 col-md-6">
                                <div class="pt-20" style="width:70px; height:70px; border:3px solid #aaa; border-radius:100%; display: inline-block;font-size:4em; margin:0;" >
                                    <p class="text-center align-middle">2</p>
                                </div>
                            </div>
                            <div class="col-md-9 col-md-6 justify-content-center">
                                <div style="width:4px; height:40px; border:3px solid #000; display: inline-block;font-size:20pt;"></div>
                            </div>

                            <div class="col-md-9 col-md-6 justify-content-center">
                                <div class="pt-20" style="width:70px; height:70px; border:3px solid #aaa; border-radius:100%; display: inline-block;font-size:4em; margin:0;" >
                                    <p class="text-center align-middle">3</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-7 col-md-8 rounded mx-auto d-block" style="margin-top:-8px;">
                        <img class="img-fluid" src="{{asset('asset/img/2636676.png')}}" alt="" style="">
                    </div>
                </div>
                <div class="row " style="margin-bottom:10px;">
                   
                    <div class="col-lg-12 col-md-12 home-about-right">
                     
                        <form action="{{url('/store-account/step-1/')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" name="last_name" value="{{old('last_name')}}" id="last_name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input" style="border-bottom:2px solid #000;">
                                {{-- <small style="color:#e96b58;">@error('last_name'){{$message}}@enderror </small> --}}
                                </div>
                                <div class="col-md-3">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" name="first_name" value="{{old('first_name')}}" id="first_name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input" style="border-bottom:2px solid #000;">
                                    {{-- <small style="color:#e96b58;">@error('first_name'){{$message}}@enderror </small> --}}
                                </div>
                                <div class="col-md-4">
                                    <label for="phone_number">Phone Number:</label>
                                    <input type="text" name="phone_number"  id="phone_number" value="{{old('phone_number')}}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required class="single-input" style="border-bottom:2px solid #000;">
                                    {{-- <small style="color:#e96b58;">@error('phone_number'){{$message}}@enderror </small> --}}
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