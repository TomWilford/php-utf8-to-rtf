# PHP UTF8 To RTF
## Description
A simple class for converting UTF8 characters to an RTF safe format in PHP.

## Installation
`composer require tomwilford/php-utf8-to-rtf`
   
## Usage
> Requires PHP 7.0 or higher

Instantiate the converter using:

```php
$converter = new CharacterConverter();
```

To find and replace UTF8 characters in a long string use:

```php
$convertedString = $converter->findAndReplace($string);
```

Or, for shorter strings, simply convert the whole string:

```php
$convertedString = $converter->convertStringToRtf($string);
```

You can also convert an array of UTF8 strings:

```php
$convertedArray = $converter->convertArrayToRtf($arrayOfStrings);
```

Finally, if you need to do any additional processing on the UTF8 strings before converting, 
you can create an array of UTF8 strings using:
```php
$arrayToConvert = $converter->locateWordsInString($string);
```

## Testing
Testing has been done with PHPUnit and a series of pangrams sourced online to try to best capture
as many characters as possible in different languages being used in a natural way. Please see the 
[Pangrams trait](tests/Resources/Pangrams.php) for the pangram sources' credits.

Currently, there are four failing tests for `findAndReplace()` whereby some characters are ignored by the 
regex and not replaced during the conversion.

## Contributing
Contributions are welcome, please see [CONTRIBUTING](CONTRIBUTING.md) for more information.

## Software License 
Copyright (c) 2022. Tom Wilford <hello@jollyblueman.com>
All rights reserved.

This source code is licensed under the BSD-style license found in the
LICENSE file in the root directory of this source tree.

