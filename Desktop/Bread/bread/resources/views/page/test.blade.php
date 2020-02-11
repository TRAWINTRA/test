@extends('layout.app')
@section('content')
<div class="input-group " style="background-color: white">
    {{--                                               +++++++--}}

    <span class="input-group-btn">
                                                    <button type="button" class="quantity-left-minus btn  btn-number"  data-type="minus" data-field="" style="background-color: white">
                                                     ลบ
                                                    </button>
                                                </span>

    <input type="text" id="quantity2" name="quantity" class="form-control input-number" value="0" min="0" max="100" >
    {{--                                                ----------}}

    <span class="input-group-btn">
                                                    <button type="button" class="quantity-right-plus btn  btn-number" data-type="plus" data-field="" style="background-color: white">
                                                        บวก
                                                    </button>
                                                </span>
</div>
