***VS Code Extensions***

  -  PHPUnit Snippets
  -  PHPUnit Test Explorer
  -  PHP IntelliSense
  -  PHP Namespace Resolver
  -  PHP Debug

***Config***

- Create base file 'autoload.php' under the 'test' folder.

- Make file 'phpunit.xml' by this command:
  ./vendor/bin/phpunit --generate-configuration

- Create folder 'tests' (declared into 'phpunit.xml').
- Create folder 'src'.

***Run PHPUnit***

  php vendor/bin/phpunit