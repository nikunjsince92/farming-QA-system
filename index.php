<?php
session_start();
?>
<!doctype HTML>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	
	
	</head>
	<body>
		<div class="bgOverlay"></div>
		<div class="parentContainer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<span class="title">Agro Que-Ans System</span>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3">
						<div class="form-group">
							<input id="query" class="form-control input-lg transparent-input" type="text" placeholder="Ask Your Query Here ?">
						</div>
						<div class="form-group">
							<input id="lcount" class="form-control input-lg transparent-input" type="text" placeholder="Required Lines [1 to 9] (Optional)">
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-2 col-lg-offset-5">
						<button type="button" id="sub" class="btn btn-success btn-lg btnWidth">SUBMIT</button>
					</div>
				</div>
				<div class="row top20">
					<div class="col-lg-12 text-center">
						<img class="loader none" src="images/ajax-loader.gif">
					</div>
				</div>
			</div>
		</div>
		<div class="childContainer none">
			<div>
				<img class="close" src="images/close.png" alt="close">
			</div>
			
			<div role="tabpanel">

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist" id="myTab">
				<li class="active dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">Smart Summarization <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a data-toggle="tab" href="#smart_eng">In English</a></li>
						<li><a data-toggle="tab" href="#smart_hin">In Hindi</a></li>
					</ul>
				</li>
				<li class="dropdown" id="conditionalLcount">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">User Based Summarization <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a data-toggle="tab" href="#user_eng">In English</a></li>
						<li><a data-toggle="tab" href="#user_hin">In Hindi</a></li>
					</ul>
				</li>
				 <li><a data-toggle="tab" href="#video">Watch Video</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div id="smart_eng" class="tab-pane fade in active">
					<h3>Smart Summarization lang. En</h3>
					<div class="answer"></div>
				</div>
				<div id="smart_hin" class="tab-pane fade ">
					<h3>Smart Summarization lang. Hn</h3>
					<div class="answerHindi"></div>
				</div>
				<div id="user_eng" class="tab-pane fade ">
					<h3>Smart Summarization lang. En</h3>
					<div class="answer1"></div>
				</div>
				<div id="user_hin" class="tab-pane fade ">
					<h3>Smart Summarization lang. Hn</h3>
					<div class="answer1Hindi"></div>
				</div>
				<div id="video" class="tab-pane fade ">
					<div class="video"></div>
				</div>
				
			  </div>

			</div>
			
			<br />
			
			
				<div class="row footer">
					  
				</div>
		</div>
		
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="script.js"></script>

		<script>
		</script>	
	</body>
</html>
