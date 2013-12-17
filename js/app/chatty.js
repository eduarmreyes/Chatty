var conn = new WebSocket('ws://localhost:8080/socketo/');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
	console.log(e);
    $("#chat-log").append("The other guy: " + e.data + "\n");
};