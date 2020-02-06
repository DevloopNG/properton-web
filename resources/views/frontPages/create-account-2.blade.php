@include('partials.header')

      

        <!-- Start first section  Area -->
        <section class="home-about-area pt-120 banner-area">
            <div class="container">
                <div class="row align-items-top justify-content-between">
                    <div class="col-lg-3 col-md-2 home-about-left text-center ">
                        <h3 class="text-uppercase">LET'S KNOW YOU</h3>
                        <p>
                            A little information about you
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

                            <div class="col-md-9 col-md-6 text-black" >
                                <div class="pt-20" style="width:70px; height:70px; border:3px solid #000; border-radius:100%; display: inline-block;font-size:4em; margin:0;" >
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
                        <img class="img-fluid" src="{{asset('asset/img/2895919.png')}}" alt="" style="">
                    </div>
                </div>
                <div class="row " style="margin-bottom:10px;">
                   
                    <div class="col-lg-12 col-md-12 home-about-right">
                     
                        <form action="{{url('/store-account/step-2/')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="nationality">Nationality:</label>
                                    <input type="text" name="nationality"  id="nationality" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nationality'" required class="single-input" style="border-bottom:2px solid #000;">
                                    <small style="color:#e96b58;">@error('nationality'){{$message}}@enderror </small>
                                </div>
                                
                                <div class="col-md-3">
                                    
                                    <label for="gender">Gender:</label>
                                        <div class="input-group-icon ">
                                            <div class="form-select " id="default-select2">
                                                <select name="gender" id="gender" class="form-control" style="border:none; border-bottom:2px solid #000;border-radius:0;">
                                                    <option value=""></option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>                                     
                                                </select>
                                            </div>
                                        </div>
                                        <small style="color:#e96b58;">@error('gender'){{$message}}@enderror </small>
                                   </div>
                                <div class="col-md-4">
                                    <label for="occupation">Occupation:</label>
                                    <input type="text" name="occupation" id="occupation" value="{{old('occupation')}}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Occupation'" required class="single-input" style="border-bottom:2px solid #000;">
                                    <small style="color:#e96b58;">@error('occupation'){{$message}}@enderror </small>
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