<?php if (get_post_type() == 'post' && is_archive() == false) : ?>
    <div class="backtohome">
        <p><a href="<?php echo site_url()?>">ホームへ戻る</a>｜<a href="<?php echo get_home_url(); ?>?author=1">記事一覧</a></p>
    </div>
<?php else : ?>
    <div class="backtohome">
        <p><a href="<?php echo site_url()?>">&laquo; ホームへ戻る</a></p>
    </div>
<?php endif ?>