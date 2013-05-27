<?php include("_header.php");?>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav">
				<li class=""><a href="home/index">Home</a></li>
				<li class=""><a href="photos/index">Photos</a></li>
				<li class=""><a href="books/index">Books</a></li>
				<li class=""><a href="medias/index">Music</a></li>
				<li class=""><a href="medias/index_video">Video</a></li>
				<li class=""><a href="home/help">help</a></li>
				<li class="divider-vertical"></li>

			</ul>
			<div class="navbar-search pull-right">
				<input type="text"	class="search-query" id="textSearch" placeholder="Search" /> 
				<a	href="#" onclick="top_menu_search(); return false;">
					<i	class="icon-search"></i>
				</a>
			</div>

		</div>
	</div>
</div>
<div class="container-fluid">
	
	<form id="fileupload"  method="POST" enctype="multipart/form-data">
				<div class="row-fluid">
					<div class="span6">
						<header>
							<h1>Upload whatever you want!</h1>
						</header>
						<blockquote>
							<p> Do it!  Just drag to this page or  click the Add files button.</p>
							<p> Find all pictures at <a href='photos' >Photos</a> menu, pdf and chm files in <a href="books">Books</a>, mp3 and other media files in <a href="medias">Music and video</a>.</p>
						</blockquote>
					</div>
					<div class="span6">
						<div class="row">
							<h1>
							Tags  
							</h1>
						</div>
						<div class="row">
							
							<div class="input-prepend">
								<span class="add-on">
									<i class="icon-tag"></i>
								</span>
								<input class="span2" id="inputTag" type="text" style="margin:0;" onblur="addNewTag();" onkeydown="onmykeydown();">
								
							</div>
							<div id="tags">
								<span class="badge" >item1</span>
							</div>
							
						</div>
					</div>
					
				</div>
				
				
				<!-- Redirect browsers with JavaScript disabled to the origin page -->
				<noscript><input type="hidden" name="redirect" value="http://blueimp.github.com/jQuery-File-Upload/"></noscript>
				

				
				<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
				<div class="row fileupload-buttonbar">
					<div class="span7">
						<!-- The fileinput-button span is used to style the file input field as button -->
						<span class="btn btn-success fileinput-button">
							<i class="icon-plus icon-white">
							</i> <span>Add files...</span> 
							<input	type="file" name="files[]" multiple>
						</span>
						<button type="submit" class="btn btn-primary start">
							<i	class="icon-upload icon-white"></i> 
							<span>Start upload</span>
						</button>
						<button type="reset" class="btn btn-warning cancel">
							<i class="icon-ban-circle icon-white"></i> 
							<span>Cancel upload</span>
						</button>
						<button type="button" class="btn btn-danger delete">
							<i class="icon-trash icon-white"></i>
							<span>Delete</span>
						</button>
						<input type="checkbox" class="toggle">
					</div>
					<!-- The global progress information -->
					<div class="span5 fileupload-progress fade">
						<!-- The global progress bar -->
						<div class="progress progress-success progress-striped active"	role="progressbar" aria-valuemin="0" aria-valuemax="100">
							<div class="bar" style="width: 0%;">
							</div>
						</div>
						<!-- The extended global progress information -->
						<div class="progress-extended">&nbsp;</div>
					</div>
				</div>
				<!-- The loading indicator is shown during file processing -->
				<div class="fileupload-loading"></div>
				<br>
				<!-- The table listing the files available for upload/download -->
				<table role="presentation" class="table table-striped">
					<tbody class="files" data-toggle="modal-gallery"
						data-target="#modal-gallery"></tbody>
				</table>
			</form>
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
	<!-- The template to display files available for upload -->
	<script id="template-upload" type="text/x-tmpl">
		{% for (var i=0, file; file=o.files[i]; i++) { %}
    	<tr class="template-upload fade">
        	<td class="preview">
				<span class="fade"></span>
			</td>
        	<td class="name">
				<span>{%=file.name%}</span>
			</td>
        	<td class="size">
				<span>{%=o.formatFileSize(file.size)%}</span>		
			</td>
        	{% if (file.error) { %}
            	<td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
        	{% } else if (o.files.valid && !i) { %}
            	<td>
                	<div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
            	</td>
            	<td class="start">{% if (!o.options.autoUpload) { %}
                	<button class="btn btn-primary">
                    	<i class="icon-upload icon-white"></i>
                    	<span>Start</span>
                	</button>
            	{% } %}
				</td>
        	{% } else { %}
            	<td colspan="2"></td>
        	{% } %}
        	<td class="cancel">{% if (!i) { %}
            	<button class="btn btn-warning">
                	<i class="icon-ban-circle icon-white"></i>
                <span>Cancel</span>
            </button>
        	{% } %}
		</td>
    	</tr>
	{% } %}
	</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        {% if (file.error) { %}
            <td></td>
            <td class="name">
				<span>{%=file.name%}</span>
			</td>
            <td class="size">
				<span>{%=o.formatFileSize(file.size)%}</span>
			</td>
            <td class="error" colspan="2">
				<span class="label label-important">Error</span> 
				{%=file.error%}
			</td>
        {% } else { %}
            <td class="preview">
				{% if (file.thumbnail_url) { %}
                	<a href="{%=file.url%}" title="{%=file.name%}" rel="gallery" download="{%=file.name%}">
						<img src="{%=file.thumbnail_url%}">
					</a>
            	{% } %}
			</td>
            <td class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
            </td>
            <td class="size">
				<span>{%=o.formatFileSize(file.size)%}</span>
			</td>
            <td colspan="2"></td>
        {% } %}
        <td class="delete">
            <button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="icon-trash icon-white"></i>
                <span>Delete</span>
            </button>
            <input type="checkbox" name="delete" value="1">
        </td>
    </tr>
{% } %}
</script>

