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
			<div id="tags" style="position:fixed;line-height:2em;">
					
			</div>
			
		</div>
		<div class="span11 columns" id="photos">
			<span >Loading...</span>
		</div>
		
	</div>
</div>


<script type="text/javascript">

	document.body.ondrop=function(e){
		e.preventDefault();
		alert(e);
	}
	// tag drag events;
	function tag_drag_start(e,tagId){
		e.dataTransfer.setData("Text",tagId);
		//alert(tagId);
	}
	function drop_from_tag(event,bookId){
		event.preventDefault();
		var tagId = event.dataTransfer.getData("Text");
		//alert(tagId);
		current_book = bookId;
		tagBook(tagId);
	}
	function handleDragOver_from_tag(event){
		event.preventDefault();
	}
	// tag drag events end;
	var current_book=0;
	var list = [];
	var base_url ="<?php echo base_url(); ?>";
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
						
						"<a href='' onclick='filter(-1); return false;'><span class='badge badge-warning'>new Tag</span></a>"+
						"</div>";
		$(newtag).appendTo(tags_div);
		for(var i=0;i<list.length;i++){
			var tag =  "<div id='tag_"+list[i].id+"'  ondrop='drop(event,"+list[i].id+");' ondragover='handleDragOver(event);' ondragstart='tag_drag_start(event,"+list[i].id+");'>"+
						
						"<a href=''   draggable='true' onclick='filter("+list[i].id+"); return false;' ><span class='badge badge-success' >"+list[i].name+"</span></a>"+
						"</div>";
			$(tag).appendTo(tags_div);
		}
		 newtag = "<div >"+
			
			"<a href='' onclick='filter(0); return false;'><span class='badge badge-error'>All</span></a>"+
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
	function update_book(bookId,tagList)
	{
		var books=list.filter(function(b){ return b.id==bookId;});
		if (books.length>0){
			var book = books[0];
			book.getTags(tagList);
			var book_div = $("#book_"+book.id);
			if (book_div){
				book_div.replaceWith(create_book(book));
			}
		}
	}
	function tagBook(tagId){
		$.ajax({
			url:"books/tag_book?bookId="+current_book+"&tagId="+tagId,
			type:"GET",
			dataType:"json",
			success:function(json){
				if (json.status=='success'){
					update_book(json.bookId,json.tagList);
				}
			}
		});
	}
	function filter(tagId){
		//alert(tagId);
		//-1 no tags
		// 0 all
		// v tag

		function set_display(book){
			var book_div = $("#book_"+book.id);
			var style ="";
			if (book_div){
				if (tagId==-1){
					if (book.tags.length>0){
						style = "display:none;";
					}
				}else if (tagId>0){
					if (!book.tags.some(function(t){return t.id==tagId;})){
						style = "display:none;";
					}
				}
				book_div.attr('style',style);
			}
			
			
		}
		list.forEach(function(b){
			set_display(b);
		});
		return false;
	}
	var Tag = function(id,name){
		this.id=id;
		this.name=name;
	}
	var Book = function(id,url,name,t_url){
		this.id = id;
		this.url = url;
		this.name = name;
		this.t_url = t_url;
		this.tags=[];
	}
	Book.prototype.getTags=function(tag_list){
		this.tags=[];
		var file = this;
		tag_list.forEach(function(i){
			if (i.file_id==file.id){
				var tag = new Tag(i.id,i.name);
				file.tags.push(tag);
			}
		});
	}
	
	
	function load(){
		$.ajax({
			url:"books/get_books",
			type:"GET",
			dataType:"json",
			success:function(json){
				json.list.forEach(function(i){
					var book = new Book(i.id,i.file_url,i.filename,i.thumbnail_url);
					book.getTags(json.taglist);
					list.push(book);
				});
				refresh_list();
			}
		});

	}
	function create_book(book){
		var node = "<div id='book_"+book.id+"' class='well' ondrop='drop_from_tag(event,"+book.id+");' ondragover='handleDragOver_from_tag(event);'>"+
		"<a href='"+base_url+book.url+"' rel='tooltip' title='"+book.name+"' target='_blank'"+
		 "	draggable='true' "+
		 " ondragstart='handleDragStart(event);'"+
		"	id='"+book.id+"'"+
		">";

		if (book.t_url){
			node =node + "<img id='img_"+book.id+"' "+ 
			"book_id='"+book.id+"' "+ 
			"	src='"+base_url+book.t_url+"' "+ 
			"	style='width=150px;height=150px;cursor:move;' />";
		}else
		{
			node +="<img id='img_"+book.id+"' src='' width='150px' height='150px' />"+
				"<script type='text/javascript'>"+
			"$.ajax({ "+
			"		url:'books/get_pdf_first_page?id="+book.id+","+
			"		type:'GET',"+
			"		dataType:'json',"+
			"		success:function(json){"+
			"			if (json.status=='success'){"+
			"				$('#img_"+book.id+"').attr('src',json.url);"+
			"			}"+
			"		}"+
			"	}); <\/script>";
		}
		node +="</a><div><p>";
		var tags ="";
		for(var j=0;j<book.tags.length;j++){
			tags += "<span class='label label-info'>"+book.tags[j].name+"</span><i class='icon-remove' ></i><br>";
		}
	
		node +=tags+"</p></div>";
		node +="<div><i class='icon-comment'></i><input type='text' placeholder='comment' style='width:100px;'/></div>";
		node +="</div>";
		return node;
	}
	function refresh_list(){
		$('#photos').empty();
		var w = document.body.clientWidth;
		var count = Math.floor(w / 200);
//		count = count>5?5:count;
		for(var i=0;i<count;i++){
			var div = "<div id='list_"+i+"' class='span2' style='width:160px;'></div>";
			$(div).appendTo('#photos');
		}
		
		for(var i=0;i<list.length;i++){
			var book = list[i];			
			$(create_book(book)).appendTo("#list_"+(i % count));
		}
	}
	choose();
	load();
	
	

</script>


