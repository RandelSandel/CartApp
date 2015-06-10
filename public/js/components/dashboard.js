Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value'); 

new Vue({
	
	el: '#dashboard',

	data: {


		sortKey:'',
		
		reverse: false,

		
		carts: [

			{ name: 'Arduino Robot', likes: 50, status: 'active' },
			{ name: 'Ras Pi RFID', likes: 50, status: 'active' },
			{ name: 'DIY BBQ', likes: 50, status: 'active' },
			{ name: 'Make a lava lamp', likes: 50, status: 'active' },
			{ name: 'Boss outfit', likes: 50, status: 'down' }

		]

	},
	
	methods: {
		
		sortBy: function(sortKey) {
			
			// if the last sortKey is equal to the current sortkey then 
			// reverse is equal to true else its equal to false
			this.reverse = (this.sortKey == sortKey) ?  ! this.reverse : false;
			
			this.sortKey = sortKey;
			
			
		}
	}



	
});
