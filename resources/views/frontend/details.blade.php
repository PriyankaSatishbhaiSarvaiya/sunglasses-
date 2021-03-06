@extends('Frontend.common')
@section('title') Product @endsection
@section('content')
    <div class="page">
        <div class="main-container col2-left-layout ">
            <div class="breadcrumbs">
                <div class="container">
                    <ul>
                        <!-- <li class="home"> <a href="{{ url('/') }}" title="Go to Home Page">Home</a></li>
                        <li class="category4"> <strong>Product</strong></li> -->
                    </ul>
                </div>
            </div>
            @foreach ($products as $product)
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-main col-lg-12">
                                <div class="product-view">
                                    <div class="product-essential">
                                        <div class="row">
                                            <form action="#" method="post" id="product_addtocart_form">
                                                <div class="product-img-box clearfix col-md-5 col-sm-5 col-xs-12">
                                                    <div class="product-img-content">
                                                        <div class="product-image product-image-zoom">
                                                            <div class="product-image-gallery"> <span
                                                                    class="sticker top-left"><span
                                                                        class="labelnew">New</span></span><span
                                                                    class="sticker top-right"><span
                                                                        class="labelsale">Sale</span></span> <img
                                                                    id="image-main"
                                                                    class="gallery-image visible img-responsive"
                                                                    src="{{ asset('storage/' . $product->image) }}"
                                                                    alt="Short Sleeve Dress" title="Short Sleeve Dress" />
                                                            </div>
                                                        </div>
                                                        <!--- .product-image-->
                                                        <div class="more-views">
                                                            <h2>More Views</h2>
                                                            <ul class="product-image-thumbs">
                                                                <li> <a class="thumb-link" href="#" title=""
                                                                        data-image-index="0"> <img class="img-responsive sub_img"
                                                                        src="{{ asset('storage/' . $product->image) }}"
                                                                            alt="" /> </a>
                                                                </li>
                                                                @foreach ($subimages as $image)
                                                                    <li> <a class="thumb-link" href="#" title=""
                                                                            data-image-index="1"> <img
                                                                                class="img-responsive sub_img"
                                                                                src="{{ asset('storage/' . $image->product_images) }}"
                                                                                alt="" /> </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <!--- .more-views -->
                                                    </div>
                                                    <!--- .product-img-content-->
                                                </div>
                                                <!--- .product-img-box-->
                                                <div class="product-shop col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product-shop-content">
                                                        <input type="hidden" value="{{ $product->id }}" class="product_id">
                                                        <div class="product-name">
                                                            <h1>{{ $product->name }}</h1>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add Your
                                                                    Review</a></p>
                                                        </div>
                                                        <div class="product-type-data">
                                                            <div class="price-box">
                                                                <p class="old-price"> <span
                                                                        class="price-label">Regular
                                                                        Price:</span> <span class="price">
                                                                        ???{{ $product->price }}
                                                                    </span></p>
                                                                <p class="special-price"> <span
                                                                        class="price-label">Special
                                                                        Price</span> <span class="price">
                                                                        ???{{ $product->price }}
                                                                    </span></p>
                                                            </div>
                                                            @if($product->quanty > 0)
                                                            <p class="availability in-stock ">Availability: <span>In
                                                                    stock</span>
                                                            </p>
                                                            @else
                                                            <p class="availability in-stock ">Availability: <span style="color: red" >Out Of Stock
                                                                </span>
                                                                </p>
                                                        @endif
                                                            <div class="products-sku"> <span
                                                                    class="text-sku">Product
                                                                    Code: {{ $product->upc }}</span> demo_02</div>
                                                        </div>
                                                        <div class="short-description">
                                                            <h2>Short Description</h2>
                                                            <p>{{ $product->description }}</p>
                                                        </div>
                                                        <div class="add-to-box">
                                                            <div class="product-qty">
																<label for="qty">Qty:</label>
																<div class="custom-qty">
                                                                    <input type="text" name="qty" id="qty" maxlength="10" value="3" title="Qty" class="input-text qty" oninput="this.value = this.value.replace(/[^/1-10\s]/g, '').replace(/(\..*)\./g);" />
                                                                    <button  type="button" value="{{$product->id}}" class="increase items incrementBtn" >
                                                                    <i class="fa fa-plus"></i> </button>
                                                                    <button  type="button" class="reduced items decrementBtn" > <i class="fa fa-minus"></i> </button>
                                                                </div>
                                                            </div>
                                                            <div class="add-to-cart"> <button type="button"
                                                                    title="Add to Cart" class="button btn-cart"> <span>
                                                                        <span class="view-cart icon-handbag icons addToCart">Add to
                                                                            Cart</span> </span> </button></div>
                                                            <ul class="add-to-links">
                                                                <li> <a href="#" rel="tooltip" title="Add to Wishlist"
                                                                        onclick="productAddToCartForm.submitLight(this, this.href); return false;"
                                                                        class="link-wishlist"> <i
                                                                            class="icon-heart icons"></i>
                                                                        Add to Wishlist </a></li>
                                                                <li> <a href="#" class="link-compare"
                                                                        title="Add to Compare">
                                                                        <i class="icon-bar-chart icons"></i> Add to Compare
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="addit">
                                                            <div class="alo-social-links clearfix">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--- .product-shop-content-->
                                                </div>
                                                <!--- .product-shop-->
                                            </form>
                                        </div>
                                    </div>
                                    <!--- .product-essential-->
                                    <div class="product-wapper-tab clearfix">
                                        <ul class="toggle-tabs">
                                            <li class="item active" target=".box-description">Description</li>
                                            
                                        </ul>
                                        <div class="product-collateral">
                                            <div class="box-collateral box-description active">
                                                <h2>Description</h2>
                                                <h2>Details</h2>
                                                <div class="std">
                                                    <p>{{ $product->description }}</p>
                                                </div>
                                            </div>
                                            <div class="box-collateral box-additional">
                                                <h2>Additional Information</h2>
                                                <h2>Additional Information</h2>
                                                <table class="data-table" id="product-attribute-specs-table">
                                                    <col width="25%" />
                                                    <col />
                                                    <tbody>
                                                        <tr>
                                                            <th class="label">Type</th>
                                                            <td class="data">Dresses</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="label">Occasion</th>
                                                            <td class="data">Career</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="box-collateral box-reviews">
                                                <h2>Reviews</h2>
                                                <div class=" box-reviews" id="customer-reviews">
                                                    <h2>Customer Reviews</h2>
                                                    <dl>
                                                        <dt> <a href="#">simple product</a> Review by <span>simple
                                                                product</span></dt>
                                                        <dd>
                                                            <table class="ratings-table">
                                                                <col width="1" />
                                                                <col />
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Price</th>
                                                                        <td>
                                                                            <div class="rating-box">
                                                                                <div class="rating"
                                                                                    style="width:60%;">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Value</th>
                                                                        <td>
                                                                            <div class="rating-box">
                                                                                <div class="rating"
                                                                                    style="width:60%;">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Quality</th>
                                                                        <td>
                                                                            <div class="rating-box">
                                                                                <div class="rating"
                                                                                    style="width:60%;">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            simple product <small class="date">(Posted on
                                                                2/3/2015)</small>
                                                        </dd>
                                                    </dl>
                                                    <div class="form-add">
                                                        <h2>Write Your Own Review</h2>
                                                        <form action="#" method="post" id="review-form">
                                                            <input name="form_key" type="hidden" value="12lVej6LJoICMdM7" />
                                                            <fieldset>
                                                                <h3>You're reviewing: <span>Short Sleeve Dress</span></h3>
                                                                <h4>How do you rate this product? <em
                                                                        class="required">*</em></h4>
                                                                <span id="input-message-box"></span>
                                                                <table class="data-table" id="product-review-table">
                                                                    <col />
                                                                    <col width="1" />
                                                                    <col width="1" />
                                                                    <col width="1" />
                                                                    <col width="1" />
                                                                    <col width="1" />
                                                                    <thead>
                                                                        <tr>
                                                                            <th>&nbsp;</th>
                                                                            <th><span class="nobr">1 star</span>
                                                                            </th>
                                                                            <th><span class="nobr">2 stars</span>
                                                                            </th>
                                                                            <th><span class="nobr">3 stars</span>
                                                                            </th>
                                                                            <th><span class="nobr">4 stars</span>
                                                                            </th>
                                                                            <th><span class="nobr">5 stars</span>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Price</th>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[3]" id="Price_1"
                                                                                    value="11" class="radio" />
                                                                            </td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[3]" id="Price_2"
                                                                                    value="12" class="radio" />
                                                                            </td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[3]" id="Price_3"
                                                                                    value="13" class="radio" />
                                                                            </td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[3]" id="Price_4"
                                                                                    value="14" class="radio" />
                                                                            </td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[3]" id="Price_5"
                                                                                    value="15" class="radio" />
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Value</th>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[2]" id="Value_1" value="6"
                                                                                    class="radio" /></td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[2]" id="Value_2" value="7"
                                                                                    class="radio" /></td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[2]" id="Value_3" value="8"
                                                                                    class="radio" /></td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[2]" id="Value_4" value="9"
                                                                                    class="radio" /></td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[2]" id="Value_5"
                                                                                    value="10" class="radio" />
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Quality</th>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[1]" id="Quality_1"
                                                                                    value="1" class="radio" />
                                                                            </td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[1]" id="Quality_2"
                                                                                    value="2" class="radio" />
                                                                            </td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[1]" id="Quality_3"
                                                                                    value="3" class="radio" />
                                                                            </td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[1]" id="Quality_4"
                                                                                    value="4" class="radio" />
                                                                            </td>
                                                                            <td class="value"><input type="radio"
                                                                                    name="ratings[1]" id="Quality_5"
                                                                                    value="5" class="radio" />
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <ul class="form-list">
                                                                    <li>
                                                                        <label for="nickname_field"
                                                                            class="required"><em>*</em>Nickname</label>
                                                                        <div class="input-box"> <input type="text"
                                                                                name="nickname" id="nickname_field"
                                                                                class="input-text required-entry"
                                                                                value="" />
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <label for="summary_field"
                                                                            class="required"><em>*</em>Summary of
                                                                            Your
                                                                            Review</label>
                                                                        <div class="input-box"> <input type="text"
                                                                                name="title" id="summary_field"
                                                                                class="input-text required-entry"
                                                                                value="" />
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <label for="review_field"
                                                                            class="required"><em>*</em>Review</label>
                                                                        <div class="input-box"> <textarea
                                                                                name="detail" id="review_field" cols="5"
                                                                                rows="3" class="required-entry"></textarea>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </fieldset>
                                                            <div class="buttons-set"> <button type="submit"
                                                                    title="Submit Review"
                                                                    class="button"><span><span>Submit
                                                                            Review</span></span></button></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-collateral box-customtab">
                                                <h2>Custom Tab</h2>
                                                <h3>Custom Static Block</h3>
                                                <p>Custom CMS block displayed as a tab. You can use it to display info about
                                                    returns and refunds, latest promotions etc. You can put your own content
                                                    here: text, HTML, images - whatever you like. There are <strong>many
                                                        similar
                                                        blocks</strong> accross the store. All CMS blocks are editable from
                                                    the
                                                    admin panel.</p>
                                            </div>
                                            <div class="box-collateral box-tags">
                                                <h2>Product Tags</h2>
                                                <h3>Other people marked this product with these tags:</h3>
                                                <ul class="product-tags">
                                                    <li><a href="#">Menstyle</a> (1)</li>
                                                </ul>
                                                <form id="addTagForm" action="#" method="get">
                                                    <div class="form-add">
                                                        <label for="productTagName">Add Your Tags:</label>
                                                        <div class="input-box"> <input type="text"
                                                                class="input-text required-entry" name="productTagName"
                                                                id="productTagName" /></div>
                                                        <button type="button" title="Add Tags" class="button"
                                                            onclick="submitTagForm()"> <span> <span>Add Tags</span> </span>
                                                        </button>
                                                    </div>
                                                </form>
                                                <p class="note">Use spaces to separate tags. Use single quotes
                                                    (')
                                                    for phrases.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--- .product-wapper-tab-->
                                </div>
                                <!--- .product-view-->
                            </div>
                            <!--- .col-main-->
                        </div>
                        <!--- .row-->
                    </div>
                    <!--- .main-->
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('custom_scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script>

    $(document).ready(function(){



        jQuery('.thumb-link').hover(function () {
                jQuery('#image-main').attr('src',jQuery(this).children('.sub_img').attr('src'));
            });         
		
        $('.incrementBtn').click(function(){
            var iValue = $('.qty').val();
            var id = $(this).val();
            var value = parseInt(iValue,10);
            value = isNaN(value) ? 0 : value;
            
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/increment/"+id,
                
                success: function(data){
                    // document.write(response);
                    if(value <23)
                    {
                        value++;
                        $('.qty').val(value);   
                    }
                }      
            });
        });

        $(document).on('click','.decrementBtn',function(){
            var dValue = $('.qty').val();
            var value = parseInt(dValue,10);
            value= isNaN(value) ? 0 : value;
            if(value>1)
            {
                value--;
                $('.qty').val(value);
            }
            
        });

        $(document).on('click','.addToCart',function(){
            var product_id = $('.product_id').val();
            var quantity = $('.qty').val();
            // alert(product_id);
            // alert(quantity);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: "GET",
                url: "/add-to-cart",
                data: {
                    'product_id' : product_id,
                    'quantity' : quantity,
                },
                success: function(response){
                    alert(response.status);
                }
            });
        });
    });
</script>

@endsection