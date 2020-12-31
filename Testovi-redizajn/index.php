<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Test za inostrano poslovanje (Afrika)</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

    <meta name="keywords" content="LinkGroup test">
    <meta name="description" content="LinkGroup test">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="LinkGroup test">
    <meta itemprop="description" content="LinkGroup test">


	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">

	</head>

	<body>

	<div class="image-container set-full-height">
	    <!--   Creative Tim Branding   -->
	    <a href="https://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/logo.svg">
	            </div>

	        </div>
	    </a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
						<!-- <div class="card wizard-card" data-color="red" id="wizardProfile" style="box-shadow: 0 29px 32px -20px rgba(0,0,0,0.5), 0 4px 11px -3px rgba(0,0,0,0.25)"> -->
						<div class="card wizard-card" data-color="link" id="wizardProfile" style="box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1)">	

							<form id="checkform" class="step-form" name="checkform" action="https://testovi.doktorzakarijeru.com/testiranje/test_in_poslovanje_results/eu/kupljeniTestovi" method="post">
	

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Test za inostrano poslovanje (Afrika)</h3>
									<p class="category">Pred vama se nalaze opisi situacija kojima možete prisustvovati ili u kojima možete učestvovati na afričkom području ili sa akterima afričkog porekla na nekom drugom području. Proverite koliko poznajete njihov mentalitet izborom najadekvatnijeg odgovora...</p>
		                    	</div>


								<?php

									$fileName = "testovi/test-afrika.txt";

									if(file_exists($fileName)) {
										$file = fopen($fileName, 'r');
									} 
									else {
										die('<p style="text-align: center; color: red;">Test ne postoji i ne može se otvoriti!</p>');
									}
									
									$i = 1; $j = 1; $k = 1;
									$tabs = "";
									$content = "";
			
									while (($line = fgets($file)) !== false) {

											if($line !== "\n" && $j == 1 && $k == 1) {
												$content .= '<div class="tab-pane" id="tab_'.$i.'">';

												if(substr($line, 0, 1) == "#"){
													$content .= '<h5 class="info-text"> '.substr($line, 1).' </h5><div class="row"><div class="col-sm-8 col-sm-offset-2">';
													$k++;
												}
												else {
													$content .= '<div class="choice" data-toggle="wizard-radio">';
													$content .= '<input type="radio" name="'.$i.'" value="'.$j.'" id="odgovor'.$i.'_'.$j.'">';
													$content .= '<div class="card card-checkboxes card-hover-effect">';
													$content .= '<label for="odgovor'.$i.'_'.$j.'">'.$line.'</label>';
													$content .= '</div></div>';

													$j++; $k++;
												}
											}   
											elseif ($line !== "\n" && $j == 1 && $k != 1) {
												$content .= '<div class="choice" data-toggle="wizard-radio">';
												$content .= '<input type="radio" name="'.$i.'" value="'.$j.'" id="odgovor'.$i.'_'.$j.'">';
												$content .= '<div class="card card-checkboxes card-hover-effect">';
												$content .= '<label for="odgovor'.$i.'_'.$j.'">'.$line.'</label>';
												$content .= '</div></div>';

												$j++;
											}                                   
											elseif ($line !== "\n" && $j != 1) {
												$content .= '<div class="choice" data-toggle="wizard-radio">';
												$content .= '<input type="radio" name="'.$i.'" value="'.$j.'" id="odgovor'.$i.'_'.$j.'">';
												$content .= '<div class="card card-checkboxes card-hover-effect">';
												$content .= '<label for="odgovor'.$i.'_'.$j.'">'.$line.'</label>';
												$content .= '</div></div>';

												$j++;
											}
											elseif ($line == "\n" && $i == 1) {
												$tabs .= '<li id="tabli_'.$i.'"><a href="#tab_'.$i.'" data-toggle="tab" id="taba_'.$i.'">'.$i.'</a></li>';
												$content .= '</div></div></div>';

												$i++; $j=1; $k=1;     
											}
											else {
												$tabs .= '<li id="tabli_'.$i.'"><a href="#tab_'.$i.'" data-toggle="tab" id="taba_'.$i.'">'.$i.'</a></li>';
												$content .= '</div></div></div>';

												$i++; $j=1; $k=1; 
											}

									}
									$tabs .= '<li id="tabli_'.$i.'"><a href="#tab_'.$i.'" data-toggle="tab" id="taba_'.$i.'">'.$i.'</a></li>';
									$content .= '</div></div>';

									fclose($file);
								?>


								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="600" style="width: 21%;"></div>
									</div>
									<ul>
										<?= $tabs; ?>
			                        </ul>
								</div>


		                        <div class="tab-content">
									<?= $content; ?>
								</div>
								

		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Sledeće' />
		                                <input type='button' onclick="ProveraForme()" class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Kraj' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Prethodno' />
		                            </div>
		                            <div class="clearfix"></div>
								</div>
								
							</form>
	
						</div>
					</div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	
		<div class="footer">
			<div class="container text-center">
				Copyright 2020 © ITAcademy - All rights reserved
			</div>
		</div>


	</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

    <script>	
        function ProveraForme() {
            var countChecked = function () {

				var n = $("input:radio:checked").length;
				var radioGroup = $(".tab-pane").length;

                if (n == radioGroup) {
                    document.getElementById("checkform").submit();
                } else {
                    for (var i = 1; i < radioGroup + 1; i++) {
						// var element = document.getElementById("tab_" + i);
						// var elementLi = document.getElementById("tabli_" + i);
						var elementA = document.getElementById("taba_" + i);

                        if ($('input[name=' + i + ']:checked').length > 0) {
							console.log("dobro");
							// element.classList.remove("active");
							elementA.style.color = "transparent"; 
							// elementA.remove();
							// $("&nbsp;").appendTo(elementLi);
						} 
						else {
							console.log("nije");
							// element.classList.add("active");
							// elementLi.style.color = "blue";  
                        }
                    }
                    alert("Niste odgovorili na sva pitanja.");
                    return false;
                }
            };
            countChecked();
        }
    </script>

</html>
