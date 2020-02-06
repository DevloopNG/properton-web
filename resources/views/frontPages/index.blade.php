@include('partials.header')

        <!-- start banner Area -->
        <section class="banner-area">
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 banner-left">
                        {{-- <h6>This is me</h6> --}}
                        <h1>EARN . MONITOR</h1>
                        <p>
                            Properton gives you the privilege to receive great ROI's<br>
                            on every investment done via crowdfunding and co-building procedures.<br>
                            Monitor your earnings as you grow them and take smart decisions.
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Insight</a>
                    </div>
                    <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                        <img class="img-fluid" src="asset/img/35665.png" alt="">
                    </div>
                </div>
            </div>					
        </section>
        <!-- End banner Area -->

        <!-- Start first section  Area -->
        <section class="home-about-area pt-120">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 home-about-left">
                        <img class="img-fluid" src="asset/img/support.svg" alt="">
                    </div>
                    <div class="col-lg-5 col-md-6 home-about-right">
                        {{-- <h6>About Me</h6> --}}
                        <h1 class="text-uppercase">CO-BUILD . CO-OWN</h1>
                        <p>
                            Co-building gives you the opportunity to co-own<br>
                            properties in choice areas with others with little or no stress<br>
                            Own these property fora lifetime.
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Insights</a>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End first section Area -->
        <!-- Start second-section Area -->
        <section class="banner-area">
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 banner-left">
                       
                        <h1 class="text-uppercase text-center">ARRANGED<br> DOCUMENTATION</h1>
                        <p>
                            Get certification for investments, co-owning and<br>
                            DOA's all arranged and backup to your cloud<br>
                            for easy viewing and future correspondences
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Insight</a>
                    </div>
                    <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                        <img class="img-fluid" src="asset/img/global.svg" alt="">
                    </div>
                </div>
            </div>					
        </section>
      
        <!-- End second-section Area -->
        
        <!-- Start brands Area -->
        @include('partials.brands')
        <!-- End brands Area -->			

        <!-- start footer Area -->
      @include('partials.footer')