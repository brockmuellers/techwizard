current_slide = 1
slide_count = 0
function createSlides() {
	var firstSlide = $("#tut1")
	var rest = $(".tutorial-slide").not("#tut1")
	slide_count = 1 + rest.length
	rest.hide()
}

function advanceSlide() {
	if(current_slide >=slide_count) {
		return;
	}
	var slide = "#tut" + current_slide
	$(slide).hide("slide", { direction: "left" });
	current_slide ++
	var slide = "#tut" + current_slide
	$(slide).show("slide", { direction: "right" }, 800);
}

function previousSlide() {
	if(current_slide <= 1) {
		return;
	}
	var slide = "#tut" + current_slide
	$(slide).hide("slide", { direction: "right" }, 500);
	current_slide --
	var slide = "#tut" + current_slide
	setTimeout(function(){
	$(slide).show("slide", { direction: "left" }, 800);
	},450);
}

$(document).ready(function() {
	createSlides()
});

