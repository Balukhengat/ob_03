<head>
<title>OffersBull</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/bootstrap.js"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" /><!-- flexslider-CSS -->
<link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/jquery-ui1.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"></script>
<!-- Google FONTS -->
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- Magnification -->
<link href="<?php echo base_url();?>assets/magnification/css/mag.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/magnification/theme/default.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>assets/magnification/js/jquery.event.drag.js"></script>
<script src="<?php echo base_url();?>assets/magnification/js/mag.js"></script>
<script src="<?php echo base_url();?>assets/magnification/js/mag-jquery.js"></script>
	
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Relestate, Tutions, Hotels, Restaurents, Travelling, automobile, offers, offersbull, best offers" />
<meta name="description" content="OffersBull is continuosly developing and growing to provide best deals and offers and all information regarding products/organizations in several fields such as realestate, tutions, hotels and many more...">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- Datatable JS -->
<script src="cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<!-- switcher-grid and list alignment -->
<script src="<?php echo base_url();?>assets/js/tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<!-- Light Gallery Plugin Css -->
    <link href="<?php echo base_url();?>assets_admin/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">
<html>
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

<script>
$(document).ready(function(){
        $("#rect1").animate({left: '40px'});
        $("#rect2").animate({left: '10px'});
        $("#rect3").animate({right: '10px'});
        $("#rect4").animate({right: '40px'});

        $("#pslide").animate({
            left: '30px',
            opacity: '0.5',
            height: '20px',
            width: 'max-width'
        });
});
</script>
<script>
$(document).ready(function(){
    $('#example').DataTable();
});
</script>
</head>