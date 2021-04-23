(function() {

	var paragraphs = document.querySelectorAll('p'); // on selectionne tous les paragraphs
	var words = new Array();
	var letters = new Array();
	var span = document.createElement('span');
	var h = document.querySelector('h1');

	// Cette petite boucle vas nous permettre de récupérer tous les mots qui sont dans les balises 'p' et les entourer d'une balise span dans la variable 'words'
	for(var i = 0; i < paragraphs.length; i++) {
		w = paragraphs[i].innerHTML.split(' ');
		tmp = w;
		for(var j = 0; j < w.length; j++) {
			w[j] = '<span class="dance">'+tmp[j]+'</span>';
			words.push(w[j]);
		}
		var all = words.join(' ');
		paragraphs[i].innerHTML = all;
		words = new Array();
	}

	// Maintenant on met l'annimation sur chaque mot
	var jkl = document.querySelectorAll('p .dance');
	for(var i = 0; i < jkl.length; i++) {
		var j = i;
		jkl[i].addEventListener('mouseover', function(e) {
			e.preventDefault();
			e.stopPropagation();
			this.style.animation = 'dancing .9s ease';
		})
	}

	function init() {
		for(var i = 0; i < jkl.length; i++) {
			jkl[i].style.animation = '';
		}
	}

	window.setInterval(init, 5000);
})();