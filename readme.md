#Simple Ratchet Setup Using: 
- Ratchet
	- [http://socketo.me/](http://socketo.me/)

- Composer 
	- [http://getcomposer.org/](http://getcomposer.org/)		
- Websockets 
	- [http://www.html5rocks.com/en/tutorials/websockets/basics/](http://www.html5rocks.com/en/tutorials/websockets/basics/)

- PSR-0
	- [https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md)

### To Use
If its the First Time Use: 
		
		composer install
		
Else: 
		
		copmoser update

Cd into Root and run in Terminal: 
			
		php bin/XX-server.php
		
Open 2 browsers and in the consoles Run:

		var conn = new WebSocket('ws://localhost:8080/{ YOUR_PIPE_HERE }');
		conn.onopen = function(e) {
		    console.log("Connection established!");
		};
		
		conn.onmessage = function(e) {
		    console.log(e.data);
		}; 

Now To send Messages in each browser

	conn.send('Hello World');				