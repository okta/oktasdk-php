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

namespace Okta\Log;

class LogIpAddress extends \Okta\Resource\AbstractResource
{
    const IP = 'ip';
    const SOURCE = 'source';
    const VERSION = 'version';
    const GEOGRAPHICAL_CONTEXT = 'geographicalContext';

    /**
     * Get the Ip.
     *
     * @param mixed $ip The ip to set.
     * @return string
     */
    function getIp() : string
    {
        return $this->getProperty(
            self::IP
        );
    }
    
    /**
     * Get the Source.
     *
     * @param mixed $source The source to set.
     * @return string
     */
    function getSource() : string
    {
        return $this->getProperty(
            self::SOURCE
        );
    }
    
    /**
     * Get the Version.
     *
     * @param mixed $version The version to set.
     * @return string
     */
    function getVersion() : string
    {
        return $this->getProperty(
            self::VERSION
        );
    }
    
    /**
     * Get the GeographicalContext.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogGeographicalContext
     */
    function getGeographicalContext(array $options = []) : \Okta\Log\LogGeographicalContext
    {
        return $this->getResourceProperty(
            self::GEOGRAPHICAL_CONTEXT,
            \Okta\Log\LogGeographicalContext::class,
            $options
        );
    }


}