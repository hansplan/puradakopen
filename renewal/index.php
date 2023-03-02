<?php
      // Header("Location:/index_new.php"); 

      include_once('./_common.php');

      define('_INDEX_', true);
      if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


      require_once(G5_THEME_PATH.'/index.php');
?> 
