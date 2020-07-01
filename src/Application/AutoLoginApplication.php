<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta\Application;

class AutoLoginApplication extends \Okta\Application\Application
{
    const SETTINGS = 'settings';
    const CREDENTIALS = 'credentials';

    /**
     * Set the Settings.
     *
     * @param mixed $settings The settings to set.
     * @return self
     */
    function setSettings(\Okta\Application\AutoLoginApplicationSettings $settings) : AutoLoginApplication
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );
    
        return $this;
    }

    /**
     * Set the Credentials.
     *
     * @param mixed $credentials The credentials to set.
     * @return self
     */
    function setCredentials(\Okta\Application\SchemeApplicationCredentials $credentials) : AutoLoginApplication
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );
    
        return $this;
    }

    /**
     * Get the Settings.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\AutoLoginApplicationSettings
     */
    function getSettings(array $options = []) : \Okta\Application\AutoLoginApplicationSettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\Application\AutoLoginApplicationSettings::class,
            $options
        );
    }

    /**
     * Get the Credentials.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\SchemeApplicationCredentials
     */
    function getCredentials(array $options = []) : \Okta\Application\SchemeApplicationCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Application\SchemeApplicationCredentials::class,
            $options
        );
    }


}