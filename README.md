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
      'teamPasswordManager',
    ),
);
```

### Update database schema
```bash
cd $zurmoInstallRoot/app/protected/commands
php zurmoc updateschema super
```
