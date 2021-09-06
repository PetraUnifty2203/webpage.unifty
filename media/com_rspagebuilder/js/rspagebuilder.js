
// Initialize YouTube Video
window.onYouTubeIframeAPIReady = function() {
	if (!jQuery.isFunction(jQuery.fn.YTPlayer)) {
		var player;
		
		jQuery(document).ready(RSPageBuilder.initYouTubeVideo);
	}
};

!function(jQuery) {
	var timer;
	
	jQuery(document).ready(function() {
		// Fix for Bootstrap Collapse (accordion)
		RSPageBuilder.fixAccordion();
		
		// Fix for Bootstrap Carousel conflict with Mootools
		RSPageBuilder.fixMootoolsCarousel();

		// Animate Sections
		RSPageBuilder.animateSections();
		
		// Animate Numbers
		RSPageBuilder.animateNumbers();
		
		// Animate Progress Bars
		RSPageBuilder.animateProgressBars();
		
		// Animate Progress Circles
		RSPageBuilder.animateProgressCircles();
		
		// Initialize Bootstrap Carousel
		RSPageBuilder.initCarousel();

		// Initialize Countdown Timer
		RSPageBuilder.initCountdownTimer();
		
		// Initialize Magnific Popup
		RSPageBuilder.initMagnificPopup();
		
		// Initialize Video Player
		RSPageBuilder.initVideoPlayer();
		
		// Initialize Vimeo Video
		RSPageBuilder.initVimeoVideo();
		
		// Initialize YouTube Video
		if (jQuery.isFunction(jQuery.fn.YTPlayer)) {
			jQuery(document).on('YTAPIReady', function() {
				var player;
				
				RSPageBuilder.initYouTubeVideo();
			});
		}
		
		// Initialize YouTube Background Video Boxes
		RSPageBuilder.initYouTubeBackgroundVideoBoxes();
	});
	
	jQuery(window).load(function() {
		
		// Initialize Masonry Boxes
		RSPageBuilder.initMasonryBoxes();
		
		// Initialize Portfolio Filtering Box
		RSPageBuilder.initPortfolioFiltering();
		
		if (jQuery('.rspbld-pages .rspbld-page-container .wrapper .preview').length) {
			jQuery('.rspbld-pages .rspbld-page-container .wrapper .preview').scroll(function () {
				// Animate Sections
				RSPageBuilder.animateSections();
				
				clearTimeout(timer);
				
				timer = setTimeout(function() {
					
					// Animate Numbers
					RSPageBuilder.animateNumbers();
					
					// Animate Progress Bars
					RSPageBuilder.animateProgressBars();
					
					// Animate Progress Circles
					RSPageBuilder.animateProgressCircles();
				}, 200);
			});
		}
	});
	
	jQuery(window).scroll(function() {
		// Animate Sections
		RSPageBuilder.animateSections();
		
		clearTimeout(timer);
		
		timer = setTimeout(function() {
			// Animate Numbers
			RSPageBuilder.animateNumbers();
			
			// Animate Progress Bars
			RSPageBuilder.animateProgressBars();
			
			// Animate Progress Circles
			RSPageBuilder.animateProgressCircles();
		}, 200);
	});
} (window.jQuery);

