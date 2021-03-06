<?php

class WDPSControllerUninstall_wdps {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct() {
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function execute() {
    $task = ((isset($_POST['task'])) ? esc_html(stripslashes($_POST['task'])) : '');
    if (method_exists($this, $task)) {
      check_admin_referer('nonce_wd', 'nonce_wd');
      $this->$task();
    }
    else {
      $this->display();
    }
  }

  public function display() { 
    require_once WD_PS_DIR . "/admin/models/WDPSModelUninstall_wdps.php";
    $model = new WDPSModelUninstall_wdps();

    require_once WD_PS_DIR . "/admin/views/WDPSViewUninstall_wdps.php";
    $view = new WDPSViewUninstall_wdps($model);
    $view->display();
  }

  public function uninstall() { 
    require_once WD_PS_DIR . "/admin/models/WDPSModelUninstall_wdps.php";
    $model = new WDPSModelUninstall_wdps();

    require_once WD_PS_DIR . "/admin/views/WDPSViewUninstall_wdps.php";
    $view = new WDPSViewUninstall_wdps($model);
    $view->uninstall();
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}