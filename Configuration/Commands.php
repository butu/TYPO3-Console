<?php
declare(strict_types=1);

return [
    '_dummy' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'replace' => [
            'extbase:_core_command',
            'extbase:_extbase_help',
            'extbase:help:error',
            'typo3_console:_dummy',
        ],
    ],
    'backend:createadmin' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\BackendCommandController::class,
        'controllerCommandName' => 'createAdmin',
    ],
    'backend:lock' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\BackendCommandController::class,
        'controllerCommandName' => 'lock',
        'replace' => [
            'backend:backend:lock',
        ],
    ],
    'backend:lockforeditors' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\BackendCommandController::class,
        'controllerCommandName' => 'lockForEditors',
    ],
    'backend:unlock' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\BackendCommandController::class,
        'controllerCommandName' => 'unlock',
        'replace' => [
            'backend:backend:unlock',
        ],
    ],
    'backend:unlockforeditors' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\BackendCommandController::class,
        'controllerCommandName' => 'unlockForEditors',
    ],
    'cache:flush' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Cache\CacheFlushCommand::class,
        'schedulable' => false,
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'cache:flushgroups' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Cache\CacheFlushGroupsCommand::class,
        'schedulable' => false,
    ],
    'cache:flushtags' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Cache\CacheFlushTagsCommand::class,
        'schedulable' => false,
    ],
    'cache:listgroups' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Cache\CacheListGroupsCommand::class,
        'schedulable' => false,
    ],
    'cleanup:updatereferenceindex' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Cleanup\UpdateReferenceIndexCommand::class,
        'schedulable' => false,
        'replace' => [
            'backend:referenceindex:update',
        ],
        'aliases' => [
            'backend:referenceindex:update',
            'referenceindex:update',
        ],
    ],
    'configuration:remove' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ConfigurationCommandController::class,
        'controllerCommandName' => 'remove',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
    ],
    'configuration:set' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ConfigurationCommandController::class,
        'controllerCommandName' => 'set',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
    ],
    'configuration:show' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ConfigurationCommandController::class,
        'controllerCommandName' => 'show',
    ],
    'configuration:showactive' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ConfigurationCommandController::class,
        'controllerCommandName' => 'showActive',
    ],
    'configuration:showlocal' => [
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'vendor' => 'typo3_console',
        'controller' => \Helhum\Typo3Console\Command\ConfigurationCommandController::class,
        'controllerCommandName' => 'showLocal',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
    ],
    'database:export' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Database\DatabaseExportCommand::class,
        'schedulable' => false,
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
    ],
    'database:import' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Database\DatabaseImportCommand::class,
        'schedulable' => false,
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
    ],
    'database:updateschema' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Database\DatabaseUpdateSchemaCommand::class,
        'schedulable' => false,
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
        'bootingSteps' => [
            'helhum.typo3console:database',
            'helhum.typo3console:persistence',
        ],
    ],
    'documentation:generatexsd' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Documentation\GenerateXsdCommand::class,
    ],
    'dumpautoload' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Extension\DumpAutoloadCommand::class,
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
        'replace' => [
            'core:dumpautoload',
            'extensionmanager:extension:dumpclassloadinginformation',
        ],
        'aliases' => [
            'extension:dumpautoload',
            'extension:dumpclassloadinginformation',
            'extensionmanager:extension:dumpclassloadinginformation',
        ],
    ],
    'extension:activate' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ExtensionCommandController::class,
        'controllerCommandName' => 'activate',
        'replace' => [
            'extensionmanager:extension:install',
            'extensionmanager:extension:activate',
        ],
        'aliases' => [
            'extension:install',
            'extensionmanager:extension:install',
            'extensionmanager:extension:activate',
        ],
    ],
    'extension:deactivate' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ExtensionCommandController::class,
        'controllerCommandName' => 'deactivate',
        'replace' => [
            'extensionmanager:extension:uninstall',
            'extensionmanager:extension:deactivate',
        ],
        'aliases' => [
            'extension:uninstall',
            'extensionmanager:extension:uninstall',
            'extensionmanager:extension:deactivate',
        ],
    ],
    'extension:list' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ExtensionCommandController::class,
        'controllerCommandName' => 'list',
        'replace' => [
            'core:extension:list',
        ],
    ],
    'extension:removeinactive' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ExtensionCommandController::class,
        'controllerCommandName' => 'removeInactive',
    ],
    'extension:setup' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ExtensionCommandController::class,
        'controllerCommandName' => 'setup',
    ],
    'extension:setupactive' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\ExtensionCommandController::class,
        'controllerCommandName' => 'setupActive',
    ],
    'frontend:request' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Frontend\FrontendRequestCommand::class,
        'schedulable' => false,
    ],
    'install:setup' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'setup',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'install:generatepackagestates' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'generatePackageStates',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'install:fixfolderstructure' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'fixFolderStructure',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'install:extensionsetupifpossible' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'extensionSetupIfPossible',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'install:environmentandfolders' => [
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'vendor' => 'typo3_console',
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'environmentAndFolders',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'install:databaseconnect' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'databaseConnect',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'install:databaseselect' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'databaseSelect',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'install:databasedata' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'databaseData',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
        'bootingSteps' => [
            'helhum.typo3console:database',
            'helhum.typo3console:persistence',
        ],
    ],
    'install:defaultconfiguration' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'defaultConfiguration',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_MINIMAL,
        'bootingSteps' => [
            'helhum.typo3console:database',
            'helhum.typo3console:persistence',
        ],
    ],
    'install:actionneedsexecution' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\InstallCommandController::class,
        'controllerCommandName' => 'actionNeedsExecution',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'scheduler:run' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Command\Scheduler\SchedulerRunCommand::class,
        'schedulable' => false,
        'replace' => [
            'scheduler:scheduler:run',
        ],
    ],
    'upgrade:all' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\UpgradeCommandController::class,
        'controllerCommandName' => 'all',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
        'replace' => [
            'install:upgrade:run',
        ],
    ],
    'upgrade:checkextensionconstraints' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\UpgradeCommandController::class,
        'controllerCommandName' => 'checkExtensionConstraints',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'upgrade:list' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\UpgradeCommandController::class,
        'controllerCommandName' => 'list',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
        'replace' => [
            'install:upgrade:list',
        ],
        'aliases' => [
            'install:upgrade:list',
        ],
    ],
    'upgrade:wizard' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\UpgradeCommandController::class,
        'controllerCommandName' => 'wizard',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
    'upgrade:subprocess' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\UpgradeCommandController::class,
        'controllerCommandName' => 'subProcess',
    ],
    'upgrade:checkextensioncompatibility' => [
        'vendor' => 'typo3_console',
        'class' => \Helhum\Typo3Console\Mvc\Cli\Symfony\Command\DummyCommand::class,
        'schedulable' => false,
        'controller' => \Helhum\Typo3Console\Command\UpgradeCommandController::class,
        'controllerCommandName' => 'checkExtensionCompatibility',
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
];
