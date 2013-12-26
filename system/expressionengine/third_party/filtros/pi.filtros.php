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
    'pi_name'         => 'Filtros',
    'pi_version'      => '1.0',
    'pi_author'       => 'Gianfranco Montoya',
    'pi_author_url'   => 'http://www.ayuinc.com/',
    'pi_description'  => 'Allows states qualify Friends',
    'pi_usage'        => Filtros::usage()
);
            
class Filtros 
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
        $this->EE =& get_instance();
        $var = $this->EE->input->post('count');
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

            {exp:filtros}

        This is an incredibly simple Plugin.
            <?php
        $buffer = ob_get_contents();
        ob_end_clean();
        return $buffer;
    }
    // END

    public function brand(){
        $form = '<select name="marca" id="marca">' ;
        ee()->db->distinct('marca');
        ee()->db->select('marca');
        $query = ee()->db->get('exp_valor_autos');
        foreach($query->result() as $row){
            $form .= '<option value='.$row->marca.'>'.$row->marca.'</option>';
            $key = $row->marca;
            $options[$key] = $row->marca;
        }
        $form = $form.'</select>';
        return $form;
    }

    public function model(){
        $form = '';
        $marca = ee()->TMPL->fetch_param('marca');
        ee()->db->distinct('modelo');
        ee()->db->select('modelo');
        ee()->db->where('marca',$marca);
        $query = ee()->db->get('exp_valor_autos');
        foreach($query->result() as $row){
            $form .= '<option value='.$row->modelo.'>'.$row->modelo.'</option>';
        }
        return $form;
    }

    public function version(){
        $form = '';
        $modelo = ee()->TMPL->fetch_param('modelo');
        ee()->db->distinct('version');
        ee()->db->select('version');
        ee()->db->where('modelo',$modelo);
        $query = ee()->db->get('exp_valor_autos');
        foreach($query->result() as $row){
            $form .= '<option value='.$row->version.'>'.$row->version.'</option>';
        }
        return var_dump($form);
    } 

    public function year(){
        $form = '';
        $version = ee()->TMPL->fetch_param('version');
        ee()->db->select('*');
        ee()->db->where('version', $version);
        $query = ee()->db->get('exp_valor_autos');
        return var_dump($query);
    }
} 
/* End of file pi.rating.php */
/* Location: ./system/expressionengine/third_party/rating/pi.rating.php */