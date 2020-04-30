<?php
//<Ляна>
if(file_exists("visitorCount.txt"))
{
  $visitorCountFile = fopen("visitorCount.txt", "r");
  $visitorCount = fgets($visitorCountFile, 255);
  if(!is_numeric($visitorCount))
    echo "The file contains not numeric data:" . $visitorCount;
  else
  {
    ++$visitorCount;
    fclose($visitorCountFile);
    $visitorCountFile = fopen("visitorCount.txt", "w");
    fputs($visitorCountFile, $visitorCount);
    fclose($visitorCountFile);
  }
}
else
{
  $visitorCountFile = fopen("visitorCount.txt", "w");
  fputs($visitorCountFile, "1");
  fclose($visitorCountFile);
}
//</Ляна>
?>