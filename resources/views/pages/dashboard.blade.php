@extends('app')



@section('content')

<div id="dashboard">


		<!-- control panel -->
		<div class="panel panel-default" style="width: 700px; margin: 20px auto 0px; border: none; -webkit-box-shadow: none">

			<div class="panel-body" style="padding-bottom: 5px;">
		    

				<!-- Horizontal Columns  -->
				<div class="row">
					
					<!-- navigation links -->
					<div class="col-xs-12 col-sm-6 col-md-8">
						<ul class="list-inline">
							<li>
								<a href="#" style="padding-right: 10px;" v-on="click: sortBy('name')">Created</a>
								<a href="#" style="padding-right: 10px;" v-on="click: sortBy('name')">Active</a>
								<a href="#" style="padding-right: 10px;" v-on="click: sortBy('name')">Following</a>
							</li>
						</ul>
					</div>

					<!-- Icon Links -->
					<div class="col-xs-6 col-md-4">
						<ul class="list-inline">
							<li style="float: right; padding-right: 0px;">
								<a href="#" style="padding-right: 20px;"><span class="glyphicon glyphicon-cog" aria-hidden="false" style="font-size: 1.2em;"></span></a>
								<a href="#" style="padding-right: 0px;"><span class="glyphicon glyphicon-plus" aria-hidden="false" style="font-size: 1.2em;"></span></a>
								
							</li>
						</ul>
					</div>

				</div>

				</br>
				</br>
				</br>

				<!-- Horizontal Columns  -->
				<div class="row">

					<!-- search form -->
					<div class="col-xs-12 col-sm-6 col-md-8" style="padding-left: 0px;">
						<input v-model="search" class="form-control" placeholder="Search Carts">
					</div>

					<!-- filter by button -->
					<div class="col-xs-6 col-md-4">
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" style="float: right;">
							Filter
							<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#" v-on="click: sortBy('name')">Alphabetical</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#" v-on="click: sortBy('likes')">Most Likes</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#" v-on="click: sortBy('name')">Status</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#" v-on="click: sortBy('name')">Top Performers</a></li>
							</ul>
						</div>
					</div>

				</div>

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


