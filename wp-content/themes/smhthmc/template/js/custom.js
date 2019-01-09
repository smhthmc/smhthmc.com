$(document).ready(function() {
	$(window).on("load",function(){
		var t=$(".course-filter"),
		a=$("#course-menu-filter");

		t.isotope({
			filter:"*",
			layoutMode:"masonry",
			animationOptions:{duration:750,easing:"linear"}
		}),

		a.find("a").on("click",function(){
			var n=$(this).attr("data-filter");
			return a.find("a").addClass("stroke"),
			$(this).removeClass("stroke"),
			t.isotope({
				filter:n,
				animationOptions:{
					animationDuration:750,easing:"linear",queue:!1
				}
			}),
				!1
		})
	});

	$(window).on("load",function(){
		var t=$(".tutorial-filter"),
		a=$("#tutorial-menu-filter");

		t.isotope({
			filter:"*",
			layoutMode:"masonry",
			animationOptions:{duration:750,easing:"linear"}
		}),

		a.find("a").on("click",function(){
			var n=$(this).attr("data-filter");
			return a.find("a").addClass("stroke"),
			$(this).removeClass("stroke"),
			t.isotope({
				filter:n,
				animationOptions:{
					animationDuration:750,easing:"linear",queue:!1
				}
			}),
				!1
		})
	});

	// // external js: isotope.pkgd.js
	//
	// // init Isotope
	// var $grid = $('.grid').isotope({
	//   itemSelector: '.element-item',
	//   layoutMode: 'fitRows'
	// });
	// // filter functions
	// var filterFns = {
	//   // show if number is greater than 50
	//   numberGreaterThan50: function() {
	//     var number = $(this).find('.number').text();
	//     return parseInt( number, 10 ) > 50;
	//   },
	//   // show if name ends with -ium
	//   ium: function() {
	//     var name = $(this).find('.name').text();
	//     return name.match( /ium$/ );
	//   }
	// };
	// // bind filter button click
	// $('.filters-button-group').on( 'click', 'button', function() {
	//   var filterValue = $( this ).attr('data-filter');
	//   // use filterFn if matches value
	//   filterValue = filterFns[ filterValue ] || filterValue;
	//   $grid.isotope({ filter: filterValue });
	// });
	// // change is-checked class on buttons
	// $('.button-group').each( function( i, buttonGroup ) {
	//   var $buttonGroup = $( buttonGroup );
	//   $buttonGroup.on( 'click', 'button', function() {
	//     $buttonGroup.find('.is-checked').removeClass('is-checked');
	//     $( this ).addClass('is-checked');
	//   });
	// });

});
