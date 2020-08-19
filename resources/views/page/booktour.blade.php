@extends('master')
@section('content')
<head>
    <title>Lịch sử đặt tour</title>
</head>
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ url('/book-tour-histories') }}">LỊCH SỬ ĐẶT TOUR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
		<div id="content">
			
			<form action="#" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-6">
						<h4>Đặt hàng</h4>
						<div class="space20">&nbsp;</div>

						
					
						<div class="section">
            <label for="guestname" class="field-label">Please Enter Your Name</label>
            <p @error('name') class="error" @enderror>
            <label for="guestname" class="field prepend-icon">
              <input type="text" name="name" id="guestname" class="gui-input" required="" placeholder="Enter your name">
              @error('name')
              {{ $message }}
               @enderror
              </p>
              <span class="field-icon"><i class="fa fa-user"></i></span>  
            </label>
          </div>
               
    <div class="frm-row">
      <div class="section colm colm6">
        <label for="guestemail" class="field-label">Email Address</label>
        <label for="guestemail" class="field prepend-icon">
          <input type="email" name="guestemail" id="guestemail" class="gui-input" required="" placeholder="john@something.com">
          <span class="field-icon"><i class="fa fa-envelope"></i></span>  
        </label>
      </div>
   
  <div class="section colm colm6">
    <label for="guestelephone" class="field-label">Telephone / Mobile</label>
    <label for="guestelephone" class="field prepend-icon">
      <input type="text" name="guestelephone" id="guestelephone" class="gui-input" required="" placeholder="Telephone / Moble Number">
      <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
    </label>
  </div>
</div>
 
<div class="frm-row">
  <div class="section colm colm6">
    <label for="adults" class="field-label">Number of Adults</label>
    <label for="adults" class="field prepend-icon">
      <input type="number" id="adults" name="adults" class="gui-input" required="" placeholder="Number of adults">
      <span class="field-icon"><i class="fa fa-users"></i></span>  
    </label>
  </div>
   
  <div class="section colm colm6">
    <label for="children" class="field-label">Number of Children</label>
    <label for="children" class="field prepend-icon">
      <input type="number" id="children" name="children" class="gui-input" required="" placeholder="Number of children">
      <span class="field-icon"><i class="fa fa-users"></i></span>  
    </label>
  </div>
</div>
 
<div class="frm-row">
  <div class="section colm colm6">
    <label for="checkin" class="field-label">Check-in Date</label>
    <label for="checkin" class="field prepend-icon">
      <input type="text" id="checkin" name="checkin" class="gui-input" required="" placeholder="mm/dd/yyyy">
      <span class="field-icon"><i class="fa fa-calendar"></i></span>  
    </label>
  </div>
   
  <div class="section colm colm6">
    <label for="checkout" class="field-label">Check-out Date</label>
    <label for="checkout" class="field prepend-icon">
      <input type="text" id="checkout" name="checkout" class="gui-input" required="" placeholder="mm/dd/yyyy">
      <span class="field-icon"><i class="fa fa-calendar"></i></span>  
    </label>
  </div>
</div>
 
<div class="spacer-t20 spacer-b30">
  <div class="tagline"><span>Please answer these questions for a pleasant stay</span></div>
</div>
 
<div class="frm-row">
  <div class="option-group field">
   
    <div class="section colm colm6">
      <label class="switch">
        <input type="checkbox" name="switch1" id="switch1" value="switch1">
        <span class="switch-label" data-on="YES" data-off="NO"></span>
        <span>Will you be bringing a pet?</span>
      </label>
    </div>
         
    <div class="section colm colm6">
      <label class="switch">
        <input type="checkbox" name="switch2" id="switch2" value="switch2">
        <span class="switch-label" data-on="YES" data-off="NO"></span>
        <span>Do you need us to pick you up?</span>
      </label>
    </div>
               
  </div>
</div>
 
 
 
<div class="section">
  <label for="comment" class="field-label">Anything else we should know about?</label>
  <label for="comment" class="field prepend-icon">
    <textarea class="gui-textarea" id="comment" name="comment" placeholder="Let us know about any special accommodation needs"></textarea>
    <span class="field-icon"><i class="fa fa-comments"></i></span>
    <span class="input-hint"> 
      <strong>Please:</strong> Be as descriptive as possible
    </span>   
  </label>
</div>
						


					
					
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
										<div class="media">
											<img width="25%" src="assets/dest/images/shoping1.jpg" alt="" class="pull-left">
											<div class="media-body">
												<p class="font-large">Men's Belt</p>
												<span class="color-gray your-order-info">Color: Red</span>
												<span class="color-gray your-order-info">Size: M</span>
												<span class="color-gray your-order-info">Qty: 1</span>
											</div>
										</div>
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 class="color-black">$235.00</h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="text-center"><a class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection
		