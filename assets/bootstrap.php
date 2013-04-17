<!DOCTYPE html>
<head>
	<title>Bootstrap Elements</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
	<script type="text/javascript" src="jquery.selectbox-0.2.min.js"></script>
	<script type="text/javascript">
				var bootstrapLabel = {
			e: '',
			init: function(e) {
				bootstrapLabel.e = e;
				tinyMCEPopup.resizeToInnerSize();
			},
			insert: function insert(e) {
			// Get Values from Form
				var style = $('#style-label').val();
				var text = $('#text-label').val();
			// Output to put into TinyMCE Command
				var output = '<span class="label label-'+style+'">'+text+'</span>';
			// TinyMCE Command
				tinyMCEPopup.execCommand('mceReplaceContent', false, output);
				tinyMCEPopup.close();
			}
		}
		tinyMCEPopup.onInit.add(bootstrapLabel.init, bootstrapLabel);

		var bootstrapBadge = {
			e: '',
			init: function(e) {
				bootstrapBadge.e = e;
				tinyMCEPopup.resizeToInnerSize();
			},
			insert: function insert(e) {
			// Get Values from Form
				var style = $('#style-badge').val();
				var text = $('#text-badge').val();
			// Output to put into TinyMCE Command
				var output = '<span class="badge badge-'+style+'">'+text+'</span>';
			// TinyMCE Command
				tinyMCEPopup.execCommand('mceReplaceContent', false, output);
				tinyMCEPopup.close();
			}
		}
		tinyMCEPopup.onInit.add(bootstrapBadge.init, bootstrapBadge);

		var bootstrapWell = {
			e: '',
			init: function(e) {
				bootstrapWell.e = e;
				tinyMCEPopup.resizeToInnerSize();
			},
			insert: function insert(e) {
			// Get Values from Form
				var size = $('#size-well').val();
				var text = $('#text-well').val();
			// Output to put into TinyMCE Command
				var output = '<span class="well well-'+size+'">'+text+'</span>';
			// TinyMCE Command
				tinyMCEPopup.execCommand('mceReplaceContent', false, output);
				tinyMCEPopup.close();
			}
		}
		tinyMCEPopup.onInit.add(bootstrapWell.init, bootstrapWell);

		var bootstrapbtn = {
			e: '',
			init: function(e) {
				bootstrapbtn.e = e;
				tinyMCEPopup.resizeToInnerSize();
			},
			insert: function insert(e) {
			// Get Values from Form
				var size = $('#size-btn').val();
				var style = $('#style-btn').val();
				var text = $('#text-btn').val();
				var width = $('#width-btn:checked').val();
			// Output to put into TinyMCE Command
				var output = '<button class="btn btn-'+size+' btn-'+style+' '+width+'" type="button">'+text+'</button>';
			// TinyMCE Command
				tinyMCEPopup.execCommand('mceReplaceContent', false, output);
				tinyMCEPopup.close();
			}
		}
		tinyMCEPopup.onInit.add(bootstrapbtn.init, bootstrapbtn);

	</script>
	<link rel="stylesheet" href="display.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>


<ul id="tabs">
	<li id="tab-1" class="selected">Labels</li>
	<li id="tab-2">Badges</li>
	<li id="tab-3">Wells</li>
	<li id="tab-4">Buttons</li>
