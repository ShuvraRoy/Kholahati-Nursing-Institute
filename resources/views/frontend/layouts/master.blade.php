<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('frontend.layouts.header_links')
</head>
<body>
  <div class="loading">
  <div class="text-center middle">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
  </div>
</div>
  <!--Loading Area End-->
  <!--Main Wrapper Start-->
  <div class="as-mainwrapper">
      <!--Bg White Start-->
      <div class="bg-white">
          <!--Header Area Start-->
          <header>
              @include('frontend.layouts.header')
              @include('frontend.layouts.stickey_header')
              <div class="mobile-menu-area">
                  <div class="container clearfix">
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="mobile-menu">
                                  <nav id="dropdown">
                                      <ul>
                                          <li><a href="#">HOME</a>
                                              <ul>
                                                  <li><a href="#">Home Version 1</a></li>
                                                  <li><a href="#">Home Version 1</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="#">Gallery</a>
                                              <ul>
                                                  <li><a href="#">Gallery</a></li>
                                                  <li><a href="#">Gallery Filtaring</a></li>
                                                  <li><a href="#">Gallery Four Column</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="#">Team Details</a></li>
                                          <li><a href="#">Courses</a>
                                              <ul class="sub-menu">
                                                  <li><a href="#">Courses Details</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="shop.html">Shop</a>
                                              <ul class="sub-menu">
                                                  <li><a href="#">Single Product</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="event.html">Event</a>
                                              <ul class="sub-menu">
                                                  <li><a href="#">Event Details</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="blog.html">Blog</a>
                                              <ul class="sub-menu">
                                                  <li><a href="#">Blog Details</a></li>
                                                  <li><a href="#">Blog Left Sidebar</a></li>
                                                  <li><a href="#">Blog No Sidebar</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="contact.html">Pages</a>
                                              <ul>
                                                  <li><a href="#">Team Details</a></li>
                                                  <li><a href="#">Courses Page</a></li>
                                                  <li><a href="#">Course Details Page</a></li>
                                                  <li><a href="#">Event Page</a></li>
                                                  <li><a href="#">Event Details Page</a></li>
                                                  <li><a href="#">Blog</a></li>
                                                  <li><a href="#">Blog Details Page</a></li>
                                                  <li><a href="#">Blog Left Sidebar</a></li>
                                                  <li><a href="#">Blog No Sidebar</a></li>
                                                  <li><a href="#">Wishlist Page</a></li>
                                                  <li><a href="#">Checkout Page</a></li>
                                                  <li><a href="#">Shopping Cart Page</a></li>
                                                  <li><a href="#">Login Page</a></li>
                                                  <li><a href="#">Contact</a></li>
                                                  <li><a href="#">404 Error</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="#">Contact us</a></li>
                                      </ul>
                                  </nav>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Mobile Menu Area end -->
          </header>
          @yield('page_content')
          @include('frontend.layouts.footer')
          </div>
          <!--End of Bg White-->
      </div>
      <!--End of Main Wrapper Area-->
  @include('frontend.layouts.footer_scripts')
  </body>

<!-- Mirrored from template.hasthemes.com/edubuzz/edubuzz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Nov 2021 12:54:29 GMT -->
</html>
