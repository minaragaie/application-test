


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js">
	    </script>
	    <title>Application Test</title>
	</head>


	<body>
		<?php
		$people = array(
		   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
		   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
		   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
		   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
		   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
		);
		?>
		
		<section>
			<div ng-app="application-test" ng-controller="application-test-ctrl" class="container-fluid">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<table class="table table-striped table-dark table-bordered table-hover">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">First</th>
						      <th scope="col">Last</th>
						      <th scope="col">Email</th>
						      <th scope="col"></th>
						    </tr>
						  </thead>
						  <tbody ng-init="people =  <?php echo htmlspecialchars(json_encode($people)); ?>" >
						  	<tr ng-repeat="person in people">
						      <th scope="row">{{ $index+1 }}</th>
						      <td>{{ person.first_name }}</td>
						      <td>{{ person.last_name }}</td>
						      <td>{{ person.email }}</td>
						      <td>
						      	<button ng-click= "alert(person);" class="btn btn-secondary btn-lg btn-block" type="button">Show</button>
						      </td>
						    </tr>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<script>
		var app = angular.module('application-test', []);
		app.controller('application-test-ctrl', function($scope) {
		  $scope.alert = function(arg){
		      alert('name: '+arg.first_name +' '+ arg.last_name +'\nemail: '+ arg.email);

		  }
		});
		</script>
	</body>
</html>