<div class ="container-fluid">
	<div class = "row-fluid">
		<div class="span1"  >
			<span style="position:fixed;">Tags</span>
			
			<div class="modal hide fade" id="myModal">
 				 <div class="modal-header">
    				<a class="close" data-dismiss="modal">close</a>
    				<h3>Tag name</h3>
  				</div>
  				<div class="modal-body">
   					 <input type="text" class="input-xlarge" placeholder="input tag name" id="tagname"/>
   					 
 				 </div>
  				<div class="modal-footer">
    				<a href="#" class="btn" data-dismiss="modal">close</a>
    				<a href="#" class="btn btn-primary" data-dismiss="modal" onclick="choose(); return false;">save</a>
  				</div>
			</div>
			<br/>
			<div id="tags" style="position:fixed;">
					
			</div>
			
		</div>
		<div class="span11 columns" id="photos">
			
			<?php
				$index=0; 
				foreach ($list as $item) {
				if ($index==0){
					echo "<div class='row'>";
				}
					
			?>
					<div class='span2 columns well' style='height:300px'>
					<a href="<?php echo base_url().$item['file_url'];?>" rel="tooltip" title="<?php echo $item['filename'];?>" target='_blank'
						draggable="true" 
						ondragstart="handleDragStart(event);"
						id="a_<?php echo $item['id'];?>"
					>
					<?php if ($item['thumbnail_url']) { ?>
						<img id="img_<?php echo $item['id'];?>" 
							book_id="<?php echo $item['id'];?>" 
							src="<?php echo base_url().$item['thumbnail_url'];?>" 
							style="width='150px';height='150px';cursor:move;" 
							
							
							/>	
					<?php }  else { ?>
					
						<img id="img_<?php echo $item['id'];?>" src="" width="150px" height="150px" />
						<script type="text/javascript">
							$.ajax({
									url:"books/get_pdf_first_page?id=<?php echo $item['id'];?>",
									type:"GET",
									dataType:"json",
									success:function(json){
										if (json.status=='success'){
											$("#img_<?php echo $item['id'];?>").attr("src",json.url);
										}
									}
								});
						</script>
					<?php }?>
					  
					</a>
					<div class="btn-toolbar" style="margin-bottom:9px">
						  <div class="btn-group">
          					<a class="btn" href="#"><i class="icon-align-left"></i></a>
          					<a class="btn" href="#"><i class="icon-align-center"></i></a>
          					<a class="btn" href="#"><i class="icon-align-right"></i></a>
          					<a class="btn" href="#"><i class="icon-align-justify"></i></a>
        				</div>
					</div>
				</div>
				
				
			<?php 
				if ($index==4){
					echo "</div>";
				}
				$index=$index+1;
				if ($index>4){
					$index=0;
				}
				}
			?>
			
		</div>
		
	</div>
</div>


<script type="text/javascript">
	var current_book=0;
	function choose(){
		var newTagname=$("#tagname").val().trim();
		$.ajax({
			url:"books/tag?tagname="+newTagname,
			type:"GET",
			dataType:"json",
			success:function(json){
				var list = json.list;
				refreshTagList(json.list);
				if (json.status=="success"){
					tagBook(json.tagId);
				}
			}
		});
		
	}
	function refreshTagList(list){
		var tags_div = $("#tags");
		tags_div.empty();
		var newtag = "<div ondrop='drop(event);' ondragover='handleDragOver(event);'>"+
						
						"<a href='#' onclick='filter(-1); return false;'><span class='badge badge-warning'>new Tag</span></a>"+
						"</div>";
		$(newtag).appendTo(tags_div);
		for(var i=0;i<list.length;i++){
			var tag =  "<div id='tag_"+list[i].id+"'  ondrop='drop(event,"+list[i].id+");' ondragover='handleDragOver(event);'>"+
						
						"<a href='#' onclick='filter("+list[i].id+"); return false;' ><span class='badge badge-success' >"+list[i].name+"</span></a>"+
						"</div>";
			$(tag).appendTo(tags_div);
		}
		 newtag = "<div >"+
			
			"<a href='#' onclick='filter(0); return false;'><span class='badge badge-error'>All</span></a>"+
			"</div>";
		$(newtag).appendTo(tags_div);
	}
	function handleDragStart(e){
		
		e.dataTransfer.setData("Text",e.target.id);
	}		
	function handleDragOver(e){
		if (e.preventDefault){
			e.preventDefault();
		}
		e.dataTransfer.dropEffect='add';
		return false;
	}
	function handleDragEnter(e){
		alert("enter");
		this.classList.add('over');
	}
	function handleDragLeave(e){
		this.classList.remove('over');
	}
	function drop(e,tagId){
		e.preventDefault();
		
		var img_id=e.dataTransfer.getData("Text");
		var img = $("#"+img_id);
		current_book=img.attr("book_id");		
		if (tagId){
			tagBook(tagId);
		}else{
			$("#myModal").modal({
				backdrop:true,
				keyboard:true,
				show:true
			});
		}
		
	}
	function tagBook(tagId){
		$.ajax({
			url:"books/tag_book?bookId="+current_book+"&tagId="+tagId,
			type:"GET",
			dataType:"json",
			success:function(json){
				alert("success");
			}
		});
	}
	function filter(tagId){
		alert(tagId);
	}
	choose();
	 
	var result = <?php echo $result["list"];?>;
	alert(result);	

</script>


