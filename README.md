# Codeigniter-4-HMVC
Codeigniter 4.0.4 HMVC Converted (Ready to use)
PHP 7.2 or above


# Steps
1. Clone the repository
2. Run -> php spark serve / use local Xampp/Mamp/Wamp environment to run the app
3. To access hmvc module use the following Path to Host/Folder/public/welcome
Example: http://localhost:8888/Codeigniter-4-HMVC/public/welcome


# Structure
- App
    - Modules
        - Welcome
            - Controllers
            - Models
            - Views
            - Config
                -Routes.php (to set routes for this module)
                
# Changes to apply HMVC in existing CI 4 Project
1. Add Modules folder under App (App/Modules) and put MVC in it. For reference copy from App/Modules
2. Copy below code in App/Config/Routes.php

/**
 * --------------------------------------------------------------------
 * HMVC Routing
 * --------------------------------------------------------------------
 */

foreach(glob(APPPATH . 'Modules/*', GLOB_ONLYDIR) as $item_dir)
{
    if (file_exists($item_dir . '/Config/Routes.php'))
    {
        require_once($item_dir . '/Config/Routes.php');
    }    
}

3. Set Routes in App/Modules/Welcome/Config/Routes.php

# For Custom Development Get in touch with us contact [at] ibrinfotech.com
                
