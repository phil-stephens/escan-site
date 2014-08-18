function equal_height() {
    var maxheight = new Array();

    $("[class^='eh']").css({
	height: "auto"
    });

    $("[class^='eh']").each(function() {
	num = $(this).attr('class').split(" ");
	num = num[0].replace("eh", "");
	if (!maxheight[num]) {
	    maxheight[num] = 0;
	}

	if ($(this).height() > maxheight[num]) {
	    maxheight[num] = $(this).height();
	}
    });

    for (var k in maxheight) {
	if (maxheight.hasOwnProperty(k)) {
	    $(".eh" + k).css({
		height: maxheight[k]
	    });
	}
    }
}

$(window).load(function() {
	setInterval(equal_height, 1000);
	equal_height();
});