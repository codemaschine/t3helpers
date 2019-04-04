<?php

namespace t3h;

use SaschaEnde\T3helpers\Utilities\BackendUser;
use SaschaEnde\T3helpers\Utilities\Category;
use SaschaEnde\T3helpers\Utilities\Command;
use SaschaEnde\T3helpers\Utilities\Configuration;
use SaschaEnde\T3helpers\Utilities\Csv;
use SaschaEnde\T3helpers\Utilities\Database;
use SaschaEnde\T3helpers\Utilities\Data;
use SaschaEnde\T3helpers\Utilities\Datastorage;
use SaschaEnde\T3helpers\Utilities\Debug;
use SaschaEnde\T3helpers\Utilities\Filesystem;
use SaschaEnde\T3helpers\Utilities\FrontendUser;
use SaschaEnde\T3helpers\Utilities\Google;
use SaschaEnde\T3helpers\Utilities\Html5Patterns;
use SaschaEnde\T3helpers\Utilities\Icons;
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
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;

class t3h {

    /**
     * @return Filesystem
     */
    public static function Filesystem() {
        return self::injectClass(Filesystem::class);
    }

    /**
     * @return Configuration
     */
    public static function Configuration() {
        return self::injectClass(Configuration::class);
    }

    /**
     * @return Settings
     */
    public static function Settings() {
        return self::injectClass(Settings::class);
    }

    /**
     * @return Data
     */
    public static function Data() {
        return self::injectClass(Data::class);
    }

    /**
     * @return Session
     */
    public static function Session() {
        return self::injectClass(Session::class);
    }

    /**
     * @return Mail
     */
    public static function Mail() {
        return self::injectClass(Mail::class);
    }

    /**
     * @return Language
     */
    public static function Language() {
        return self::injectClass(Language::class);
    }

    /**
     * @return Database
     */
    public static function Database() {
        return self::injectClass(Database::class);
    }

    /**
     * @return Uri
     * @deprecated
     */
    public static function Link() {
        return self::Uri();
    }

    /**
     * @return Uri
     */
    public static function Uri() {
        return self::injectClass(Uri::class);
    }

    /**
     * @return Injections
     */
    public static function Inject() {
        return self::injectClass(Injections::class);
    }

    /**
     * @return Google
     */
    public static function Google() {
        return self::injectClass(Google::class);
    }

    /**
     * @return Password
     */
    public static function Password() {
        return self::injectClass(Password::class);
    }

    /**
     * @return Template
     */
    public static function Template() {
        return self::injectClass(Template::class);
    }

    /**
     * @return Debug
     */
    public static function Debug() {
        return self::injectClass(Debug::class);
    }

    /**
     * @return BackendUser
     */
    public static function BackendUser() {
        return self::injectClass(BackendUser::class);
    }

    /**
     * @return Page
     */
    public static function Page() {
        return self::injectClass(Page::class);
    }

    /**
     * @return Tsfe
     */
    public static function Tsfe() {
        return self::injectClass(Tsfe::class);
    }

    /**
     * @return Category
     */
    public static function Category() {
        return self::injectClass(Category::class);
    }

    /**
     * @return Command
     */
    public static function Command() {
        return self::injectClass(Command::class);
    }

    /**
     * @return FrontendUser
     */
    public static function FrontendUser() {
        return self::injectClass(FrontendUser::class);
    }

    /**
     * @return Datastorage
     */
    public static function Datastorage() {
        return self::injectClass(Datastorage::class);
    }

    /**
     * @return Upload
     */
    public static function Upload(){
        return self::injectClass(Upload::class);
    }

    /**
     * @return Csv
     */
    public static function Csv(){
        return self::injectClass(Csv::class);
    }

    /**
     * @return Html5Patterns
     */
    public static function Html5Patterns(){
        return self::injectClass(Html5Patterns::class);
    }

    /**
     * @return Icons
     */
    public static function Icons(){
        return self::injectClass(Icons::class);
    }

    // ---------------------------------------------------------------------------------
    // Objectmanager
    // ---------------------------------------------------------------------------------

    public static function injectClass($class) {
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        return $objectManager->get($class);
    }

}