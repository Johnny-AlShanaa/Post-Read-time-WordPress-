<?php

// add this code in function.php
function display_read_time()
{
    // get the content of the post
    $text = get_post_field('post_content', get_the_ID());

    // get the word count
    $count_words = str_word_count(strip_tags($text));

    // get the read time in minutes
    $read_time = ceil($count_words / 200);

    if ($read_time == 1) {
        $str_after = 'minute read';
    } else {
        $str_after = 'minutes read';
    }

    // return the value
    return $read_time . ' ' . $str_after;
}

// create shortcode and add it where you want
add_shortcode('post_read_time', 'display_read_time');


?>