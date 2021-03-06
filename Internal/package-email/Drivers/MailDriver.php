<?php namespace ZN\Email\Drivers;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\Support;
use ZN\Email\DriverMappingAbstract;

class MailDriver extends DriverMappingAbstract
{
    /**
     * Magic Constructor
     */
    public function __construct()
    {
        Support::func('mail');
    }
    
    /**
     * Send Email
     * 
     * @param string $to
     * @param string $subject
     * @param string $message
     * @param mixed  $headers
     * @param mixed  $settings
     * 
     * @return bool
     */
    public function send($to, $subject, $message, $headers = NULL, $settings = NULL)
    {
        return mail($to, $subject, $message, $headers); 
    }
}