<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
		</head>
	
	<body>
	
		<h1>Estimates</h1>
		<button type="button" class = "btn btn-default">Filter</button>

		<br>
		
		<div class="well well-sm">
		
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status: </label>
				<div class="col-sm-10">
					<select class="custom-select custom-select-lg mb-3">
						<option selected>All Statuses</option>
						<option value="1">Paid</option>
						<option value="2">Unpaid</option>
						<option value="3">Not Fully Paid</option>
					</select>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Customer: </label>
				<div class="col-sm-10">
					<select class="custom-select custom-select-lg mb-3">
						<option selected>All Customers</option>
						<option value="1">Company A</option>
						<option value="2">Company B</option>
						<option value="3">Company C</option>
					</select>
				</div>
			</div>
			
			<br>
			
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">Date</label>
					<input type="text" class="form-control" id="date">
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault02">to</label>
					<input type="text" class="form-control" id="to" >
				</div>
			</div>
		</div>
		
		<br>
		
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Status</th>
					<th scope="col">Date</th>
					<th scope="col">Number</th>
					<th scope="col">Customer</th>
					<th scope="col">Amount</th>
					<th scope="col"> </th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><button type="button" class="btn btn-primary">Saved</button></td>
					<td>2018-05-02</td>
					<td>21059</td>
					<td>Company A</td>
					<td>00</td>
					<td>
						<div class="btn-group">
								<button class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">
					
								</button>
								<ul class="dropdown-menu" role="menu" style="padding: 15px; min-width: 150px;">
									<li>View</li>    
									<li>Edit</li>
									<li>Print</li>
									<div class="dropdown-divider"></div>
									<li>Covert to Invoice</li>
									<li>Export as PDF</li>
									<li>Delete</li>
								</ul>
						</div>
					</td>
				</tr>
				<tr>
					<td><button type="button" class="btn btn-primary">Saved</button></td>
					<td>2018-04-27</td>
					<td>21059</td>
					<td>Company B</td>
					<td>00</td>
					<td>
						<div class="btn-group">
								<button class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">
					
								</button>
								<ul class="dropdown-menu" role="menu" style="padding: 15px; min-width: 100px;">
									<li>View</li>    
									<li>Edit</li>
									<li>Print</li>
									<div class="dropdown-divider"></div>
									<li>Covert to Invoice</li>
									<li>Export as PDF</li>
									<li>Delete</li>
								</ul>
						</div>
					</td>
				</tr>
				<tr>
					<td><button type="button" class="btn btn-primary">Saved</button></td>
					<td>2018-04-22</td>
					<td>21059</td>
					<td>Company C</td>
					<td>00</td>
					<td>
						<div class="btn-group">
								<button class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">
					
								</button>
								<ul class="dropdown-menu" role="menu" style="padding: 15px; min-width: 100px;">
									<li>View</li>    
									<li>Edit</li>
									<li>Print</li>
									<div class="dropdown-divider"></div>
									<li>Covert to Invoice</li>
									<li>Export as PDF</li>
									<li>Delete</li>
								</ul>
						</div>
					</td>
				</tr>
			</tbody>
		</table>

		