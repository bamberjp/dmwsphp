# dmwsphp
DMWS-PHP is a library that aims to simplify the use of the Digital Measures Web Services Platform for PHP Developers. This project is currently under development and can not perform all available operations available via the REST API.

#dependencies
This library requires the <a href="https://github.com/nategood/httpful" target="_blank" title="Httpful HTTP Client Library">Httful HTTP Client Library</a>.

#getting started

$conn = new DMAIConnection("[USERNAME]", "[PASSWORD]");

or to use BETA Environment:

$conn = new DMAIConnection("[USERNAME]", "[PASSWORD]", false, true);
