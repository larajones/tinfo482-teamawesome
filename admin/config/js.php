<?php

//javaScript files

?>
    <script src="//code.jquery.com/jquery-1.12.0.min.js">
    </script><!-- jQuery UI -->

    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js">
    </script><!-- Latest compiled and minified JavaScript -->

    <script src=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </script>
    
        <script src = "js/dropzone.js"
    </script>

    
    <script  src = "js/tinymce/tinymce.min.js"
    </script>


<script>
    
 	$(document).ready(function() {
		
		$("#console-debug").hide();
		
		$("#btn-debug").click(function(){
			
			$("#console-debug").toggle();
			
		});
		
		
		$(".btn-delete").on("click", function() {
			
			var selected = $(this).attr("id");
			var pageid = selected.split("del_").join("");
			
			var confirmed = confirm("Are you sure you want to delete this page?");
			
			if(confirmed == true) {
				
				$.get("ajax/pages.php?id="+pageid);
				
				$("#page_"+pageid).remove();				
				
			}
			

			
			//alert(selected);
			
		})
		

		
		
	}); // END document.ready();
    
    
</script>
