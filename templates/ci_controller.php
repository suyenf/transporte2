<?php
<#assign licenseFirst = "/* ">
<#assign licensePrefix = " * ">
<#assign licenseLast = " */">
<#include "${project.licensePath}">

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ${name?capitalize}
 * 
 * Description...
 * 
 * @package ${name}
 * @author ${user} <your@email.com>
 * @version 0.0.0
 */

class ${name?capitalize} extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// load ${name} config
		$this->load->config('${name}');
                // load ${name} library    
                $this->load->library('${name}');		
                
	}
	
	public function index()
	{
		
	}

}

/* End of file ${nameAndExt} */
/* Location: ./application/controllers/${nameAndExt} */
