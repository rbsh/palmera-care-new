@extends('layouts.app')

@section('content')


<!-- Main Container -->
<div class="main-container col2-left-layout">
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3">
        <article class="col-main">
          <div class="page-title">
            <h2>{{$category->name}}</h2>
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