<?php

add_action('admin_head', 'asqAdminCss');

function asqAdminCss() {
  echo '<style>
  .asq-wrapper{background:#e6e6e5;margin:0;padding:0;position:relative;width:100%;height:auto;left:-10px;right:0;top:10px;overflow-x:hidden;z-index:0}.asq-image-container{text-align:center;margin-bottom:15px;margin-top:25px}.asq-image-container img{width:220px;height:auto}.asq-image-container h1{padding:20px;padding-bottom:40px;font-family:"Dancing Script",cursive;font-size:clamp(18px,8vw,60px)}.asq-main-container{text-align:center;width:90%;margin:10px auto;font-family:"Josefin Sans",sans-serif;font-size:clamp(16px,3vw,20px)}.asq-main-container h2{font-family:cursive;font-size:clamp(20px,5vw,28px);border-bottom:2px solid #000;line-height:.1em;margin:40px 0 30px 0}.asq-main-container h2 span{background:#e6e6e5;padding:0 10px}.asq-table{border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,.02);width:100%;margin:2rem 0;overflow:hidden;border:2px solid #222;padding:10px;max-width:100%;margin-left:auto;margin-right:auto}.asq-table td{padding:13px;border:2px solid #222;margin:0;font-size:16px}.asq-main-container code{padding:6px;font-size:14px;font-weight:700}
  </style>';
}




?>