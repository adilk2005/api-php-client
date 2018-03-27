# 
The Onfido API is used to submit check requests.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- Package version: 1.1.1
- Build date: 2018-03-27T17:10:13.885Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/onfido/api-php-client.git"
    }
  ],
  "require": {
    "onfido/api-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();

// setting applicant details
$applicant = new Onfido\Models\Applicant();
$applicant->setFirstName('John');
$applicant->setLastName('Smith');
$applicant->setDob(new DateTime('1980-01-22'));
$applicant->setCountry('GBR');

$address = new Onfido\Models\Address();
$address->setBuildingNumber('100');
$address->setStreet('Main Street');
$address->setTown('London');
$address->setPostcode('SW4 6EH');
$address->setCountry('GBR');

$applicant->setAddresses(array($address));

// setting check request details
$check = new Onfido\Models\CheckCreationRequest();
$check->setType('express');

$report = new Onfido\Models\Report();
$report->setName('identity');

$check->setReports(array($report));

try {
    $result = $api_instance->createApplicant($applicant);
    $applicant_id = $result->getId();
    $result = $api_instance->createCheck($applicant_id, $check);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.onfido.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**cancelReport**](docs/Api/DefaultApi.md#cancelreport) | **POST** /checks/{check_id}/reports/{report_id}/cancel | This endpoint is for cancelling individual paused reports.
*DefaultApi* | [**createApplicant**](docs/Api/DefaultApi.md#createapplicant) | **POST** /applicants | Create Applicant
*DefaultApi* | [**createCheck**](docs/Api/DefaultApi.md#createcheck) | **POST** /applicants/{applicant_id}/checks | Create a check
*DefaultApi* | [**createWebhook**](docs/Api/DefaultApi.md#createwebhook) | **POST** /webhooks | Create a webhook
*DefaultApi* | [**destroyApplicant**](docs/Api/DefaultApi.md#destroyapplicant) | **DELETE** /applicants/{applicant_id} | Delete Applicant
*DefaultApi* | [**downloadDocument**](docs/Api/DefaultApi.md#downloaddocument) | **GET** /applicants/{applicant_id}/documents/{document_id}/download | Download a documents raw data
*DefaultApi* | [**downloadLivePhoto**](docs/Api/DefaultApi.md#downloadlivephoto) | **GET** /live_photos/{live_photo_id}/download | Download live photo
*DefaultApi* | [**findAddresses**](docs/Api/DefaultApi.md#findaddresses) | **GET** /addresses/pick | Search for addresses by postcode
*DefaultApi* | [**findApplicant**](docs/Api/DefaultApi.md#findapplicant) | **GET** /applicants/{applicant_id} | Retrieve Applicant
*DefaultApi* | [**findCheck**](docs/Api/DefaultApi.md#findcheck) | **GET** /applicants/{applicant_id}/checks/{check_id} | Retrieve a Check
*DefaultApi* | [**findDocument**](docs/Api/DefaultApi.md#finddocument) | **GET** /applicants/{applicant_id}/documents/{document_id} | A single document can be retrieved by calling this endpoint with the document’s unique identifier.
*DefaultApi* | [**findLivePhoto**](docs/Api/DefaultApi.md#findlivephoto) | **GET** /live_photos/{live_photo_id} | Retrieve live photo
*DefaultApi* | [**findReport**](docs/Api/DefaultApi.md#findreport) | **GET** /checks/{check_id}/reports/{report_id} | A single report can be retrieved using this endpoint with the corresponding unique identifier.
*DefaultApi* | [**findReportTypeGroup**](docs/Api/DefaultApi.md#findreporttypegroup) | **GET** /report_type_groups/{report_type_group_id} | Retrieve single report type group object
*DefaultApi* | [**findWebhook**](docs/Api/DefaultApi.md#findwebhook) | **GET** /webhooks/{webhook_id} | Retrieve a Webhook
*DefaultApi* | [**listApplicants**](docs/Api/DefaultApi.md#listapplicants) | **GET** /applicants | List Applicants
*DefaultApi* | [**listChecks**](docs/Api/DefaultApi.md#listchecks) | **GET** /applicants/{applicant_id}/checks | Retrieve Checks
*DefaultApi* | [**listDocuments**](docs/Api/DefaultApi.md#listdocuments) | **GET** /applicants/{applicant_id}/documents | List documents
*DefaultApi* | [**listLivePhotos**](docs/Api/DefaultApi.md#listlivephotos) | **GET** /live_photos | List live photos
*DefaultApi* | [**listReportTypeGroups**](docs/Api/DefaultApi.md#listreporttypegroups) | **GET** /report_type_groups | Retrieve all report type groups
*DefaultApi* | [**listReports**](docs/Api/DefaultApi.md#listreports) | **GET** /checks/{check_id}/reports | All the reports belonging to a particular check can be listed from this endpoint.
*DefaultApi* | [**listWebhooks**](docs/Api/DefaultApi.md#listwebhooks) | **GET** /webhooks | List webhooks
*DefaultApi* | [**resumeCheck**](docs/Api/DefaultApi.md#resumecheck) | **POST** /checks/{check_id}/resume | Resume a Check
*DefaultApi* | [**resumeReport**](docs/Api/DefaultApi.md#resumereport) | **POST** /checks/{check_id}/reports/{report_id}/resume | This endpoint is for resuming individual paused reports.
*DefaultApi* | [**updateApplicant**](docs/Api/DefaultApi.md#updateapplicant) | **PUT** /applicants/{applicant_id} | Update Applicant
*DefaultApi* | [**uploadDocument**](docs/Api/DefaultApi.md#uploaddocument) | **POST** /applicants/{applicant_id}/documents | Upload a document
*DefaultApi* | [**uploadLivePhoto**](docs/Api/DefaultApi.md#uploadlivephoto) | **POST** /live_photos | Upload live photo


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Applicant](docs/Model/Applicant.md)
 - [ApplicantsList](docs/Model/ApplicantsList.md)
 - [Check](docs/Model/Check.md)
 - [CheckCreationRequest](docs/Model/CheckCreationRequest.md)
 - [ChecksList](docs/Model/ChecksList.md)
 - [Document](docs/Model/Document.md)
 - [DocumentsList](docs/Model/DocumentsList.md)
 - [Error](docs/Model/Error.md)
 - [GenericAddress](docs/Model/GenericAddress.md)
 - [GenericAddressesList](docs/Model/GenericAddressesList.md)
 - [IdNumber](docs/Model/IdNumber.md)
 - [LivePhoto](docs/Model/LivePhoto.md)
 - [LivePhotosList](docs/Model/LivePhotosList.md)
 - [Report](docs/Model/Report.md)
 - [ReportType](docs/Model/ReportType.md)
 - [ReportTypeGroup](docs/Model/ReportTypeGroup.md)
 - [ReportTypeGroupsList](docs/Model/ReportTypeGroupsList.md)
 - [ReportTypeOption](docs/Model/ReportTypeOption.md)
 - [ReportsList](docs/Model/ReportsList.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhooksList](docs/Model/WebhooksList.md)
