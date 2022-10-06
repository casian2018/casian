<?php
include "header.php";

?>

<div class = "container-fluid" style = "margin-top: 30px;">

	<!-- Start: phone filter -->
	<div id = "phone_smart_fil">

		<div class = "phonefiltertop">
			<i onclick = "diplay_state('phone_smart_fil')" class = "fa fa-close me-auto" style = "cursor: pointer;"></i><span class = "ms-auto" style = "font-weight: bold;">فیلتر ها</span>
		</div>
		<!---->
		<div class = "border rounded" id = "filters">
			<ul class = "list-inline" id = "mobile-filter-list">
				<li class = "list-inline-item border rounded" id = "mobile-filter-list-item">
					<small>Text</small><i class = "icon ion-android-close"></i></li>
			</ul>
		</div>
		<!---->
		<!-- start kala-->
		<div class = "border rounded d-flex d-sm-flex d-md-flex d-lg-flex align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center" id = "kalayemojood">
			<span style = "font-size: 12px;padding: 10px;color: var(--bs-danger);cursor: pointer;">پاک کردن همه</span>
			<div class = "form-check form-switch me-auto" style = "margin-left: 15px;">
<!--				<input  value="Yes" name = "kalamojood" class = "form-check-input" type = "checkbox" id = "kalamojood"/><label class = "form-check-label" >فقط کالای موجود<br/></label>-->
			</div>
		</div>
		<!-- End: kalaye mojood -->

		<!-- Start: filter1 -->
		<div class = "border rounded" id = "pfilter1">
			<div onclick = "diplay_state('pfilter1body')" class = "d-flex d-md-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center pcfilterhader">
				<span>شبکه های ارتباطی</span><i class = "fas fa-chevron-down me-auto" style = "margin-right: 10px;"></i>
			</div>
			<div id = "pfilter1body" style = "display: none;">
				<ul class = "list-unstyled" style = "margin-top: 10px;">
					<li class = "d-md-flex align-items-md-center" style = "padding: 5px;">
						<input type = "checkbox" style = "margin-left: 5px;"/><span>4G</span></li>
					<li class = "d-md-flex align-items-md-center" style = "padding: 5px;">
						<input type = "checkbox" style = "margin-left: 5px;"/><span>4G</span></li>
					<li class = "d-md-flex align-items-md-center" style = "padding: 5px;">
						<input type = "checkbox" style = "margin-left: 5px;"/><span>4G</span></li>
				</ul>
			</div>
		</div>
		<!-- End: filter1 -->

		<!-- Start: ghymat -->
		<div class = "border rounded" id = "pfilter2">
			<div onclick = "diplay_state('pfilter2body')" class = "d-flex d-md-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center pcfilterhader">
				<span>محدوده قیمت</span><i class = "fas fa-chevron-down me-auto" style = "margin-right: 10px;"></i>
			</div>
			<div id = "pfilter2body" style = "display: none;">
				<div>
					<div class = "d-flex" id = "slider-range">
						<section class = "range-slider">
							<span class = "rangeValues"></span>
							<input value = "5" min = "0" max = "15" step = "0.5" type = "range" class = "slider">
							<input value = "10" min = "0" max = "15" step = "0.5" type = "range">
						</section>
					</div>
					<div class = "d-flex">
						<div class = "text-center d-grid" style = "width: 50%;padding: 5px;">
							<span>از</span><span id = "amount1m" style = "background: rgba(133,135,150,0.1);border-radius: 10px;">Text</span><span>تومان</span>
						</div>
						<div class = "text-center d-grid" style = "width: 50%;padding: 5px;">
							<span>تا</span><span id = "amount2m" style = "background: rgba(133,135,150,0.1);border-radius: 10px;">Text</span><span>تومان</span>
						</div>
					</div>
					<div class = "d-sm-flex d-md-flex justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center" style = "margin-bottom: 6px;">
						<button class = "btn btn-primary border rounded-pill" type = "button" style = "background: rgba(246,194,62,0.15);box-shadow: none;border: none;color: var(--bs-red);">اعمال محدودیت قیمت</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End: ghymat -->
	</div>
	<!-- End: phone filter -->

	<div class = "row" style = "margin: 0px;margin-bottom: 10%;">

		<!-- Start: menu -->
		<div class = "col">
			<nav class = "navbar navbar-light navbar-expand-md" style = "padding: 0px;">
				<div class = "container-fluid">
					<ul class = "list-inline d-sm-flex ms-auto justify-content-sm-center align-items-sm-center" style = "margin-bottom: 0px;">
						<li class = "list-inline-item d-sm-flex justify-content-sm-center align-items-sm-center" id = "page_loc_list_item">
							<div class = "d-sm-flex justify-content-sm-center align-items-sm-center">
								<svg xmlns = "http://www.w3.org/2000/svg" width = "1em" height = "1em" viewBox = "0 0 24 24" fill = "none" style = "margin-left: 5px;">
									<path d = "M16.2426 6.34317L14.8284 4.92896L7.75739 12L14.8285 19.0711L16.2427 17.6569L10.5858 12L16.2426 6.34317Z" fill = "currentColor"></path>
								</svg>
								<span>Text</span></div>
						</li>
					</ul>
				</div>
			</nav>

			<!-- Start: جست و جوی پیشرفته -->
			<div class = "text-end d-lg-none d-xl-none d-xxl-none">
				<div onclick = "diplay_state('phone_smart_fil')" class = "border rounded shadow-sm d-inline-flex align-items-center" id = "phonefilterbutn">
					<span>جست و جوی پیشرفته</span><i class = "fa fa-list-alt" style = "margin-right: 5px;margin-left: 5px;"></i>
				</div>
			</div>
			<!-- End: جست و جوی پیشرفته -->

			<div id = "productshow">
				<!-- Start: top filter -->
				<div class = "sortby">
					<div class = "d-flex">
						<i class = "fas fa-filter d-flex align-items-center"></i><span class = "d-flex align-items-center">مرتب سازی بر اساس : </span>
					</div>
					<ul class = "list-inline sortbylist">
						<li id="most_bay" onclick="sortfilter('most_bay')" class = "list-inline-item sortbyitem sortbyactive">پرفروش ترین</li>
						<li id="most_exp" onclick="sortfilter('most_exp')" class = "list-inline-item sortbyitem ">گران ترین</li>
						<li id="most_cheapest" onclick="sortfilter('most_cheapest')" class = "list-inline-item sortbyitem">ارزان ترین</li>
					</ul>
				</div>
				<!-- End: top filter -->

				<!-- Start: pc mod -->
				<ul class = "list-inline d-flex justify-content-end" id = "pcmode">
					<!--<button value="' . $item[0] . '" id="addtocartB"  class="fas fa-cart-plus border rounded-pill d-lg-flex mx-auto justify-content-lg-center align-items-lg-center f_add_cartB"  name="addToCart" type="button"></button>-->
				</ul>
				<!-- End: pc mod -->


			</div>
			<!-- Start: page num -->
			<div class = "text-center d-lg-flex justify-content-lg-center" style = "height: 30px;margin: 10px;">
				<ul class = "list-inline" style = "color: var(--bs-blue);">
					<li class = "list-inline-item"><i class = "fa fa-step-backward"></i></li>
					<li class = "list-inline-item">1</li>
					<li class = "list-inline-item"><i class = "fa fa-step-forward"></i></li>
				</ul>
			</div>
			<!-- End: page num -->
		</div>
		<!-- End: menu -->

		<!-- Start: filters -->
		<div class = "col-auto d-none d-lg-grid d-xl-grid d-xxl-grid mb-auto">
			<!-- Start: in line filtrs -->
			<form>
				<div class = "border rounded shadow-sm" id = "inlinefilter">
					<div id = "topdiv">
						<p style = "margin: 0px;font-size: 12px;font-weight: bold;color: var(--bs-gray-dark);">فیلتر های اعمال شده :</p>
						<span class = "me-auto" id = "delfilter">حذف</span>
					</div>
					<div id = "update_filter_list" style = "padding: 5px;">
						<!-- Start: filter bu -->

						<!-- End: filter bu -->
					</div>
				</div>
			</form>
			<!-- End: in line filtrs -->

			<!-- Start: kalaye mojood -->
			<form action = "" method = "post">
				<div class = "border rounded-pill shadow-sm d-sm-flex d-md-flex d-lg-flex justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center" id = "kalaye_mojood">
					<div class = "form-check form-switch">
						<input  name = "kalamojood" class = "form-check-input" type = "checkbox" id = "kalamojood"><label class = "form-check-label" >فقط کالای موجود<br></label>
					</div>
				</div>
			</form>
			<!-- End: kalaye mojood -->

			<!-- Start: filter1 -->
			<div class = "border rounded shadow-sm" id = "filter1">
				<div onclick = "diplay_state('filter1body')" class = "d-flex d-md-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center pcfilterhader">
					<span>شبکه های ارتباطی</span><i class = "fas fa-chevron-down me-auto" style = "margin-right: 10px;"></i>
				</div>
				<div id = "filter1body" style = "display: none;">
					<ul class = "list-unstyled" style = "margin-top: 10px;padding: 0px;padding-right: 10px;">
						<li class = "d-md-flex align-items-md-center" style = "padding: 5px;">
							<input type = "checkbox" style = "margin-left: 5px;"/><span>4G</span></li>
						<li class = "d-md-flex align-items-md-center" style = "padding: 5px;">
							<input type = "checkbox" style = "margin-left: 5px;"/><span>4G</span></li>
						<li class = "d-md-flex align-items-md-center" style = "padding: 5px;">
							<input type = "checkbox" style = "margin-left: 5px;"/><span>4G</span></li>
					</ul>
				</div>
			</div>
			<!-- End: filter1 -->

			<!-- Start: filter2 -->
			<div class = "border rounded shadow-sm" id = "filter2">
				<div onclick = "diplay_state('filter2body')" class = "d-flex d-md-flex d-lg-flex me-auto justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center pcfilterhader">
					<span>رنگ ها</span><i class = "fas fa-chevron-down me-auto" style = "margin-right: 10px;"></i></div>
				<div id = "filter2body" style = "display: none;">
					<ul class = "list-unstyled" style = "margin-top: 10px;padding: 0px;padding-right: 5px;padding-left: 10px;">
						<li class = "d-flex d-md-flex order-last align-items-md-center" style = "padding: 5px;">
							<input type = "checkbox" style = "margin-left: 5px;"/><span>ابی</span><i class = "fas fa-circle me-auto" style = "color: var(--bs-blue);font-size: 10px;"></i>
						</li>
						<li class = "d-flex d-md-flex order-last align-items-md-center" style = "padding: 5px;">
							<input type = "checkbox" style = "margin-left: 5px;"/><span>قرمز</span><i class = "fas fa-circle me-auto" style = "color: var(--bs-red);font-size: 10px;"></i>
						</li>
					</ul>
				</div>
			</div>
			<!-- End: filter2 -->

			<!-- Start: filter3 -->
			<div class = "border rounded shadow-sm" id = "filter3">
				<div onclick = "diplay_state('filter3body')" class = "d-flex d-md-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center pcfilterhader">
					<span>محدوده قیمت</span><i class = "fas fa-chevron-down me-auto" style = "margin-right: 10px;"></i>
				</div>

				<div id = "filter3body" style = "display: none;padding-left: 5px;padding-right: 5px">
					<div id = "slider-range">
						<section class = "range-slider">
							<span class = "rangeValues"></span>
							<input id = "pricerange_min" value = "" step = "1" type = "range">
							<input id = "pricerange_max" value = "" step = "1" type = "range">
						</section>
					</div>
					<div class = "d-flex">
						<div class = "text-center d-grid" style = "width: 50%;padding: 5px;">
							<span>از</span><span id = "amount1" style = "background: rgba(133,135,150,0.1);border-radius: 10px;">Text</span><span>تومان</span>
						</div>
						<div class = "text-center d-grid" style = "width: 50%;padding: 5px;">
							<span>تا</span><span id = "amount2" style = "background: rgba(133,135,150,0.1);border-radius: 10px;">Text</span><span>تومان</span>
						</div>
					</div>
					<div class = "d-sm-flex d-md-flex justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center" style = "margin-bottom: 6px;">
						<button class = "btn btn-primary border rounded-pill" type = "button" style = "background: rgba(246,194,62,0.15);box-shadow: none;border: none;color: var(--bs-red);">اعمال محدودیت قیمت</button>
					</div>
				</div>
			</div>
			<!-- End: filter3 -->

			<!-- Start: filter4 -->
			<div class = "border rounded shadow-sm" id = "filter4">
				<div class = "d-flex d-md-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center" style = "border-bottom: 1px solid rgba(133,135,150,0.24);padding: 5px;">
					<span><strong>برند ها</strong><br/></span></div>
				<div>
					<form>
						<ul id = "brand_list" class = "list-unstyled">

						</ul>
					</form>
				</div>
			</div>
			<!-- End: filter4 -->

			<!-- Start: filter5 -->
			<div class = "text-center border rounded shadow-sm" id = "filter5">
				<form class = "d-none d-sm-inline ms-md-3 my-2 my-md-0 mw-100 navbar-search">
					<div class = "input-group">
						<button class = "btn btn-primary btn-sm py-0" id = "shbu" type = "button">
							<i class = "fas fa-search"></i></button>
						<input type = "text" class = "form-control form-control-sm border-0 small" placeholder = "جست و جو در نتایج..."/>
					</div>
				</form>
			</div>
			<!-- End: filter5 -->
		</div>
		<!-- End: filters -->
	</div>
</div>

<?php
include "footer.php";
?>

<script>
	//function checkbox_kmojd() {
    //    var state = '<?php //if(isset($_SESSION['filters']['kalamojood'])){echo 1;} ?>//';
    //    if (state==1){
    //        document.getElementById("kalamojood").checked = true;
    //        document.getElementById("kalamojood").value = 'off';
    //    }
    //}
    //checkbox_kmojd()
</script>