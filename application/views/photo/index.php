<div class="container-fluid">
	<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">		
	</div>
	
</div>

<script type="text/javascript">
	
	$.ajax({
		url :"photos/get_files",
		type:"GET",
		dataType:"json",
		success:function(json){
			render(json);
				
		}
	});
	function render(list){
		var w= document.body.clientWidth;
		var count = Math.floor(w / 175);
		//alert(count);
		for(var i=0;i<count;i++){
			var div= "<div id='list"+i+"' class='span2' style='width:160px;'></div>";
			$(div).appendTo('#gallery');
		}
		for(var i=0;i<list.length;i++){
			var photo = list[i];
			var url = "<?php echo base_url();?>"+photo.thumbnail_url;
			var orgin_url = "<?php echo base_url();?>"+photo.file_url;
			var html = "<div style='margin-top:10px'><a href='"+orgin_url+"' title='"+photo.filename+
			"' rel='gallery' download='"+photo.filename+"' ><img src='"+url+"' width='160' /></a></div>";
			$(html).appendTo('#list'+(i%count));
		}
	}
	document.body.onresize=function(e){
		var w= document.body.clientWidth;
		//alert(w);
	}
	
	
</script>

<!-- modal-gallery is the modal dialog used for the image gallery -->
	<div id="modal-gallery" class="modal modal-gallery hide fade" data-filter=":odd" tabindex="-1">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3 class="modal-title"></h3>
		</div>
		<div class="modal-body">
			<div class="modal-image"></div>
		</div>
		<div class="modal-footer">
			<a class="btn modal-download"	target="_blank"> 
				<i class="icon-download"></i> 
				<span>Download</span>
			</a> 
			<a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"> 
				<i class="icon-play icon-white"></i> 
				<span>Slideshow</span>
			</a> 
			<a class="btn btn-info modal-prev"> 	
				<i	class="icon-arrow-left icon-white"></i> 
				<span>Previous</span> 
			</a> 
			<a	class="btn btn-primary modal-next"> 
				<span>Next</span> 
				<i class="icon-arrow-right icon-white"></i> 
			</a>
		</div>
	</div>
	<script	src="js/load-image.min.js"></script>
    <script	src="js/bootstrap-image-gallery.min.js"></script>
    