</div>

<div class="row-fluid">
		<div class="span2">
			<div>
				<ul id="artistsList">

				</ul>

			</div>

		</div>
		<div class="span10">
			<div id="photoList"></div>
		</div>

	</div>
<?php include '_script_ref.php';?>


<script type="text/javascript">
     	function addNewTag(){
			
        }
        function onmykeydown(e){
			
        }
    	
        function top_menu_search() {
            //alert($(searchKey).val().trim());
            var url = "http://ws.spotify.com/search/1/artist.json?q=" + $("#textSearch").val().trim();
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function (json) {
                    /*
                    artists[href, name, popularity]
                    info{limit,num_results,offset,page,query,type}
                    */
                    for (var i = 0; i < json.artists.length; i++) {
                        var artistLi = "<li>" + json.artists[i].name + "</li>";
                        $(artistLi).appendTo($("#artistsList"));
                    }
                }
            });
        }
        function get_flickr(){
            
			var url ="http://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key=0fa49c1328e32cbc71f61914bc0870f9&format=json&nojsoncallback=1&auth_token=72157631855455367-2c52d8058e9b2f3f&api_sig=b58fd38f8034e0e1d891d2da28fb157f";
			$.ajax({
				url:url,
				type:"GET",
				dataType:"json",
				success:function(json){
					
					if (json.stat=="ok"){
						var divList = $("#photoList");
						divList.empty();
						var list = json.photos.photo;
						var index=0;
						var divRow ="";
						for(var i=0;i<list.length;i++){
							var photoUrl = "http://farm"+list[i].farm+".staticflickr.com/"+list[i].server+"/"+list[i].id+"_"+list[i].secret+"_m.jpg";
							var photo = "<img src='"+photoUrl+"' class='span1' />";
							if (index<10){
								divRow = divRow+photo;
								index++;
							}else{
								divRow = "<div class='row'>"+divRow+"</div>";
								
								$(divRow).appendTo(divList);
								index=0;
								divRow="";
							}
							
						}
					}
				}
			});
       	}

    </script>

<?php include '_footer.php';?>