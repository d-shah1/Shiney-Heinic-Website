	<html>

	<head>
	    <!-- GOOGLE WEB FONT -->
	    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	    <!-- BASE CSS -->
	    <link href="review/css/animate.min.css" rel="stylesheet">
	    <link href="review/css/bootstrap.min.css" rel="stylesheet">
	    <link href="review/css/menu.css" rel="stylesheet">
	    <link href="review/css/style.css" rel="stylesheet">
	    <link href="review/css/responsive.css" rel="stylesheet">
	    <link href="review/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
	    <link href="review/css/skins/square/grey.css" rel="stylesheet">

	    <!-- COLOR CSS -->
	    <link href="review/css/color_4.css" rel="stylesheet">

	    <!-- BASE CSS -->
	    <link href="review/css/date_time_picker.css" rel="stylesheet">

	    <!-- YOUR CUSTOM CSS -->
	    <link href="review/css/custom.css" rel="stylesheet">

	    <script src="review/js/modernizr.js"></script>
	</head>

	<body>
	    <main>
	        <div id="form_container" style=" border-radius: 25px;min-height: 350px;">
	            <div class="row" style="border-radius: 25px;">
	                <div class="col-lg-2">
	                    <div id="divReview">

	                        <h2
	                            style="font-weight: 300; color: #fff; margin-top:40%; padding: 12%; font-size: 36px;height:50px;font-family: 'Gilroy-Regular';text-align:center;align-items:center">
	                            Reviews</h2>


	                    </div>
	                </div>
	                <div class="col-lg-10">

	                    <div id="wizard_container">


	                        <form id="review-form" method="POST" action="submit-review-classic.php"
	                            style="font-family: 'Gilroy-Regular';">


	                            <div id="middle-wizard">

	                                <div class="step">
	                                    <h3 class="main_question">How do you describe your overall satisfaction?</h3>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group clearfix">
	                                                <label class="rating_type">Rate our Products and Services</label>
	                                                <span class="rating">
	                                                    <input type="radio" checked class="required rating-input"
	                                                        id="rating-input-1-5" name="rating_input_1" value="5"><label
	                                                        for="rating-input-1-5" class="rating-star"></label>
	                                                    <input type="radio" class="required rating-input"
	                                                        id="rating-input-1-4" name="rating_input_1" value="4"><label
	                                                        for="rating-input-1-4" class="rating-star"></label>
	                                                    <input type="radio" class="required rating-input"
	                                                        id="rating-input-1-3" name="rating_input_1" value="3"><label
	                                                        for="rating-input-1-3" class="rating-star"></label>
	                                                    <input type="radio" class="required rating-input"
	                                                        id="rating-input-1-2" name="rating_input_1" value="2"><label
	                                                        for="rating-input-1-2" class="rating-star"></label>
	                                                    <input type="radio" class="required rating-input"
	                                                        id="rating-input-1-1" name="rating_input_1" value="1 "><label
	                                                        for="rating-input-1-1" class="rating-star"></label>
	                                                </span>
	                                            </div>

	                                            <textarea name="review-text" required
	                                                class="required border form-control p-1"
	                                                style="height: 100px;">Write a Review...</textarea>

	                                        </div>
	                                    </div>

	                                </div>

	                                <button type="submit" class="submit" style="background-image: linear-gradient(147deg, #75CFB8 0%, #FFC67D 74%);
         					border-radius: 5px;
         					color: #fff;
         					box-shadow: 0px 14px 80px rgb(255, 198, 125, 0.4);
         					">Submit</button>
	                            </div>
	                        </form>
	                    </div>

	                </div>
	            </div>
	        </div>
	    </main>




	    <!-- Jquery-->
	    <script src="review/js/jquery-3.2.1.min.js"></script>
	    <!-- Common script -->
	    <script src="review/js/common_scripts.js"></script>
	    <!-- Wizard script -->
	    <script src="review/js/review_wizard_func.js"></script>
	    <!-- Menu script -->
	    <script src="review/js/velocity.min.js"></script>
	    <script src="review/js/main.js"></script>
	    <!-- Theme script -->
	    <script src="review/js/functions.js"></script>
	</body>

	</html>