<?php

/*
 * Tmac PHP MVC framework
 * $Author: zhangwentao $
 * $Id: PayLog.class.php 325 2016-05-31 10:07:35Z zhangwentao $
 */

/**
 * Description of article
 *
 * @author Tracy McGrady
 */
class dao_impl_PayLog_base extends dao_BaseDao_base
{

    public function __construct( $link_identifier )
    {
        parent::__construct( $link_identifier );
        $this->table = DB_WS_PREFIX . 'pay_log';
        $this->setPrimaryKeyField( 'pay_log_id' );
    }

}
