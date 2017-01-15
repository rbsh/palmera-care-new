<div class="col-md-12" style="margin-bottom: 25px">
    <div class="form-actions top">
        <div class="btn-set pull-right">
            <button type="submit" name="submit" class="btn green" value="red">Submit the Item</button>
            <button type="button" class="btn default" value="red">Cancel</button>
        </div>
        {{--           <div class="btn-set pull-right">
            <button type="button" class="btn default">Action 1</button>
            <button type="button" class="btn red">Action 2</button>
            <button type="button" class="btn yellow">Action 3</button>
        </div>
    --}}        </div>
</div>
<br>
<br><br>
<br>
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
        <i class="fa fa-gift"></i>Add your Item</div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="tabbable-custom nav-justified">
            <ul class="nav nav-tabs nav-justified">
                
                <li class="active">
                    <a href="#tab_1_1_1" data-toggle="tab" aria-expanded="true"> Category </a>
                </li>
                <li class="">
                    <a href="#tab_1_1_2" data-toggle="tab" aria-expanded="false"> Item Informatiom </a>
                </li>
                <li class="">
                    <a href="#tab_1_1_3" data-toggle="tab" aria-expanded="false"> Sizes </a>
                </li>
                <li class="">
                    <a href="#tab_1_1_4" data-toggle="tab" aria-expanded="false"> Tabz </a>
                </li>
            </ul>
            <div class="tab-content">



                <div class="tab-pane active" id="tab_1_1_1">
                    <p><div class="form-group">

                                        <?php $first = DB::table('categories')->where('menu_levels','0')->get(); ?>
                                @foreach($first as $one)
                                <input type="checkbox" name="category_id" value="{{$one->id}}" disabled=""><font color="#ff9800"> {{$one->name}}</font><br>
                                    <?php $second = DB::table('categories')->where('menu_levels',$one->id)->where('user_levels','1')->get(); ?>
                                        @foreach($second as $two)
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="category_id" value="{{$two->id}}" disabled=""><font color="#a41fbb">{{$two->name}}</font><br>
                                            <?php $third = DB::table('categories')->where('menu_levels',$two->id)->where('user_levels','2')->get(); ?>
                                                @foreach($third as $three)
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="category_id[]" value="{{$three->id}}">{{$three->name}}<br><br>
                                                @endforeach
                                        @endforeach
                                @endforeach
                                    </div></p>
                </div>


                <div class="tab-pane" id="tab_1_1_2">
                    <p><div class="portlet-body form">
                        <div class="form-body" style="display: inline-block; width: 100%;">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" value="{{$item->item_title or old('item_title')}}" name="item_title"  class="form-control" placeholder="Enter Item name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Brand</label>
                                        <input type="text" value="{{$item->brand or old('brand')}}" name="brand"  class="form-control" placeholder="Enter brand name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Short Description</label>
                                        <textarea name="short_desc" data-provide="markdown" rows="7">{{$item->short_desc or old('short_desc')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Delivery Area</label>
                                        <select class="form-control" name="delivery_area">
                                            <option value="local">Local Delivery</option>
                                            <option value="international">International Delivery</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Video</label>
                                        <input type="text" value="{{$item->video or old('video')}}" name="video"  class="form-control" placeholder="Enter video path">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Photo</label>
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <span class="btn green btn-file">
                                                <input type="file" name="photo"> </span>
                                                <span class="fileinput-filename"> </span> &nbsp;
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Detail Description</label>
                                            <textarea name="text" data-provide="markdown" rows="7">{{$item->text or old('text')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></p>
                    </div>
                    
                    <div class="tab-pane" id="tab_1_1_3">
                        <p>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <ul class="nav nav-tabs tabs-left">
                                            <li class="active">
                                                <a href="#c1" data-toggle="tab"> Price Seciton 1 </a>
                                            </li>
                                            <li class="">
                                                <a href="#c2" data-toggle="tab"> Price Seciton 2 </a>
                                            </li>
                                            <li class="">
                                                <a href="#c3" data-toggle="tab"> Price Seciton 3 </a>
                                            </li>
                                            <li class="">
                                                <a href="#c4" data-toggle="tab"> Price Seciton 4 </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="c1">
                                                <p>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Price </label>
                                                            <input type="text" value="{{$item->price_1 or old('price_1')}}" name="price_1"  class="form-control" placeholder="Enter price">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Discount Price </label>
                                                            <input type="text" value="{{$item->dis_price_1 or old('dis_price_1')}}" name="dis_price_1"  class="form-control" placeholder="Enter discount Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Size </label>
                                                            <input type="text" value="{{$item->size_1 or old('size_1')}}" name="size_1"  class="form-control" placeholder="Enter Size">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Quantity </label>
                                                            <input type="text" value="{{$item->qty_1 or old('qty_1')}}" name="qty_1"  class="form-control" placeholder="Enter QTY">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Maximum can order </label>
                                                            <input type="text" value="{{$item->max_1 or old('max_1')}}" name="max_1"  class="form-control" placeholder="Maximum Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Photo</label>
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <span class="btn green btn-file">
                                                                    <input type="file" name="image_1"> </span>
                                                                    <span class="fileinput-filename"> </span> &nbsp;
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="c2">
                                                    <p>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Price </label>
                                                                <input type="text" value="{{$item->price_2 or old('price_2')}}" name="price_2"  class="form-control" placeholder="Enter price">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Discount Price </label>
                                                                <input type="text" value="{{$item->dis_price_2 or old('dis_price_2')}}" name="dis_price_2"  class="form-control" placeholder="Enter discount Price">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Size </label>
                                                                <input type="text" value="{{$item->size_2 or old('size_2')}}" name="size_2"  class="form-control" placeholder="Enter Size">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Quantity </label>
                                                                <input type="text" value="{{$item->qty_2 or old('qty_2')}}" name="qty_2"  class="form-control" placeholder="Enter QTY">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Maximum can order </label>
                                                                <input type="text" value="{{$item->max_2 or old('max_2')}}" name="max_2"  class="form-control" placeholder="Maximum Number">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Photo</label>
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <span class="btn green btn-file">
                                                                        <input type="file" name="image_2"> </span>
                                                                        <span class="fileinput-filename"> </span> &nbsp;
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane fade" id="c3">
                                                        <p>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Price </label>
                                                                    <input type="text" value="{{$item->price_3 or old('price_3')}}" name="price_3"  class="form-control" placeholder="Enter price">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Discount Price </label>
                                                                    <input type="text" value="{{$item->dis_price_3 or old('dis_price_3')}}" name="dis_price_3"  class="form-control" placeholder="Enter discount Price">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Size </label>
                                                                    <input type="text" value="{{$item->size_3 or old('size_3')}}" name="size_3"  class="form-control" placeholder="Enter Size">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Quantity </label>
                                                                    <input type="text" value="{{$item->qty_3 or old('qty_3')}}" name="qty_3"  class="form-control" placeholder="Enter QTY">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Maximum can order </label>
                                                                    <input type="text" value="{{$item->max_3 or old('max_3')}}" name="max_3"  class="form-control" placeholder="Maximum Number">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Photo</label>
                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <span class="btn green btn-file">
                                                                            <input type="file" name="image_3"> </span>
                                                                            <span class="fileinput-filename"> </span> &nbsp;
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="c4">
                                                            <p>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Price </label>
                                                                        <input type="text" value="{{$item->price_4 or old('price_4')}}" name="price_4"  class="form-control" placeholder="Enter price">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Discount Price </label>
                                                                        <input type="text" value="{{$item->dis_price_4 or old('dis_price_4')}}" name="dis_price_4"  class="form-control" placeholder="Enter discount Price">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Size </label>
                                                                        <input type="text" value="{{$item->size_4 or old('size_4')}}" name="size_4"  class="form-control" placeholder="Enter Size">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Quantity </label>
                                                                        <input type="text" value="{{$item->qty_4 or old('qty_4')}}" name="qty_4"  class="form-control" placeholder="Enter QTY">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Maximum can order </label>
                                                                        <input type="text" value="{{$item->max_4 or old('max_4')}}" name="max_4"  class="form-control" placeholder="Maximum Number">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Photo</label>
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <span class="btn green btn-file">
                                                                                <input type="file" name="image_4"> </span>
                                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                    </div>












                                    <div class="tab-pane" id="tab_1_1_4">
                                        <p><div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab title 01</label>
                                                <input type="text" value="{{$item->tab_title_1 or old('tab_title_1')}}" name="tab_title_1"  class="form-control" placeholder="Tab Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab Content 01 </label>
                                                <textarea name="tab_text_1" data-provide="markdown" rows="7">{{$item->tab_text_1 or old('tab_text_1')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab title 02</label>
                                                <input type="text" value="{{$item->tab_title_2 or old('tab_title_2')}}" name="tab_title_2"  class="form-control" placeholder="Tab Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab Content 02 </label>
                                                <textarea name="tab_text_2" data-provide="markdown" rows="7">{{$item->tab_text_2 or old('tab_text_2')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab title 03</label>
                                                <input type="text" value="{{$item->tab_title_3 or old('tab_title_3')}}" name="tab_title_3"  class="form-control" placeholder="Tab Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab Content 03 </label>
                                                <textarea name="tab_text_3" data-provide="markdown" rows="7">{{$item->tab_text_3 or old('tab_text_3')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab title 04</label>
                                                <input type="text" value="{{$item->tab_title_4 or old('tab_title_4')}}" name="tab_title_4"  class="form-control" placeholder="Tab Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab Content 04 </label>
                                                <textarea name="tab_text_4" data-provide="markdown" rows="7">{{$item->tab_text_4 or old('tab_text_4')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab title 05</label>
                                                <input type="text" value="{{$item->tab_title_5 or old('tab_title_5')}}" name="tab_title_5"  class="form-control" placeholder="Tab Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab Content 05 </label>
                                                <textarea name="tab_text_5" data-provide="markdown" rows="7">{{$item->tab_text_5 or old('tab_text_5')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab title 06</label>
                                                <input type="text" value="{{$item->tab_title_6 or old('tab_title_6')}}" name="tab_title_6"  class="form-control" placeholder="Tab Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tab Content 06 </label>
                                                <textarea name="tab_text_6" data-provide="markdown" rows="7">{{$item->tab_text_6 or old('tab_text_6')}}</textarea>
                                            </div>
                                        </div></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom: 20px"></div>