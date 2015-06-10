@extends('app')



@section('content')

<div id="dashboard">


		<!-- control panel -->
		<div class="panel panel-default" style="width: 700px; margin: 20px auto 20px">
		  <div class="panel-body">
		    <h3>Dashboard</h3>

		    	<!-- filter by button -->
				<div class="dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
					Dropdown
					<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" v-on="click: sortBy('name')">Name</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" v-on="click: sortBy('name')">Last edited</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" v-on="click: sortBy('name')">Most Followed</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#" v-on="click: sortBy('name')">Top Performers</a></li>
					</ul>
				</div>


				<!-- search form -->
				<input v-model="search" class="form-control" placeholder="Search Carts">
			</div>
		</div>



		<!-- listed carts -->
		<div class="list-group">
			
			<ul style="padding-left: 0px; width: 700px; margin: auto;">
				<a href="#" v-repeat="carts | filterBy search | orderBy sortKey reverse" class="list-group-item">
					
					<h5> @{{ name }}</h5>
					<p>Likes: @{{ likes }} </p>
					<p>Status: @{{ status }} </p>
				</a>
			</ul>
			
		</div>


</div>



@endsection


