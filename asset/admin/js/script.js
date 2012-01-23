$(function () {
	// Tinymce initialization
        $('textarea.tinymce').tinymce({
			// Location of TinyMCE script
			script_url : 'asset/admin/tiny_mce/tiny_mce.js',

			// General options
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

			// Theme options
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,

			// Example content CSS (should be your site CSS)
			content_css : "css/content.css",

			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js",

			// Replace values for the template plugin
			template_replace_values : {
				username : "Some User",
				staffid : "991234"
			}
		});
	
	// Notification Close Button
	$(".close-notification").click(
		function () {
			$(this).parent().fadeTo(350, 0, function () {$(this).slideUp(600);});
			return false;
		}
	);

	// jQuery Tipsy
	$('[rel=tooltip], #main-nav span, .loader').tipsy({gravity:'s', fade:true}); // Tooltip Gravity Orientation: n | w | e | s

	// jQuery Facebox Modal
	$('a[rel*=modal]').facebox();

	// jQuery jWYSIWYG Editor
	$('.wysiwyg').wysiwyg({ iFrameClass:'wysiwyg-iframe' });
	
	// jQuery dataTables
	$('.datatable').dataTable();

	// Check all checkboxes
	$('.check-all').click(
		function(){
			$(this).parents('form').find('input:checkbox').attr('checked', $(this).is(':checked'));
		}
	)

	// IE7 doesn't support :disabled
	$('.ie7').find(':disabled').addClass('disabled');

	// Menu Dropdown
	$("#main-nav li ul").hide(); //Hide all sub menus
	$("#main-nav li.current a").parent().find("ul").slideToggle("slow"); // Slide down the current sub menu
	$("#main-nav li a").click(
		function () {
			$(this).parent().siblings().find("ul").slideUp("normal"); // Slide up all menus except the one clicked
			$(this).parent().find("ul").slideToggle("normal"); // Slide down the clicked sub menu
			return false;
		}
	);
	$("#main-nav li a.no-submenu").click(
		function () {
			window.location.href=(this.href); // Open link instead of a sub menu
			return false;
		}
	);

	// Widget Close Button
	$(".close-widget").click(
		function () {
			$(this).parent().fadeTo(350, 0, function () {$(this).slideUp(600);});
			return false;
		}
	);

	// Image actions
	$('.image-frame').hover(
		function() { $(this).find('.image-actions').css('display', 'none').fadeIn('fast').css('display', 'block'); }, // Show actions menu
		function() { $(this).find('.image-actions').fadeOut(100); } // Hide actions menu
	);

	// Content box tabs
	$('.tab').hide(); // Hide the content divs
	$('.default-tab').show(); // Show the div with class "default-tab"
	$('.tab-switch a.default-tab').addClass('current'); // Set the class of the default tab link to "current"

	$('.tab-switch a').click(
		function() { 
			var tab = $(this).attr('href'); // Set variable "tab" to the value of href of clicked tab
			$(this).parent().siblings().find("a").removeClass('current'); // Remove "current" class from all tabs
			$(this).addClass('current'); // Add class "current" to clicked tab
			$(tab).siblings('.tab').hide(); // Hide all content divs
			$(tab).show(); // Show the content div with the id equal to the id of clicked tab
			return false;
		}
	);

	// Content box side tabs
	$(".sidetab").hide();// Hide the content divs
	$('.default-sidetab').show(); // Show the div with class "default-sidetab"
	$('.sidetab-switch a.default-sidetab').addClass('current'); // Set the class of the default tab link to "current"
	
	$(".sidetab-switch a").click(
		function() { 
			var sidetab = $(this).attr('href'); // Set variable "sidetab" to the value of href of clicked sidetab
			$(this).parent().siblings().find("a").removeClass('current'); // Remove "current" class from all sidetabs
			$(this).addClass('current'); // Add class "current" to clicked sidetab
			$(sidetab).siblings('.sidetab').hide(); // Hide all content divs
			$(sidetab).show(); // Show the content div with the id equal to the id of clicked tab
			return false;
		}
	);
	
	//Minimize Content Article
	$("article header h2").css({ "cursor":"s-resize" }); // Minizmie is not available without javascript, so we don't change cursor style with CSS
	$("article header h2").click( // Toggle the Box Content
		function () {
			$(this).parent().find("nav").toggle();
			$(this).parent().parent().find("section, footer").toggle();
		}
	);
});