<?php
include_once('./_common.php');

$wr = get_write($write_table, $wr_idx);

if (!check_password($wr_password, $wr['wr_password']))
    alert('비밀번호가 틀립니다.');

else {
    $ss_name = 'ss_secret_'.$bo_table.'_'.$wr['wr_num'];
    set_session($ss_name, TRUE);
}

//if($_POST[wr_password]){
	//set_cookie('read_'.$_POST[wr_idx], sql_password($_POST[wr_password]), 3600);
//}

goto_url(G5_HTTP_BBS_URL.'/board.php?bo_table='.$bo_table.'&amp;wr_id='.$wr_id.$qstr);
?>