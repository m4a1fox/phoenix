<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $content->id?>" />
    <label>Title</label><input type="text" name="title" value="<?php echo $content->title;?>" /><br />
    <label>Link</label><input type="text" name="link" value="<?php echo $content->link;?>" /><br />
    <label>Tags</label><input type="text" name="tag" value="<?php echo $content->tag;?>" /><br />
    <label>KeyWords</label><input type="text" name="meta_k" value="<?php echo $content->meta_k;?>" /><br />
    <label>Description</label><input type="text" name="meta_d" value="<?php echo $content->meta_d;?>" /><br />
    <label id="label-content">Content</label><textarea id="text" name="content"> <?php echo $content->content;?></textarea><br />
    <label></label><input type="date" name="date" value="<?php echo $content->date; ?>" />
    <input type="time" name="time" value="<?php echo $content->time; ?>" /><br />
    <input type="submit" name="send" value="ok" />
</form>