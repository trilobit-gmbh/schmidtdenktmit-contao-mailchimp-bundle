<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2017 Leo Feyer
 *
 * @package     Trilobit
 * @author      bundle-container: trilobit GmbH <https://github.com/trilobit-gmbh>
 * @license     LGPL-3.0-or-later
 * @copyright   trilobit GmbH
 */

namespace Schmidtdenktmit\MailchimpBundle;


use Patchwork\Utf8;


/**
 * Front end module "mailchimp".
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class ModuleMailchimp extends \Module
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_mailchimp';

    /**
     * Do not display the module if there are no menu items
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            /** @var BackendTemplate|object $objTemplate */
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . Utf8::strtoupper($GLOBALS['TL_LANG']['FMD']['mailchimp'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        return parent::generate();
    }


    /**
     * @param null $intId
     * @return string
     */
    protected function prepareMailchimp($intId=null)
    {
        if ($intId === null) return '';


        /**
         * todo
         */
        $strReturn = '<p>do what i want! [#' . $intId. ']</p>';


        // token? action?
        if (\Input::get('token') && \Input::get('act'))
        {
            // action?
            switch (\Input::get('act'))
            {
                case 'doubleOptIn':
                    $strReturn .= '<p><button>doubleOptIn</button></p>';
                    break;

                case 'confirmed':
                    $strReturn .= '<p>confirmed :-)</p>';
                    break;

                case 'error':
                    $strReturn .= '<p>error :-(</p>';
                    break;

                default:
                    $strReturn .= '<p>no valid action (?)</p>';
                    break;
            }
        }
        else
        {
            $strReturn .= '<p><button>submit</button></p>';
        }


        return $strReturn;
    }


    /**
     * Generate the module
     */
    protected function compile()
    {
        $this->Template->mailchimp = self::prepareMailchimp($this->mailchimpId);
    }
}
