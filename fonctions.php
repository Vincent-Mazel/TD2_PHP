<?php
    function start_page($title) {
        echo '<!DOCTYPE html><html lang="fr">
              <head>
                  <title>' . PHP_EOL . $title . PHP_EOL . '</title>
              </head>' . PHP_EOL;
    };

    function end_page($title) {
        echo '<hr/><br/><strong>'.$title.'</strong><br/><hr/>';
    };
?>