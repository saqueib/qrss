<?php
// Require the QRss class
require 'src/QRss.php';

// Get the feed and cache for 10 min
(new QRss('https://en.blog.wordpress.com/feed/'))->cache_for('10 minutes')->json();

// Get the fresh feed ignoring cache
//(new QRss('https://en.blog.wordpress.com/feed/'))->fresh()->json();