<div class ="container-fluid">
	<div class = "row-fluid">
		<div class="span2">
			<span>Tags list</span>
		</div>
		<div class="span10">
			
			<?php foreach ($list as $item) {?>
				
			<p><a href="<?php echo base_url().$item['file_url'];?>" > <?php echo $item["filename"];?> </a></p>
			<?php }?>
			<script src="http://mediaplayer.yahoo.com/js"></script>
		</div>
	</div>
</div>