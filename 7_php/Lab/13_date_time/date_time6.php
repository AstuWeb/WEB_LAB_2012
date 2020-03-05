<?php
// 5_9.php
$weekdays = array(
  'en' => array(
    'Sunday', 'Monday', 'Tuesday', 'Wednesday',
    'Thursday', 'Friday', 'Saturday', 'Sunday'
  ),
  'da' => array(
    'søndag', 'mandag', 'tirsdag', 'onsdag',
    'torsdag', 'fredag', 'lørdag', 'søndag'
  ),
);

$months = array(
  'en' => array(
    1 => 'January', 'February', 'March', 'April', 'May', 'June',
         'July', 'August', 'September', 'October', 'November', 'December'
  ),
  'da' => array(
    1 => 'januar', 'februar', 'marts', 'april', 'maj', 'juni',
         'juli', 'august', 'september', 'oktober', 'november', 'december'
  ),
);

function FormatDate($ts, $lang = 'en') {
  global $weekdays, $months;

  $d = date('j', $ts);
  $w = date('w', $ts);
  $m = date('n', $ts);
  $y = date('Y', $ts);
  switch($lang) {
    case 'en' :
      return $weekdays[$lang][$w] . ", " . $months[$lang][$m] . 
             " {$m} {$y}";
      break;
    case 'da' :
      return $weekdays[$lang][$w] . ", {$m} " . $months[$lang][$m] . 
             " {$y}";
      break;
  }
}

$ts = time();

echo FormatDate($ts) . "\n";
echo FormatDate($ts, 'da') . "\n";
