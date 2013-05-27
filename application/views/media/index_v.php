<div class ="container-fluid">
	<div class = "row-fluid">
		<div class="span2">
			<span>Tags list</span>
		</div>
		<div class="span10">
			
			
			<video id="my_video_1" class="video-js vjs-default-skin" controls
  					preload="auto" width="640" height="264" poster="my_video_poster.png"
  					data-setup="{}">
  				<?php foreach ($list as $item) {?>
				
					<source src="<?php echo base_url().$item['file_url'];?>" type="<?php echo $item["file_type"];?>" >
				<?php }?>
			</video>
		</div>
	</div>
</div>