<?php

$rrd_filename = rrd_name($device['hostname'], 'panos-sessions');

$ds = 'sessions';

$colour_area = '9999cc';
$colour_line = '4444cc';

$colour_area_max = '9999cc';

$graph_max = 1;

$unit_text = 'Sessions';

require 'includes/html/graphs/generic_simplex.inc.php';
