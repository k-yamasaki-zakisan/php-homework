<html>
    <head>
        <title>access_log_index</title>
        <!-- 参考サイト:http://alphasis.info/2013/02/php-gyakubiki-csv-table/ -->
    </head>
    <body>
        <?php 
        $log_file = "./access_log.csv";
        $handle = fopen($log_file,"r");
        if ($handle !==FALSE) {
            echo "<table border=1>\n";
            while(($logs_data = fgetcsv($handle, 1000, ",")) !== FALSE ){
                echo "\t<tr>\n";
                for($i = 0; $i < count($logs_data); $i++) {
                    echo "\t\t<td>{$logs_data[$i]}</td>\t";
                }
                echo "\t</tr>\n";
            }
            echo "</table>\n";
            fclose($handle);
        }
        ?>
    </body>
</html>

http://localhost:4567/TextCounter/access_log_index.php