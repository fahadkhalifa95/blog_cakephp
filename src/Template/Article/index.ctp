<center>

    <div class="autocmplete_box hidden"></div>
    <input class="autocomplete_input" placeholder="Search">

    <?php foreach ($articles as $article) { ?>
        <?php //var_dump($article); ?>
        <?php //die; ?>
        <h2><?= $article->title; ?></h2>
        <h5><?= $article->created_at; ?> </h5>

        <h5><?= $article->auther; ?></h5>
        <p><?= $article->body; ?> </p>
        <hr>
    <?php } ?>
</center>
