@extends('web.layouts')
@section('content')

    <div class="w-100" >
        <img src={{asset('assets/img/v2.jpeg')}} width="100%" height="820px";/>
        <div class="paragraph">
                   <p class="text text-center">I Book</p>
                   <p class="text text-center">Rent A car Today with Us</p>
                   <p class="text text-center">تأجير السيارات بمطار محمد الخامس الدولي</p>
                   <center><a href="#booknow" class="text-center book" >BOOK NOW</a></center>
        </div>
    </div>
    <div class="container cars mt-5" id="booknow">
            <p class="title text text-center" >The number one car rental in Morocco
            Discover our  cars</p>
            <p class="title1 text text-center">Discover our  cars</p>

            <div class="row mt-5 div1">
                @foreach ($voitures as $voiture)

                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="/images/{{$voiture->image}}" class="img" alt="">
                        <div class="card-body">
                            <p class="text text-center" >{{$voiture->titre}}</p>
                            <p class="text text-center">{{$voiture->price}}</p>
                        </div>
                        <a href={{route('reserver',$voiture->id)}} class="w-100 text-center reserver" >Reserver</a>
                    </div>
                </div>
                @endforeach

            </div>
            <a href="" class="d-flex justify-content-center bo1 mt-5" >Discover more cars for rent</a>
    </div>
    <div class="container mt-5" >
        <h2 class="text text-center mt-3 elementor-heading-title " >The number one car rental agency in Morocco</h2>
        <div class="row mt-5 container " style="
   
    position: relative;
    left: 10%;
">
                <div class="col-md-3">
                    <img src={{asset('assets/img/gg.jpeg')}} class="marque" alt="logo"/>
                </div>
                <div class="col-md-3">
                <img src={{asset('assets/img/m5.jpeg')}} class="marque" alt="logo" />
                </div>
                <div class="col-md-3">
                <img src={{asset('assets/img/m3.jpeg')}} class="marque" alt="logo" />
                </div>
                <div class="col-md-3">
                <img src={{asset('assets/img/m4.jpeg')}} class="marque" alt="logo" />
                </div>
        </div>
    </div>




    <section id="clients-say"  class="clients-say">
			<div class="container">
				<div class="section-header">
					<h2 class="text text-center" >what our clients say</h2>
				</div><!--/.section-header-->
				<div class="row">
					<div class="owl-carousel testimonial-carousel">
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c1.png" alt="image of clients person" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
										<p>
											Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
										</p>
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">tomas lili</a></h2>
										<h4>new york</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c2.png" alt="image of clients person" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
										<p>
											Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
										</p>
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">romi rain</a></h2>
										<h4>london</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
						<div class="col-sm-3 col-xs-12">
							<div class="single-testimonial-box">
								<div class="testimonial-description">
									<div class="testimonial-info">
										<div class="testimonial-img">
											<img src="assets/images/clients/c3.png" alt="image of clients person" />
										</div><!--/.testimonial-img-->
									</div><!--/.testimonial-info-->
									<div class="testimonial-comment">
										<p>
											Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
										</p>
									</div><!--/.testimonial-comment-->
									<div class="testimonial-person">
										<h2><a href="#">john doe</a></h2>
										<h4>washington</h4>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-description-->
							</div><!--/.single-testimonial-box-->
						</div><!--/.col-->
					</div><!--/.testimonial-carousel-->
				</div><!--/.row-->
			</div><!--/.container-->

		</section><!--/.clients-say-->

@endsection
