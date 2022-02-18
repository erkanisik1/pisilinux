<?php namespace Project\Controllers;

class Initialize extends Controller
{
    /**
     * The codes to run at startup.
     * It enters the circuit before all controllers. 
     * You can change this setting in Config/Starting.php file.
     */
    public function main()
    {
        # The theme is activated.
        # Location: Resources/Themes/Default/
        Theme::active('pisilinux');
        
        # The current settings are being configured.
        Masterpage::headPage('pisilinux/Assets/head')
                  ->bodyPage('pisilinux/Assets/body');
                  
    }
}