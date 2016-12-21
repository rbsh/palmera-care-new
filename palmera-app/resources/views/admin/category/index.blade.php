@extends('admin.master')
@section('title', 'Blank Page')
@section('content')
<!-- BEGIN PAGE HEADER-->
<!-- BEGIN THEME PANEL -->
<!-- END THEME PANEL -->
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{url('la-admin/blank')}}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Blank Page</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Page Layouts</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Blank Page Layout
<small>blank page layout</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-cogs"></i>Responsive Flip Scroll Tables </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body flip-scroll">
                                        {{-- <table class="table table-bordered table-striped table-condensed flip-content"> --}}
                                            <table class="table table-hover table-striped">
                    <tr>
                      <th width="10">ID</th>
                      <th width="30">Photo</th>
                      <th>Name</th>
                      <th width="10">Order</th>
                      <th width="10">Active</th>
                      <th width="10"></th>
                      <th width="10"></th>
                    </tr>



                    <?php 
                    $first = DB::table('categories')->where('menu_levels','0')->get();
                    ?>
                    @foreach($first as $one)
                    <tr bgcolor="black">
                      <td>{{$one->id}}</td>
                      <td><img src="{{url($one->photo)}}" height="25"></td>
                      <td>{{$one->name}}</td>
                      <td>{{$one->row_order}}</td>
                      <td>

                      @if($one->status=="0")
                      <form method="post" action="{{url('la-admin/category/change-status/'.$one->id.'?status='.$one->status)}}">
                      <input type="submit" value="NO" class="btn btn-xs btn-danger"> 
                      {{ csrf_field() }}
                      </form>
                      @else
                      <form method="post" action="{{url('la-admin/category/change-status/'.$one->id.'?status='.$one->status)}}">

                      <input type="submit" value="YES" class="btn btn-xs btn-success"> 
                      {{ csrf_field() }}
                      </form>
                      @endif
                      </td>
                      <td><a href="{{url('la-admin/category/'.$one->id)}}" class="btn btn-xs btn-warning">EDIT</a></td>
                      <td><form method="post" action="{{url('la-admin/category/'.$one->id)}}">
                      <input type="submit" value="DELETE" class="btn btn-xs btn-danger"> 
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      </form></td>
                    </tr>

                              <?php 
                              $second = DB::table('categories')->where('menu_levels', $one->id)
                                                               ->where('user_levels', '1')
                                                               ->get();
                              ?>
                              @foreach($second as $two)
                              <tr bgcolor="red">
                                <td>{{$two->id}}</td>
                                <td><img src="{{url($one->photo)}}" height="25"></td>
                                <td>{{$two->name}}</td>
                                <td>{{$two->row_order}}</td>
                                <td>

                                @if($two->status=="0")
                                <form method="post" action="{{url('la-admin/category/change-status/'.$two->id.'?status='.$two->status)}}">
                                <input type="submit" value="NO" class="btn btn-xs btn-danger"> 
                                {{ csrf_field() }}
                                </form>
                                @else
                                <form method="post" action="{{url('la-admin/category/change-status/'.$two->id.'?status='.$two->status)}}">

                                <input type="submit" value="YES" class="btn btn-xs btn-success"> 
                                {{ csrf_field() }}
                                </form>
                                @endif
                                </td>
                                <td><a href="{{url('la-admin/category/'.$two->id)}}" class="btn btn-xs btn-warning">EDIT</a></td>
                                <td><form method="post" action="{{url('la-admin/category/'.$two->id)}}">
                                <input type="submit" value="DELETE" class="btn btn-xs btn-danger"> 
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                </form></td>
                              </tr>

                                        <?php 
                                        $three = DB::table('categories')->where('menu_levels', $two->id)
                                                                         ->where('user_levels', '2')
                                                                         ->get();
                                        ?>
                                        @foreach($three as $third)
                                        <tr bgcolor="gray">
                                          <td>{{$third->id}}</td>
                                          <td><img src="{{url($third->photo)}}" height="25"></td>
                                          <td>{{$third->name}}</td>
                                          <td>{{$third->row_order}}</td>
                                          <td>

                                          @if($third->status=="0")
                                          <form method="post" action="{{url('la-admin/category/change-status/'.$third->id.'?status='.$third->status)}}">
                                          <input type="submit" value="NO" class="btn btn-xs btn-danger"> 
                                          {{ csrf_field() }}
                                          </form>
                                          @else
                                          <form method="post" action="{{url('la-admin/category/change-status/'.$third->id.'?status='.$third->status)}}">

                                          <input type="submit" value="YES" class="btn btn-xs btn-success"> 
                                          {{ csrf_field() }}
                                          </form>
                                          @endif
                                          </td>
                                          <td><a href="{{url('la-admin/category/'.$third->id)}}" class="btn btn-xs btn-warning">EDIT</a></td>
                                          <td><form method="post" action="{{url('la-admin/category/'.$third->id)}}">
                                          <input type="submit" value="DELETE" class="btn btn-xs btn-danger"> 
                                          {{ csrf_field() }}
                                          {{ method_field('DELETE') }}
                                          </form></td>
                                        </tr>
                                        @endforeach          
                              @endforeach          
                      @endforeach








                          <tr bgcolor="#f4f4f4">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>

                  
                  </table>
                                    </div>
                                </div>

@endsection











