@extends('layout.app')
@section('content')
   <section>
       <div class="row">
           <div class="col-3">
               <section class="bt_bb_section bt_bb_top_spacing_medium bt_bb_bottom_spacing_large bt_bb_layout_boxed_1300 bt_bb_vertical_align_top">
                   <div class="bt_bb_port">
                       <div class="bt_bb_cell">
                           <div class="bt_bb_cell_inner">
                               <div class="bt_bb_row_wrapper">
                                   <div class="bt_bb_row bt_bb_column_gap_30" data-structure="12">
                                       <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_padding_normal" data-width="12">

                                           <div class="bt_bb_separator bt_bb_top_spacing_medium bt_bb_border_style_none"></div>
                                           <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_1 bt_bb_dash_none bt_bb_size_normal bt_bb_align_inherit">
                                               <h6><span class="bt_bb_headline_content"><span>Daily treats</span></span></h6></header>
                                           <header class="bt_bb_headline bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_inherit bt_bb_subheadline bt_bb_align_inherit">
                                               <div class="bt_bb_headline_subheadline">Your Order</div>
                                           </header>
                                           <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                                       </div>
                                   </div>
                               </div>

                               <div class="bt_bb_row_wrapper">
                                   <div class="bt_bb_row bt_bb_column_gap_30" data-structure="12">
                                       <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_padding_normal" data-width="12">

                                           <div class="bt_bb_separator bt_bb_top_spacing_medium bt_bb_border_style_none"></div>
                                           <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_1 bt_bb_dash_none bt_bb_size_normal bt_bb_align_inherit">
                                               <h6><span class="bt_bb_headline_content"><span>Daily treats</span></span></h6></header>
                                           <header class="bt_bb_headline bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_inherit bt_bb_subheadline bt_bb_align_inherit">
                                               <div class="bt_bb_headline_subheadline">test</div>
                                           </header>
                                           <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                                       </div>
                                   </div>

                               </div>

                           </div>
                       </div>
                   </div>
               </section>
           </div>
           <div class="col-md-6 col-12">
               <section class="bt_bb_section bt_bb_top_spacing_medium bt_bb_bottom_spacing_large bt_bb_layout_boxed_1300 bt_bb_vertical_align_top">
                   <div class="bt_bb_port">
                       <div class="bt_bb_cell">
                           <div class="bt_bb_cell_inner">
                               <div class="bt_bb_row_wrapper">
                                   <div class="bt_bb_row bt_bb_column_gap_30" data-structure="12">
                                       <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_padding_normal" style="background-color: rgba(14, 21, 49, 1);" data-width="12">

                                                   <div class="bt_bb_separator bt_bb_top_spacing_medium bt_bb_border_style_none"></div>
                                                   <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_1 bt_bb_dash_none bt_bb_size_normal bt_bb_align_inherit">
                                                       <h6><span class="bt_bb_headline_content"><span>Daily treats</span></span></h6></header>
                                                   <header class="bt_bb_headline bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_inherit bt_bb_subheadline bt_bb_align_inherit">
                                                       <div class="bt_bb_headline_subheadline">OUR REGULAR OFFER PLUS VARIOUS COMBINATIONS.
                                                           <br> DON,T WAIT, CHOOSE YOUR SWEET BITES NOW!</div>
                                                   </header>
                                                   <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                                       </div>
                                   </div>
                               </div>
                               <div class="bt_bb_row_wrapper">
                                   <div class="bt_bb_row bt_bb_column_gap_30" data-structure="4-4-4">
                                       <?php
                                        $i = 0
                                       ?>
                                       @foreach ($breads as $bread)
                                       <div class="bt_bb_column col-md-4 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_padding_double" style="background-color: rgba(14, 21, 49, 1);" data-width="4">
                                           <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                                           <header class="bt_bb_headline bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_medium bt_bb_superheadline bt_bb_align_inherit">
                                               <h3><span class="bt_bb_headline_superheadline" style="text-transform: uppercase;">{{ $bread->bread_name }}</span></h3></header>
                                           <div class="bt_bb_image bt_bb_shape_square bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle"><span><img src="/uploads/breads/{{ $bread->bread_img }}" title="pastry_transparent_01" alt="http://pastry.bold-themes.com/main-demo/wp-content/uploads/sites/8/2017/07/pastry_transparent_01.png"></span></div>
                                           <header class="bt_bb_headline bt_bb_color_scheme_2 bt_bb_dash_none bt_bb_size_extrasmall bt_bb_subheadline bt_bb_align_inherit">
                                               <div class="bt_bb_headline_subheadline">{{ $bread->bread_detail   }}</div>
                                           </header>
                                           <div class="bt_bb_separator bt_bb_top_spacing_normal bt_bb_border_style_none"></div>

                                           <div class="input-group " style="background-color: white">
                                                <span class="input-group-btn">
                                                    <button type="button" id="down-{{$i}}" class="quantity-left-minus btn  btn-number"  data-type="minus" data-field="" onclick="down({{$i}})" style="background-color: white">
                                                      <span class="glyphicon glyphicon-minus"></span>
                                                    </button>
                                                </span>

                                               <input type="text" id="quantity-{{$i}}" name="quantity" class="form-control input-number" value="0" min="0" max="100"  onkeyup=handleInput(this)>
                                               <span class="input-group-btn">
                                                    <button type="button" id="up-{{$i}}" class="quantity-right-plus btn btn-number select" data-type="plus" data-field="" style="background-color: white"
                                                            data-id="{{$bread->bread_id}}"
                                                            data-name="{{$bread->bread_name}}"
                                                            data-price="{{$bread->bread_price}}"
                                                            onclick="up({{$i}})"
                                                    >
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
                                                </span>
                                           </div>
                                                   <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                                       </div>
                                               <?php
                                               $i++
                                               ?>
                                       @endforeach
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>

           </div>
           <div class="col-12 col-md-3">
               <section class="bt_bb_section bt_bb_top_spacing_medium bt_bb_bottom_spacing_large bt_bb_layout_boxed_1300 bt_bb_vertical_align_top">
                   <div class="bt_bb_port">
                       <div class="bt_bb_cell">
                           <div class="bt_bb_cell_inner">
                               <div class="bt_bb_row_wrapper">
                                   <div class="bt_bb_row bt_bb_column_gap_30" data-structure="12">
                                       <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_padding_normal" data-width="12">

                                           <div class="bt_bb_separator bt_bb_top_spacing_medium bt_bb_border_style_none"></div>
                                           <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_1 bt_bb_dash_none bt_bb_size_normal bt_bb_align_inherit">
                                               <h6><span class="bt_bb_headline_content"><span>Daily treats</span></span></h6></header>
                                           <header class="bt_bb_headline bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_inherit bt_bb_subheadline bt_bb_align_inherit">
                                               <div class="bt_bb_headline_subheadline">
                                                   <div class="col-md-12 row">
{{--                                                        <div class="line1"></div>--}}
                                                       <div class="col-6 col-md-6 font-left">
                                                           <h4 class=" title" id="cart_title">
                                                               My Order
                                                           </h4>
                                                       </div>
                                                       <div class="col-6 col-md-6 font-left">
                                                           <div class="justify-content-end">
                                                               <span class="numitems" id="cart_numitems">(0 items)</span>
                                                           </div>
                                                       </div>
                                                       <div class="line2"></div>
                                                   </div>
                                                   <div class="empty_cart">
                                                       <div class="col-md-12 row">
                                                           @for( $n = 0; $n < 6; $n++)
                                                           <div class="col-6 col-md-6 font-left justify-content-center" id="show_data_select">
                                                                   <input type="text" id="bread-{{$n}}" name="bread" readonly>
                                                           </div>
                                                           <div class="col-6 col-md-6 font-left justify-content-center"  id="show_data_select">
                                                                   <input type="text" id="quantity1-{{$n}}" name="quantity" readonly>
                                                           </div>
                                                           @endfor
                                                       </div>
                                                       <div class="bt_bb_headline_subheadline" id="show_data_not_select">
                                                           <svg class="svg_empty_cart " width="53px" height="60px" viewBox="0 0 53 60">
                                                               <g>
                                                                   <path d="M47.5,15.6 C47.5,13.5 45.8,11.9 43.7,11.9 L35.5,11.9 C35.4,8.9 34.8,5.5 32.9,3.1 C31.2,1.1 28.9,-2.22044605e-15 25.9,-2.22044605e-15 C23.4,-2.22044605e-15 21.3,1 19.8,2.8 C17.7,5.2 16.9,8.9 16.7,11.9 L8.9,11.9 C6.8,11.9 5.1,13.5 5.1,15.6 L0,56.1 C0,58.2 1.7,59.9 3.8,59.9 L26.9,59.9 L48.8,59.9 C50.9,59.9 52.6,58.2 52.6,56.1 L47.5,15.6 L47.5,15.6 Z M21.2,4 C22.4,2.7 23.9,2 25.8,2 C28.2,2 30,2.9 31.3,4.4 C32.9,6.4 33.4,8.8 33.5,11.8 L18.6,11.8 C18.8,8.9 19.5,6 21.2,4 L21.2,4 Z M48.8,57.9 L26.9,57.9 L3.8,57.9 C2.8,57.9 2.1,57.1 2,56.2 L7.2,15.8 L7.3,15.7 L7.3,15.6 C7.3,14.6 7.9,14 8.9,14 L16.5,14 C16.5,16 16.7,17.3 16.7,17.4 C16.8,17.9 17.2,18.2 17.7,18.2 L17.8,18.2 C18.3,18.1 18.7,17.8 18.7,17.2 C18.7,17.2 18.5,16 18.6,14 L33.6,14 C33.5,16 33.3,17.1 33.3,17.1 C33.2,17.6 33.5,18.1 34.1,18.2 C34.6,18.3 35.2,18.1 35.3,17.5 C35.3,17.4 35.6,16 35.7,14 L43.9,14 C44.9,14 45.5,14.5 45.5,15.6 L45.5,15.7 L45.6,15.8 L50.7,56.2 C50.5,57.1 49.8,57.9 48.8,57.9 L48.8,57.9 Z"></path>
                                                               </g>
                                                           </svg>
                                                       <div class="text pt-3 pb-4">Browse our menu and start adding items to your order</div>
                                                   </div>
                                                   <div class="col-md-12 row">
                                                       <div class="line3"></div>
                                                       <div class="col-8 col-md-8 font-left">Subtotal</div>
                                                       <div class="min"></div>
                                                       <div class="amount">$0</div>
                                                       <div style="clear: both;"></div>
                                                       <div class="line3"></div>
                                                   </div>
                                                   <div class="col-md-12 row">
                                                       <div class="container">
                                                           <label class="field a-field a-field_a3">
                                                               <input class="field__input a-field__input" placeholder="Please enter name" required>
                                                               <span class="a-field__label-wrap">
                                                                  <span class="a-field__label">Name</span>
                                                               </span>
                                                           </label>
                                                           <label class="field a-field a-field_a3">
                                                               <input class="field__input a-field__input" placeholder="Please enter adddress" required>
                                                               <span class="a-field__label-wrap">
                                                                  <span class="a-field__label">Address</span>
                                                               </span>
                                                           </label>
                                                           <label class="field a-field a-field_a3">
                                                               <input class="field__input a-field__input" placeholder="Please enter email" required>
                                                               <span class="a-field__label-wrap">
                                                                  <span class="a-field__label">email</span>
                                                               </span>
                                                           </label>
                                                       </div>
                                                       <div class="container">
                                                           <label class="field a-field a-field_a3">
                                                               <input class="field__input a-field__input" placeholder="Please enter telephone" required>
                                                               <span class="a-field__label-wrap">
                                                                  <span class="a-field__label">Telephone</span>
                                                               </span>
                                                           </label>
                                                       </div>
                                                       <div class="line3"></div>
                                                   </div>
                                                   <div id="onlytakeoutdelivery" class="onlytakeoutdelivery">Online ordering unavailable</div>
                                                   <div class="buttonwrapper" style="padding: 4px 18px 18px 19px;">
                                                       <div class="orderNowButtonTooltip">
                                                           <div>
                                                               <button tabindex="0" role="button" aria-label="Order Now" class="openrest_checkoutcontinuebutton_wrapper ordernowbutton" aria-describedby="onlytakeoutdelivery checkout-continue-button-tooltip">
                                                                   <div class="buttonSpinner">
                                                                       <span class="Spinner__wrapper___2UQOO " style="width: 30px; height: 30px;">
                                                                           <svg class="Spinner__spinner___3FUcU" viewBox="0 0 44 44" style="width: 30px; height: 30px; border-radius: 50%; position: absolute; top: -4px; left: -4px;">
                                                                               <circle class="Spinner__path___9XMx-" cx="22" cy="22" r="20" fill="none" style="stroke: white;"></circle>
                                                                           </svg>
                                                                       </span>
                                                                   </div>
                                                                   <div class="buttonLabel">Order Now
                                                                   </div>
                                                               </button>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               </div>
                                           </header>
                                           <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                                       </div>
                                   </div>
                               </div>

                               <div class="bt_bb_row_wrapper">
                                   <div class="bt_bb_row bt_bb_column_gap_30" data-structure="12">
                                       <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_padding_normal" data-width="12">

                                           <div class="bt_bb_separator bt_bb_top_spacing_medium bt_bb_border_style_none"></div>
                                           <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_1 bt_bb_dash_none bt_bb_size_normal bt_bb_align_inherit">
                                               <h6><span class="bt_bb_headline_content"><span>Daily treats</span></span></h6></header>
                                           <header class="bt_bb_headline bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_inherit bt_bb_subheadline bt_bb_align_inherit">
                                               <div class="bt_bb_headline_subheadline">test</div>
                                           </header>
                                           <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                                       </div>
                                   </div>

                               </div>

                           </div>
                       </div>
                   </div>
               </section>
           </div>
       </div>
   </section>
   <script>
       var x = document.getElementById("show_data_select");
       var y = document.getElementById("show_data_not_select");
       x.style.display = "none";

       $(document).ready(function () {
           $(".select").click(function () {
               var id=$(this).attr("data-id");
               var name=$(this).attr("data-name");
               var price=$(this).attr("data-price");
               $("#update_id").val(id);
               $("#update_name").val(name);
               $("#update_price").val(price);
           });

       });

       function up(i) {
           quantity = parseInt($('#quantity-' + i).val());
           if (x.style.display === "none") {
               x.style.display = "block";
               y.style.display = "none";
           }
           $('#quantity-' + i).val(quantity + 1);
           $('#quantity1-' + i).val(quantity + 1);
           $('#bread-' + i).val("name");
       }

       function down(i) {
           quantity = parseInt($('#quantity-' + i).val());
           if (quantity === 0) {
               if (y.style.display === "none") {
                   y.style.display = "block";
                   x.style.display = "none";
               }
           }
           else if (quantity > 0) {
               $('#quantity-' + i).val(quantity - 1);
               $('#quantity1-' + i).val(quantity - 1);
           } else {
               if (y.style.display === "none") {
                   y.style.display = "block";
                   x.style.display = "none";
               }
           }
       }

   </script>
   <style>
       input {
           border: 0px !important;
           width: 100% ;
           margin: 0px ;
           text-align: center ;
       }
   </style>
@endsection
