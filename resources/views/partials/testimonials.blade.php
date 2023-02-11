
<?php 
$test1 = [
  [
    'id' => 1,
    'image' => 'asset/img/testimonial-1.jpg',
    'name' => 'Saul Goodman',
    'about' => 'Ceo &amp; Founder',
    'message' => 'Working with you, is one of the best thing any one can do for their brand or business',
  ],
  [
    'id' => 2,
    'image' => 'asset/img/testimonial-2.jpg',
    'name' => 'Sara Wilsson',
    'about' => 'Designer',
    'message' => 'Working with you, is one of the best thing any one can do for their brand or business',
  ],

  [
    'id' => 3,
    'image' => 'asset/img/testimonial-3.jpg',
    'name' => 'Jena Karlis',
    'about' => 'Store Owner',
    'message' => 'Working with you, is one of the best thing any one can do for their brand or business',
  ],
  [
    'id' => 4,
    'image' => 'asset/img/testimonial-4.jpg',
    'name' => 'Matt Brandon',
    'about' => 'Freelancer',
    'message' => 'Working with you, is one of the best thing any one can do for their brand or business',
  ],
  [
    'id' => 5,
    'image' => 'asset/img/testimonial-5.jpg',
    'name' => 'John Larson',
    'about' => 'Entrepreneur',
    'message' => 'Working with you, is one of the best thing any one can do for their brand or business',
  ],
];
// $test = (object) $test1;
$test = json_decode(json_encode($test1));
 ?>
<section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
            @foreach($test as $key)
            
              <div class="testimonial-item">
                <img src="{{asset($key->image)}}" class="testimonial-img" alt="">
                <h3>{{$key->name}}</h3>
                <h4>{{$key->about}}</h4>
                <p>
                  {{$key->message}}
                </p>
              </div>
              @endforeach
    
             

            </div>

          </div>
        </div>


      </div>
</section>