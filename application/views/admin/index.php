<div class="row" >
	<div class="span3 bs-docs-sidebar" >
		<ul id="ul_tables" class="nav nav-list bs-docs-sidenav">
			
		</ul>
		
		<div class="btn-toolbar">
			<textarea rows="3" class="input-large" id="sqltext"></textarea>
			<div class="btn-group">
				
				<button class="btn btn-primary" onclick="run_sql();">Execute</button>
				
			</div>
		</div>
	</div>
	<div class="span9">
		<div class="page-header">
           <h2 id="table_title">Table name</h2>
            <div class="btn-toolbar">
            	 
				<div class="btn-group">
					
					<button class="btn btn-primary" onclick="new_item();">New</button>
					<button class="btn btn-success" onclick="update_item();">Update</button>
					<button class="btn btn-danger" onclick="delete_item();">Delete</button>
				</div>
			</div>
          </div>
		
		<table class="table table-condensed table-bordered table-hover" id="data_table">
			<colgroup>
          	<col class="span1">
          	<col class="span7">
        	</colgroup>
			<thead>
				<tr id="table_header" style="background-color:#46a546">
					
				</tr>
			</thead>
			<tbody id="table_body">
				
			</tbody>
		</table>
		<div class="pagination">
			<ul id="page">
				<li><a href="#">Prev</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">Next</a></li>
			</ul>
		</div>
		<div class="accordion" id="dict">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#dict" href="#c_one">
						Modal Class 
					</a>
				</div>
				<div id="c_one" class="accordion-body collapse">
					<div class="accordion-inner">
						<pre class="prettyprint linenums">
  							<p id="p1"></p>
						</pre>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#dict" href="#c_two">
						Controller class 
					</a>
				</div>
				<div id="c_two" class="accordion-body collapse">
					<div class="accordion-inner">
						<h1>This is detail 2</h1>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#dict" href="#c_three">
						View html 
					</a>
				</div>
				<div id="c_three" class="accordion-body collapse">
					<div class="accordion-inner">
						<h1>This is detail3</h1>
					</div>
				</div>
			</div>
		</div>
		
		<div id="new_modal"class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="modal_title">Add new project type</h3>
			</div>
			<div class="modal-body">
				<table id="edit_table" class="table table-hover">
					
				</table>
				
			</div>
			<div class="modal-footer">
				<a href="#" class="btn"  data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary" data-dismiss="modal" id="save_button" edit_mode="">Save</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var currentList=[];
	var currentFields=[];
	var currentSelectId=0;
	var currentItem;
	var currentTable;
	var record_count=0;
	var page_size = 10;
	var page_index=0;
	
	/*
	$(function(){
		$.get("admin/get_content",{name:"project_type"},function(json){
			json = JSON.parse(json);
			if (json.status=='success'){
				var tbody=$("#table_body");
				json.list.forEach(function(item){
					var tr = "<tr><td>"+item.id+"</td><td>"+item.name+"</td><td >"+item.description+"</td></tr>";
					$(tr).appendTo(tbody);
				});
			}
		},"json")
	});
	*/
	$(function(){
		$.getJSON("admin/get_all",function(data){
			var ul = $("#ul_tables");
			ul.empty();
			data.forEach(function(t){
				var li = "<li><a href='#' onclick='get_all_by_link(this); return false;' table_name='"+t+"'><i class='icon-chevron-right'></i>"+t+"</a></li>";
				
				$(li).appendTo(ul).click(function(){
					ul.find(">li").removeClass("active");
					$(this).addClass("active");
				});
			});
		});
		get_all("project_type");
		init_table();
		
	});
	function init_table(){
		var table = $("#data_table");
		
	}
	function get_all_by_link(alink){
		var tablename=$(alink).attr("table_name");
		//alert(tablename);
		if (tablename){
			get_all(tablename);
			
		}
	}
	function get_all(tablename,p_index){
		if (tablename){
			currentTable = tablename;
		}else{
			tablename= currentTable;
		}
		$("#table_title").text(tablename);
		
		if (p_index){
			page_index=p_index;
		}else{
			page_index=0;
		}
		
		$.getJSON("admin/get_content?tablename="+tablename+"&page_index="+page_index+"&page_size="+page_size,function(json){
			if (json.status=='success'){
				setupTable(tablename,json.fields);
				refresh_all(json.list,json.fields,json.count);
			}
		});
	}
	function setupTable(tablename,fields){
		//update browse table header
		var header = $("#table_header");
		var table = $("#edit_table");
		header.empty();
		table.empty();
		$.each(fields,function(index,field){
			var th="<th>"+field+"</th>";
			$(th).appendTo(header);
			if (field!="id"){
			
				var tr="<tr><td><label for='"+field+"'>"+field+"</label></td><td>"+
					"<input type='text' class='input-block-level' placeholder='"+field+"' id='"+field+"'></td></tr>";
				$(tr).appendTo(table);
			}
		});
		$("#save_button").attr("onclick","save('"+tablename+"');");
		
	}
	
	function refresh_all(list,fields,count){
		
		currentList= list;
		currentFields= fields;
		currentSelectId =0;
		var tbody=$("#table_body");
		tbody.empty();
		list.forEach(function(item){
			var tr = "";
			fields.forEach(function(field){
				tr=tr+"<td>"+item[field]+"</td>";
			});
			tr="<tr field_id='"+item.id+"'>"+tr+"</tr>";
			
			$(tr).appendTo(tbody).click(function(){
				$("#table_body tr").removeClass("info");
				$(this).addClass("info");
				var td=$(this).find(":first-child");
				//console.log(td);
				currentSelectId = $(this).attr("field_id");
			});
		});
		create_helper_source();
	}
	function save(tablename){
		var edit_mode =$("#save_button").attr("edit_mode");
		//alert(edit_mode); //new or edit;
		
		var data={tablename:tablename};
		$("#edit_table input").each(function(index,item){
			var newValue = $(item).val().trim();
			var fieldname = $(item).attr("id");
			if (edit_mode=="new"){
				// insert new record;
				data[fieldname]=newValue;
			}else{
				//edit current record;
				var oldValue = currentItem[fieldname];
				if (newValue!=oldValue){
					data[fieldname]=newValue;
				}
			}
			
		});
		var url ="admin/add_content";
		if (edit_mode=="edit"){
			url = "admin/edit_content";
			data.id=currentItem.id;
		}
		$.post(url,data,function(json){
			json = JSON.parse(json);
			refresh_all(json.list,json.fields,json.count);
		});
	}
	function new_item(){
		$("#modal_title").text("Add New");
		$("#save_button").attr("edit_mode","new");
		$("#new_modal").modal();
	}
	function update_item()
	{
		if (!currentSelectId) return;
		currentItem = null;
		currentList.forEach(function(i){
			if (i.id==currentSelectId){
				currentItem = i;
			}
		});
		if (currentItem){
			currentFields.forEach(function(f){
				$("#"+f).attr("value",currentItem[f]);
			});
			$("#modal_title").text("Update ["+currentItem+"]");
			$("#save_button").attr("edit_mode","edit");
			$("#new_modal").modal();
		}
	}
	function delete_item()
	{
		if (!currentSelectId) return;
		//alert(currentSelectId);
		var answer = confirm("Are you sure to delete id=["+currentSelectId+"] record?");
		if (answer){
			data={tablename:currentTable,id:currentSelectId};
			$.post("admin/delete_content",data,function(json){
				json = JSON.parse(json);
				refresh_all(json.list,json.fields);
			});
		}
		
	}
	function create_helper_source(){
		return;
		var s1 = "function update_item() \n\
		{\n\
			if (!currentSelectId) return;\n\
			currentItem = null;\n\
			currentList.forEach(function(i){\n\
				if (i.id==currentSelectId){\n\
					currentItem = i;\n\
				}\n\
			});\n";
		$("#p1").empty();
		$("#p1").text(s1);
		prettyPrint();
	}
	function run_sql(){
		var sql = $("#sqltext").val();
		//alert(sql);
		$.getJSON("admin/execute",{sql:sql},function(json){
			alert(json.affect_rows);
		});
	}
</script>