@extends('master')

@section('content')

@section('title', 'Karma App')
    
<!-- Services -->
<section class="services-section" id="section-1">

        <div class="container">
  
          <div class="row">
  
            <div class="col-md-4 col-services">
              
              <!-- Icons -->
              <figure>
                <img class="img-services" src="images/icons/flag.png" alt="">
              </figure>
  
              <!-- Title -->
              <h4>Flag</h4>
  
              <!-- Description -->
              <p>Harum sunt atque quod reprehenderit voluptates dolores nisi quas dolorum ipsa ad consequatur impedit.</p>
  
            </div> <!-- /.col-md-4 -->
  
            <div class="col-md-4 col-services">
              
              <!-- Icons -->
              <figure>
                <img class="img-services" src="images/icons/search.png" alt="">
              </figure>
  
              <!-- Title -->
              <h4>Search</h4>
  
              <!-- Description -->
              <p>Quaerat, quisquam, perspiciatis, ipsam eveniet a ducimus repellat rem nobis similique.</p>
  
            </div> <!-- /.col-md-4 -->
  
            <div class="col-md-4 col-services">
              
              <!-- Icons -->
              <figure>
                <img class="img-services img-margin" src="images/icons/world-map.png" alt="">
              </figure>
  
              <!-- Title -->
              <h4>World Map</h4>
  
              <!-- Description -->
              <p>Aperiam iure doloremque tempora explicabo praesentium eos dicta laudantium corrupti ipsam.</p>
  
            </div> <!-- /.col-md-4 -->
            
          </div> <!-- /.row -->
          
        </div> <!-- /.container -->
        
      </section> <!-- /.services-section -->

          <!-- Features -->
    <section class="features-section" id="section-2">

            <div class="container">
      
              <div class="row">
      
                <div class="col-md-5 col-features text-center">
                  
                  <!-- Images showcase -->
                  <figure>
                    <img class="img-iPhone" src="images/iphone/1.png" alt="">
                  </figure>
      
                </div> <!-- /.col-md-5 -->
      
                <div class="col-md-7 col-features features-content">
                  
                  <!-- Title -->
                  <h3 id="title-1">First title features</h3>
      
                  <!-- Description -->
                  <p>Omnis, esse quo natus soluta minima facilis ratione dignissimos necessitatibus quod dolorem labore molestiae maxime veritatis laudantium aut odio ullam laboriosam autem!</p>
      
                  <p>
                    <a class="btn btn-danger" href="#title-2">Learn more</a>
                  </p>
      
                </div> <!-- /.col-md-7 -->
                
              </div> <!-- /.row -->
      
      
      
      
              <div class="row media-screen-800">
      
                <div class="col-md-7 col-features features-content">
                  
                  <!-- Title -->
                  <h3 id="title-2">Second title features</h3>
      
                  <!-- Description -->
                  <p>Omnis, esse quo natus soluta minima facilis ratione dignissimos necessitatibus quod dolorem labore molestiae maxime veritatis laudantium aut odio ullam laboriosam autem!</p>
      
                  <p>
                    <a class="btn btn-danger" href="./sign-in.html">Sign In</a> &nbsp;
                    <a class="btn btn-danger-border" href="./sign-up.html">Sign Up</a>
                  </p>
      
                </div> <!-- /.col-md-7 -->
      
                <div class="col-md-5 col-features text-center">
                  
                  <!-- Images showcase -->
                  <figure>
                    <img class="img-iPhone margin-top margin-screen-800" src="images/iphone/4.png" alt="">
                  </figure>
      
                </div> <!-- /.col-md-5 -->
                
              </div> <!-- /.row -->
      
      
      
      
              <div class="row">
      
                <div class="col-md-5 col-features text-center">
                  
                  <!-- Images showcase -->
                  <figure>
                    <img class="img-iPhone margin-top margin-top-1" src="images/iphone/3.png" alt="">
                  </figure>
      
                </div> <!-- /.col-md-5 -->
      
                <div class="col-md-7 col-features features-content">
                  
                  <!-- Title -->
                  <h3 id="title-3">Third title features</h3>
      
                  <!-- Description -->
                  <p>Omnis, esse quo natus soluta minima facilis ratione dignissimos necessitatibus quod dolorem labore molestiae maxime veritatis laudantium aut odio ullam laboriosam autem!</p>
      
                  <!-- Button -->
                  <p class="btn-app-store">
                    <a class="btn btn-danger btn-lg" href="#fakelinks">
                      <img src="images/btn-app-store.png" alt="">
                    </a>
                  </p> <!-- /.btn-app-store -->
      
                </div> <!-- /.col-md-7 -->
                
              </div> <!-- /.row -->
      
            </div> <!-- /.container -->
      
          </section> <!-- /.features-section -->

          <!-- Subscribe -->
    <section class="subscribe-section" id="section-3">

            <div class="container">
      
              <div class="row">
      
                <div class="col-md-12">
      
                  <!-- Title -->
                  <h2>Subscribe to get delightfully infrequent updates</h2>
      
                  <!-- Subscribe form -->
                  <div class="row">
      
                    <div class="col-md-6 col-md-offset-3 col-subscribe">
      
                      <form class="subscribe-form form-inline" action="./index.html" role="form">
      
                        <!-- Input -->
                        <div class="form-group">
      
                          <label class="sr-only" for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email address">
      
                        </div> <!-- /.form-group -->
      
                        <!-- Button -->
                        <button class="btn btn-success" type="submit">Subscribe</button>
                        
                      </form> <!-- /.subscribe-form -->
      
      
      
                      <section class="subscribe-description">
      
                        <p>Don't worry. We do not spam :)</p>
                        
                      </section> <!-- /.subscribe-description -->
                      
                    </div> <!-- /.col-md-6 -->
      
                  </div> <!-- /.row -->
                  
                </div> <!-- /.col-md-12 -->
                
              </div> <!-- /.row -->
      
            </div> <!-- /.container -->
      
          </section> <!-- /.subscribe-section -->

@endsection
