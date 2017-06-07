# DMWSPHP
DMWS-PHP is a library that aims to simplify the use of the Digital Measures Web Services Platform for PHP Developers. This project is currently under development and can not perform all available operations available via the REST API.

Project sponsored by the Feliciano School of Business.

# Dependencies
This library requires the [Httful HTTP Client Library](https://github.com/nategood/httpful).

# Getting Started

## Setup Connection

```php
$conn = new DMAIConnection("[USERNAME]", "[PASSWORD]");
```

or to use BETA Environment:

```php
$conn = new DMAIConnection("[USERNAME]", "[PASSWORD]", false, true);
```
# Examples

## Get Schema Resources

```php
try {
	$ListResource = $conn->getSchema();

	foreach($ListResource as $key => $SchemaResource) {
		print $SchemaResource->getText() . "<br>";
	}
} catch (Exception $e) {
	print $e;
}
```

## Get Default Schema Resource

```php
try {
	$SchemaResource = $conn->getDefaultSchema();
		
	print $SchemaResource->getText();
} catch (Exception $e) {
	print $e;
}
```

## Schema Entity Resources

```php
try {
	$SchemaEntityListResource = $conn->getDefaultSchema()->getSchemaEntities();
		
	foreach ($SchemaEntityListResource as $View) {
		$SchemeEntityResources = $View->getSchemaEntityResources();
		foreach ($SchemeEntityResources as $SchemaEntity) {
			print $SchemaEntity;
		}
	}
} catch (Exception $e) {
	print $e;
}
```

## Schema Index Resources and Index Entries

```php
try {
	$SchemaIndexResources = $conn->getDefaultSchema()->getSchemaIndices();
		
	foreach ($SchemaIndexResources as $SchemaIndexResource) {
		print $SchemaIndexResource;
		foreach ($SchemaIndexResource->getIndexEntries() as $IndexEntry) {
			print $IndexEntry;
		}
	}
} catch (Exception $e) {
	print $e;
}
```

## PCI

```php
try {
	$SchemaResource = $conn->getDefaultSchema();
	$PCIRecords = $conn->getPCI($SchemaResource);
	foreach($PCIRecords as $Record) {
		print $Record . "<br>";
	}
} catch (Exception $e) {
	print $e;
}
```

## INTELLCONT

```php
try {
	$SchemaResource = $conn->getDefaultSchema();
		
	$INTELLCONTRecords = $conn->getINTELLCONT($SchemaResource);
	foreach($INTELLCONTRecords as $Record) {
		print $Record . "<br>";
			
		$Authors = $Record->getAuthors();
		foreach ($Authors as $Author) {
			print $Author;
		}
	}
} catch (Exception $e) {
	print $e;
}
```

## Support

Contact me directly via email for support at [bamberjp@gmail.com](mailto:bamberjp@gmail.com). Feel free to share how you are using this code in your own projects.
