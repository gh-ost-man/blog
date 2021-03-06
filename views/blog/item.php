<?php 
    if(isset($_SESSION['user'])) $user = json_decode($_SESSION['user'], true);
?>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php $date = new DateTime($record->date); ?>    
        <div class="jumbotron mt-5 block">
            <p>Author: <ins><?= $author->nick ?><ins> </p>
            <p>Date:  <ins><?= $date->format('Y-m-d'); ?><ins> </p>
            <hr class="my-4">
            <p class="text-justify"><?= $record->text?></p>
            <div class="row">
                <div class="col-md-6">
                    <button id="like-<?= $record->id ?>"   class="btn btn-lg text-white like" role="button" value="<?= $record->id ?>">
                        <i class="fas fa-thumbs-up"></i>    
                        <span><?= $record->like ?></span>
                    </button>
                    <button id="dis_like-<?= $record->id ?>"  class="btn btn-lg text-white dis_like" role="button" value="<?= $record->id ?>">
                        <i class="fas fa-thumbs-down"></i>
                        <span><?= $record->dis_like ?></span>
                    </button>
                </div>
                <div class="col-md-6">
                    <?php if (isset($user['role'])) : ?>
                    <a class="btn btn-grad float-right mb-5" href="/comment/create?id=<?= $record->id ?>" role="button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Add Comment
                    </a>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="jumbotron block">
            <p>COMMENTS: <span><?= count($comments) ?></span></p>
            <?php foreach($comments as $key => $value) : 
                $date = new DateTime($value->date); ?>    
                <p>Author: <ins><?= $authors_comments[$value->id] ?><ins> </p>
                <p>Date:  <ins><?= $date->format('Y-m-d'); ?><ins> </p>
                <hr class="my-4">
                <p class="text-justify"><?= $value->text?></p>
                <div class="row">
                    <div class="col-md-6">
                        <button id="comment_like-<?= $value->id ?>" class="btn btn-lg text-white comment_like" role="button" value="<?= $value->id ?>">
                            <i class="fas fa-thumbs-up"></i>    
                            <span><?= $value->like ?></span>
                        </button>
                        <button id="comment_dis_like-<?= $value->id ?>" class="btn btn-lg text-white comment_dis_like" role="button" value="<?= $value->id ?>">
                            <i class="fas fa-thumbs-down"></i>
                            <span><?= $value->dis_like ?></span>
                        </button>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <hr class="hr-color">
            <?php endforeach ?>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>