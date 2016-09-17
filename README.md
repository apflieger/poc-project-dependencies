# Description

This is a prototype of static analysis of projects dependencies.

project-b depends on project-a. `phan` is installed and configured to check projects independently.

# Make it run
```
cd project-b
composer install
```

composer creates a symlink in vendor/apflieger because of the 'path' repository declared in composer.json

now run
```
./vendor/bin/phan
```
An error occurs saying that ClassA is not defined. ClassA comes from a symlink of project-a in vendor/apflieger/.
`phan` doesn't follow symlinks.

This will make phan pass.

```
rm vendor/apflieger/project-a
cp -R ../project-a vendor/apflieger/
./vendor/bin/phan
```