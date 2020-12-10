<?php
$number = 100 ;
while ($number < 500 )
{
$count=0;
for ( $i=1;$i<=$number;$i++)
{
if (($number%$i)==0)
{
$count++;
}
}
if ($count<3)
{
echo $number." , ";
}
$number=$number+1;
}
?>