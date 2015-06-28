<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="stylesheets/index.css" type="text/css" charset="utf-8">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="libs/scrolling-nav/css/scrolling-nav.css">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.0/less.min.js"></script>-->
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
    <script src="libs/scrolling-nav/js/jquery.easing.min.js"></script>
    <script src="libs/scrolling-nav/js/scrolling-nav.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="javascripts/index.js"></script>
    <title>Discard - Say goodbye to FAT wallet</title>
</head>
<body data-spy="scroll" data-offset="70" data-target="#discard-navbar">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#discard-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#">
                <img alt="Discard" src="assets/images/logo.png" id="logo">
            </a>
            <!--<a class="navbar-brand" href="#">-->
            <!--Discard-->
            <!--</a>-->
        </div>
        <div class="collapse navbar-collapse" id="discard-navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#how-customer-container" class="nav-item page-scroll">
                        Discard for Customer
                    </a>
                </li>
                <li>
                    <a href="#how-business-container" class="nav-item page-scroll">
                        Discard for Business
                    </a>
                </li>
                <!--<li>-->
                    <!--<a href="#" class="nav-item page-scroll">-->
                        <!--Our Members-->
                    <!--</a>-->
                <!--</li>-->
                <li>
                    <a href="#pricing-container" class="nav-item page-scroll">
                        Pricing
                    </a>
                </li>
                <li>
                    <a href="#join-container" class="nav-item page-scroll">
                        Join Us
                    </a>
                </li>
                <li>
                    <a href="#contact-container" class="nav-item page-scroll">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid" id="discard-container">
    <div class="row">
        <div class="col-xs-12 col-md-7" id="details-container">
            <!--<h1>What is Discard?</h1>-->
            <h4>How many loyalty cards you have in your wallet?</h4>
            <h4>How many you left at home?</h4>
            <h4>How many you totally forget?</h4>
            <p>
                Discard let you have these cards with you at all times without adding thickness to your wallet.
                Instead of printing out plastic or paper cards, businesses will simply create virtual loyalty card on
                Discard.
                Then, you can simply show your mobile screen, whenever you visit the store.
                Businesses increase customers' convenience, loyalty and satisfaction, while reducing the cost.
            </p>
            <p>
                Basically, Discard is a mobile app that replaces the need to carry membership cards.
                It doesn't require any special hardware, just your smartphone.
            </p>
        </div>
        <div class="hidden-xs col-md-5" id="details-assets">
            <img src="assets/images/discardWebDetail.png">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" id="how-customer-container">
            <div id="how-customer-slide" class="carousel slide" data-ride="carousel">
                <h1>How Discard works for customer?</h1>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#how-customer-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#how-customer-slide" data-slide-to="1"></li>
                    <li data-target="#how-customer-slide" data-slide-to="2"></li>
                    <li data-target="#how-customer-slide" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row how-slide-container">
                            <div class="how-slide-img-container how-slide-img-left-container col-xs-12 col-md-6">
                                <img src="assets/images/how-to-add-store.png" alt="Add store">
                            </div>
                            <div class="how-slide-text-container col-xs-12 col-md-6">
                                <h3>
                                    Add store
                                </h3>
                                <p>
                                    In front of the stores, there will be a 4-digits store code.
                                    Simply put the code into Discard.
                                    The store will be added to your store list.
                                    Any stamp card will be automatically downloaded for you, and you can start collecting right away.
                                    If you are a member of the store, any special membership card will be downloaded for you as well.
                                </p>
                            </div>
                        </div>
                        <!--<div class="carousel-caption">-->
                        <!--Scan customer's QR code-->
                        <!--</div>-->
                    </div>
                    <div class="item">
                        <div class="row how-slide-container">
                            <div class="how-slide-img-container how-slide-img-left-container col-xs-12 col-md-6">
                                <img src="assets/images/how-to-pick-store.png" alt="Pick a store">
                            </div>
                            <div class="how-slide-text-container col-xs-12 col-md-6">
                                <h3>
                                    Pick a store
                                </h3>
                                <p>
                                    On your visit to the store, simple pick the store from store list.
                                    The store screen will show your ID as a QR code, which interacts with Discard Admin app used by the store agents.
                                    You also can check the store and card information, such as store address and card expiry date, from this screen.
                                </p>
                            </div>
                        </div>
                        <!--<div class="carousel-caption">-->
                        <!--Validate membership expiry date-->
                        <!--</div>-->
                    </div>
                    <div class="item">
                        <div class="row how-slide-container">
                            <div class="how-slide-img-container how-slide-img-left-container col-xs-12 col-md-6">
                                <img src="assets/images/how-to-redeem-cus.png" alt="Redeem perks">
                            </div>
                            <div class="how-slide-text-container col-xs-12 col-md-6">
                                <h3>
                                    Redeem perks
                                </h3>
                                <p>
                                    Show your Discard app screen to the store agent to redeem perks for member.
                                    If you collect enough stamps, you may also redeem the store's offer.
                                    Your card will be reset to blank afterward.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row how-slide-container">
                            <div class="how-slide-img-container how-slide-img-left-container col-xs-12 col-md-6">
                                <img src="assets/images/how-to-collect-stamp.png" alt="Collect stamp">
                            </div>
                            <div class="how-slide-text-container col-xs-12 col-md-6">
                                <h3>
                                    Collect stamp
                                </h3>
                                <p>
                                    When you meet store requirement to earn a stamp, show your screen to the store agent.
                                    They will stamp on your card with their device.
                                    The stamp shows up instantly on your phone.
                                    You may reference back to the app to check how many stamps you collected whenever you want.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#how-customer-slide" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#how-customer-slide" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" id="how-business-container">
            <div id="how-business-slide" class="carousel slide" data-ride="carousel">
                <h1>How Discard works for business?</h1>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#how-business-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#how-business-slide" data-slide-to="1"></li>
                    <li data-target="#how-business-slide" data-slide-to="2"></li>
                    <li data-target="#how-business-slide" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row how-slide-container">
                            <div class="how-slide-img-container how-slide-img-right-container visible-xs-block col-xs-12">
                                <img src="assets/images/how-to-scan.png" alt="Scan customer's QR code">
                            </div>
                            <div class="how-slide-text-container col-xs-12 col-md-6">
                                <h3>
                                    Scan customer QR code
                                </h3>
                                <p>
                                    When your customer wants to redeem perk from their card, or collect more stamp, use Discard Admin app to scan
                                    the customer QR code. The app will show your member information, such as expiry date, number of stamps and perk.
                                </p>
                            </div>
                            <div class="how-slide-img-container how-slide-img-right-container hidden-xs col-md-6">
                                <img src="assets/images/how-to-scan.png" alt="Scan customer's QR code">
                            </div>
                        </div>
                        <!--<div class="carousel-caption">-->
                        <!--Scan customer's QR code-->
                        <!--</div>-->
                    </div>
                    <div class="item">
                        <div class="row how-slide-container">
                            <div class="how-slide-img-container how-slide-img-right-container visible-xs-block col-xs-12">
                                <img src="assets/images/how-to-verify.png" alt="Verify that membership is valid">
                            </div>
                            <div class="how-slide-text-container col-xs-12 col-md-6">
                                <h3>
                                    Verify that membership is valid
                                </h3>
                                <p>
                                    You can validate the expiry date on the customer's membership card like you normally would, based on the information on Discard Admin app.
                                    See if they're still eligible for the perk of the card holder.
                                </p>
                            </div>
                            <div class="how-slide-img-container how-slide-img-right-container hidden-xs col-md-6">
                                <img src="assets/images/how-to-verify.png" alt="Verify that membership is valid">
                            </div>
                        </div>
                        <!--<div class="carousel-caption">-->
                        <!--Validate membership expiry date-->
                        <!--</div>-->
                    </div>
                    <div class="item">
                        <div class="row how-slide-container">
                            <div class="how-slide-img-container how-slide-img-right-container visible-xs-block col-xs-12">
                                <img src="assets/images/how-to-add-stamp.png" alt="Add a stamp for customer">
                            </div>
                            <div class="how-slide-text-container col-xs-12 col-md-6">
                                <h3>
                                    Add a stamp for customer
                                </h3>
                                <p>
                                    When the customer meets your requirement to earn a stamp, just tap on Discard Admin app to add a stamp for them.
                                    Updated card with the new stamp then shows up on your customer's device for their reference.
                                </p>
                            </div>
                            <div class="how-slide-img-container how-slide-img-right-container hidden-xs col-md-6">
                                <img src="assets/images/how-to-add-stamp.png" alt="Add a stamp for customer">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row how-slide-container">
                            <div class="how-slide-img-container how-slide-img-right-container visible-xs-block col-xs-12">
                                <img src="assets/images/how-to-redeem.png" alt="Mark the card as redeemed">
                            </div>
                            <div class="how-slide-text-container col-xs-12 col-md-6">
                                <h3>
                                    Mark the card as redeemed
                                </h3>
                                <p>
                                    Let's say your customer earned enough stamps to redeem any perk specified.
                                    On your Discard Admin app, you can mark the card that it's redeemed.
                                    Discard then resets the card on customer's device.
                                </p>
                            </div>
                            <div class="how-slide-img-container how-slide-img-right-container hidden-xs col-md-6">
                                <img src="assets/images/how-to-redeem.png" alt="Mark the card as redeemed">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#how-business-slide" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#how-business-slide" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" id="pricing-container">
            <h1>How much?</h1>
            <p id="huge-free">FREE</p>
            <p>Seriously? Yes! $0 No Charge!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" id="join-container">
            <!-- <p>Sounds good? <a href="mailto:hello@discardapp.com?subject=Interested in joining&body=Please enter your name, business name and contact information here.">Join us</a></p>-->
			<h1>Sounds good?</h1>
			<form method="post" action="signup.php">
				<h4>Store Information</h4>
				<h6>This information appears when your customers view your store from their device</h6>
				<div class="row">
					<div class="col-md-6">
						<span>Name</span>
						<span class="required-field">*</span>
					</div>
					<div class="col-md-6">
						<input type="text" name="storeName" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<span>Address</span>
						<span class="required-field">*</span>
					</div>
					<div class="col-md-6">
						<input type="text" name="storeAddress" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<span>Phone</span>
						<span class="required-field">*</span>
					</div>
					<div class="col-md-6">
						<input type="tel" name="storePhone" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<span>Email</span>
					</div>
					<div class="col-md-6">
						<input type="email" name="storeEmail">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<span>Website</span>
					</div>
					<div class="col-md-6">
						<input type="url" name="storeWebsite">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<span>Category</span>
						<span class="required-field">*</span>
					</div>
					<div class="col-md-6">
						<select name="storeCategory" required>
							<option value="0">Food</option>
							<option value="1">Drink</option>
							<option value="2">Cafe</option>
							<option value="3">Spa</option>
							<option value="4">Beauty</option>
							<option value="5">Grocery</option>
							<option value="6">Clothing</option>
							<option value="7">Gifts</option>
							<option value="99">Not on List</option>
						</select>
					</div>
				</div>
				<h4>Administrator Information</h4>
				<h6>To identify if you're signed in as an administrator of the store</h6>
				<div class="row">
					<div class="col-md-6">
						<span>Email</span>
						<span class="required-field">*</span>
					</div>
					<div class="col-md-6">
						<input type="email" name="adminEmail" required>
					</div>
				</div>
				<h4>Card Information</h4>
				<h6>Represents customer's card</h6>
				<div class="row">
					<div class="col-md-6">
						<span>Type</span>
						<span class="required-field">*</span>
					</div>
					<div class="col-md-6">
						<select name="cardType" required>
							<option value="0">Membership</option>
							<option value="1">Stamps</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<span>Days To Expiry</span>
					</div>
					<div class="col-md-6">
						<input type="number" name="cardExpireInDays">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<span>Perks Description</span>
						<span class="required-field">*</span>
					</div>
					<div class="col-md-6">
						<input type="text" name="cardPerks" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<span>Stamp Count till Redeem</span>
					</div>
					<div class="col-md-6">
						<input type="number" name="stampCount">
					</div>
				</div>
				<h4>Account Manager Information</h4>
				<div class="row">
					<div class="col-md-6">
						<span>Email</span>
						<span class="required-field">*</span>
					</div>
					<div class="col-md-6">
						<input type="email" name="accountManagerEmail" required>
					</div>
				</div>
				<div id="signup-submit-container">
					<input type="submit" value="Sign Up Now">
				</div>
			</form>
            <p>Any question? <a href="#contact-container">Contact us</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" id="contact-container">
            <h1>Need more information?</h1>
            <p>Email us at <a href="mailto:hello@discardapp.com">hello@discardapp.com</a></p>
            <!--<div class="row">-->
                <!--<div class="col-md-6">-->
                    <!--<h3>Canada</h3>-->
                    <!--<a href="mailto:ca@discardapp.com">ca@discardapp.com</a>-->
                <!--</div>-->
                <!--<div class="col-md-6">-->
                    <!--<h3>Thailand</h3>-->
                    <!--<a href="mailto:th@discardapp.com">th@discardapp.com</a>-->
                <!--</div>-->
            <!--</div>-->
        </div>
    </div>
</div>
</body>
</html>