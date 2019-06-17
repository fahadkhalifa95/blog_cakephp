
<center>
<?php


    echo $this->Form->create("article", array('url' => '/article/add'));
    echo $this->Form->input('title');
    echo $this->Form->input('author');
    echo $this->Form->input('body');

    echo $this->Form->button('Submit');

    echo $this->Form->end();

echo " 
<div class=\"autocmplete_box hidden\"></div>
<input class=\"autocomplete_input\"

  ";



?>


</center>
