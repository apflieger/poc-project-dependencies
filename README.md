# Description

This is a prototype of static analysis of projects dependencies.

project-b depends on project-a. `phan` is installed and configured to check projects independently.

'phan' requires php7 and the AST plugin

# Make it run in project-b

```
cd project-b
composer install
./vendor/bin/phan
```
phan passes successfully


# Make it fail in project-a

```
cd project-b
composer install
./vendor/bin/phan
```

We expect this to fail because ClassA uses ClassBB that belongs to project-b
