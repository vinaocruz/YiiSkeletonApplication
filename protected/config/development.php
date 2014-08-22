<?php
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return CMap::mergeArray(
        require(dirname(__FILE__) . '/main.php'), 
        array(
            'modules' => array(
                // uncomment the following to enable the Gii tool
                'gii' => array(
                    'class' => 'system.gii.GiiModule',
                    'password' => 'Enter Your Password Here',
                    // If removed, Gii defaults to localhost only. Edit carefully to taste.
                    'ipFilters' => array('127.0.0.1', '::1'),
                ),
            ),
            // application components
            'components' => array(
                'db' => array(
                    'connectionString' => 'mysql:host=localhost;dbname=testdrive',
                    'emulatePrepare' => true,
                    'username' => 'root',
                    'password' => '',
                    'charset' => 'utf8',
                ),
                'log' => array(
                    'class' => 'CLogRouter',
                    'routes' => array(
                        array(
                            'class' => 'CFileLogRoute',
                            'levels' => 'error, warning',
                        ),
                        // uncomment the following to show log messages on web pages
                        array(
                            'class' => 'CWebLogRoute',
                        ),
                    ),
                ),
            ),
            // application-level parameters that can be accessed
            // using Yii::app()->params['paramName']
            'params' => array(
            ),
        )
    );
