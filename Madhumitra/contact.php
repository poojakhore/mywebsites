<?php
include "header.php";
?>

<div class="container">
  
  <div class="panel panel-primary" style="max-width:400px;margin:auto">
    <div class="panel-heading"><center>Contact Us</center> </div>
    	<div class="panel-body"><h3 style="text-align:center;">Devendra Khot</h3>
	<p style="text-align:center;">Location: Behind Hotel Shiveccha,<br> Kisan Chouk, Sangli, Market Yard - <br>-<strong> Sangli - Maharashtra</strong></p>
	<p style="text-align:center;"><strong>Phone :</strong> 9372909099</p>
	<p style="text-align:center;"><strong>WEBSITE URL :</strong> <a href="http://www.madhumitra.com" >www.madhumitra.com</a> </p>

	<p><button id="viewmapgoogle" class="btn btn-block  btn-border btn-danger btn-post nav-link" href="javascript:void(0)">View Map</button>
<div id="itemMap" style="width: 100%; height: 240px;"></div>	
</p>	
</div>
  </div>
</div>


<?php
include "footer.php";
?>

<script type="text/javascript">
$(document).ready(function(){
        $("#viewmapgoogle").click(function(){
            console.log('Behind Hotel Shiveccha, Kisan Chouk, Sangli, Sangli, 416416, Maharashtra');
             var link = "https://maps.google.it/maps?q=Behind Hotel Shiveccha, Kisan Chouk, Sangli, Sangli, 416416, Maharashtra&output=embed"
            var iframe = document.createElement('iframe');
            iframe.frameBorder=0;
            iframe.width="300px";
            iframe.height="250px";
            iframe.id="";
            iframe.setAttribute("src", link);
            document.getElementById("itemMap").appendChild(iframe);
            $("#itemMap").show();
            $("#viewmapgoogle").attr("disabled","disabled");
          //  showAddress('Behind Hotel Shiveccha, Kisan Chouk, Sangli, Sangli, 416416, Maharashtra');
    });
});
</script> 