<div class="row">
  <div class="span8">
    <div class="row">
      <div class="span8">
        <h4><strong><a href="#"><?=$post['post_subject']?></a></strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="span2">
        <a href="#" class="thumbnail">
            <img src="http://placehold.it/260x180" alt="">
        </a>
      </div>
      <div class="span6">
        <p><?=$post['post_text']?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <p></p>
        <p>
          <i class="icon-user"></i> by <a href="#"><?=$post['username']?></a>
          | <i class="icon-calendar"></i> <?=$post['post_created']?>
| <i class="icon-comment"></i> <a href="#">3 Comments</a>
          | <i class="icon-tags"></i> Tags :
			<?foreach ($tags as $tag):?>
				<a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="label label-info" style="background-color:#5bc0de"><?=$tag['tag_name']?></span></a>
			<?endforeach?>
        </p>
      </div>
    </div>
  </div>
</div>
<hr>
