<?php

/**
 * 视频
 * 
 * @package custom 
 * 
 **/

?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php $this->need('public/include.php'); ?>
    <!-- 视频页面需要用到的CSS及JS -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/joe.video.css'); ?>">
    <script src="<?php $this->options->themeUrl('assets/js/joe.video.js'); ?>"></script>
</head>

<body>
    <div id="Joe">
        <?php $this->need('public/header.php'); ?>
        <div class="joe_container">
            <div class="joe_main">

                <?php if (isset($_GET['vod_id'])) : ?>
                    <div class="joe_video__detail joe_video__contain">
                        <div class="joe_video__contain-title">影片简介</div>
                        <div class="joe_video__detail-info">
                            <p class="error">正在拼命加载中...</p>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="joe_video__type joe_video__contain">
                        <div class="joe_video__contain-title">视频分类</div>
                        <ul class="joe_video__type-list">
                            <li class="error">正在拼命加载中...</li>
                        </ul>
                    </div>
                    <div class="joe_video__list joe_video__contain">
                        <div class="joe_video__contain-title">视频列表</div>
                        <div class="joe_video__list-item"></div>
                    </div>
                    <ul class="joe_video__pagination"></ul>
                <?php endif; ?>

            </div>
            <?php $this->need('public/aside.php'); ?>
        </div>
        <?php $this->need('public/footer.php'); ?>
    </div>
</body>

</html>