[![Latest Stable Version](https://poser.pugx.org/gomzyakov/string-to-color/v/stable)](https://packagist.org/packages/gomzyakov/string-to-color)
[![Total Downloads](https://poser.pugx.org/gomzyakov/string-to-color/downloads)](https://packagist.org/packages/gomzyakov/string-to-color)
[![Build Status](https://travis-ci.org/gomzyakov/string-to-color.svg?branch=master&v=1)](https://travis-ci.org/gomzyakov/string-to-color)
[![Coverage Status](https://coveralls.io/repos/github/gomzyakov/string-to-color/badge.svg?branch=master)](https://coveralls.io/github/gomzyakov/string-to-color?branch=master)
[![StyleCI](https://github.styleci.io/repos/208457909/shield?branch=master)](https://github.styleci.io/repos/208457909)
[![License](https://img.shields.io/github/license/gomzyakov/string-to-color)](https://github.com/gomzyakov/string-to-color/blob/master/LICENSE)

# String-to-Color Converter

This library allows to create color (RGB or HEX) from a given string. The usage is as simple as possible (one line). The returned value for each string will be the same for each execution so it's ideal for generating dedicated user color from his/her name/username/email etc.

## Installation

From the command line run:

```
$ composer require gomzyakov/string-to-color
```

## Usage

```php
echo \Gomzyakov\StringToColor::convertStringToColor('Some text');
```

## Example outputs

| Input     | Color                                                    | Output RGB   |
|-----------|----------------------------------------------------------|--------------|
| Gomzyakov | ![#f03c15](https://placehold.it/12/1E8A72/000000?text=+) | 30, 138, 114 |
| Sasha     | ![#f03c15](https://placehold.it/12/AA4F2D/000000?text=+) | 90, 117, 38  |

## License

The project released under [MIT](https://github.com/gomzyakov/string-to-color/blob/master/LICENSE) license.
