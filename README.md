# Page Variables Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.1.0-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.9.6-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Page Variables plugin provides a basic way to create and access page variables.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in page content

Set page variable
```
[var_set name="variable_name" value="variable value"]
```

Get page variable
```
[var_get name="variable_name"]
```

## Usage in the template

Display page variable
```
{{ registry.page_variable.variable_name }}
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/page-var/blob/master/LICENSE)
