@extends('layouts.admin')
@section('content')

<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Thêm Sản Phẩm
    </h2>
</div>
<form action="{{route('api.product.store')}} " method="post" enctype="multipart/form-data">


<div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">

    <div class="intro-y col-span-11 2xl:col-span-9">
        <!-- BEGIN: Upload Product -->
        <div class="intro-y box p-5">
            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Thêm sản phẩm </div>
                <div class="mt-5">
                    <div class="flex items-center text-slate-500">
                        <span><i data-lucide="lightbulb" class="w-5 h-5 text-warning"></i></span>
                        <div class="ml-2">  </div>
                    </div>
                    <!-- BEGIN: Multiple File Upload -->
                    <div class="intro-y box mt-5">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Upload Ảnh
                            </h2>
                        </div>
                        <div class="mt-5">
                        @foreach($color as $each)
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left ml-6">
                                        <div class="flex items-center">
                                            <div class="font-medium ">{{$each->name}}</div>
{{--                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div id="multiple-file-upload" class="p-5">
                                        <input name="{{$each->id}}_image[]" type="file" multiple accept="image/*"/>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </div>
                    </div>
                    <!-- END: Multiple File Upload -->
                </div>
            </div>
        </div>
        <!-- END: Upload Product -->

        <!-- BEGIN: Product Information -->

            <div class="intro-y box p-5 mt-5">
            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i>Thông tin sản phẩm </div>
                <div class="mt-5">
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Tên Sản Phẩm</div>
                                    <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                </div>
                                <div class="leading-relaxed text-slate-500 text-xs mt-3"> </div>
                            </div>
                        </div>
                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <input id="product-name" type="text" class="form-control" placeholder="Product name" name="name">
                            @if($errors->has('name'))
                                <div class="text-danger ">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Nhan Hàng</div>
                                    <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <select id="pg" class="form-select" name="brand">
                                @foreach($brand as $each)
                                <option value="{{$each->id}}">{{$each->name}}</option>
                                @endforeach
                            </select>
{{--                            @if($errors->has('brand'))--}}
{{--                                <div class="text-danger ">{{ $errors->first('brand') }}</div>--}}
{{--                            @endif--}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END: Product Information -->
        <!-- BEGIN: Product Detail -->
        <div class="intro-y box p-5 mt-5">
            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Chi tiết sản phẩm </div>
                <div class="mt-5">
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Trạng thái sản phẩm</div>
                                    <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                </div>
                                <div class="leading-relaxed text-slate-500 text-xs mt-3">  </div>
                            </div>
                        </div>
                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <div class="form-check form-switch">
                                <input id="product-status-active" class="form-check-input" type="checkbox" name="status">
                                <label class="form-check-label" for="product-status-active">Trạng thái</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">

                        <div class="form-label xl:w-64 xl:!mr-10">

                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Trending</div>
                                    <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <div class="flex flex-col sm:flex-row">
                                <div class="form-check mr-4">
                                    <input id="condition-new" class="form-check-input" type="radio" name="trending" value="1">
                                    <label class="form-check-label" for="condition-new">Có</label>
                                </div>
                                <div class="form-check mr-4 mt-2 sm:mt-0">
                                    <input id="condition-second" class="form-check-input" type="radio" name="trending" value="0">
                                    <label class="form-check-label" for="condition-second">Không</label>
                                </div>
                                @if($errors->has('trending'))
                                    <div class="text-danger ">{{ $errors->first('trending') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Mô tả sản phẩm</div>
                                    <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                </div>
                                <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                </div>
                            </div>
                        </div>
                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <div class="mt-3">
                                <label>Mô tả sản phẩm</label>
                                <div class="mt-2 " >
                                    <textarea name="description" class="form-control" cols="64px" rows="6" placeholder="Content of description."></textarea>
                                </div>
                                @if($errors->has('description'))
                                    <div class="text-danger ">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Product Detail -->
        <!-- BEGIN: Product Variant -->
        <div class="intro-y box p-5 mt-5">
            <div class=" input_fields_wrap border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Cấu hình sản phẩm </div>
                <div class="mt-5">
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label sm:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Cấu hình</div>
                                </div>
                                <div class="leading-relaxed text-slate-500 text-xs mt-2">  </div>
                            </div>
                        </div>
                        <div class=" w-full mt-3 xl:mt-0 flex-1 xl:text-right">
                            <button type="button" class="add_field_button btn btn-primary w-44" onclick="addfield()"><i data-lucide="plus" class="w-4 h-4 mr-2"></i> Thêm cấu hình mới</button>
                        </div>
                        </div>
                </div>
                <div class="mt-5">
                    @foreach($tech_spec as $each)
                        <div class="sm:grid grid-cols-6 gap-2 p-3">
                            <div class="input-group">
                                <div id="input-group-email" class="input-group-text"> <i data-lucide="phone" class="w-5 h-5"></i> </div> <input type="text" class="form-control" placeholder="{{$each->name}}" name="{{$each->id}}">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- END: Product Variant -->
        <!-- BEGIN: Product Variant (Details) -->
        <div class="intro-y box p-5 mt-5">
            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Sản phẩm</div>
                <div class="mt-5">
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                        <div class="form-label xl:w-64 xl:!mr-10">
                            <div class="text-left">
                                <div class="flex items-center">

                                </div>
                                <div class="leading-relaxed text-slate-500 text-xs mt-3"> Thêm giá và số lượng cho từng sản phẩm </div>
                            </div>
                        </div>
                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <div class="overflow-x-auto">
                                <table class="table border">
                                    <thead>
                                    <tr>
                                        <th class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap">Dung lượng</th>
                                        <th class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap">
                                            <div class="flex items-center">Màu <i data-lucide="help-circle" class="w-4 h-4 ml-2"></i></div>
                                        </th>
                                        <th class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap !px-2">Giá</th>
                                        <th class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap !px-2">
                                            <div class="flex items-center">
                                                <div class=" relative w-4 h-4 mr-2 -mt-0.5 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-primary/20 before:rounded-full lg:before:animate-ping after:content-[''] after:absolute after:w-4 after:h-4 after:bg-primary after:rounded-full after:border-4 after:border-white/60 after:dark:border-darkmode-300 "></div>
                                                Số lượng <i data-lucide="help-circle" class="w-4 h-4 ml-2"></i>
                                            </div>
                                        </th>
                                        <th class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap !pl-2">Enable</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($memory as $memory_item)
                                        @foreach($color as $color_item)

                                    <tr>
                                        @if($color_item->id===$color['0']->id)
                                      <td rowspan="{{count($color) }}" class="border-r">{{$memory_item->value}}</td>
                                        @endif
                                        <td>{{$color_item->name}}</td>

                                        <td class="!px-2">
                                            <div class="input-group">
                                                <div class="input-group-text">$</div>
                                                <input type="text" class="form-control min-w-[6rem]" placeholder="Price" name="{{$memory_item->id}}_{{$color_item->id}}_price">
                                            </div>
                                        </td>
                                        <td class="!px-2">
                                            <input type="text" class="form-control min-w-[6rem]" placeholder="Stock" name="{{$memory_item->id}}_{{$color_item->id}}_amount">
                                        </td>
                                        <td class="!pl-2">
                                            <div class="form-switch mt-2">
                                                <input type="checkbox" class="form-check-input" name="{{$memory_item->id}}_{{$color_item->id}}_status">
                                            </div>
                                        </td>

                                    </tr>
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Product Variant (Details) -->


        <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
           <a href="{{route('product')}}"> <button type="button"  class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Hủy</button></a>
            <button type="submit"  class="btn py-3 btn-primary w-full md:w-52">Lưu</button>
        </div>

    </div>




</div>

</form>

<script>    function addfield(){

        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        var x = 1; //initlal text box count

        if(x < max_fields){ //max input box allowed
            $(wrapper).append('<div class="sm:grid grid-cols-6 gap-2 p-3"><div class="input-group w-full  mr-2"><div class="input-group-text">+</div><input type="text" class="form-control min-w-[6rem] w-1/2" placeholder="Name"><input type="text" class="form-control min-w-[6rem] mr-2 p-2" placeholder="Value"></div></div>');
        x++;
        }
    }

    function deleteimg() {

        const element = document.getElementById("box");
        element.remove();
    }</script>
@endsection
