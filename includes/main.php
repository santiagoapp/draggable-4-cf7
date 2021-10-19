<?php

function form_creation() { ?>
    <div class="container">
        <p class="draggable" draggable="true">1</p>
        <p class="draggable" draggable="true">2</p>
    </div>
    <div class="container">
        <p class="draggable" draggable="true">3</p>
        <p class="draggable" draggable="true">4</p>
    </div>
<?php }

add_shortcode('test', 'form_creation');