# Package Base

> Classes that are used by the classes generated by the [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) project to ease the SoapClient UX.

[![Latest Stable Version](https://poser.pugx.org/wsdltophp/packagebase/version.png)](https://packagist.org/packages/wsdltophp/packagebase)
[![Total Downloads](https://poser.pugx.org/wsdltophp/packagebase/downloads)](https://packagist.org/packages/wsdltophp/packagebase)
[![Build Status](https://api.travis-ci.org/WsdlToPhp/PackageBase.svg)](https://travis-ci.org/WsdlToPhp/PackageBase)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/WsdlToPhp/PackageBase/badges/quality-score.png)](https://scrutinizer-ci.com/g/WsdlToPhp/PackageBase/)
[![Code Coverage](https://scrutinizer-ci.com/g/WsdlToPhp/PackageBase/badges/coverage.png)](https://scrutinizer-ci.com/g/WsdlToPhp/PackageBase/)
[![StyleCI](https://styleci.io/repos/38760239/shield)](https://styleci.io/repos/38760239)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/bfbc0c8f-5793-489b-8151-36ea149ec98d/mini.png)](https://insight.sensiolabs.com/projects/bfbc0c8f-5793-489b-8151-36ea149ec98d)

The goal is to provide generic and useful classes that are on top of the classes generated by the [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) project.

For example, it allows to easily loop through the array elements of a SOAP result object property, it allows to easily set HTTP and SOAP headers for a SOAP request and it allows to easily populate an object from its array state representation.

## Main features
- [Interfaces](#the-interfaces)
    - [StructInterface](#structinterface)
    - [StructArrayInterface](#structarrayinterface)
    - [SoapClientInterface](#soapclientinterface)
- [Abstract classes](#the-abstract-classes)
    - [AbstractStructBase](#abstractstructbase)
    - [AbstractStructArrayBase](#abstractstructarraybase)
    - [AbstractSoapClientBase](#abstractsoapclientbase)

## The interfaces
The defined interfaces must be used in order to be able to match the requirements for the [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) generated classes.

### StructInterface
#### Description
This interface must be used to define a new StructType class.

#### What has to be implemented?
There is at least/most one method that must be implemented so it's pretty fast to implement it even if you don't see the goal of it:
- **__set_state**: [__set_state](http://php.net/manual/en/language.oop5.magic.php#object.set-state) is useful when you want want to load an object that you stored as a string using [var_export](http://php.net/manual/en/function.var-export.php).

**If you do not want to implement this method, you can too create your own class that inherits from our [AbstractStructBase](#abstractstructbase) class.**

### StructArrayInterface
#### Description
This interface must be used to define a new ArrayType class. The goal is to provide utility methods around Array Structs defined by the Wsdl in order to ease the handling of its content. Therefore, this interface inherits from our [StructInterface](#structinterface) interface plus the native [ArrayAccess](http://php.net/manual/en/class.arrayaccess.php), [Iterator](http://php.net/manual/en/class.iterator.php) and [Countable](http://php.net/manual/en/class.countable.php) PHP interfaces

#### What has to be implemented?
The only method that must be implemented would be **getAttributeName** but be aware that it is implemented in every generated ArrayType class so no need to define it. It's just a reminder of what is available in ArrayType classes.

So, basically, you MUST at least override the methods declared by the PHP interfaces from which this interface inherits

**If you do not want to implement all the methods, you can too create your own class that inherits from our [AbstractStructArrayBase](#abstractstructarraybase) class.**

### SoapClientInterface
#### Description
This interface must be used to define a new [SoapClient](http://php.net/manual/en/class.soapclient.php) base class for any ```ServiceType``` class generated by [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator).

#### Options
Here are the constants/options defined by this interface and their utility:
- **DEFAULT_SOAP_CLIENT_CLASS = '\SoapClient'**: this is the default [SoapClient](http://php.net/manual/en/class.soapclient.php) class that is used to send the request. Feel free to override it if you want to use another [SoapClient](http://php.net/manual/en/class.soapclient.php) class
- **OPTION_PREFIX**: this is the prefix used for any constant's option name
- **WSDL_URL**: option index used to pass the WSDL url
- **WSDL_URI**: option index used to pass the target namespace of the SOAP service (required for non-WSDL-mode with with the `location`)
- **WSDL_USE**: option index used to pass  non-WSDL-mode option use
- **WSDL_STYLE**: option index used to pass non-WSDL-mode option style
- **WSDL_CLASSMAP**: the classmap's array
- **WSDL_LOGIN**: the basic authentication's login
- **WSDL_PASSWORD**: the basic authentication's password
- **WSDL_TRACE**: tracing of request so faults can be backtraced. This defaults to ```true```
- **WSDL_EXCEPTIONS**: boolean value defining whether soap errors throw exceptions of type SoapFault
- **WSDL_CACHE_WSDL**: option is one of ```WSDL_CACHE_NONE```, ```WSDL_CACHE_DISK```, ```WSDL_CACHE_MEMORY``` or ```WSDL_CACHE_BOTH```
- **WSDL_STREAM_CONTEXT**: a [resource](http://php.net/manual/en/language.types.resource.php) for [context](http://php.net/manual/en/context.php)
- **WSDL_SOAP_VERSION**: one of either ```SOAP_1_1``` or ```SOAP_1_2``` to select SOAP 1.1 or 1.2, respectively. If omitted, SOAP 1.1 is used
- **WSDL_COMPRESSION**: allows to use compression of HTTP SOAP requests and responses
- **WSDL_ENCODING**: internal character encoding. This option does not change the encoding of SOAP requests (it is always utf-8), but converts strings into it
- **WSDL_CONNECTION_TIMEOUT**: defines a timeout in seconds for the connection to the SOAP service. This option does not define a timeout for services with slow responses. To limit the time to wait for calls to finish the [default_socket_timeout](http://php.net/manual/en/filesystem.configuration.php#ini.default-socket-timeout) setting is available
- **WSDL_TYPEMAP**: array of type mappings. Type mapping is an array with keys type_name, type_ns (namespace URI), from_xml (callback accepting one string parameter) and to_xml (callback accepting one object parameter)
- **WSDL_USER_AGENT**: specifies string to use in User-Agent header
- **WSDL_FEATURES**: a bitmask of ```SOAP_SINGLE_ELEMENT_ARRAYS```, ```SOAP_USE_XSI_ARRAY_TYPE```, ```SOAP_WAIT_ONE_WAY_CALLS```
- **WSDL_KEEP_ALIVE**: a boolean value defining whether to send the Connection: Keep-Alive header or Connection: close
- **WSDL_PROXY_HOST**: your pxoxy hostname
- **WSDL_PROXY_PORT**: your proxy port
- **WSDL_PROXY_LOGIN**: your proxy login
- **WSDL_PROXY_PASSWORD**: your proxy password
- **WSDL_LOCAL_CERT**: your local certificate content (as a string)
- **WSDL_PASSPHRASE**: your local passphrase content (as a string)
- **WSDL_AUTHENTICATION**: authentication method may be either ```SOAP_AUTHENTICATION_BASIC``` (default) or ```SOAP_AUTHENTICATION_DIGEST```
- **WSDL_SSL_METHOD**: one of ```SOAP_SSL_METHOD_TLS```, ```SOAP_SSL_METHOD_SSLv2```, ```SOAP_SSL_METHOD_SSLv3``` or ```SOAP_SSL_METHOD_SSLv23```

#### What has to be implemented?
Here are the methods that must be implemented and why:
- **__construct(array $wsdlOptions = array(), $resetSoapClient = true)**: the constructor must be able to handl one of the listed constants above
- **getSoapClient()**: must return the [SoapClient](http://php.net/manual/en/class.soapclient.php) object that is responsible fo sending the requests.
- **setSoapHeader($nameSpace, $name, $data, $mustUnderstand = false, $actor = null)**: look to [AbstractSoapClientBase](#abstractsoapclientbase) part that details this method. Basically, it allows to define [SoapHeader](http://php.net/manual/en/class.soapheader.php)s for the request
- **getLastError()**: must return the last error, its format is up to you
- **saveLastError($methodName, \SoapFault $soapFault)**: look to [AbstractSoapClientBase](#abstractsoapclientbase) part that details this method. Basically, it must allow to store a catched [Soapfault](http://php.net/manual/en/class.soapfault.php) object when a request has failed
- **getResult()**: should return the Soap Web Service response, it's up to you
- **setResult($result)**: must accept any parameter type as it should received the Soap Web Service response

**If you do not want to implement all these methods, you can too create your own class that inherits from our [AbstractSoapClientBase](#abstractsoapclientbase) class.**

## The abstract classes
### AbstractStructBase
#### Description
This class is the base class for any ```StructType``` class generated by [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator). It implements our [StructInterface](#structinterface) interface.
It defines four methods:
- **__set_state($array)**: Useful when you load the string representation of an object that you stored using ```var_export```. It also allows you to ease the instanciation of an object that contains many properties which would be hard to instanciate using the ```__construct``` method. You can see ```__set_state``` as an hydratation method.
- **_set($name, $value)**: As magic method ```__set``` but used by the ```__set_state``` method. Plus, defining ```__set``` method on used class by the classmap option for the [SoapClient](http://php.net/manual/en/class.soapclient.php) breaks the correct hydratation of your received objects.
- **_get($name)**: As magic method ```__get```. Used by our [AbstractStructArrayBase](#abstractstructarraybase) class.
- **jsonSerialize()**: by implementing the [\JsonSerializable](http://php.net/manual/en/class.jsonserializable.php) interface, it implements this method that allows to pass the object to the [json_encode](http://php.net/manual/en/function.json-encode.php) method so it will return the properties of the current object in an array.

#### Usage
```php
$item = \Api\StructType\Item::__set_state(array(
    'id' => 1,
    'name' => 'Entity #1',
    'label' => 'Entity #1',
    '_href' => 'http://www.entity.com',
));
// $item is now an \Api\StructType\Item object
```

### AbstractStructArrayBase
#### Description
This class is the base class for any ```ArrayType``` class generated by [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator). It implements our [StructArrayInterface](#structarrayinterface) interface.

#### Usage
As soon as you have an element that is an array of items such as:
```php
$items = \Api\ArrayType\Items::__set_state(array(
    'items' => array(
        \Api\StructType\Item::__set_state(array(
            'id' => 1,
            'name' => 'Entity #1',
            'label' => 'Entity #1',
            '_href' => 'http://www.entity-1.com',
        ),
        \Api\StructType\Item::__set_state(array(
            'id' => 2,
            'name' => 'Entity #2',
            'label' => 'Entity #2',
            '_href' => 'http://www.entity-2.com',
        ),
        \Api\StructType\Item::__set_state(array(
            'id' => 3,
            'name' => 'Entity #3',
            'label' => 'Entity #3',
            '_href' => 'http://www.entity-3.com',
        ),
    )
));
// 'items' is the unique property of the object
// Its name is returned by the getAttributeName method
// defined in the generated \Api\ArrayType\Items class
```
- **You MUST call first** ```initInternArray``` method on your ArrayType object otherwise you'll get nothing working for the implemented methods:
```php
$items->initInternArray();
```
- then you can call ```count```, ```length``` methods: gives you the number of items contained by your object
- you can iterate through the items:
```php
foreach ($items as $item) {
    // $items->current() and $item is an \Api\StructType\Item object
    // $items->key() is the current index
}
```
- you can get the first item:
```php
$items->first();
```
- you can get the last item:
```php
$items->last();
```
- you can get any item:
```php
$items->item($index);
```
- you can add a new item:
```php
$items->add(\Api\StructType\Item::__set_state(array(
    'id' => 4,
    'name' => 'Entity #4',
    'label' => 'Entity #4',
    '_href' => 'http://www.entity-4.com',
)));
```
- you can even reset the items:
```php
$items->initInternArray(array(
    \Api\StructType\Item::__set_state(array(
        'id' => 0,
        'name' => 'Entity #0',
        'label' => 'Entity #0',
        '_href' => 'http://www.entity-0.com',
    ),
    \Api\StructType\Item::__set_state(array(
        'id' => 1,
        'name' => 'Entity #1',
        'label' => 'Entity #1',
        '_href' => 'http://www.entity-1.com',
    ),
    \Api\StructType\Item::__set_state(array(
        'id' => 2,
        'name' => 'Entity #2',
        'label' => 'Entity #2',
        '_href' => 'http://www.entity-2.com',
    ),
));
```

### AbstractSoapClientBase
#### Description
This class is the base class for any ```ServiceType``` class generated by [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator).
Its goal is to provide utility/handful methods by implementing our [SoapClientInterface](#soapclientinterface) interface.
It's basically a decorator design pattern as the class has the [SoapClient](http://php.net/manual/en/class.soapclient.php) object as a static property in order to be able to apply methods on it. It is a static property in order to have a singleton between multiple calls (allowing to send cookies automatically between calls). It can be reset by passing true as the second parameter.

#### Usage
Let's say you have this type of generate ```ServiceType``` class:
```php
namespace Api\ServiceType;
use \WsdlToPhp\PackageBase\AbstractSoapClientBase;
class ApiUpdate extends AbstractSoapClientBase
{
    public function UpdateBulkOrder(\Api\StructType\ApiUpdateBulkOrder $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->UpdateBulkOrder($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
}
```
You can do:
```php
use \WsdlToPhp\PackageBase\AbstractSoapClientBase;
$options = array(
    AbstractSoapClientBase::WSDL_URL => '__WSDL_URL__',
    AbstractSoapClientBase::WSDL_CLASSMAP => \Api\ApiClassMap::classMap(),
);
// sets the first instance of SoapClient within  AbstractSoapClientBase
$update = new \Api\ServiceType\ApiUpdate($options);
// resets the SoapClient instance
$update = new \Api\ServiceType\ApiUpdate($options, true);
```
Then call any of these base methods:
- **getResult**: return the actual response as an object. The object's class should be a generated class
- **getLastRequest($asDomDocument = false)**: returns either the XML string version or the ```DOMDocument``` version of the request
- **getLastResponse($asDomDocument = false)**: returns either the XML string version or the ```DOMDocument``` version of the response
- **getLastRequestHeaders($asArray = false)**: returns either the HTTP request's headers as a string or as an array (each HTTP header is parsed)
- **getLastResponseHeaders($asArray = false)**: returns either the HTTP response's headers as a string or as an array
- **getLastError**: automatically populated with an error when ```$this->saveLastError(__METHOD__, $soapFault)``` is called
- **getLastErrorForMethod($methodName)** : returns the error associated to the called method. It should return a ```SoapFault``` object
```php
$result = $update->UpdateBulkOrder(new \Api\StructType\ApiUpdateBulkOrder())
if ($result !== false) {
    echo "\nThis is the result as an object:" . print_r($update->getResult(), true);
    // Actually $result is the same data than $update->getResult()
} else {
    echo "\nThis is the XML request:" . $update->getLastRequest(false);
    echo "\nThese are the request's headers:" . $update->getLastRequestHeaders(false);
    echo "\nThis is the XML response:" . $update->getLastResponse(false);
    echo "\nThese are the response's headers:" . $update->getLastResponseHeaders(false);
    echo "\nThese are the last errors:" . print_r($update->getLastError(), true);
    echo "\nThis is the current error:" . print_r($update->getLastErrorForMethod('\Api\ServiceType\ApiUpdate::UpdateBulkOrder'), true);
}
```
You have additional methods such as:
- **setSoapHeader($nameSpace, $name, $data, $mustUnderstand = false, $actor = null)**: it provides a way to redefine SoapHeaders
```php
// A sample of its usage in the generated ServiceType class
public function setSoapHeaderCSPCHD(\Api\StructType\ApiCSPCHD $cSPCHD, $nameSpace = 'http://tempuri.org', $mustUnderstand = false, $actor = null)
{
    return $this->setSoapHeader($nameSpace, 'CSPCHD', $cSPCHD, $mustUnderstand, $actor);
}
```
- **setHttpHeader($headerName, $headerValue)**: an easy way to define your proper HTTP headers that must be sent
- **setLocation($location)**: Sets the location of the Web service to use
- **getStreamContext()**: Returns the created stream context used by the SoapClient class
- **getStreamContextOptions()**: Returns the created stream context's options used by the SoapClient class

## Need improvements for these classes?
Feel free to make some pull requests. We'll study them and let you know when it can be integrated.

## Unit tests
You can run the unit tests with the following command:
```
    $ cd /path/to/src/WsdlToPhp/PackageBase/
    $ composer install
    $ composer test
```