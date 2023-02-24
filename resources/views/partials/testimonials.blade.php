
<?php
$test1 = [
  [
    'id' => 1,
//    'image' => 'asset/img/testimonial-1.jpg',
    'name' => 'Chidubem Casmir',
    'about' => 'Student',
    'message' => 'Working with you, is one of the best thing any one can do for their brand or business',
  ],
  [
    'id' => 2,
//    'image' => 'asset/img/testimonial-2.jpg',
    'name' => 'God\'sgift Augustine',
    'about' => 'Developer',
    'message' => 'I enjoyed learning from you, through you have learn\'t alot about web development',
  ],

  [
    'id' => 3,
//    'image' => 'asset/img/testimonial-3.jpg',
    'name' => 'Chidi Charles',
    'about' => 'Student',
    'message' => 'Thanks for developing a professional and resoponsive website for my project work,
     with your help, i was able to make an A in the work',
  ],
  [
    'id' => 4,
//    'image' => 'asset/img/testimonial-4.jpg',
    'name' => 'Dominion Freeman',
    'about' => 'Freelancer',
    'message' => 'Working with you, is one of the best thing any one can do, you are apt to deliver and you are
    good at listening',
  ],
  [
    'id' => 5,
//    'image' => 'asset/img/testimonial-5.jpg',
    'name' => 'John Larson',
    'about' => 'Entrepreneur',
    'message' => 'Thanks for creating a real estate website for my business, through the website i have been
    able to generate leads ',
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
{{--                <img src="{{asset($key->image)}}" class="testimonial-img" alt="">--}}
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
