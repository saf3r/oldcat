$("#global_search").on("click",function(e){$(this).addClass("absolute w-[calc(100%-1rem)] left-[.5rem]"),$("#global_search_close").removeClass("hidden")});$("#global_search_close").on("click",function(e){$("#global_search").removeClass("absolute w-[calc(100%-1rem)] left-[.5rem]"),$("#global_search_close").addClass("hidden")});jQuery(function(e){e(document).mouseup(function(a){var l=e("#global_search");!l.is(a.target)&&l.has(a.target).length===0&&(l.removeClass("absolute w-[calc(100%-1rem)] left-[.5rem]"),e("#global_search_close").addClass("hidden"))})});
