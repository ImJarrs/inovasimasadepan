<x-funnel-layout :lang="$lang">
	<x-slot:title>{{ $title }}</x-slot:title>

	<section id="headline" class="position-relative bg-has-gr-color-1">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-medium">
				<div class="col">
					<img src="{{ asset('assets/img/funnel/img-bg-1.png') }}" alt="" height="400" class="position-absolute bottom-0 start-0 img-is-decor" data-aos="fade-right" data-aos-duration="1200" >
					<img src="{{ asset('assets/img/funnel/img-bg-3.png') }}" alt="" height="280" class="position-absolute bottom-0 end-0 img-is-decor" data-aos="fade-left" data-aos-duration="1200" >
					<div class="position-relative px-5 top-50 translate-middle-y" style="" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#headline" data-aos-anchor-placement="top-bottom">
						<h2 class="pb-3 headline-has-style"><strong>Premium RFID Cards for Your Hotel Keylock System — Durable, Stylish, and 100% Compatible.</strong></h2>
						<h5 class="pb-4 subheadline-has-style">Professional access card solution for your hotel. Custom-designed to match your brand, made from high-quality materials, and compatible with all popular keylock systems.</h5>
						<div class="d-flex justify-content-center">
							<a href="#advantages" class="me-auto btn-has-text">
								<div class="d-flex align-items-center btn-has-dark-style"><p class="flex-fill my-auto">Our Product's Advantage</p><i class="bi-arrow-down flex-fill"></i></div>
							</a>
							<a href="https://wa.me/+6281806338869" class="ms-auto btn-has-text" target="_blank">
								<div class="d-flex align-items-center btn-has-dark-style"><p class="flex-fill my-auto">Contact Our Whatsapp</p><i class="bi-whatsapp flex-fill"></i></div>
							</a>
						</div>
					</div>
				</div>
				<!--
				<div class="col col-md-auto"><img src="{{ asset('assets/img/funnel/header-logo.jpg') }}" alt=""></div>
				-->
			</div>
		</div>
	</section>

	<section id="advantages" class="position-relative bg-white">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-big">
				<div class="col">
					<div class="position-relative px-5 top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#advantages" data-aos-anchor-placement="top-bottom">
						<h3 class="fw-bold headline-has-style text-uppercase text-dark text-center mb-5">Our Product's Advantage</h3>
						<div class="row row-cols-2 row-cols-md-3 justify-content-center subheadline-has-style">
							<div class="col">
								<div class="row justify-content-center"><img src="{{ asset('assets/img/funnel/img-bg-9.png') }}" alt="" class="img-md-icon"></div>
								<div class="row"><p class="h6 fw-semibold text-center">Strong & Durable Chipset</p></div>
							</div>
							<div class="col">
								<div class="row justify-content-center"><img src="{{ asset('assets/img/funnel/img-bg-10.png') }}" alt="" class="img-md-icon"></div>
								<div class="row"><p class="h6 fw-semibold text-center">Warranty of 1 Year</p></div>
							</div>
							<div class="col">
								<div class="row justify-content-center"><img src="{{ asset('assets/img/funnel/img-bg-11.png') }}" alt="" class="img-md-icon"></div>
								<div class="row"><p class="h6 fw-semibold text-center">Custom Fit Solutions</p></div>
							</div>
							<div class="col">
								<div class="row justify-content-center"><img src="{{ asset('assets/img/funnel/img-bg-12.png') }}" alt="" class="img-md-icon"></div>
								<div class="row"><p class="h6 fw-semibold text-center">Fast Delivery</p></div>
							</div>
							<div class="col">
								<div class="row justify-content-center"><img src="{{ asset('assets/img/funnel/img-bg-13.png') }}" alt="" class="img-md-icon"></div>
								<div class="row"><p class="h6 fw-semibold text-center">Guaranteed Material Quality</p></div>
							</div>
							<div class="col">
								<div class="row justify-content-center"><img src="{{ asset('assets/img/funnel/img-bg-19.png') }}" alt="" class="img-md-icon"></div>
								<div class="row"><p class="h6 fw-semibold text-center">Compatible with > 40 Keylock Hotel System</p></div>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-5">
							<a href="#more-further" class="btn-has-text">
								<div class="d-flex align-items-center btn-has-dark-style"><p class="flex-fill my-auto text-uppercase">More Further</p><i class="bi-arrow-down flex-fill"></i></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="more-further" class="position-relative bg-has-gr-color-2">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-medium">
				<div class="col text-center">
				    <img class="position-absolute bottom-0 end-0 img-is-decor" height="500" src="{{ asset('assets/img/funnel/img-bg-2.png') }}" alt="" data-aos="fade-left" data-aos-duration="1200">
					<div class="position-relative px-5 top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#more-further" data-aos-anchor-placement="top-bottom">
						<div class="row">
							<div class="col"><p class="fs-3 fw-bold text-start">Cards Are Not Just Access — They Are Part of the Guest Experience.</p></div>
						</div>
						<div class="row vw-75">
							<div class="col">
								<ul class="list-group list-group-flush mb-5 text-start subheadline-has-style fw-medium">
									<li class="list-group-item bg-transparent">🔒 Guaranteed Security — Uses original RFID chips (NXP/Fudan), ensure only guests have the right to the access.</li>
									<li class="list-group-item bg-transparent">🎨 Custom Hotel Branding Design — Full-color printing, logo, and QR Code.</li>
									<li class="list-group-item bg-transparent">💪 Durable & Precise — Resistant to damage, waterproof, and easy to program for long-term operating comfort.</li>
								</ul>
							</div>
						</div>
						<div class="row vw-75">
							<div class="col">
								<div class="d-flex justify-content-center">
									<a href="#material-choice" class="btn-has-text">
										<div class="d-flex align-items-center btn-has-dark-style"><p class="flex-fill my-auto text-uppercase">Material Choice</p><i class="bi-arrow-down flex-fill"></i></div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="material-choice" class="position-relative bg-has-color-blue">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-big">
				<div class="col">
					<img class="position-absolute bottom-0 start-0 img-is-decor" src="{{ asset('assets/img/funnel/img-bg-4.png') }}" alt="" height="500" data-aos="fade-right" data-aos-duration="1200">
					<img class="position-absolute bottom-0 end-0 img-is-decor" src="{{ asset('assets/img/funnel/img-bg-8.png') }}" alt="" height="400" data-aos="fade-left" data-aos-duration="1200">
					<div class="position-relative px-5 top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#material-choice" data-aos-anchor-placement="top-bottom">
						<p class="fs-3 fw-bold text-center text-uppercase mb-5">Material Choice of RFID Card</p>
						<div class="row row-cols-2 row-cols-md-3 my-3 my-3">
							<div class="col">
								<div class="row justify-content-center"><img src="{{ asset('assets/img/funnel/img-bg-5.png') }}" alt="" class="img-sm-icon"></div>
								<div class="row"><p class="fs-6 fw-bold text-center text-capitalize">Wooden Series</p></div>
								<div class="row"><p class="subheadline-has-style fw-medium text-center">Made of natural wood (more than 8 wood choice). Premium appearance and eco friendly. <br />Ideal for boutique and luxurious hotel.</p></div>
							</div>
							<div class="col">
								<div class="row justify-content-center"><img src="{{ asset('assets/img/funnel/img-bg-6.png') }}" alt="" class="img-sm-icon"></div>
								<div class="row"><p class="fs-6 fw-bold text-center text-capitalize">Plastic Series</p></div>
								<div class="row"><p class="subheadline-has-style fw-medium text-center">Economical, flexible, waterproof, able to be printed with full color design. <br />Ideal for budget hotel and mid-range.</p></div>
							</div>
							<div class="col col-12">
								<div class="row justify-content-center"><img src="{{ asset('assets/img/funnel/img-bg-7.png') }}" alt="" class="img-sm-icon"></div>
								<div class="row"><p class="fs-6 fw-bold text-center text-capitalize">Eco Series</p></div>
								<div class="row"><p class="subheadline-has-style fw-medium text-center">Made of dari recycled/ biodegradable materials. <br />Ideal for hotel with green and eco-friendly concept.</p></div>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<a href="https://wa.me/+6281806338869" class="btn-has-text" target="_blank">
								<div class="d-flex align-items-center btn-has-dark-style"><p class="flex-fill my-auto text-uppercase">Propose Your Material Choice</p><i class="bi-whatsapp flex-fill"></i></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="material-choice-2" class="position-relative bg-has-gr-color-1">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-big">
				<div class="col">
					<div class="position-relative px-5 text-center top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#material-choice-2" data-aos-anchor-placement="top-bottom">
						<p class="fs-3 fw-bold text-center text-uppercase">Material Choice</p>
						<div id="carouselMaterialCardCaptions" class="carousel slide mx-auto w-100" data-bs-theme="dark">
						  <div class="carousel-inner">
							@foreach ($products as $product)
							@if ($product['id'] == 9)
							<div class="carousel-item active">
							@else
							<div class="carousel-item">
							@endif
							    @if(!empty($product['image1']))
								<img src="{{ asset('storage/' . $product['image1']) }}" class="d-block w-100 img-is-content" alt="Keycard Hotel Series">
								@elseif(!empty($product['image2']))
								<img src="{{ asset('storage/' . $product['image2']) }}" class="d-block w-100 img-is-content" alt="Keycard Hotel Series">
								@elseif(!empty($product['image3']))
								<img src="{{ asset('storage/' . $product['image3']) }}" class="d-block w-100 img-is-content" alt="Keycard Hotel Series">
								@elseif(!empty($product['image4']))
								<img src="{{ asset('storage/' . $product['image4']) }}" class="d-block w-100 img-is-content" alt="Keycard Hotel Series">
								@elseif(!empty($product['image5']))
								<img src="{{ asset('storage/' . $product['image5']) }}" class="d-block w-100 img-is-content" alt="Keycard Hotel Series">
								@endif
								<div class="carousel-caption d-block text-dark">
									<h6 class=""><b>{{ $product['name'] }}</b></h5>
									<p class="text-center pb-3">Read description...    <i class="bi-arrow-down"></i></p>
									<ul class="list-group list-group-flush text-start mx-auto w-50">
									    @if(!empty($product['label1']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label1'] }}: {{ $product['desc1'] }}</li>
										@endif
										
										@if(!empty($product['label2']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label2'] }}: {{ $product['desc2'] }}</li>
										@endif
										
										@if(!empty($product['label3']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label3'] }}: {{ $product['desc3'] }}</li>
										@endif
										
										@if(!empty($product['label4']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label4'] }}: {{ $product['desc4'] }}</li>
										@endif
										
										@if(!empty($product['label5']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label5'] }}: {{ $product['desc5'] }}</li>
										@endif
										
										@if(!empty($product['label6']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label6'] }}: {{ $product['desc6'] }}</li>
										@endif
										
										@if(!empty($product['label7']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label7'] }}: {{ $product['desc7'] }}</li>
										@endif
										
										@if(!empty($product['label8']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label8'] }}: {{ $product['desc8'] }}</li>
										@endif
										
										@if(!empty($product['label9']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label9'] }}: {{ $product['desc9'] }}</li>
										@endif
										
										@if(!empty($product['label10']))
										<li class="list-group-item bg-transparent text-dark">{{ $product['label10'] }}: {{ $product['desc10'] }}</li>
										@endif
									</ul>
								</div>
							</div>
							@endforeach
						  </div>
						  @if (count($products) > 1)
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselMaterialCardCaptions" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselMaterialCardCaptions" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						  </button>
						  @endif
							<div class="my-5 d-flex justify-content-center">
								<a href="https://wa.me/+6281806338869" class="btn-has-text" target="_blank">
									<div class="d-flex align-items-center btn-has-dark-style"><p class="flex-fill my-auto text-uppercase">Ask About Your Material Choice</p><i class="bi-whatsapp flex-fill"></i></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="design-examples" class="position-relative bg-white">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-big">
				<div class="col">
					<img class="position-absolute bottom-0 start-0 img-is-decor" height="200" src="{{ asset('assets/img/funnel/img-bg-15.png') }}" alt="" data-aos="fade-right" data-aos-duration="1200">
					<img class="position-absolute bottom-0 end-0 img-is-decor" height="200" src="{{ asset('assets/img/funnel/img-bg-16.png') }}" alt="" data-aos="fade-left" data-aos-duration="1200">
					<div class="position-relative px-5 text-center top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#design-examples" data-aos-anchor-placement="top-bottom">
						<p class="fs-3 fw-bold text-center text-uppercase">Design Examples</p>
						<div id="carouselExampleCaptions" class="carousel slide mx-auto carousel-on-sec-6" data-bs-theme="dark">
						  <div class="carousel-inner">
							@foreach ($designs as $design)
							@if ($design['id'] == 1)
							<div class="carousel-item active">
							@else
							<div class="carousel-item">
							@endif
							    @if(!empty($design['image_path']))
								<img src="{{ asset('storage/' . $design['image_path']) }}" class="d-block w-100" alt="Keycard Hotel Designs" height="600px">
								@endif
							</div>
							@endforeach
						  </div>
						  @if (count($designs) > 1)
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						  </button>
						  @endif
							<div class="my-5 d-flex justify-content-center">
								<a href="https://wa.me/+6281806338869" class="btn-has-text" target="_blank">
									<div class="d-flex align-items-center btn-has-dark-style"><p class="flex-fill my-auto text-uppercase">Discuss Your Own Design</p><i class="bi-whatsapp flex-fill"></i></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="client-list" class="position-relative bg-white">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-big">
				<div class="col">
					<div class="position-relative px-5 top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#client-list" data-aos-anchor-placement="top-bottom">
						<p class="fs-3 fw-bold text-center text-uppercase">Trusted by Leading Hotels in Indonesia</p>
						<!--
						<div class="row justify-content-center">
						    <div class="col"><img class="w-100" src="{{ asset('assets/img/funnel/hotel-logos.png') }}" alt="Hotel Logos" height="700"></div>
						</div>
						-->
						<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <div class="row row-cols-2 justify-content-center align-items-center">
                                    <div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-1.png') }}" class="img-fluid" alt="" height="100"></div>
            						<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-2.png') }}" class="img-fluid" alt="" height="100"></div>
            						<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-3.png') }}" class="img-fluid" alt="" height="100"></div>
            						<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-4.png') }}" class="img-fluid" alt="" height="100"></div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row row-cols-2 justify-content-center align-items-center">
							        <div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-5.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-6.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-7.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-8.png') }}" class="img-fluid" alt="" height="100"></div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row row-cols-2 justify-content-center align-items-center">
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-9.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-10.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-11.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-12.png') }}" class="img-fluid" alt="" height="100"></div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row row-cols-2 justify-content-center align-items-center">
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-13.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-14.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-15.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-16.png') }}" class="img-fluid" alt="" height="100"></div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row row-cols-2 justify-content-center align-items-center">
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-17.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-18.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-19.png') }}" class="img-fluid" alt="" height="100"></div>
        							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-20.png') }}" class="img-fluid" alt="" height="100"></div>
                                </div>
                            </div>
                          </div>
                        </div>
						<!--
						<div class="row row-cols-3 row-cols-md-4 justify-content-center">
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-1.png') }}" class="img-fluid" alt="" height="125"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-2.png') }}" class="img-fluid" alt="" height="131"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-3.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-4.png') }}" class="img-fluid" alt="" height="150"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-5.png') }}" class="img-fluid" alt="" height="81"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-6.png') }}" class="img-fluid" alt="" height="75"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-7.png') }}" class="img-fluid" alt="" height="75"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-8.png') }}" class="img-fluid" alt="" height="75"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-9.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-10.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-11.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-12.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-13.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-14.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-15.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-16.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-17.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-18.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-19.png') }}" class="img-fluid" alt="" height="100"></div>
							<div class="col"><img src="{{ asset('assets/img/funnel/hotel-logo-20.png') }}" class="img-fluid" alt="" height="100"></div>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="advantages-2" class="position-relative bg-has-gr-color-1">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-big">
				<div class="col">
					<div class="position-relative px-5 top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#advantages" data-aos-anchor-placement="top-bottom">
						<div class="card position-relative bg-has-light-opacity" style="top: 20%;">
						  <div class="card-body my-5">
						  	<div class="row justify-content-start py-2 gy-3">
						  		<div class="col col-sm-4 col-md-6 col-lg-5 d-flex justify-content-center align-items-center">
						  			<img src="{{ asset('assets/img/funnel/img-bg-18.png') }}" height="200px" />
						  		</div>
						  		<div class="col col-sm-8 col-md-6 col-lg-7">
						  			<p class="card-title fs-5 text-uppercase text-center"><strong>Easy Process, Quick Results</strong></p>
								    <hr />
									<ul class="card-text list-group list-group-flush my-5 fw-medium text-start subheadline-has-style">
										<li class="list-group-item bg-transparent">📞 Consultation on your needs & keylock system</li>
										<li class="list-group-item bg-transparent">🎨 Design the card according to your hotel’s brand</li>
										<li class="list-group-item bg-transparent">🏭 Production & Quality Check — ensure maximum quality</li>
										<li class="list-group-item bg-transparent">🚚 Fast delivery across Indonesia</li>
									</ul>
						  		</div>
						  	</div>
							<div class="row justify-content-center py-2">
								<div class="col col-md-auto col-lg-auto">
									<div class="d-flex justify-content-center">
										<a href="https://wa.me/+6281806338869" class="btn-has-text" target="_blank">
											<div class="d-flex align-items-center btn-has-dark-style"><p class="flex-fill my-auto text-uppercase">Order Your Access Hotel Card!</p><i class="bi-whatsapp flex-fill"></i></div>
										</a>
									</div>
								</div>
							</div>
						  </div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="faq" class="position-relative d-none">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-big">
				<div class="col">
					<div class="position-relative px-5 top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#faq" data-aos-anchor-placement="top-bottom">
						<p class="fs-3 fw-bold text-center text-capitalize">Frequently Asked Questions</p>
						<hr />
						<ul class="list-group list-group-flush subheadline-has-style fw-semibold">
							<li class="list-group-item bg-transparent">
								<div class="d-grid">
									<button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
										<div class="d-flex">
											<p class="flex-fill text-start">Question 1</p>
											<i class="bi-caret-down-fill"></i>
										</div>
									</button>
								</div>
								<div id="collapseFaq1" class="collapse">
									<div class="card card-body">Answer 1</div>
								</div>
							</li>
							<li class="list-group-item bg-transparent">
								<div class="d-grid">
									<button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
										<div class="d-flex">
											<p class="flex-fill text-start">Question 2</p>
											<i class="bi-caret-down-fill"></i>
										</div>
									</button>
								</div>
								<div id="collapseFaq2" class="collapse">
									<div class="card card-body">Answer 2</div>
								</div>
							</li>
							<li class="list-group-item bg-transparent">
								<div class="d-grid">
									<button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
										<div class="d-flex">
											<p class="flex-fill text-start">Question 3</p>
											<i class="bi-caret-down-fill"></i>
										</div>
									</button>
								</div>
								<div id="collapseFaq3" class="collapse">
									<div class="card card-body">Answer 3</div>
								</div>
							</li>
							<li class="list-group-item bg-transparent">
								<div class="d-grid">
									<button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq4" aria-expanded="false" aria-controls="collapseFaq4">
										<div class="d-flex">
											<p class="flex-fill text-start">Question 4</p>
											<i class="bi-caret-down-fill"></i>
										</div>
									</button>
								</div>
								<div id="collapseFaq4" class="collapse">
									<div class="card card-body">Answer 4</div>
								</div>
							</li>
							<li class="list-group-item bg-transparent">
								<div class="d-grid">
									<button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq5" aria-expanded="false" aria-controls="collapseFaq5">
										<div class="d-flex">
											<p class="flex-fill text-start">Question 5</p>
											<i class="bi-caret-down-fill"></i>
										</div>
									</button>
								</div>
								<div id="collapseFaq5" class="collapse">
									<div class="card card-body">Answer 5</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="closing" class="position-relative bg-has-gr-color-2">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-small">
				<div class="col"><!--
					<img src="{{ asset('assets/img/funnel/bg-page-1.png') }}" class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-fit-cover" />-->
					<div class="position-relative px-5 text-center top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor="#closing" data-aos-anchor-placement="top-bottom">
						<p class="fs-3 fw-bold text-center text-uppercase">Ready for Change Your Hotel?</p>
						<p class="fs-6 fw-semibold text-center text-capitalize mb-5">Get your access hotel card!</p>
						<div class="d-flex justify-content-center mt-5">
							<a href="https://wa.me/+6281806338869" class="btn-has-text" target="_blank">
								<div class="d-flex align-items-center btn-has-dark-style"><p class="flex-fill my-auto text-uppercase">Contact Our Whatsapp!</p><i class="bi-whatsapp flex-fill"></i></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Template section
	<section class="position-relative">
		<div class="container">
			<div class="row justify-content-center mx-sm-0 px-sm-0 mx-md-5 px-md-5 container-is-small">
				<div class="col">
					<div class="position-relative px-5 top-50 translate-middle-y" data-aos="fade-down" data-aos-duration="1200" data-aos-anchor-placement="top-bottom">>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	-->
</x-funnel-layout>
