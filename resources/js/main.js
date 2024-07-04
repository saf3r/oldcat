$("#global_search").on("click", function(e) {
    $(this).addClass("absolute w-[calc(100%-1rem)] left-[.5rem]");
    $("#global_search_close").removeClass("hidden");
});

$("#global_search_close").on("click", function(e) {
    $("#global_search").removeClass("absolute w-[calc(100%-1rem)] left-[.5rem]");
    $("#global_search_close").addClass("hidden");
});

jQuery(function($){
	$(document).mouseup( function(e){
		var div = $( "#global_search" );
		if ( !div.is(e.target)
		    && div.has(e.target).length === 0 ) {
            div.removeClass("absolute w-[calc(100%-1rem)] left-[.5rem]");
            $("#global_search_close").addClass("hidden");
		}
	});
});

$("#header_profile_button").on("click", function(e) {
    e.preventDefault();
    
    if($(this).hasClass("hidden")) {
        $("#header_profile_list").addClass("hidden");
    } else {
        $("#header_profile_list").removeClass("hidden");
    }
});

jQuery(function($){
	$(document).mouseup( function(e){
		var div = $( "#header_profile_list" );
		if ( !div.is(e.target)
		    && div.has(e.target).length === 0 ) {
            div.addClass("hidden");
		}
	});
});

$("#sidebar_button").on("click", function(e) {
    $("#sidebar").addClass("!translate-x-0")
    // $("#sidebar").removeClass("translate-x-96");
    $("#overlay").removeClass("hidden")
});

$("#overlay, #sidebar_close").on("click", function(e) {
    $("#overlay").addClass("hidden")
    $("#sidebar").addClass("translate-x-96")
    $("#sidebar").removeClass("!translate-x-0");
    
});