var RSPageBuilder = {
	fixAccordion: function () {
		jQuery('.accordion').each(function () {
			jQuery(this).find('.accordion-toggle').each(function (i, title) {
				if (jQuery(title).parent().siblings('.accordion-body').hasClass('in') === false)
					jQuery(title).addClass('collapsed');
			});
		});
		jQuery('.accordion-toggle').click(function () {
			jQuery(this).parents('.accordion').each(function () {
				jQuery(this).find('.accordion-toggle').each(function (i, title) {
					jQuery(title).addClass('collapsed');
				});
			});
		});
	},
	
	fixMootoolsCarousel: function() {
		if (typeof MooTools != 'undefined' ) {
			Element.implement({
				slide: function(how, mode){
					return this;
				}
			});
		}
	},
	
	animateSections: function() {
		if (jQuery.isFunction(jQuery.fn.visible)) {
			jQuery('.animation').each(function() {
				
				if (jQuery(this).visible('vertical') && !jQuery(this).hasClass('start')) {
					jQuery(this).addClass('start');
				}
			});
		}
	},
	
	animateNumbers: function() {
		if (jQuery.isFunction(jQuery.fn.visible) && jQuery.isFunction(jQuery.fn.animateNumber)) {
			jQuery('.rspbld-animated-number').each(function() {
				var limit		= jQuery(this).find('.rspbld-number').data('limit'),
					separator	= jQuery.animateNumber.numberStepFactories.separator(jQuery(this).find('.rspbld-number').data('separator')),
					duration	= jQuery(this).find('.rspbld-number').data('duration'),
					delay		= jQuery(this).find('.rspbld-number').data('delay');
				
				if (jQuery(this).visible('vertical')) {
					jQuery(this).find('.rspbld-number').delay(parseInt(delay)).animateNumber({	
						number: parseInt(limit),
						numberStep: separator
					}, parseInt(duration));
				}
			});
		}
	},
	
	animateProgressBars: function() {
		if (jQuery.isFunction(jQuery.fn.visible) && (jQuery('.rspbld-progress-bars.animate .progress .bar, .rspbld-progress-bars.animate .progress .progress-bar').length > 0)) {
			jQuery('.rspbld-progress-bars.animate .progress .bar, .rspbld-progress-bars.animate .progress .progress-bar').each(function(index) {
				if (!jQuery(this).attr('data-animated')) {
					var duration	= jQuery(this).closest('.rspbld-progress-bars.animate').data('duration'),
						delay		= jQuery(this).closest('.rspbld-progress-bars.animate').data('delay');
					
					jQuery(this).css('margin-left', '-' + jQuery(this).css('width'));
					jQuery(this).css('opacity', '1');
					if (jQuery(this).visible('vertical')) {
						jQuery(this).delay(parseInt(index * delay)).animate({
							marginLeft: 0
						}, duration);
						
						jQuery(this).attr('data-animated', '1');
					}
				}
			});
		}
	},
	
	animateProgressCircles: function() {
		if (jQuery.isFunction(jQuery.fn.visible) && (jQuery('.rspbld-progress-circles.animate .progress-circle').length > 0)) {
			jQuery('.rspbld-progress-circles.animate .progress-circle').each(function(index) {
				var current_circle = jQuery(this);
				
				if (!current_circle.attr('data-animated')) {
					var duration				= current_circle.closest('.rspbld-progress-circles.animate').data('duration'),
						delay					= current_circle.closest('.rspbld-progress-circles.animate').data('delay'),
						item_size				= current_circle.find('.item-wrapper').width(),
						show_item_percentage	= false;
						
					if (current_circle.find('.item-wrapper > span').text().indexOf('%') >= 0) {
						show_item_percentage = true;
					}
					
					if (current_circle.visible('vertical')) {
						current_circle.prop('counter', 0);
						
						setTimeout(function() {
							current_circle.animate({
							   counter: current_circle.find('.item-wrapper').attr('data-max-width'),
							}, {
								duration: duration,
								step: function(now) {
									var current = Math.ceil(now);
										
									if (current < 50) {
										current_circle.find('.item-wrapper .bar-wrapper').css('clip', 'rect(0, ' + item_size + 'px, ' + item_size + 'px, ' + item_size / 2 + 'px)');
									} else {
										current_circle.find('.item-wrapper .bar-wrapper').css('clip', 'rect(auto, auto, auto, auto)');
									}
									current_circle.find('.item-wrapper').attr('data-width', current);
								},
								queue: false
							}).animate({
								val_counter: (typeof current_circle.find('.item-wrapper').attr('data-max-value') !== 'undefined') ? current_circle.find('.item-wrapper').attr('data-max-value') : current_circle.find('.item-wrapper').attr('data-max-width'),
							}, {
								duration: duration,
								step: function(now) {
									var current = Math.ceil(now)
										symbol	= (typeof current_circle.find('.item-wrapper').attr('data-max-value') !== 'undefined' || !show_item_percentage) ? '' : '%';
										
									current += symbol;
									
									current_circle.find('.item-wrapper > span').text(current);
								},
								queue: false
							});
							
							current_circle.attr('data-animated', '1');
						}, index * delay);
					}
				}
			});
		}
	},
	
	initCarousel: function() {
		jQuery('.rspbld-carousel .carousel').each(function() {
			var carousel_cycle 	  	= (jQuery(this).attr('data-interval') == 0) ? false : true,
				carousel_interval	= (jQuery(this).attr('data-interval') == 0) ? false : jQuery(this).attr('data-interval'),
				carousel_swipe		= (jQuery(this).attr('data-swipe')) ? true : false;

			jQuery(this).carousel({
				interval: carousel_interval,
				cycle: carousel_cycle
			});

			// Initialize slide on swipe
			if (carousel_swipe && jQuery.isFunction(jQuery.fn.tswipe)) {
				jQuery(this).tswipe({
					allowPageScroll	: 'auto',
					tswipe			: function(event, direction, distance, duration, fingerCount, fingerData) {
						if (direction === 'left') {
							jQuery(this).carousel('next');
						} else if (direction === 'right') {
							jQuery(this).carousel('prev');
						}
					},
					threshold		: 0
				});
			}
		});
	},
	
	initCountdownTimer: function() {
		if (jQuery.isFunction(jQuery.fn.countdownTimer)) {
			jQuery('.rspbld-countdown-timer').each(function() {
				jQuery(this).countdownTimer();
			});
		}
	},
	
	initGoogleMap: function(id, element) {
		if (jQuery('#' + id).length) {
			var map_container	= document.getElementById(id),
				style			= [];
			
			if (element.options.map_color) {
				style = [
					{
						elementType: "labels",
						stylers    : [
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "poi",
						elementType: "labels",
						stylers    : [
							{visibility: "off"}
						]
					},
					{
						featureType: "road.highway",
						elementType: "labels",
						stylers    : [
							{visibility: "off"}
						]
					},
					{
						featureType: "road.local",
						elementType: "labels.icon",
						stylers    : [
							{visibility: "off"}
						]
					},
					{
						featureType: "road.arterial",
						elementType: "labels.icon",
						stylers    : [
							{visibility: "off"}
						]
					},
					{
						featureType: "road",
						elementType: "geometry.stroke",
						stylers    : [
							{visibility: "off"}
						]
					},
					{
						featureType: "transit",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "poi",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "poi.government",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "poi.sports_complex",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "poi.attraction",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "poi.business",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "transit",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "transit.station",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "landscape",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]

					},
					{
						featureType: "road",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "road.highway",
						elementType: "geometry.fill",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					},
					{
						featureType: "water",
						elementType: "geometry",
						stylers    : [
							{hue: element.options.map_color},
							{visibility: "on"},
							{lightness: element.options.map_brightness},
							{saturation: element.options.map_saturation}
						]
					}
				];
			}
			var	map			= new google.maps.Map(map_container, {
					center: {
						lat: parseFloat(element.options.map_latitude),
						lng: parseFloat(element.options.map_longitude)
					},
					styles: style,
					zoom: parseInt(element.options.map_zoom),
					scrollwheel: (element.options.map_scrollwheel === "1" ? true : false),
					draggable: (element.options.map_draggable === "1" ? true : false),
					zoomControl: (element.options.map_zoomcontrol === "1" ? true : false),
					streetViewControl : (element.options.map_streetviewcontrol === "1" ? true : false),
					mapTypeControl : (element.options.map_maptypecontrol === "1" ? true : false)
				}),
				geocoder	= new google.maps.Geocoder();
				
			if (element.items.length) {
				for (var i = 0; i < element.items.length; i++) {
					var marker_options = RSPageBuilder.escapeHtmlObject(element.items[i].options);
					
					marker_options.marker_index = i + 1;
					
					if (marker_options.marker_address) {
						geocoder.geocode({
							'address': marker_options.marker_address
						}, RSPageBuilder.onGeocodeComplete(map, marker_options));
					} else if (marker_options.marker_latitude && marker_options.marker_longitude) {
						var position = {
								lat: parseFloat(marker_options.marker_latitude),
								lng: parseFloat(marker_options.marker_longitude)
							};
							
						RSPageBuilder.googleMapMarkers(map, marker_options, position);
					}
				}
			}
		}
	},
	
	// Add Google map markers
	googleMapMarkers: function(map, marker_options, position) {
		
		// Build marker
		var marker_title_show	= 0,
			marker_icon			= {
				path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z M -2,-30 a 2,2 0 1,1 4,0 2,2 0 1,1 -4,0',
				fillColor: marker_options.marker_color,
				fillOpacity: parseFloat(marker_options.marker_opacity),
				scale: parseFloat(marker_options.marker_scale),
				strokeColor: marker_options.marker_stroke_color,
				strokeWeight: parseInt(marker_options.marker_stroke_weight)
			},
			marker				= {};
			
		// Marker show title
		if (typeof marker_options.marker_title_show == 'undefined' || (typeof marker_options.marker_title_show !== 'undefined' && marker_options.marker_title_show == 1)) {
			marker_title_show = 1;
		}
		
		// Marker icon 
		if (typeof marker_options.marker_icon !== 'undefined' && marker_options.marker_icon) {
			var regexp = /^http(s)?:\/\//;
			
			if (!regexp.test(marker_options.marker_icon)) {
				marker_icon = Joomla.getOptions('system.paths').root + '/' + marker_options.marker_icon;
			}
		}
		
		// Initialize marker
		marker = new google.maps.Marker({
			id: 'marker_' + marker_options.marker_index,
			position: position,
			map: map,
			icon: marker_icon
		});
		
		// Build infowindow
		var infowindow_content		= '',
			marker_title_style		= {},
			marker_content_style	= {};
			
		if ((marker_options.marker_title && marker_title_show) || marker_options.marker_content) {
			if (marker_options.marker_title && marker_title_show) {
				if (marker_options.marker_title_font_size) {
					marker_title_style['font-size'] = marker_options.marker_title_font_size;
				}
				if (marker_options.marker_title_text_color && marker_options.marker_title_text_color != 'none') {
					marker_title_style['color'] = marker_options.marker_title_text_color;
				}
			}
			if (marker_options.marker_content) {
				if (marker_options.marker_content_text_color) {
					marker_content_style['color'] = marker_options.marker_content_text_color;
				}
			}
			infowindow_content += '<div class="rspbld-infowindow">';
			
			if (marker_options.marker_title && marker_title_show) {
				infowindow_content += '<' + marker_options.marker_title_heading + ' class="rspbld-title"' + RSPageBuilder.buildStyle(marker_title_style) + '>' + marker_options.marker_title + '</' + marker_options.marker_title_heading + '>';
			}
			if (marker_options.marker_content) {
				infowindow_content += '<div class="rspbld-content"' + RSPageBuilder.buildStyle(marker_content_style) + '>' + marker_options.marker_content + '</div>';
			}
			infowindow_content += '</div>';
			
			var infowindow = new google.maps.InfoWindow({
				content: infowindow_content,
				maxWidth: 250
			});
		}
		
		// Add infowindow listener
		if (marker && infowindow) {
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map, marker);
			});
		}
	},
	
	// Geocode (address to coordinates)
	onGeocodeComplete: function(map, marker_options) {
		var geocodeCallBack = function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				RSPageBuilder.googleMapMarkers(map, marker_options, results[0].geometry.location);
			} else {
				alert ('Location geocoding failed: ' + status);
			}
		}
		return geocodeCallBack;
	},
	
	initMagnificPopup: function() {
		if (jQuery.isFunction(jQuery.fn.magnificPopup)) {
			var tags = [];
			
			jQuery('.rspbld-magnific-popup').each(function() {
				tags.push(jQuery(this).attr('data-tag'));
			});
			
			tags = jQuery.unique(tags);
			
			for (var i = 0; i < tags.length; i++) {
				var enabled_gallery = false;
				
				if (jQuery('.rspbld-magnific-popup[data-tag="' + tags[i] + '"]').length > 1) {
					enabled_gallery = true;
				}
				
				jQuery('.rspbld-magnific-popup[data-tag="' + tags[i] + '"]').magnificPopup({
					type: 'image',
					gallery: {
						enabled: enabled_gallery
					},
					mainClass: 'mfp-with-zoom',
					zoom: {
						enabled: true,

						duration: 300,
						easing: 'ease-in-out',
						opener: function(openerElement) {
						  return openerElement.is('img') ? openerElement : openerElement.find('img');
						}
					}
				});
			}
		}
	},
	
	initVideoPlayer: function() {
		jQuery('.rspbld-video-player').each(function() {
			jQuery(this).videoPlayer();
		});
	},
	
	initVimeoVideo: function() {
		jQuery('.rspbld-vimeo-video').each(function() {
			var video 	= jQuery(this),
				options	= {
					id			: video.data('source'),
					autoplay	: (video.data('autoplay') == 1) ? true : false,
					loop		: (video.data('loop') == 1) ? true : false
				},
				player	= new Vimeo.Player(video.attr('id'), options);
				
			player.setVolume(video.data('volume') / 100);
			
			if (video.data('start') != 0 || video.data('end') != 0) {
				if (video.data('end') > video.data('start')) {
					player.setCurrentTime(video.data('start')).then(function(seconds) {
						player.addCuePoint(parseInt(video.data('end')));
						
						player.on('cuepoint', function() {
							player.pause();
						})
					});
				} else if (video.data('end') == 0) {
					player.setCurrentTime(video.data('start')).then(function(seconds) {
						player.getDuration().then(function(duration) {
							player.addCuePoint(parseInt(duration));
							
							player.on('cuepoint', function() {
								player.pause();
							})
						}).catch(function(error) {});
					}).catch(function(error) {});
				}
			}
		});
	},
	
	initYouTubeVideo: function() {
		jQuery('.rspbld-youtube-video').each(function() {
			var video = jQuery(this);
			
			player = new YT.Player(video.attr('id'), {
				videoId		: video.data('source'),
				playerVars	: {
					'autoplay'		: video.data('autoplay'),
					'controls'		: video.data('controls'),
					'rel'			: video.data('rel'),
					'loop'			: video.data('loop'),
					'playlist'		: video.data('source'),
					'start'			: video.data('start'),
					'end'			: video.data('end'),
					'playsinline'	: 1,
					'origin'		: window.location.origin
				},
				events		: {
					'onReady': onPlayerReady
				}
			});
			
			function onPlayerReady(event) {
				event.target.setVolume(video.data('volume'));
			}
		});
	},
	
	initYouTubeBackgroundVideoBoxes: function() {
		if (jQuery.isFunction(jQuery.fn.YTPlayer)) {
			jQuery('.rspbld-youtube-player').each(function(i, yt_box){
				jQuery.mbYTPlayer.apiKey = jQuery(yt_box).data('apikey');
				jQuery(yt_box).YTPlayer();
			});
		}
	},
	
	initPortfolioFiltering: function() {
		if (jQuery.isFunction(jQuery.fn.filterizr)) {
			if (jQuery('.rspbld-portfolio-filtering-container').length) {
				jQuery('.rspbld-portfolio-filtering-container').each(function() {
					var layout	= jQuery(this).attr('data-layout'),
						fltr	= jQuery(this).filterizr({layout: layout, setupControls: false}),
						prtfl	= jQuery(this).parent();
					
					prtfl.find('.rspbld-filter li').click(function() {
						fltr.filterizr('filter', jQuery(this).attr('data-filter'));
						
						prtfl.find('.rspbld-filter li').removeClass('active');
						jQuery(this).addClass('active');
					});
				});
			}
		}
	},
	
	initMasonryBoxes: function() {
		if (jQuery.isFunction(jQuery.fn.masonry)) {
			if (jQuery('.rspbld-masonry-boxes').length) {
				jQuery('.rspbld-masonry-boxes').each(function() {
					var	boxes_container = jQuery(this).find('.boxes-container'),
						min_size		= parseInt(boxes_container.attr('data-min-size')),
						gutter			= parseInt(boxes_container.attr('data-gutter'));
					
					if (min_size) {
						boxes_container.find('.box').each(function() {
							var sizes		= parseInt(jQuery(this).attr('class').replace(/^.*size([0-9]+).*$/, '$1')).toString().split(''),
								row_size	= (jQuery.isNumeric(sizes[1])) ? parseInt(sizes[1]) : 1,
								column_size	= (jQuery.isNumeric(sizes[0])) ? parseInt(sizes[0]) : 1,
								box_height	= (gutter > 0) ? parseInt(min_size * row_size + gutter * (row_size - 1)) : parseInt(min_size * row_size);
								box_width	= (gutter > 0) ? parseInt(min_size * column_size + gutter * (column_size - 1)) : parseInt(min_size * column_size);
							
							jQuery(this).css('height', box_height);
							jQuery(this).css('width', box_width);
							jQuery(this).css('margin-bottom', gutter);
						});
						
						boxes_container.masonry({
							itemSelector: '.box',
							columnWidth: min_size,
							gutter: gutter
						});
					} else {
						if (gutter) {
							boxes_container.find('.box').each(function(index) {
								var size = parseInt(jQuery(this).attr('class').replace(/^.*cols-([0-9]+).*$/, '$1')).toString();
								
								jQuery(this).css('width', 'calc(' + (100 / size) + '% - ' + ((size - 1) * gutter / size) + 'px)');
								jQuery(this).css('margin-bottom', gutter + 'px');
							});
						}
						
						boxes_container.masonry({
							itemSelector: '.box',
							gutter: gutter
						});
					}
				});
			}
		}
	},
	
	// Escape HTML
	escapeHtml: function(str) {
		return str.replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/&/g, '&amp;');
	},
	
	// Escape HTML
	escapeHtmlObject: function(obj) {
		for (var key in obj) {
			if (key != 'item_content' && key != 'marker_content') {
				obj[key] = RSPageBuilder.escapeHtml(obj[key]);
			}
		}
		
		return obj;
	},
	
	// Build style
	buildStyle: function(obj) {
		var style = '';
		
		if (Object.keys(obj).length) {
			style += ' style="';
			
			for (var key in obj) {
				if (key == 'background-image') {
					style += key + ':url(' + obj[key] + ');';
				} else {
					style += key + ':' + obj[key] + ';';
				}
			}
			style += '"';
		}
		return style;
	}
};