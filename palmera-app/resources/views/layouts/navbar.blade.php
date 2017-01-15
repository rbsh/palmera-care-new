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