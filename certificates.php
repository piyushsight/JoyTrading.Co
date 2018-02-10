<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Piyush Aggarwal">

    <title>Print Certificates - Joy Trading</title>

	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	
	<?php include_once 'header.php'; ?>
	
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Print Certificates
                    <!-- <small>Subheading</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Print Certificates</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
           
		   <?php include_once 'left_bar.php'; ?>
		   
		   <!-- Content Column -->
            <div class="col-md-9">
                <h2>Enter your reference number</h2>
                <p>
				<form name="reference" id="reference" novalidate="" ng-app="reference" ng-controller="validateCtrl">
					<input type="text" class="form-control" name="reference_number" id="reference_number"  ng-model="reference_number" required style="width:70%; float:left;">
                    <button ng-click="validate_reference()" class="btn btn-primary" style="margin-left:10px;">Go</button>
					<p style="color:red" ng-show="reference.reference_number.$dirty && reference.reference_number.$invalid" id="">
						<span ng-show="reference.reference_number.$error.required"></span>
					</p>
                    <div id="success"></div>
                </form>
				</p>
            </div>
			<div class="col-md-9" id="print_certificates">
				
			</div>
        </div>
        <!-- /.row -->

	<?php include_once 'footer.php'; ?>
	<script>
	var app = angular.module('reference', []);
	app.controller('validateCtrl', function($scope) {
		$scope.validate_reference = function(){
			var dataString = "ref="+$scope.reference_number;
			//$("#spinner").val("$"+$('.input-slider').val()/100);
			$.ajax({
				url: 'get_certificates.php',
				type: 'POST', //this is the default though, you don't actually need to always mention it
				data: dataString,
				success: function(html){
					if (html != '')
						document.getElementById('print_certificates').innerHTML = html;
				}
			});
		}
	});
	</script>
</body>

</html>
