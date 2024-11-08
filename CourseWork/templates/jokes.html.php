<p><?=$totaljokes?> jokes have been submitted to the Internet Joke Database.</p>

<?php foreach($jokes as $joke): ?>
        <blockquote>
        <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?>
        <br /><?=htmlspecialchars($joke['categoryName'],ENT_QUOTES,'UTF-8')?>
        <form action="deletejoke.php" method="post">
            <input type="hidden" name="id" value="<?=$joke['id']?>">
            <input type="submit" value="Delete">

        (by<a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8');?>">
        <?=htmlspecialchars($joke['name'],ENT_QUOTES, 'UTF-8'); ?></a>)

        <a href="editjoke.php?id=<?=$joke['id']?>">Edit</a>

        <from action ="deletejoke.php"method="post">

        </form>
        <?php $display_date = date("D d M Y", strtotime($joke['jokedate']))?>
        <?=htmlspecialchars($display_date,ENT_QUOTES, 'UTF-8')?>
        <?=htmlspecialchars($display_date, ENT_QUOTES, 'UTF-8')?>
        <img height="100px" src="Anh/<?=htmlspecialchars($joke['joke_pic'], ENT_QUOTES ,'UTF-8'); ?>"/>
        </blockquote>
        <?php endforeach;?>