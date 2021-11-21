<script>

    function getModel(val) {
        $.ajax({
            type: "POST",
            url: "Src/get_modelList.php",
            data: 'vMake='+val,
            success: function(data){
                $("#modelList").html(data);
            }
        });
    }

    function getYear(val) {
        $.ajax({
            type: "POST",
            url: "Src/get_yearList.php",
            data:'vModel='+val,

            success: function(data){
                $("#yearList").html(data);
            }
        });
    }

    function getVariant(val) {

        $.ajax({
            type: "POST",
            url: "Src/get_variantList.php",
            data:'vYear='+val,
            success: function(data){
                $("#variantList").html(data);
            }
        });
    }



    function selectCountry(val) {
        $("#search-box").val(val);
        $("#suggesstion-box").hide();
    }
</script>



<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="html 5 template">
	<meta name="author" content="tonytemplates.com">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="favicon.ico">
	<title>Metro Batteries-Book Appointment</title>
	<!-- Bootstrap core CSS -->
	<link href="css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="css/plugins/bootstrap-submenu.css" rel="stylesheet">
	<link href="css/plugins/animate.min.css" rel="stylesheet">
	<link href="css/plugins/slick.css" rel="stylesheet">
	<link href="css/plugins/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<![endif]-->
	<!-- Icon Font-->
	<link href="iconfont/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Muli:100,100i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        .youChose{border:1px solid #cdcdcd; padding: 10px; background-color: #dddddd; border-radius: 5px; }
        .vertical-tab-container{background: none !important; background-color: #E1E1E1 !important;}
    </style>

    <!-- Google map -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
</head>

<body class="home">

	<!-- Header -->
	