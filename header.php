<?php
$a_url="/";
$root_url= "http://".$_SERVER['SERVER_NAME'].$a_url;

?>
	<link rel='shortcut icon' type='image/x-icon' href='logo.png' />
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
	.dropdown-menu .table tr{border:0px; font-size:90%;}
	.dropdown-menu .table td{border:0px; color:#000 !important;}
	</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="<?php echo $root_url; ?>images/logo.png" style="float:left; margin-top:-10px; margin-right:5px" /> &nbsp;Joy Trading Co. &nbsp;&nbsp;<small>(ISO 9001:2008 certified)</small></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo $root_url; ?>profile.php">Profile</a>
                    </li>
					<li>
                        <a href="<?php echo $root_url; ?>profile.php">AMC</a>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo $root_url; ?>hepa_filter.php">Hepa Filter Testing</a>
                            </li>
                            <li>
                                <a href="<?php echo $root_url; ?>particle_count_testing.php">Particle Count Testing</a>
                            </li>
                            <li>
                                <a href="<?php echo $root_url; ?>airflow_measurement.php">Air Flow Measurement</a>
                            </li>
                            <li>
                                <a href="<?php echo $root_url; ?>calibration_services.php">Calibration services</a>
                            </li>
							<li>
                                <a href="<?php echo $root_url; ?>dop_testing.php">DOP Testing</a>
                            </li>
							<li>
                                <a href="<?php echo $root_url; ?>air_changes.php">AIR Changes Test</a>
                            </li>
							<li>
                                <a href="<?php echo $root_url; ?>ahu_recovery.php">AHU Recovery Testing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu" style="width:500px;">
                            <table class="table table-responsive">
								<tr class="active">
									<th>Clean Room Accessories</th>
									<th>Clean Room Equipments</th>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>disposabe_shoe_cover.php">Disposable shoe cover</a></td>
									<td><a href="<?php echo $root_url; ?>air_shower.php">Air shower</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>face_mask.php">Face mask</a></td>
									<td><a href="<?php echo $root_url; ?>LAF.php">Laminar flow bench</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>head_cap.php">Head cap</a></td>
									<td><a href="<?php echo $root_url; ?>ulpa_filters.php">Bio Safety Cabinet</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Lint free wipes</a></td>
									<td><a href="<?php echo $root_url; ?>">Fume Hood</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>tiffin_lens.php">Tiffin lens cleaning tissue</a></td>
								<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Air Purifier</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_cloth.php">Lint free cloth</a></td>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Pass Box</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_cloth.php">Clean room mops</a></td>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Air washer</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_cloth.php">Powder free gloves</a></td>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Clean Air Tent/Modular clean room</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_cloth.php">Sticky mats</a></td>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Powder dispensing booth</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_cloth.php">Anti static clean room garments</a></td>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Air curtain</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_cloth.php">Lens cleaning tissue</a></td>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Manometer Pressure drop gauge</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_cloth.php">tex wipes , alpha swab</a></td>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Hepa Filters</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_cloth.php">Shoe cover dispenser</a></td>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">ULPA Filters</a></td>
								</tr>
								<tr>
									<td><a href="<?php echo $root_url; ?>lint_free_cloth.php">PVC Curtain</a></td>
									<td><a href="<?php echo $root_url; ?>lint_free_wipes.php">Pass Box</a></td>
								</tr>
							</table>
                            
                           
                            
                           
                            
                            </li>
                            
                             
                            
                    
                        </ul>
                    
					<li>
                        <a href="<?php echo $root_url; ?>certificates.php">Print Certificate</a>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Technical Support<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo $root_url; ?>/tech_support/AHU PERFORMANCE TEST.pdf" target="_blank">AHU Performance Test</a>
                            </li>
							<li>
                                <a href="<?php echo $root_url; ?>/tech_support/HEPA  FILTER  INTEGRITY TEST.pdf" target="_blank">HEPA filter integrity testing</a>
                            </li>
						</ul>
                    <li>
                    <li>
                        <a href="<?php echo $root_url; ?>contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<script type="text/javascript">
var host = window.location.hostname;
var docURL = document.URL;
//docURL = docURL.replace(host, "");
//docURL = docURL.replace("http://", "");
//docURL = docURL.replace("www.", "");
//if(docURL.indexOf("?") >= 0)
//	docURL = docURL.substring(0, docURL.indexOf('?'));
var links = document.querySelectorAll('a[href="'+docURL+'"]');
links[0].parentNode.className = 'active';
links[0].parentNode.parentNode.parentNode.className = links[0].parentNode.parentNode.parentNode.className + ' active';
</script>