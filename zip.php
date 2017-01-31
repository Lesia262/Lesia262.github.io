<?php
                //  старт буферизации выводимого
                ob_start('compress_html');
?>
<!--Здесь находиться html код  -->
<?php
                // конец буферизации и вывод сжатого html кода
                ob_end_flush();
                //  Эта функция избавляется от переносов, пробелов и т.д.
                function compress_html($compress)
                {
                               $i = array('/>[^S ]+/s','/[^S ]+</s','/(s)+/s');
                               $ii = array('>','<','1');
                               return preg_replace($i, $ii, $compress);
                }
?>