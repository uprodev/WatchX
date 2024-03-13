<?php
?>
<div class="sell-popup" id="sell" style="display: none;">
    <div class="main">
        <div class="top">
            <h6>Get Your Quote to Sell</h6>
            <div class="close-menu">
                <a href="#" data-fancybox-close><img src="<?= get_template_directory_uri();?>/img/close.svg" alt=""></a>
			</div>
		</div>
		<div class="wrap">
				<form action="#" class="form-popup">
					<div class="swiper step-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">

								<div class="d-flex">
									<h6 class="title">Contact</h6>
									<div class="input-wrap input-wrap-val">
										<label for="name"></label>
										<input type="text" name="name" id="name" placeholder="Your First Name *" required>
									</div>
									<div class="input-wrap input-wrap-val">
										<label for="lastName"></label>
										<input type="text" name="lastName" id="lastName" placeholder="Your Second Name *" required>
									</div>
									<div class="input-wrap input-wrap-full input-wrap-val">
										<label for="tel"></label>
										<input type="number" name="tel" id="tel" placeholder="Your Phone Number *" required>
									</div>
									<div class="input-wrap input-wrap-full input-wrap-val">
										<label for="emailPopup"></label>
										<input type="email" name="emailPopup" id="emailPopup" placeholder="Your Email Address *" required>
									</div>
								</div>
								<div class="btn-wrap btn-wrap-dis">
									<a href="#" class="btn-default btn-next">Next</a>
								</div>
							</div>
							<div class="swiper-slide">

								<div class="d-flex">
									<h6 class="title">Watch Details</h6>
									<div class="input-wrap input-wrap-full select-block">
										<label class="form-label" for="select-1"></label>
										<select id="select-1" required>
											<option value="0" selected disabled>Select brand *</option>
											<option value="1">brand 1</option>
											<option value="2">brand 2</option>
											<option value="3">brand 3</option>
										</select>
									</div>
									<div class="input-wrap input-wrap-full select-block">
										<label class="form-label" for="select-2"></label>
										<select id="select-2" required>
											<option value="0" selected disabled>Model *</option>
											<option value="1">Model 1</option>
											<option value="2">Model 2</option>
											<option value="3">Model 3</option>
										</select>
									</div>
									<div class="input-wrap input-wrap-full select-block">
										<label class="form-label" for="select-3"></label>
										<select id="select-3" required>
											<option value="0" selected disabled>Reference number *</option>
											<option value="1">number 1</option>
											<option value="2">number 2</option>
											<option value="3">number 3</option>
										</select>
									</div>
									<div class="input-wrap input-wrap-full select-block">
										<label class="form-label" for="select-4"></label>
										<select id="select-4" required>
											<option value="0" selected disabled>Condition *</option>
											<option value="1">Condition 1</option>
											<option value="2">Condition 2</option>
											<option value="3">Condition 3</option>
										</select>
									</div>
									<div class="input-wrap-check">
										<div class="text">
											<p>Do you have original box and papers?</p>
											<p>Please check all that apply.</p>
										</div>
										<div class="wrap-check">
											<div class="check">
												<input type="checkbox" name="check-1" id="check-1">
												<label for="check-1">Box</label>
											</div>
											<div class="check">
												<input type="checkbox" name="check-2" id="check-2">
												<label for="check-2">Papers</label>
											</div>
										</div>
									</div>

									<h6 class="title">Add Photos</h6>
									<p class="info">The more photos you include, the more accurate your valuation will be.</p>
									<div class=" input-wrap-file">
										<input type="file" name="file" id="file">
										<label for="file">
											<img src="img/icon-21.svg" alt="">
											<span class="text-file">Drag and Drop or Choose Image</span>
											<span class="file-info"></span>
										</label>
									</div>
								</div>
								<div class="btn-wrap">
									<button type="submit" class="btn-default">Get my quote now</button>
								</div>
							</div>

						</div>
						<div class="swiper-pagination step-pagination"></div>
					</div>


				</form>
		</div>
	</div>
</div>

