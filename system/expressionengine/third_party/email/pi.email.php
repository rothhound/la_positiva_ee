<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Memberlist Class
 *
 * @package     ExpressionEngine
 * @category        Plugin
 * @author      Gianfranco Montoya 
 * @copyright       Copyright (c) 2014, Gianfranco Montoya
 * @link        http://www.ayuinc.com/
 */

$plugin_info = array(
    'pi_name'         => 'Email',
    'pi_version'      => '1.0',
    'pi_author'       => 'Gianfranco Montoya',
    'pi_author_url'   => 'http://www.ayuinc.com/',
    'pi_description'  => 'Send an email with the desired information.',
    'pi_usage'        => Email::usage()
);
            
class Email
{

    var $return_data = "";
    // --------------------------------------------------------------------

        /**
         * Memberlist
         *
         * This function returns a list of members
         *
         * @access  public
         * @return  string
         */
    public function __construct(){
    }

    // --------------------------------------------------------------------

    /**
     * Usage
     *
     * This function describes how the plugin is used.
     *
     * @access  public
     * @return  string
     */
    public static function usage()
    {
        ob_start();  ?>
        The Memberlist Plugin simply outputs a
        list of 15 members of your site.

            {exp:email}

        This is an incredibly simple Plugin.
            <?php
        $buffer = ob_get_contents();
        ob_end_clean();
        return $buffer;
    }
    // END

    public function send_mail(){
        ee()->load->library('email');
        ee()->load->helper('text');
        ee()->email->to('gms122@gmail.com');
        ee()->email->subject('la positiva');
        ee()->email->message(entities_to_ascii('pruebas ... '));
        if(ee()->email->Send())
          {
           return 'Correo enviado';
          }
          else
          {
           return 'Correo NO enviado';
          }
    }    
    

    
}
/* End of file pi.email.php */
/* Location: ./system/expressionengine/third_party/send_email/pi.email.php */