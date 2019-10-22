<!DOCTYPE html>
<head>
	<title>Welcome to your Honeypot Cosmetics dashboard</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
      <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
</head>
<body>
<div data-role="page" data-theme="b">
		<div data-role="content">
			<h2>Welcome to your Honeypot Cosmetics DASHBOARD</h2>
		<button class="workout-pricing" type="button" >Workout Pricing</button>
		<button class="load-products" type="button" >Honeypot Cosmetics</button>
		<button class="upload-products" type="button" >Upload</button>
		<button class="load-search" type="button" data-icon="search" >Search</button>
		<button type="button" class="profit-sheet" onclick="loadProfitSheet()">Caluclate Profit</button>

		<!--<button type="button" onclick="loadProducts()">Honeypot Cosmetics</button><br><br>
		<button type="button" onclick="loadUploadProducts()">Upload</button><br><br>
		<button type="button" onclick="loadSearch()">Search</button>-->

			
		<div id="display-content"></div>
		

	</div><!-- Content-->
</div><!-- page -->
<script type="text/javascript" src="js/function.js"></script>
</body>
</html>
