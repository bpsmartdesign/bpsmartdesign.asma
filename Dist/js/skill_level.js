(function() {

	var jauges = document.querySelectorAll('.skill_level'), ':before';

	console.log(jauges);
	function setLevel (elt, level) {

		skill_level = document.createElement('span');
		skill_level.style.height = 4;

		// elt.appendChild(skill_level);
		document.body.appendChild(skill_level);
		skill_level.width = 50;

		// console.log(skill_level);
	}

	for(var i = 0; i < jauges.length; i++) {

		level = jauges[i].attributes.level.value;
		setLevel(jauges[i], level);


		// console.log(this);
		// console.log(level);
	}

})();