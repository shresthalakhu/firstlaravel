<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    @include('includes.head')
</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        @include('includes.header')
        <!-- end:fh5co-header -->
        @include('includes.banner')
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div id="availability">
                        <form action="#">

                            <div class="a-col">
                                <section>
                                    <select class="cs-select cs-skin-border">
                                        <option value="" disabled selected>Select Hotel</option>
                                        <option value="email">Luxe Hotel</option>
                                        <option value="twitter">Deluxe Hotel</option>
                                        <option value="linkedin">Five Star Hotel</option>
                                    </select>
                                </section>
                            </div>
                            <div class="a-col alternate">
                                <div class="input-field">
                                    <label for="date-start">Check In</label>
                                    <input type="text" class="form-control" id="date-start" />
                                </div>
                            </div>
                            <div class="a-col alternate">
                                <div class="input-field">
                                    <label for="date-end">Check Out</label>
                                    <input type="text" class="form-control" id="date-end" />
                                </div>
                            </div>
                            <div class="a-col action">
                                <a href="#">
                                    <span>Check</span>
                                    Availability
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.counter')

        <div id="featured-hotel" class="fh5co-bg-color">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Featured Hotels</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="feature-full-1col">
                        <div class="image" style="background-image: url({{asset('assets/images/hotel_feture_1.jpg')}});">
                            <div class="descrip text-center">
                                <p><small>For as low as</small><span>$100/night</span></p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3>Deluxe Hotel</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. Vivamus augue enim, consectetur ac interdum a, pulvinar ac massa. Nullam malesuada congue </p>
                            <p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                        </div>
                    </div>

                    <div class="feature-full-2col">
                        <div class="f-hotel">
                            <div class="image" style="background-image: url({{asset('assets/images/hotel_feture_2.jpg')}});">
                                <div class="descrip text-center">
                                    <p><small>For as low as</small><span>$99/night</span></p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3>Hotel Bora</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo,
                                    in suscipit urna condimentum sed. </p>
                                <p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                            </div>
                        </div>
                        <div class="f-hotel">
                            <div class="image" style="background-image: url({{asset('assets/images/hotel_feture_3.jpg')}});">
                                <div class="descrip text-center">
                                    <p><small>For as low as</small><span>$99/night</span></p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3>D’Morvie</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. </p>
                                <p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="hotel-facilities">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Hotel Facilities</h2>
                        </div>
                    </div>
                </div>

                <div id="tabs">
                    <nav class="tabs-nav">
                        <a href="#" class="active" data-tab="tab1">
                            <i class="flaticon-restaurant icon"></i>
                            <span>Restaurant</span>
                        </a>
                        <a href="#" data-tab="tab2">
                            <i class="flaticon-cup icon"></i>
                            <span>Bar</span>
                        </a>
                        <a href="#" data-tab="tab3">

                            <i class="flaticon-car icon"></i>
                            <span>Pick-up</span>
                        </a>
                        <a href="#" data-tab="tab4">

                            <i class="flaticon-swimming icon"></i>
                            <span>Swimming Pool</span>
                        </a>
                        <a href="#" data-tab="tab5">

                            <i class="flaticon-massage icon"></i>
                            <span>Spa</span>
                        </a>
                        <a href="#" data-tab="tab6">

                            <i class="flaticon-bicycle icon"></i>
                            <span>Gym</span>
                        </a>
                    </nav>
                    <div class="tab-content-container">
                        <div class="tab-content active show" data-tab-content="tab1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/tab_img_1.jpg')}}" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Restaurant</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/tab_img_2.jpg')}}" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Bars</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/tab_img_3.jpg')}}" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Pick Up</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/tab_img_4.jpg')}}" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Swimming Pool</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/tab_img_5.jpg')}}" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Spa</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/tab_img_6.jpg')}}" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Gym</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('includes.happycustomer')


        @include('includes.blog')

        @include('includes.footer')

    </div>
    <!-- END fh5co-page -->

</div>


</body>
</html>