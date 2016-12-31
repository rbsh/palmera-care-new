<?php
$categories = App\Category::where('status',1)->where('menu_levels',0)->get();

?>
<nav>
  <div class="container">
    <div class="row">
      <div class="nav-inner"> 
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul style="display:none;" class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="grid.html"> <span>Women</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-6-1 first"> <a href="grid.html"> <span>Styliest Bag</span> </a>
                          <ul class="level1" style="display: none;">
                            <li class="level2 nav-6-1-1 first"><a href="grid.html"><span>Clutch Handbags</span></a></li>
                            <li class="level2 nav-6-1-2"><a href="grid.html"><span>Diaper Bags</span></a></li>
                            <li class="level2 nav-6-1-3"><a href="grid.html"><span>Bags</span></a></li>
                            <li class="level2 nav-6-1-4 last"><a href="grid.html"><span>Hobo Handbags</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-2"> <a href="grid.html"> <span>Material Bag</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-2-5 first"><a href="grid.html"><span>Beaded Handbags</span></a></li>
                            <li class="level2 nav-6-2-6"><a href="grid.html"><span>Fabric Handbags</span></a></li>
                            <li class="level2 nav-6-2-7"><a href="grid.html"><span>Handbags</span></a></li>
                            <li class="level2 nav-6-2-8 last"><a href="grid.html"><span>Leather Handbags</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-3"> <a href="grid.html"> <span>Shoes</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-3-9 first"><a href="grid.html"><span>Flat Shoes</span></a></li>
                            <li class="level2 nav-6-3-10"><a href="grid.html"><span>Flat Sandals</span></a></li>
                            <li class="level2 nav-6-3-11"><a href="grid.html"><span>Boots</span></a></li>
                            <li class="level2 nav-6-3-12 last"><a href="grid.html"><span>Heels</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-4 last"> <a href="grid.html"> <span>Jwellery</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-4-13 first"><a href="grid.html"><span>Bracelets</span></a></li>
                            <li class="level2 nav-6-4-14"><a href="grid.html"><span>Necklaces &amp; Pendants</span></a></li>
                            <li class="level2 nav-6-4-15"><a href="grid.html"><span>Pendants</span></a></li>
                            <li class="level2 nav-6-4-16 last"><a href="grid.html"><span>Pins &amp; Brooches</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-5 last"> <a href="grid.html"> <span>Swimwear</span></a>
                          <ul class="level1">
                            <li class="level2 nav-6-5-17 first"><a href="grid.html"><span>Swimsuits</span></a></li>
                            <li class="level2 nav-6-5-18"><a href="grid.html"><span>Beach Clothing</span></a></li>
                            <li class="level2 nav-6-5-19"><a href="grid.html"><span>Clothing</span></a></li>
                            <li class="level2 nav-6-5-20 last"><a href="grid.html"><span>Bikinis</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
    
                  </ul>
                </li>
              </ul>
              
              <!--navmenu--> 
            </li>
          </ul>
        </div>
        <!--End mobile-menu -->
        <ul id="nav" class="hidden-xs">
          <li id="nav-home" class="level0 parent drop-menu"><a href="{{url('/')}}"><span>Home</span></a>
          </li>
          @foreach($categories as $first)
          <li class="level0 nav-5 level-top first"> <a href="#" class="level-top"> <span>{{$first->name}}</span> </a>
            <div class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center">
                @if($first->childs != null && $first->childs->where('menu_levels',$first->id)!=null)
                  <ul class="level0">
                    @foreach($first->childs->where('menu_levels',$first->id) as $second)
                    <li class="level1 nav-6-1 parent item"> <a href="#"><span>{{$second->name}}</span></a> 


                      <!--sub sub category-->
                       @if($second->childs != null && $second->childs->where('menu_levels',$second->id)!=null)
                      <ul class="level1">
                       @foreach($second->childs->where('menu_levels',$second->id) as $third)
                        <li class="level2 nav-6-1-1"> <a href="{{url('category?id='.$third->id)}}"><span>{{$third->name}}</span></a> </li>
                        @endforeach
                      </ul>
                      @endif
                      <!--sub sub category--> 
                    </li>
                    @endforeach
                  </ul>
                  @endif
                </div>
              </div>
            
            </div>
          </li>
        @endforeach
        </ul>
        
        <!-- Search-col -->
        <div class="search-box pull-right">
          <form action="cat" method="POST" id="search_mini_form" name="Categories">
            <input type="text" placeholder="Search entire store here..." value="Search" maxlength="70" name="search" id="search">
            <button type="button" class="btn btn-default  search-btn-bg"> <span class="glyphicon glyphicon-search"></span>&nbsp;</button>
          </form>
        </div>
        <!-- End Search-col --> 
      </div>
    </div>
  </div>
</nav>