Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value'); 

new Vue({
	
	el: '#guestbook',
	
	data: {
		
		newMessage: {
			name: '',
			message: ''
		},
		
		submitted: false
	},
	
	computed: {
		errors: function() {
			for (var key in this.newMessage) {
				if ( ! this.newMessage[key]) return true;
			}
			
			return false;
		}
	},
	
	ready: function() {
		
		this.fetchMessages();
	},
	
	methods: {
		
		fetchMessages: function() {
			this.$http.get('api/messages', function(messages) {		// we use .get() to retrieve a value from the vue instance given an expression
				this.$set('messages', messages);					// we then set a data value on the key instance given a valid keypath
																	// in this case we set the value messages to a "messages" array
			});
		},

		// when the form submit button is submitted
		onSubmitForm: function(e) {

			e.preventDefault();								// we stop the default blade form submit action
			
			var message = this.newMessage;					// we assign the data array "newMessage" with the latest form data to a newly instantiated variable "message"
			
			this.messages.push(message);					// we use push() to add the new item "message" to the messages array (which includes all the DB data)
			this.newMessage = { name: '', message: ''};		// we set the form that we submitted back to a blank form?
			this.submitted = true;							// we set submitted to true, so we can trigger a thanks message
			this.$http.post('api/messages', message);		// we make a post request to send the new message 
			
		}
	}
});