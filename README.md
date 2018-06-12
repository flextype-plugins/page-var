# Page Variables Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.1-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.x-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Page Variables plugin provides a basic way to create and access page variables.

## Installation
1. Unzip plugin to the folder `/site/plugins/`
2. Go to `/site/config/site.yaml` and add plugin name to plugins section.
3. Save your changes.

Example:
```
plugins:
  - page-var
```

## Usage in page content

Set page variable
```
[var_set name="variable-name" value="variable value"]
```

Get page variable
```
[var_get name="variable-name"]
```

## Usage in the template

Define Flextype namespace in the template if it is not defined yet.
```
<?php namespace Flextype; ?>
```

Display page variable
```
<?php echo Variables::get('variable-name'); ?>
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/page-var/blob/master/LICENSE)
