@extends('layouts.app')

@section('content')

{{-- <!-- Breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="inner">
        <ul>
          <li class="home"> <a title="Go to Home Page" href="http://www.magikcommerce.com/">Home</a><span>&mdash;&rsaquo;</span></li>
          <li class=""> <a title="Go to Home Page" href="http://www.magikcommerce.com/">Women</a><span>&mdash;&rsaquo;</span></li>
          <li class="category13"><strong>Tops & Tees</strong></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumbs End -->  --}}
<!-- Main Container -->
<div class="main-container col2-left-layout">
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3">
        <article class="col-main">
          <div class="page-title">
            <h2>Tops & Tees</h2>
          </div>
         
          <div class="toolbar">
            <div class="sorter">
                <div class="view-mode"> 
                @php
                	$params = Request::all();
                @endphp
                @if(Request::input('view')=="list")
                 	@php
                	$params['view'] = 'grid';
                	@endphp
                	 <a href="{{route('category',$params)}}" title="Grid" class="button button-grid">Grid</a>&nbsp; <span title="List" class="button button-active button-list">List</span>&nbsp;

                @else 
                @php
                	$params['view'] = 'list';
                	@endphp
	                <span title="Grid" class="button button-active button-grid">Grid</span>
	                <a href="{{route('category',$params)}}" title="List" class="button-list">List</a>
                @endif
              	</div>
              </div>
            <div id="sort-by">
              <label class="left">Sort By: </label>
              <ul>
                <li><a href="#">Position<span class="right-arrow"></span></a>
                  <ul>
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Position</a></li>
                  </ul>
                </li>
              </ul>
              <a class="button-asc left" href="#" title="Set Descending Direction"><span class="glyphicon glyphicon-arrow-up"></span></a> </div>
            <div class="pager">
       {{--        <div id="limiter">
                <label>View: </label>
                <ul>
                  <li><a href="#">15<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">20</a></li>
                      <li><a href="#">30</a></li>
                      <li><a href="#">35</a></li>
                    </ul>
                  </li>
                </ul>
              </div> --}}
              <div class="pages">
                <label>Page:</label>
                {{$items->links()}}
              </div>
            </div>
          </div>
          <div class="category-products pull-left wow bounceInUp animated">
          	
          	@if(Request::input('view')=="list")
	        	<ol class="products-list" id="products-list">
              		@each('componets.item_list',$items,'item')
            	</ol>     
            @else 

            	 <ul class="pdt-list products-grid zoomOut play">
	              	@each('componets.item_grid',$items,'item')
	            </ul>
            @endif

          </div>
        </article>
      </div>
      <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
        <aside class="col-left sidebar  wow bounceInLeft animated">
          <div class="side-nav-categories">
            <div class="block-title"> Categories </div>
            <div class="box-content box-category">
              <ul id="magicat">
                <li class="level0- level0 open"> <span class="magicat-cat"><a href="#"><span>Women</span></a></span>
                  <ul>
                    <li class="first level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Tops</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Evening Tops</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Shirts &amp; Blouses</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Tunics</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Vests</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Bags</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Bags</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Designer Handbags</span></a></span> </li>
                        <li class="level2- level2 "> <span class="magicat-cat"><a href="#"><span>Purses</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Socks &amp; Shoulder Bags</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Jewellery</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Bracelets</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Sweat Necklaces &amp; Pendants</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Pins &amp; Brooches</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1  open"> <span class="magicat-cat"><a href="#"><span>Dresses</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Casual Dresses</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Evening</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Designer</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Party</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Lingerie</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Bras</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Bodies</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Lingerie Sets</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Shapewear</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Jackets</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Coats</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Jackets</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Leather Jackets</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Blazers</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Swimwear</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Swimsuits</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Beach Clothing</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Brand Stores</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Bikinis</span></a></span> </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="level0- level0 open"> <span class="magicat-cat"><a href="#"><span>Men</span></a></span>
                  <ul>
                    <li class="first level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Shoes</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Sport Shoes</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Casual Shoes</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Leather Shoes</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Canvas Shoes</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Dresses</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Casual Dresses</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Evening</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Designer</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Party</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Jackets</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Coats</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Formal Jackets</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Leather Jackets</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Blazers</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1  open"> <span class="magicat-cat"><a href="#"><span>Watches</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Fasttrack</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Casio</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Titan</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Tommy-Hilfiger</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Sunglasses</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Ray Ban</span></a></span> </li>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Fasttrack</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Police</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Oakley </span></a></span> </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="level0- level0 open"> <span class="magicat-cat"><a href="#"><span>Electronics</span></a></span>
                  <ul>
                    <li class="first level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Mobiles</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span> Samsung</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Nokia</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>iPhone</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Sony</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Mobiles Accesories</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Mobile Memory Cards</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Cases &amp; Covers</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Mobile Headphones</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Bluetooth Headsets</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Cameras</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Camcorders</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Point &amp; Shoot</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Digital SLR</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Camera Accesories</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Audio &amp; Video</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>MP3 Players</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>iPods</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Soeakers</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Video Players</span></a></span> </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="level0- level1 open"> <span class="magicat-cat"><a href="#"><span>Furniture</span></a></span>
                  <ul>
                    <li class="first level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Living Room</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Racks &amp; Cabinets</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Sofas</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Chairs</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Tables</span></a></span> </li>
                      </ul>
                    </li>
                    <li class="level1- level1 open"> <span class="magicat-cat"><a href="#"><span>Dining &amp; Bar</span></a></span>
                      <ul>
                        <li class="first level2- level2"> <span class="magicat-cat"><a href="#"><span>Dining Table Sets</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Serving Trolleys</span></a></span> </li>
                        <li class="level2- level2"> <span class="magicat-cat"><a href="#"><span>Bar Counters</span></a></span> </li>
                        <li class="last level2- level2"> <span class="magicat-cat"><a href="#"><span>Dining Cabinets</span></a></span> </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="level0- level0 last"> <span class="magicat-cat"><a href="#"><span>Boys</span></a></span> </li>
                <li class="level0- level0 last"> <span class="magicat-cat"><a href="#"><span>Girls</span></a></span> </li>
              </ul>
            </div>
          </div>
          <div class="block block-layered-nav">
            <div class="block-title">Shop By</div>
            <div class="block-content">
              <p class="block-subtitle">Shopping Options</p>
              <dl id="narrow-by-list">
                <dt class="odd">Price</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                    <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                  </ol>
                </dd>
                <dt class="even">Manufacturer</dt>
                <dd class="even">
                  <ol>
                    <li> <a href="#">TheBrand</a> (9) </li>
                    <li> <a href="#">Company</a> (4) </li>
                    <li> <a href="#">LogoFashion</a> (1) </li>
                  </ol>
                </dd>
                <dt class="odd">Color</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#">Green</a> (1) </li>
                    <li> <a href="#">White</a> (5) </li>
                    <li> <a href="#">Black</a> (5) </li>
                    <li> <a href="#">Gray</a> (4) </li>
                    <li> <a href="#">Dark Gray</a> (3) </li>
                    <li> <a href="#">Blue</a> (1) </li>
                  </ol>
                </dd>
                <dt class="last even">Size</dt>
                <dd class="last even">
                  <ol>
                    <li> <a href="#">S</a> (6) </li>
                    <li> <a href="#">M</a> (6) </li>
                    <li> <a href="#">L</a> (4) </li>
                    <li> <a href="#">XL</a> (4) </li>
                  </ol>
                </dd>
              </dl>
            </div>
          </div>
      
       
         

     
        </aside>
      </div>
    </div>
  </div>
</div>
<!-- Main Container End --> 

@stop