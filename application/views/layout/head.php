<head>
<title>OffersBull</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" /><!-- flexslider-CSS -->
<link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/jquery-ui1.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	


<!-- switcher-grid and list alignment -->
<script src="<?php echo base_url();?>assets/js/tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<!-- language-select -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.leanModal.min.js"></script>
<link href="<?php echo base_url();?>assets/css/jquery.uls.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>assets/css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>assets/css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="<?php echo base_url();?>assets/js/jquery.uls.data.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.uls.data.utils.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.uls.lcd.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.uls.languagefilter.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.uls.regionfilter.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
<!-- //language-select -->
	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>

</head>