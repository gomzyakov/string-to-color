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
