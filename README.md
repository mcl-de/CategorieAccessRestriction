CategorieAccessRestriction
==========================

Idea based on Andrés Orencio Ramírez Pérez project on Mediawiki (http://www.mediawiki.org/wiki/Extension:Restrict_access_by_category_and_group)

## Installation

### Using git clone
- Clone the extension in your MediaWiki extension folder

### Using source files
- Create folder called **CategorieAccessRestriction** in your extension folder
- Copy all files in yout **CategorieAccessRestriction** folder

### General
- Now edit LocalSettings.php and add the following lines
```php
require_once("$IP/extensions/CategorieAccessRestriction/CategorieAccessRestriction.php");
```

- Now add the Pattern
```php
$wgCARPattern = '//';
```

## Usage
The *$wgCARPattern* is a RegEx pattern which matches the categories on a pages, and these matches are needed to the user to access the page, otherwise he will get a ACCESS DENIED.
For example to match all groups starting with *CAR_*: *'/CAR_/'* the pattern is case sensitive.