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
        $this->load->library('email','','correo');
        $this->correo->from('gms122@gmail.com', 'Gianfranco Montoya');
        $this->correo->to('gms122@gmail.com');
        $this->correo->subject('Esto es una prueba');
        $this->correo->message('Aqui va el cuerpo del mensaje');
        if($this->correo->send())
          {
           echo 'Correo enviado';
          }
          else
          {
           show_error($this->correo->print_debugger());
          }
    }    
    

    
}
/* End of file pi.email.php */
/* Location: ./system/expressionengine/third_party/send_email/pi.email.php */