<!DOCTYPE html>
<html lang="en">
@include('page.layout.head')

<body>
	<!--/header-->
    @include('page.layout.header')
	
	<!--/slider-->
	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<div class="checkout-options">
				
			</div><!--/checkout-options-->

		
			<div class="shopper-informations">
                <form action="{{route('order')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="shopper-info">
                                <p>Thông tin giao hàng</p>
                                
                                    <input value= "{{$user->email}}" >
                                    <input type="text" name = "name" placeholder="Họ Tên">
                                    <input type="text" name="xa" placeholder="Xã">
                                    <input type="text" name = "huyen" placeholder="Huyện">
                                    <input type="text" name = "tinh" placeholder="Thành phố">
                                
                                <a class="btn btn-primary" href="">Get Quotes</a>
                                <button type="submit" class="btn btn-primary" href="">Continue</button>
                            </div>
                        </div>
                        <div class="col-sm-5 clearfix">
                            <div class="bill-to">
                                <p>Số điện thoại</p>
                                <div class="form-one">
                                    
                                </div>
                                <div class="form-two">
                                    <form>									
                                        <input value="{{$user ->phone}}">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="order-message">
                                <p>Note</p>
                                <textarea name="note"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
        
                            </div>	
                        </div>					
                    </div>
            </form>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach ($cart as $item)
								<tr>
									<td class="cart_product">
										<a href=""><img src="{{ asset('uploads/' . $item->product->image) }}" height="80" width="80"></a>
									</td>
									<td class="cart_description">
										<h4><a href="">{{$item->product->name}}</a></h4>
									</td>
									<td class="cart_price">
										<p>{{$item->product->price}}</p>
									</td>
									<td class="cart_quantity">
										<div class="cart_quantity_button">
											<a class="cart_quantity_up" href=""> + </a>
											<input class="cart_quantity_input" type="text" name="quantity" value="{{$item ->quantity}}" autocomplete="off" size="2">
											<a class="cart_quantity_down" href=""> - </a>
										</div>
									</td>
									<td class="cart_total">
										<p class="cart_total_price">{{$item->product->price * $item ->quantity}}</p>
									</td>
									<td class="cart_delete">
										<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
									</td>
								</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	<!--/Footer-->
    @include('page.layout.footer')
	@include('page.layout.script')
</body>
</html>