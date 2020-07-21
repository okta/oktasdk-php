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

namespace Okta\Feature;

class FeatureStage extends \Okta\Resource\AbstractResource
{
    const STATE = 'state';
    const VALUE = 'value';


    /**
     * Set the State.
     *
     * @return self
     */
    function setState(\Okta\Feature\FeatureStageState $state) : FeatureStage
    {
        $this->setEnumProperty(
            self::STATE,
            $state
        );
    
        return $this;
    }

    /**
     * Set the Value.
     *
     * @return self
     */
    function setValue(\Okta\Feature\FeatureStageValue $value) : FeatureStage
    {
        $this->setEnumProperty(
            self::VALUE,
            $value
        );
    
        return $this;
    }

    /**
     * Get the State.
     *
     * @return \Okta\Feature\FeatureStageState
     */
    function getState() : \Okta\Feature\FeatureStageState
    {
        return $this->getEnumProperty(
            self::STATE,
            \Okta\Feature\FeatureStageState::class,
        );
    }

    /**
     * Get the Value.
     *
     * @return \Okta\Feature\FeatureStageValue
     */
    function getValue() : \Okta\Feature\FeatureStageValue
    {
        return $this->getEnumProperty(
            self::VALUE,
            \Okta\Feature\FeatureStageValue::class,
        );
    }


}