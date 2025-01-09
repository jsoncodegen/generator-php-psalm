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

Or clone an existing object like this:

```PHP
$myClone = new MyObject(
  MyObjectBuilder::from($myObject)
    ->setName('Boston')
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

#### `JsonMap<T>`

Represents a map – a JSON object that behaves like an associative array, but unlike an associative array, it is always stringified as a JSON object (and not a JSON array). Also, it is immutable, as of version `2.0.0`.

Its keys are always `string`s, as required by JSON.

Its generic `T` template type specifies the values it can contain, and can be specified as follows:

```PHP
/** @var JsonMap<string> $myMap */
$myMap = new JsonMap(['bp' => 'Budapest']);
```

The constructor accepts an optional associative array with initial key => value pairs.

```PHP
/** @var JsonMap<boolean> $myMapOfFlags */
$myMapOfFlags = new JsonMap(["very" => true]);
```

It cannot be mutated after creation, but a clone can be created using the `toArray()` method, like this:

```PHP
$arr = $myMapOfFlags->toArray();
$arr['never'] = false;
$myMapModified = new JsonMap($arr);
var_dump($myMapModified['very']); // bool(true)
var_dump($myMapModified['never']); // bool(false)
var_dump($myMapModified['what']); // NULL
```

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
export default {
	namespaceBase: 'MyCompany\\MyProject\\Json',
}
```

### `namespaceBase: string`

Makes all namespaces use the given base. The necessary folders will not be created by this tool.

## License

MIT

## History

2.0.0 Make `JsonMap` immutable. Add static `from` method to interfaces, to aid cloning and editing.

1.3.0 require → import

1.2.0 Use and support Psalm through composer only.

1.1.0 Check interface has no extra fields.

1.0.0 Initial version.
