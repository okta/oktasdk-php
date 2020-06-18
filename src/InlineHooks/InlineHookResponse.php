<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\InlineHooks;

class InlineHookResponse extends \Okta\Resource\AbstractResource
{
    const COMMANDS = 'commands';



    /**
     * Get the commands.
     *
     * @return array
     */
    public function getCommands()
    {
        return $this->getProperty(self::COMMANDS);
    }

    /**
    * Set the commands.
    *
    * @param mixed $commands The value to set.
    * @return self
    */
    public function setCommands($commands)
    {
        $this->setProperty(
            self::COMMANDS,
            $commands
        );

        return $this;
    }
}
