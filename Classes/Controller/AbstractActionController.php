<?php

namespace SaschaEnde\T3helpers\Controller;

use SaschaEnde\T3helpers\Utilities\BackendUser;
use SaschaEnde\T3helpers\Utilities\Configuration;
use SaschaEnde\T3helpers\Utilities\Data;
use SaschaEnde\T3helpers\Utilities\Database;
use SaschaEnde\T3helpers\Utilities\Datastorage;
use SaschaEnde\T3helpers\Utilities\Debug;
use SaschaEnde\T3helpers\Utilities\Filesystem;
use SaschaEnde\T3helpers\Utilities\FrontendUser;
use SaschaEnde\T3helpers\Utilities\Google;
use SaschaEnde\T3helpers\Utilities\Injections;
use SaschaEnde\T3helpers\Utilities\Language;
use SaschaEnde\T3helpers\Utilities\Mail;
use SaschaEnde\T3helpers\Utilities\Page;
use SaschaEnde\T3helpers\Utilities\Password;
use SaschaEnde\T3helpers\Utilities\Session;
use SaschaEnde\T3helpers\Utilities\Settings;
use SaschaEnde\T3helpers\Utilities\Template;
use SaschaEnde\T3helpers\Utilities\Tsfe;
use SaschaEnde\T3helpers\Utilities\Upload;
use SaschaEnde\T3helpers\Utilities\Uri;
use TYPO3\CMS\Extbase\Annotation\Inject;

class AbstractActionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * @var BackendUser
     * @Inject
     */
    protected $BackendUser;

    /**
     * @var FrontendUser
     */
    protected $FrontendUser;

    /**
     * @var Configuration
     * @Inject
     */
    protected $Configuration;

    /**
     * @var Data
     * @Inject
     */
    protected $Data;

    /**
     * @var Datastorage
     * @Inject
     */
    protected $Datastorage;

    /**
     * @var Database
     * @Inject
     */
    protected $Database;

    /**
     * @var Debug
     * @Inject
     */
    protected $Debug;

    /**
     * @var Filesystem
     * @Inject
     */
    protected $Filesystem;

    /**
     * @var Google
     * @Inject
     */
    protected $Google;

    /**
     * @var Injections
     * @Inject
     */
    protected $Injections;

    /**
     * @var Language
     * @Inject
     */
    protected $Language;

    /**
     * @var Mail
     * @Inject
     */
    protected $Mail;

    /**
     * @var Password
     * @Inject
     */
    protected $Password;

    /**
     * @var Session
     * @Inject
     */
    protected $Session;

    /**
     * @var Settings
     * @Inject
     */
    protected $Settings;

    /**
     * @var Template
     * @Inject
     */
    protected $Template;

    /**
     * @var Upload
     * @Inject
     */
    protected $Upload;

    /**
     * @var Uri
     * @Inject
     */
    protected $Uri;

    /**
     * @var Page
     * @Inject
     */
    protected $Page;

    /**
     * @var Tsfe
     * @Inject
     */
    protected $Tsfe;

}