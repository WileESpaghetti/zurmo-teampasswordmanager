<?php
    class TeamPasswordManagerApiConfigurationUtil extends ZurmoConfigurationUtil
    {
        const CONFIG_MODULE_NAME     = 'TeamPasswordManagerModule';

        const CONFIG_DEFAULT_VALUE   = '';

        public static function setApiConfigurationValue($key, $value)
        {
            ZurmoConfigurationUtil::setByModuleName(static::CONFIG_MODULE_NAME, $key, $value);
        }

        public static function getApiConfigurationValue($key, $returnDefaultIfMissing = true, $setDefaultIfMissing = false)
        {
            $value = ZurmoConfigurationUtil::getByModuleName(static::CONFIG_MODULE_NAME, $key);
            if (empty($value) && $returnDefaultIfMissing)
            {
                $value = static::CONFIG_DEFAULT_VALUE;
                if ($setDefaultIfMissing)
                {
                    static::setApiConfigurationValue($key, $value);
                }
            }
            elseif (empty($value))
            {
                return null;
            }
            return $value;
        }
        
        public static function setApiUser($user)
        {
            static::setApiConfigurationValue('ApiUser', $user);
        }
        
        public static function setApiUrl($url)
        {
            static::setApiConfigurationValue('ApiUrl', $url);
        }
        
        public static function setApiPassword($password)
        {
            static::setApiConfigurationValue('ApiPassword', $password);
        }

        public static function getApiUrl($returnDefaultIfMissing = true, $setDefaultIfMissing = false)
        {
            $key = 'ApiUrl';
            return static::getApiConfigurationValue($key, $returnDefaultIfMissing, $setDefaultIfMissing);
        }
        
        public static function getApiUser($returnDefaultIfMissing = true, $setDefaultIfMissing = false)
        {
            $key = 'ApiUser';
            return static::getApiConfigurationValue($key, $returnDefaultIfMissing, $setDefaultIfMissing);
        }
        
        public static function getApiPassword($returnDefaultIfMissing = true, $setDefaultIfMissing = false)
        {
            $key = 'ApiPassword';
            return static::getApiConfigurationValue($key, $returnDefaultIfMissing, $setDefaultIfMissing);
        }
    }
?>