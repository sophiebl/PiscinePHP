#!/usr/bin/php
<?PHP
    if ($argc != 2 && !file_exists($argv[1]))
        exit();
    if (!($fd = fopen($argv[1], 'r')))
        exit();
    while ($fd && !feof($fd))
        $buffer .= fgets($fd);
    if (!fclose($fd))
        exit();
    $buffer = preg_replace_callback('/title="(.*?)"/i', function ($matches) {
        return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
    }, $buffer);
    $buffer = preg_replace_callback('/<a.*>(.*)</iU', function ($matches) {
        return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
    }, $buffer);
    print($buffer);

?>