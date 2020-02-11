@extends('layouts.app', ['activePage' => 'product', 'titlePage' => __('Product')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-header card-header-tabs card-header-primary " >
                                <span class="nav-tabs-title" style="font-size:3rem">Table Breads </span>
                                <div class="nav-tabs-navigation justify-content-center" style="float: right">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#myModal" data-toggle="modal" data-target="#myModal">
                                                    <i class="material-icons">add</i> Add
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Detail
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Tools
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach ($breads as $bread)
                                    <tr>
                                        <td>
                                            {{ $bread->bread_id }}

                                        </td>
                                        <td>
                                            {{ $bread->bread_name }}
                                        </td>
                                        <td>
                                            {{ $bread->bread_total }}
                                        </td>
                                        <td>
                                            {{ $bread->bread_price }}
                                        </td>
                                        <td>
                                            {{ $bread->bread_detail }}
                                        </td>
                                        <td>
{{--                                            {{ $bread->bread_img }}--}}
                                            <img src="/uploads/breads/{{ $bread->bread_img }}" height="150rem" width="150rem" />
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-warning edit" id="id_edit" name="id" value="{{ $bread->bread_id}}"
                                                    data-id="{{$bread->bread_id}}"
                                                    data-name="{{$bread->bread_name}}"
                                                    data-total="{{$bread->bread_total}}"
                                                    data-price="{{$bread->bread_price}}"
                                                    data-detail="{{$bread->bread_detail}}"
                                                    data-img="{{$bread->bread_img}}"
                                                    data-toggle="modal" data-target="#show_update">EDIT</button>
                                            <button type="submit" class="btn btn-danger del" id="id_del" name="id" value="{{ $bread->bread_id}}" data-id="{{$bread->bread_id}}" data-toggle="modal" data-target="#chk_delete">DELETE</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Add data bread</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <form action="{{ route('add_breads') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Name : </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Total : </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="total" name="total">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-2 col-form-label">price : </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="price" name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">Detail : </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="detail" name="detail">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-2 col-form-label">img : </label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" value="" id="img" name="img" style="z-index: 0; opacity: 1">
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" >OK</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </form>

                            <!-- Modal footer -->



                        </div>
                    </div>
                </div>
                <div class="modal" tabindex="-1" role="dialog" id="chk_delete">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure delete ID : <input id="show_id_del" readonly maxlength="3" style="border: 0px !important; width: 5% !important;">?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{route('delete')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="btn btn-success" name="id_del_modal" id="id_del_modal">OK</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal" id="show_update">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update data bread</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <form action="{{ route('edit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Name : </label>
                                        <div class="col-10">
                                            <input hidden id="update_id" name="update_id">
                                            <input class="form-control" type="text" value="" id="update_name" name="update_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Total : </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="update_total" name="update_total">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-2 col-form-label">price : </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="update_price" name="update_price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">Detail : </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="" id="update_detail" name="update_detail">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-2 col-form-label">img : </label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" value="" id="update_img" name="update_img" style="z-index: 0; opacity: 1">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">OK</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </form>

                            <!-- Modal footer -->



                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
{{--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.js"></script>--}}
    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.js"
        integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $(".del").click(function(){
                var data=$(this).attr("data-id");
                $("#show_id_del").val(data);
                $("#id_del_modal").val(data);
            });
            $(".edit").click(function () {
                var id=$(this).attr("data-id");
                var name=$(this).attr("data-name");
                var total=$(this).attr("data-total");
                var price=$(this).attr("data-price")
                var detail=$(this).attr("data-detail");
                var img=$(this).attr("data-img");
                $("#update_id").val(id);
                $("#update_name").val(name);
                $("#update_total").val(total);
                $("#update_price").val(price);
                $("#update_detail").val(detail);
                $("#update_img").val(img);
            })
        });
    </script>
@endsection

