# jsoncodegen-generator-php-psalm

> jsoncodegen JSON to PHP (with Psalm) code generator.

Generates PHP classes from jsoncodegen interfaces.

## Output directories

### `Type`

Contains all the classes generated from interfaces & enums.

### `Builder`

Contains builder classes for each interface. These ensure that all required fields are defined.

Use them like this:

```PHP
$myObject = new MyObject(
  (new MyObjectBuilder())
    ->setName('Budapest')
    ->setFlag(true)
    ->setCount(3)
);
```

### `Assert`

Contains assertion functions. These functions validate an object and throw an `\Exception` if the given object does not match the interface. They also ensure that `Map`s are handled correctly (wrapped into `JsonMap`). They can be called like this:

```PHP
$myObject = getMyObjectFromSomewhere();
try {
  AssertMyObject::assert(myObject);
} catch (\Exception $e) {
  // $e indicates where the problem is
}
```

### `Util`

Contains utilities used by assertions in the `Assert` folder.

## Install

```
npm i -D jsoncodegen-generator-php-psalm
```

## Config

Configuration can be put in jsoncodegen-generator-php-psalm.config.js and passed to jsoncodegen in the config parameter:

```
jsoncodegen --generator php-psalm --config jsoncodegen-generator-php-psalm.config.js ...
```

**jsoncodegen-generator-php-psalm.config.js**

```js
module.exports = {
  namespaceBase: 'MyCompany\\MyProject\\Json'
}
```

### `namespaceBase: string`

Makes all namespaces use the given base. The necessary folders will not be created by this tool.

## License

MIT

## History

1.0.5 Fix Undefinedproperty warnings with PHP 8.1.

1.0.4 Fix JsonMap for Psalm 5.4.0 with PHP 8.1.

1.0.3 Fix enum type loss.

1.0.2 Fix interface setter generics.

1.0.1 Only require non-nullable fields.

1.0.0 Initial version.