</ul>
<div id="tabs-content">
	<div id="tab-content-1" class='tab-content'>
		<div id='preview-label' class='preview'>
			<div id='preview-label-text' class='label'>
				Label Text
			</div>
		</div>
		<div class='preview-text'>
			Preview
		</div>
		<form>
			<select name='style-label' id='style-label' class='dropdown'>
			  <option value="default">Default</option>
			  <option value="success">Success</option>
			  <option value="warning">Warning</option>
			  <option value="important">Important</option>
			  <option value="info">Info</option>
			  <option value="inverse">Inverse</option>
			</select>
			<input type='text' name='text-label' id='text-label' class='field' value='Label Text'>
			<a href="javascript:bootstrapLabel.insert(bootstrapLabel.e)"><button class="field" type="button">Insert</button></a>
		</form>
	</div>
	<div id="tab-content-2" class='tab-content'>
		<div id='preview-badge' class='preview'>
			<div id='preview-badge-text' class='badge'>
				Badge Text
			</div>
		</div>
		<div class='preview-text'>
			Preview
		</div>
		<form>
			<select name='style-badge' id='style-badge' class='dropdown'>
			  <option value="default">Default</option>
			  <option value="success">Success</option>
			  <option value="warning">Warning</option>
			  <option value="important">Important</option>
			  <option value="info">Info</option>
			  <option value="inverse">Inverse</option>
			</select>
			<input type='text' name='text-badge' id='text-badge' class='field' value='Badge Text'>
			<a href="javascript:bootstrapBadge.insert(bootstrapBadge.e)"><button class="field" type="button">Insert</button></a>
		</form>
	</div>
	<div id="tab-content-3" class='tab-content'>
		<div id='preview-well' class='preview'>
			<div id='preview-well-text' class='well'>
				Well Text
			</div>
		</div>
		<div class='preview-text'>
			Preview
		</div>

		<form>
			<select name='size-well' id='size-well' class='dropdown'>
			  <option value="small">Small</option>
			  <option value="default" selected>Default</option>
			  <option value="large">Large</option>
			</select>
			<input type='text' name='text-well' id='text-well' class='field' value='Well Text'>
			<a href="javascript:bootstrapWell.insert(bootstrapWell.e)"><button class="field" type="button">Insert</button></a>
		</form>

	</div>
	<div id="tab-content-4" class='tab-content'>
		<div id='preview-btn' class='preview'>
			<div id='preview-btn-text' class='btn'>
				Button Text
			</div>
		</div>
		<div class='preview-text'>
			Preview
		</div>
		<form style='position:relative;'>
			<select name='size-btn' id='size-btn' class='dropdown'>
			  <option value="mini">Mini</option>
			  <option value="small">Small</option>
			  <option value="default" selected>Medium</option>
			  <option value="large">Large</option>
			</select>
			<select name='style-btn' id='style-btn' class='dropdown'>
			  <option value="default">Default</option>
			  <option value="primary">Primary</option>
			  <option value="info">Info</option>
			  <option value="success">Success</option>
			  <option value="warning">Warning</option>
			  <option value="danger">Danger</option>
			  <option value="inverse">Inverse</option>
			  <option value="link">Link</option>
			</select>
			<input type='text' name='text-btn' id='text-btn' class='field' value='Button Text'>
			<a href="javascript:bootstrapbtn.insert(bootstrapbtn.e)"><button id="btn-insert" class="field" type="button">Insert</button></a>
			<div id='width-btn-contain'>
				<input type="checkbox" name="width-btn" id="width-btn" value="btn-block">100% Width<br>
			</div>
		</form>

	</div>
</div>
<div class='donate-wrap'>
	<a class="wepay-widget-button wepay-green" id="wepay_widget_anchor_516dbc6ab0a46" href="https://www.wepay.com/donations/424618264">Donate</a><script type="text/javascript">var WePay = WePay || {};WePay.load_widgets = WePay.load_widgets || function() { };WePay.widgets = WePay.widgets || [];WePay.widgets.push( {object_id: 424618264,widget_type: "donation_campaign",anchor_id: "wepay_widget_anchor_516dbc6ab0a46",widget_options: {list_suggested_donations: true,allow_anonymous: true,button_text: "Donate"}});if (!WePay.script) {WePay.script = document.createElement('script');WePay.script.type = 'text/javascript';WePay.script.async = true;WePay.script.src = 'https://static.wepay.com/min/js/widgets.v2.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(WePay.script, s);} else if (WePay.load_widgets) {WePay.load_widgets();}</script>
</div>

<script type="text/javascript">
(function($) {

//Select Box Formatting
	$(function () {
		$(".dropdown").selectbox();
	});

// Tabs Functions
	$('#tabs-content').addClass('hide');	
	$("#tabs li").each(function() {
		
		$(this).click(function() {
			var tabId = $(this).attr('id');
			var tabId = tabId.split('-');
			var tabContent = document.getElementById('tab-content-' + tabId[1]);
			tabContent.style.display = 'block';
			$(this).addClass('selected');
			$(this).siblings().removeClass('selected');			
			$(tabContent).siblings().css('display','none');	
		});
	
	});

// Update Label Text Realtime
	function textChange(type){
		$('#text-'+type).keyup(function() {
			$('#preview-'+type+'-text').text($(this).val());
		});  
	}
	textChange('label');
	textChange('badge');
	textChange('well');
	textChange('btn');

// Update Label Classes
var lastSelect = "";
	function updateClasses(type,css){
		$("#"+css+"-"+type).change(function () {
		  $("#"+css+"-"+type+" option:selected").each(function () {
		  	var classes = $(this).text().toLowerCase();
		  	$('#preview-'+type+'-text').removeClass(function(){
		  		if(css==='size'){
		  			return type+"-mini "+type+"-small "+type+"-medium "+type+"-large ";
			  	} else if (css==='style'){
			  		return type+"-default "+type+"-primary "+type+"-info "+type+"-success "+type+"-warning "+type+"-danger "+type+"-inverse "+type+"-link "+type+"-important ";
			  	}
		  	}).addClass(function() {
				return type+" "+type+"-"+classes;
			});
		  });
		})
		.change();
	}
	updateClasses('label', 'style');
	updateClasses('badge', 'style');
	updateClasses('well', 'size');
	updateClasses('btn', 'size');
	updateClasses('btn', 'style');

// Checkbox Button Full 
	$("#width-btn").change(function() {
	   $('#preview-btn-text').toggleClass('btn-block');
	});

})(jQuery)
</script>
</body>
</html>
