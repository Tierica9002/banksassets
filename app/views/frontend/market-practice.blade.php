@extends('frontend.layouts.main')
@section('content')
<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Right Sidebar</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-md-9 col-sm-9">
                <section id="content">
                    <header><h1>Right Sidebar</h1></header>
                    <section>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet mollis dui, at
                            lobortis sapien elementum eu. Integer nec nunc malesuada, pharetra leo non, laoreet elit.
                            Cras eget rhoncus metus, vel fermentum augue. Pellentesque ornare semper rhoncus. Aliquam ut
                            laoreet nibh, non convallis metus. Pellentesque gravida rhoncus enim placerat tempus. Nam
                            egestas euismod augue at hendrerit. Curabitur mauris enim, viverra vel tristique ac, egestas
                            eu leo. Praesent viverra, velit non ultricies interdum, tellus arcu tristique odio,
                            a tristique augue purus eget erat.
                        </p>
                        <p>
                            Nullam et sollicitudin neque, vitae fringilla lacus. Suspendisse erat justo, ultrices
                            quis congue et, consequat at ligula. Sed ac nunc imperdiet tellus commodo facilisis. Duis
                            vehicula lacus at ultrices ultrices. Pellentesque dictum justo vestibulum risus fringilla
                            congue. Nam vitae massa dictum dui molestie faucibus in scelerisque risus. Proin congue augue
                            iaculis lectus interdum, a euismod leo consequat. In in convallis ante. Vestibulum euismod
                            massa porttitor lectus interdum lobortis. Fusce odio nisi, accumsan non semper non,
                            dignissim vel enim.
                        </p>
                        <p>
                            Phasellus egestas enim dictum sapien condimentum, eget bibendum nulla consequat. Nullam pharetra,
                            neque ac aliquet cursus, ligula lacus placerat lectus, non sollicitudin felis elit at felis.
                            Morbi semper enim vitae velit lobortis pellentesque. Nunc fringilla, lorem id sollicitudin tempor,
                            libero ante elementum lectus, non egestas mi felis consectetur dui. Morbi eget consequat dui. Ut nec
                            venenatis ligula, nec malesuada dui. Nullam interdum odio a pulvinar rhoncus. Fusce ut vehicula diam.
                            Vivamus eu purus semper, dignissim augue sit amet, imperdiet enim. Proin ultrices luctus risus. Nunc
                            vel interdum mi. Etiam dignissim libero sem, a faucibus metus porttitor eget.
                            Proin dapibus ipsum ut molestie scelerisque. Ut nec vehicula augue.
                        </p>
                    </section>
                </section><!-- /#agent-detail -->
            </div><!-- /.col-md-9 -->
            <!-- end Content -->

            <!-- sidebar -->
            <div class="col-md-3 col-sm-3">
                <section id="sidebar">
                    <aside id="edit-search">
                        <header><h3>Search Properties</h3></header>
                        <form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
                            <div class="form-group">
                                <select name="type">
                                    <option value="">Status</option>
                                    <option value="1">Rent</option>
                                    <option value="2">Sale</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="country">
                                    <option value="">Country</option>
                                    <option value="1">France</option>
                                    <option value="2">Great Britain</option>
                                    <option value="3">Spain</option>
                                    <option value="4">Russia</option>
                                    <option value="5">United States</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="city">
                                    <option value="">City</option>
                                    <option value="1">New York</option>
                                    <option value="2">Los Angeles</option>
                                    <option value="3">Chicago</option>
                                    <option value="4">Houston</option>
                                    <option value="5">Philadelphia</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="district">
                                    <option value="">District</option>
                                    <option value="1">Manhattan</option>
                                    <option value="2">The Bronx</option>
                                    <option value="3">Brooklyn</option>
                                    <option value="4">Queens</option>
                                    <option value="5">Staten Island</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="property-type">
                                    <option value="">Property Type</option>
                                    <option value="1">Apartment</option>
                                    <option value="2">Condominium</option>
                                    <option value="3">Cottage</option>
                                    <option value="4">Flat</option>
                                    <option value="5">House</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <div class="price-range">
                                    <input id="price-input" type="text" name="price" value="1000;299000">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Search Now</button>
                            </div><!-- /.form-group -->
                        </form><!-- /#form-map -->
                    </aside><!-- /#edit-search -->
                    <aside id="featured-properties">
                        <header><h3>Featured Properties</h3></header>
                        <div class="property small">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-06.jpg">
                                </div>
                            </a>
                            <div class="info">
                                <a href="property-detail.html"><h4>2186 Rinehart Road</h4></a>
                                <figure>Doral, FL 33178 </figure>
                                <div class="tag price">$ 72,000</div>
                            </div>
                        </div><!-- /.property -->
                        <div class="property small">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-09.jpg">
                                </div>
                            </a>
                            <div class="info">
                                <a href="property-detail.html"><h4>2479 Murphy Court</h4></a>
                                <figure>Minneapolis, MN 55402</figure>
                                <div class="tag price">$ 36,000</div>
                            </div>
                        </div><!-- /.property -->
                        <div class="property small">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-03.jpg">
                                </div>
                            </a>
                            <div class="info">
                                <a href="property-detail.html"><h4>1949 Tennessee Avenue</h4></a>
                                <figure>Minneapolis, MN 55402</figure>
                                <div class="tag price">$ 128,600</div>
                            </div>
                        </div><!-- /.property -->
                    </aside><!-- /#featured-properties -->
                    <aside id="our-guides">
                        <header><h3>Our Guides</h3></header>
                        <a href="#" class="universal-button">
                            <figure class="fa fa-home"></figure>
                            <span>Buying Guide</span>
                            <span class="arrow fa fa-angle-right"></span>
                        </a><!-- /.universal-button -->
                        <a href="#" class="universal-button">
                            <figure class="fa fa-umbrella"></figure>
                            <span>Right Insurance for You</span>
                            <span class="arrow fa fa-angle-right"></span>
                        </a><!-- /.universal-button -->
                    </aside><!-- /#our-guide -->
                </section><!-- /#sidebar -->
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
@stop