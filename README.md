# zurmo-teampasswordmanager
Team Password Manager integrations for Zurmo

## Installation

### Clone the files to appropriate modules directory
```bash
cd $zurmoInstallRoot/app/protected/modules
git clone https://github.com/WileESpaghetti/zurmo-teampasswordmanager.git teamPasswordManager
```

### Update `perInstanceConfig.php`
Create `$zurmoInstallRoot/app/protected/config/perInstanceConfig.php` if needed and add `teamPasswordManager` to
the modules list

```php
<?php
$instanceConfig   = array(
    'modules' => array(
        // potentially other modules here...
        'teamPasswordManager' => array(
            'modules' => array(
                'teamPasswordManagerProjects' => array('class' => 'teamPasswordManager.modules.teamPasswordManagerProjects.TeamPasswordManagerProjectsModule'),
            ),
        ),
    ),
);
```

### Update database schema
```bash
cd $zurmoInstallRoot/app/protected/commands
php zurmoc updateschema super
```

## Configuration

API Configuration can be found under `Administration > Team Password Manager Configuration`. You will need to fill out
the connection information before the module's features can be used.

See: [Team Password Manager Authentication](http://teampasswordmanager.com/docs/api/#authentication)

### Security considerations

* Currently the configuration settings will be used for all Zurmo users, so use a credentials with appropriate access.
* Only HTTP Basic Authentication is supported at this time.
