<?php

/* ------------------------------------------------------------
 | Helpers
 * ------------------------------------------------------------ */

require_once __DIR__ . '/helpers/helpers.php';

/* ------------------------------------------------------------
 | Source list
 * ------------------------------------------------------------ */
return [

    // -------------------------------------------------------------------------------------
    // A
    // -------------------------------------------------------------------------------------

    stringComponent(
        'action',
        'A process or fact of doing something',
        'action'
    ),
    stringComponent(
        'address',
        'Address to someone or something',
        'address'
    ),
    integerComponent(
        'age',
        'Age of someone or something',
        'age'
    ),
    stringComponent(
        'agent',
        'Someone or something that acts on behalf of someone else or something else',
        'agent'
    ),
    stringComponent(
        'alias',
        'An alternate name of an item or component',
        'name'
    ),
    integerComponent(
        'amount',
        'The quantity of something',
        'amount'
    ),
    floatComponent(
        'amount',
        'The quantity of something',
        'amount'
    ),
    stringComponent(
        'anniversary',
        'Date of anniversary',
        'anniversary'
    ),
    integerComponent(
        'anniversary',
        'Date of anniversary',
        'anniversary'
    ),
    stringComponent(
        'area',
        'Name of area, e.g. in a building, in a city, outside the city, ...etc',
        'name'
    ),
    // TODO: Boolean Ask
    stringComponent(
        'author',
        'Name of author',
        'name'
    ),

    // -------------------------------------------------------------------------------------
    // B
    // -------------------------------------------------------------------------------------

    stringComponent(
        'basePath',
        'The path to the root directory of some kind of a resource, e.g. your application, files, pictures,...etc',
        'path'
    ),
    stringComponent(
        'begin',
        'Location, index or some other identifier of where something begins',
        'location'
    ),
    stringComponent(
        'birthdate',
        'Date of birth',
        'date'
    ),
    integerComponent(
        'birthdate',
        'Date of birth',
        'date'
    ),
    stringComponent(
        'brand',
        'Name or identifier of a brand that is associated with a product or service',
        'identifier'
    ),
    integerComponent(
        'brand',
        'Name or identifier of a brand that is associated with a product or service',
        'identifier'
    ),
    stringComponent(
        'buildingNumber',
        'The house number assigned to a building or apartment in a street or area, e.g. 12a',
        'number'
    ),

    // -------------------------------------------------------------------------------------
    // C
    // -------------------------------------------------------------------------------------

    stringComponent(
        'calendar',
        'Location to calendar, e.g. URI, name, ID or other identifier',
        'location'
    ),
    stringComponent(
        'cardNumber',
        'Numeric or Alphanumeric card number, e.g. for credit cards or other types of cards',
        'number'
    ),
    stringComponent(
        'cardOwner',
        'Name of the card owner (cardholder)',
        'name'
    ),
    stringComponent(
        'cardType',
        'The type of card, e.g. VISA, MasterCard, Playing Card, Magic Card... etc',
        'type'
    ),
    stringComponent(
        'category',
        'Name of category',
        'name'
    ),
    arrayComponent(
        'categories',
        'List of category names',
        'list'
    ),
    arrayComponent(
        'choices',
        'Various choices that can be made',
        'list'
    ),
    stringComponent(
        'city',
        'Name of city, town or village',
        'name'
    ),
    stringComponent(
        'class',
        'The class of something or perhaps a class path',
        'class'
    ),
    stringComponent(
        'code',
        'The code for something, e.g. language code, classification code, or perhaps an artifacts identifier',
        'code'
    ),
    stringComponent(
        'colour',
        'Name of colour or colour value, e.g. RGB, CMYK, HSL or other format',
        'colour'
    ),
    stringComponent(
        'column',
        'Name of column',
        'name'
    ),
    stringComponent(
        'company',
        'Name of company',
        'name'
    ),
    stringComponent(
        'content',
        'Content',
        'content'
    ),
    stringComponent(
        'country',
        'Name of country, e.g. Denmark, United Kingdom, Australia...etc',
        'name'
    ),
    stringComponent(
        'createdAt',
        'Date of when this component, entity or resource was created',
        'date'
    ),
    integerComponent(
        'createdAt',
        'Date of when this component, entity or resource was created',
        'date'
    ),
    stringComponent(
        'currency',
        'Name, code or other identifier of currency',
        'identifier'
    ),

    // -------------------------------------------------------------------------------------
    // D
    // -------------------------------------------------------------------------------------

    arrayComponent(
        'data',
        'A list (array) containing a set of values',
        'values'
    ),
    stringComponent(
        'database',
        'Name of database',
        'name'
    ),
    stringComponent(
        'date',
        'Date of event',
        'date'
    ),
    integerComponent(
        'date',
        'Date of event',
        'date'
    ),
    stringComponent(
        'deceasedAt',
        'Date of when person, animal of something has died',
        'date'
    ),
    integerComponent(
        'deceasedAt',
        'Date of when person, animal of something has died',
        'date'
    ),
    stringComponent(
        'deletedAt',
        'Date of when this component, entity or resource was deleted',
        'date'
    ),
    integerComponent(
        'deletedAt',
        'Date of when this component, entity or resource was deleted',
        'date'
    ),
    stringComponent(
        'deliveredAt',
        'Date of delivery',
        'date'
    ),
    integerComponent(
        'deliveredAt',
        'Date of delivery',
        'date'
    ),
    stringComponent(
        'deliveryAddress',
        'Delivery address',
        'address'
    ),
    stringComponent(
        'deliveryDate',
        'Date of planned delivery',
        'date'
    ),
    integerComponent(
        'deliveryDate',
        'Date of planned delivery',
        'date'
    ),
    integerComponent(
        'depth',
        'Depth of something',
        'amount'
    ),
    floatComponent(
        'depth',
        'Depth of something',
        'amount'
    ),
    stringComponent(
        'description',
        'Description',
        'description'
    ),
    stringComponent(
        'directory',
        'Path to a given directory, relative or absolute, existing or none-existing',
        'path'
    ),
    stringComponent(
        'discount',
        'Discount amount',
        'amount'
    ),
    integerComponent(
        'discount',
        'Discount amount',
        'amount'
    ),
    floatComponent(
        'discount',
        'Discount amount',
        'amount'
    ),
    stringComponent(
        'domain',
        'Name, URL, territory or term that describes a given domain... etc',
        'domain'
    ),

    // -------------------------------------------------------------------------------------
    // E
    // -------------------------------------------------------------------------------------

    stringComponent(
        'ean',
        'International Article Number (EAN)',
        'ean'
    ),
    stringComponent(
        'ean8',
        'International Article Number (EAN), 8-digit',
        'ean8'
    ),
    stringComponent(
        'ean13',
        'International Article Number (EAN), 13-digit',
        'ean13'
    ),
    stringComponent(
        'edition',
        'The version of a published text, e.g. book, article, newspaper, report... etc',
        'edition'
    ),
    integerComponent(
        'edition',
        'The version of a published text, e.g. book, article, newspaper, report... etc',
        'edition'
    ),
    stringComponent(
        'email',
        'Email',
        'email'
    ),
    stringComponent(
        'end',
        'Location, index or other identifier of when something ends',
        'location'
    ),
    stringComponent(
        'end',
        'Location, index or other identifier of when something ends',
        'location'
    ),
    stringComponent(
        'endDate',
        'Date for when some kind of event ends',
        'date'
    ),
    integerComponent(
        'endDate',
        'Date for when some kind of event ends',
        'date'
    ),
    stringComponent(
        'expiresAt',
        'Date of when this component, entity or resource is going to expire',
        'date'
    ),
    integerComponent(
        'expiresAt',
        'Date of when this component, entity or resource is going to expire',
        'date'
    ),

    // -------------------------------------------------------------------------------------
    // F
    // -------------------------------------------------------------------------------------

    stringComponent(
        'fileExtension',
        'File extension, e.g. php, avi, json, txt...etc',
        'extension'
    ),
    stringComponent(
        'filename',
        'Name of given file, with or without path, e.g. myText.txt, /usr/docs/README.md',
        'name'
    ),
    stringComponent(
        'filePath',
        'Path to a file',
        'path'
    ),
    stringComponent(
        'firstName',
        'First name (given name) or forename of a person',
        'name'
    ),
    stringComponent(
        'format',
        'The shape, size and presentation or medium of an item or component',
        'format'
    ),
    stringComponent(
        'formattedName',
        'Formatted name of someone or something',
        'name'
    ),

    // -------------------------------------------------------------------------------------
    // G
    // -------------------------------------------------------------------------------------

    stringComponent(
        'gender',
        'Gender (sex) identity of a person, animal or something',
        'identity'
    ),
    stringComponent(
        'group',
        'Group identifier',
        'identity'
    ),
    integerComponent(
        'group',
        'Group identifier',
        'identity'
    ),

    // -------------------------------------------------------------------------------------
    // H
    // -------------------------------------------------------------------------------------

    integerComponent(
        'height',
        'Height of something',
        'amount'
    ),
    floatComponent(
        'height',
        'Height of something',
        'amount'
    ),
    stringComponent(
        'host',
        'Identifier of a host',
        'identifier'
    ),
    stringComponent(
        'html',
        'HyperText Markup Language (HTML)',
        'html'
    ),

    // -------------------------------------------------------------------------------------
    // I
    // -------------------------------------------------------------------------------------

    stringComponent(
        'iata',
        'International Air Transport Association code',
        'code'
    ),
    stringComponent(
        'iban',
        'International Bank Account Number (IBAN)',
        'number'
    ),
    stringComponent(
        'icao',
        'International Civil Aviation Organization code',
        'code'
    ),
    stringComponent(
        'id',
        'Unique identifier',
        'identifier'
    ),
    integerComponent(
        'id',
        'Unique identifier',
        'identifier'
    ),
    stringComponent(
        'identifier',
        'Name or code that identifies a unique object, resource, class, component or thing',
        'identifier'
    ),
    integerComponent(
        'identifier',
        'Name or code that identifies a unique object, resource, class, component or thing',
        'identifier'
    ),
    stringComponent(
        'image',
        'Path, Uri or other type of location to an image',
        'location'
    ),
    stringComponent(
        'index',
        'Index',
        'index'
    ),
    integerComponent(
        'index',
        'Index',
        'index'
    ),
    stringComponent(
        'invoiceAddress',
        'Invoice Address. Can be formatted.',
        'address'
    ),
    stringComponent(
        'ip',
        'IP address',
        'address'
    ),
    stringComponent(
        'ipV4',
        'IPv4 address',
        'address'
    ),
    stringComponent(
        'ipV6',
        'IPv6 address',
        'address'
    ),
    stringComponent(
        'isicV4',
        'International Standard of Industrial Classification of All Economic Activities (ISIC), revision 4 code',
        'code'
    ),
    stringComponent(
        'isbn',
        'International Standard Book Number (ISBN)',
        'isbn'
    ),
    stringComponent(
        'isbn10',
        'International Standard Book Number (ISBN), 10-digits',
        'isbn10'
    ),
    stringComponent(
        'isbn13',
        'International Standard Book Number (ISBN), 13-digits',
        'ibn13'
    ),

    // -------------------------------------------------------------------------------------
    // J
    // -------------------------------------------------------------------------------------

    stringComponent(
        'json',
        'JavaScript Object Notation (JSON)',
        'json'
    ),

    // -------------------------------------------------------------------------------------
    // K
    // -------------------------------------------------------------------------------------

    stringComponent(
        'key',
        'key, e.g. indexing key, encryption key or other type of key',
        'key'
    ),
    stringComponent(
        'kind',
        'The kind of object this represents, e.g. human, organisation, group, individual...etc',
        'kind'
    ),

    // -------------------------------------------------------------------------------------
    // L
    // -------------------------------------------------------------------------------------

    stringComponent(
        'label',
        'Label name',
        'name'
    ),
    stringComponent(
        'language',
        'Name or identifier of a language',
        'identifier'
    ),
    stringComponent(
        'lastName',
        'Last Name (surname) or family name of a person',
        'name'
    ),
    stringComponent(
        'latitude',
        'North-South position on Earth\'s surface',
        'value'
    ),
    floatComponent(
        'latitude',
        'North-South position on Earth\'s surface',
        'value'
    ),
    integerComponent(
        'length',
        'Length of something',
        'amount'
    ),
    floatComponent(
        'length',
        'Length of something',
        'amount'
    ),
    stringComponent(
        'locale',
        'Locale language code, e.g. en_us or other format',
        'code'
    ),
    arrayComponent(
        'Locations',
        'List of locations',
        'list'
    ),
    stringComponent(
        'logo',
        'Path, Uri or other type of location to a logo',
        'location'
    ),
    stringComponent(
        'Longitude',
        'East-West position on Earth\'s surface',
        'value'
    ),
    floatComponent(
        'Longitude',
        'East-West position on Earth\'s surface',
        'value'
    ),

    // -------------------------------------------------------------------------------------
    // M
    // -------------------------------------------------------------------------------------

    stringComponent(
        'macAddress',
        'Media Access Control Address (MAC Address)',
        'address'
    ),
    stringComponent(
        'manufacturer',
        'Name or identifier of a manufacturer',
        'identifier'
    ),
    stringComponent(
        'material',
        'Name or identifier of a material, e.g. leather, wool, cotton, paper.',
        'identifier'
    ),
    stringComponent(
        'mediaType',
        'Media Type (also known as MIME Type), acc. to IANA standard, or perhaps a type name',
        'type'
    ),
    stringComponent(
        'method',
        'Name of method or other identifier',
        'identifier'
    ),
    integerComponent(
        'method',
        'Name of method or other identifier',
        'identifier'
    ),
    stringComponent(
        'middleName',
        'Middle Name or names of a person',
        'name'
    ),

    // -------------------------------------------------------------------------------------
    // N
    // -------------------------------------------------------------------------------------

    stringComponent(
        'name',
        'Name',
        'name'
    ),
    stringComponent(
        'nickName',
        'Nickname of someone or something',
        'name'
    ),

    // -------------------------------------------------------------------------------------
    // O
    // -------------------------------------------------------------------------------------

    stringComponent(
        'orderNumber',
        'Number that represents a purchase or order placed by a customer',
        'number'
    ),
    integerComponent(
        'orderNumber',
        'Number that represents a purchase or order placed by a customer',
        'number'
    ),
    stringComponent(
        'organisation',
        'Name of organisation',
        'name'
    ),
    stringComponent(
        'outputPath',
        'Location of where some kind of output must be placed or written to',
        'path'
    ),

    // -------------------------------------------------------------------------------------
    // P
    // -------------------------------------------------------------------------------------

    stringComponent(
        'package',
        'Name of package. Can evt. contain path to package as well',
        'name'
    ),
    stringComponent(
        'password',
        'Password',
        'password'
    ),
    stringComponent(
        'path',
        'Location of some kind of a resources, e.g. a file, an Url, an index',
        'location'
    ),
    stringComponent(
        'pattern',
        'Some kind of a pattern, e.g. search or regex',
        'pattern'
    ),
    stringComponent(
        'phone',
        'Phone number',
        'number'
    ),
    stringComponent(
        'photo',
        'Path, Uri or other type of location to a photo',
        'location'
    ),
    stringComponent(
        'postalCode',
        'Numeric or Alphanumeric postal code (zip code)',
        'code'
    ),
    stringComponent(
        'prefix',
        'Prefix',
        'prefix'
    ),
    stringComponent(
        'price',
        'Numeric price',
        'amount'
    ),
    integerComponent(
        'price',
        'Numeric price',
        'amount'
    ),
    floatComponent(
        'price',
        'Numeric price',
        'amount'
    ),
    stringComponent(
        'profile',
        'The profile or someone or something',
        'profile'
    ),
    stringComponent(
        'productionDate',
        'Date of planned production',
        'date'
    ),
    integerComponent(
        'productionDate',
        'Date of planned production',
        'date'
    ),
    stringComponent(
        'purchaseDate',
        'Date of planned purchase',
        'date'
    ),
    integerComponent(
        'purchaseDate',
        'Date of planned purchase',
        'date'
    ),
    stringComponent(
        'purchasedAt',
        'Date of when this component, entity or resource was purchased',
        'date'
    ),
    integerComponent(
        'purchasedAt',
        'Date of when this component, entity or resource was purchased',
        'date'
    ),

    // -------------------------------------------------------------------------------------
    // Q
    // -------------------------------------------------------------------------------------

    integerComponent(
        'quantity',
        'The quantity of something',
        'quantity'
    ),
    floatComponent(
        'quantity',
        'The quantity of something',
        'quantity'
    ),
    stringComponent(
        'query',
        'Query',
        'query'
    ),
    stringComponent(
        'question',
        'A question that can be asked',
        'question'
    ),

    // -------------------------------------------------------------------------------------
    // R
    // -------------------------------------------------------------------------------------

    stringComponent(
        'rank',
        'The position in a hierarchy',
        'position'
    ),
    integerComponent(
        'rank',
        'The position in a hierarchy',
        'position'
    ),
    floatComponent(
        'rank',
        'The position in a hierarchy',
        'position'
    ),
    stringComponent(
        'rate',
        'The rate of something, e.g. growth rate, tax rate',
        'rate'
    ),
    integerComponent(
        'rate',
        'The rate of something, e.g. growth rate, tax rate',
        'rate'
    ),
    floatComponent(
        'rate',
        'The rate of something, e.g. growth rate, tax rate',
        'rate'
    ),
    integerComponent(
        'row',
        'A row identifier',
        'identifier'
    ),
    stringComponent(
        'region',
        'Name of a region, state or province',
        'name'
    ),
    stringComponent(
        'revision',
        'A revision, batch number or other identifier',
        'revision'
    ),
    stringComponent(
        'role',
        'Name or identifier of role',
        'identifier'
    ),

    // -------------------------------------------------------------------------------------
    // S
    // -------------------------------------------------------------------------------------

    stringComponent(
        'script',
        'Script of some kind or path to some script',
        'script'
    ),
    stringComponent(
        'slug',
        'Human readable keyword(s) that can be part or a Url',
        'slug'
    ),
    stringComponent(
        'source',
        'The source of something. E.g. location, reference, index key, or other identifier that can be used to determine the source',
        'source'
    ),
    stringComponent(
        'sql',
        'A Structured Query Language (SQL) query',
        'query'
    ),
    stringComponent(
        'startDate',
        'Start date of event',
        'date'
    ),
    integerComponent(
        'startDate',
        'Start date of event',
        'date'
    ),
    stringComponent(
        'state',
        'State of this component or what it represents. Alternative, state address',
        'state'
    ),
    integerComponent(
        'state',
        'State of this component or what it represents',
        'state'
    ),
    stringComponent(
        'status',
        'Situation of progress, classification, or civil status',
        'status'
    ),
    integerComponent(
        'status',
        'Situation of progress, classification, or civil status',
        'status'
    ),
    stringComponent(
        'street',
        'Full street address, which might include building or apartment number(s)',
        'address'
    ),
    stringComponent(
        'suffix',
        'Suffix',
        'suffix'
    ),
    stringComponent(
        'swift',
        'ISO-9362 Swift Code',
        'code'
    ),

    // -------------------------------------------------------------------------------------
    // T
    // -------------------------------------------------------------------------------------

    stringComponent(
        'table',
        'Name of table',
        'name'
    ),
    stringComponent(
        'tag',
        'Name of tag',
        'name'
    ),
    arrayComponent(
        'tags',
        'List of tags',
        'tags'
    ),
    stringComponent(
        'template',
        'Template or location of a template file',
        'template'
    ),
    integerComponent(
        'timeout',
        'Timeout amount',
        'amount'
    ),
    integerComponent(
        'timestamp',
        'Unix timestamp',
        'timestamp'
    ),
    stringComponent(
        'timezone',
        'Name of timezone',
        'name'
    ),
    stringComponent(
        'title',
        'Title',
        'title'
    ),
    stringComponent(
        'tld',
        'Top Level Domain (TLD)',
        'tld'
    ),
    stringComponent(
        'topic',
        'name of topic',
        'name'
    ),
    stringComponent(
        'type',
        'Type identifier',
        'identifier'
    ),
    integerComponent(
        'type',
        'Type identifier',
        'identifier'
    ),

    // -------------------------------------------------------------------------------------
    // U
    // -------------------------------------------------------------------------------------

    stringComponent(
        'updatedAt',
        'Date of when this component, entity or resource was updated',
        'date'
    ),
    integerComponent(
        'updatedAt',
        'Date of when this component, entity or resource was updated',
        'date'
    ),
    stringComponent(
        'url',
        'Uniform Resource Locator (Url), commonly known as a web address',
        'webAddress'
    ),
    stringComponent(
        'username',
        'Identifier to be used as username',
        'identifier'
    ),
    stringComponent(
        'uuid',
        'Universally Unique Identifier (UUID)',
        'identifier'
    ),

    // -------------------------------------------------------------------------------------
    // V
    // -------------------------------------------------------------------------------------

    stringComponent(
        'value',
        'Value',
        'value'
    ),
    // TODO: Mixed Value!?!
    stringComponent(
        'vat',
        'Value Added Tac (VAT), formatted amount or rate',
        'amount'
    ),
    integerComponent(
        'vat',
        'Value Added Tac (VAT), formatted amount or rate',
        'amount'
    ),
    floatComponent(
        'vat',
        'Value Added Tac (VAT), formatted amount or rate',
        'amount'
    ),
    stringComponent(
        'vendor',
        'Name or path of a vendor',
        'vendor'
    ),
    stringComponent(
        'version',
        'Version',
        'version'
    ),

    // -------------------------------------------------------------------------------------
    // W
    // -------------------------------------------------------------------------------------

    integerComponent(
        'width',
        'Width of something',
        'amount'
    ),
    floatComponent(
        'width',
        'Width of something',
        'amount'
    ),
    stringComponent(
        'wildcard',
        'Wildcard identifier',
        'identifier'
    ),

    // -------------------------------------------------------------------------------------
    // X
    // -------------------------------------------------------------------------------------

    integerComponent(
        'x',
        'Co-ordinate or value',
        'value'
    ),
    floatComponent(
        'x',
        'Co-ordinate or value',
        'value'
    ),
    // TODO: Mixed X?!?!
    stringComponent(
        'xml',
        'Extensible Markup Language (XML)',
        'xml'
    ),

    // -------------------------------------------------------------------------------------
    // Y
    // -------------------------------------------------------------------------------------

    integerComponent(
        'y',
        'Co-ordinate or value',
        'value'
    ),
    floatComponent(
        'y',
        'Co-ordinate or value',
        'value'
    ),
    // TODO: Mixed Y?!?!

    // -------------------------------------------------------------------------------------
    // Z
    // -------------------------------------------------------------------------------------

    integerComponent(
        'z',
        'Co-ordinate or value',
        'value'
    ),
    floatComponent(
        'z',
        'Co-ordinate or value',
        'value'
    ),
    // TODO: Mixed Z?!?!
    stringComponent(
        'zone',
        'Name or identifier of area, district or division',
        'identifier'
    ),
    integerComponent(
        'zone',
        'Name or identifier of area, district or division',
        'identifier'
    ),
];