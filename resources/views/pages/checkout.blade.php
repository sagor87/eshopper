
@include('partials.header')
@include('partials.success_message')
<div class="register-req col-sm-10 col-sm-offset-1">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-10 clearfix col-sm-offset-3">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form>
									
									<input type="text" name="shipping_email" placeholder="Email *">
									<input type="text" name="shipping_first_name" placeholder="First Name *">
									<input type="text" name="shipping_last_name" placeholder="Last Name *">
									<input type="text" name="shipping_address" placeholder="Address *">
									<input type="text" name="shipping_mobile_number" placeholder="Mobile Number *">
									<input type="text" name="shipping_city" placeholder="City *">
                                    <input type="submit"  class="btn btn-primary"  value="Confirm Checkout">
								</form>
							</div>
							
						</div>
					</div>
										
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
@include('partials.footer')