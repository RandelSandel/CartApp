Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value'); 

new Vue({
	
	el: '#dashboard',

	data: {


		sortKey:'',
		
		reverse: false,

		
		carts: [

			{ name: 'Arduino Robot', likes: 70, status: 'active' },
			{ name: 'Ras Pi RFID', likes: 5, status: 'active' },
			{ name: 'DIY BBQ', likes: 55, status: 'active' },
			{ name: 'Make a lava lamp', likes: 12, status: 'active' },
			{ name: 'Boss outfit', likes: 26, status: 'down' },
			{ name: 'Smash Robot', likes: 62, status: 'active' },
			{ name: 'Beef Ribs', likes: 5, status: 'down' },
			{ name: 'Phone', likes: 31, status: 'active' },
			{ name: 'Bed made with air', likes: 1, status: 'active' },
			{ name: 'Light sensor', likes: 22, status: 'down' }

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
