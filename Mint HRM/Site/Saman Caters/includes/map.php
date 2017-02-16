<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div id="mapContainer" style="width:100%; height:250px;"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script src="http://jhere.net/js/jhere.js"></script>    
        <script>
        $(window).on('load', function() {
            $('#mapContainer').jHERE({
                enable: ['behavior'],
                center: [6.8420292, 79.9088826],
                zoom: 13
            }).jHERE('bubble', [6.8420292, 79.9088826], {closable: false, content: 'Saman Caterers!'});
        });
		</script>
</body>
</html>