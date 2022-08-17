<?php

use function PHPSTORM_META\map;

$user_id = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : 0;
$user_al = isset($_SESSION["accesslevel"]) ? $_SESSION["accesslevel"] : 1;
$actLog = $user_al >= 2 ? "" : ", user_id=$user_id";
$t=time();
// see($_SESSIO
$param = [
	"admin_signin" => [ //Signin Parameters
		"table" 			=> "users",
		"primary_key"	=> "id",
		"username_col" => "username",
		"password_col" => "password",
		"name_col"  	=> "first_name",
		"email_col" 	=> "email",
		"image_col"		=> "picture_ref",
		"interface"		=> "signin1",
		"status_col"	=> "status",
		"status_val"	=> 1,
		"callback" 		=> "signin_log",
	],

	"organization" 	=> [ //The current organization using the code
		"table"				=> "company_info",
		"primary_key"	=> "id",
		"key"	=> 1,
		"page_title"	=> "Settings",
		"form" => [
			"sections" => [
				[
					"position" => "left",
					"section_title" => "Basic Company Info",
					"section_elements" => [
						[
							"column" => "name",
							"description" => "Business Name",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m12"
						], [
							"column" => "email",
							"description" => "Email Address",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m12"
						], [
							"column" => "website",
							"description" => "Website",
							"required" => false,
							"type" => "text",
							"class" => "col s12 m12"
						], [
							"column" => "address",
							"description" => "Address",
							"required" => false,
							"type" => "text",
							"class" => "col s12 m12"
						],
						[
							"column" => "phone",
							"description" => "Phone",
							"type" => "text",
							"required" => true,
							"class" => "col s12 m12",
						],
						// [
						// 	"column"=>"other",
						// 	"description"=>"Exchange Discount",
						// 	"type"=>"number",
						// 	"required"=>true,
						// 	"class"=>"col s12 m12",
						// ]
					]
				],
				[
					"position" => "right",
					"section_title" => "Company Logo",
					"section_elements" => [
						[
							"column" => "logo_ref",
							"description" => "Logo",
							"required" => true,
							"type" => "items",
							"value" => 4,
							"class" => "col s12 m12"
						]
					]
				],
				[
					'position' => 'right',
					'section_title' => 'Crypto Wallets',
					'section_elements' => [
						[
							'column' => 'branches',
							'description' => '',
							'type' => 'description',
							'class' => 'col s12 m12 hidename'
						]
					]
				]
			]
		]
	],

	"role" => [
		"table" => "roles",
		"primary_key" => "roleid",
		"page_title" => "Roles",
		"display_fields" => [
			[
				"column" => "rolename",
				"description" => "Role Name",
				"component" => "span",
			]
		],
		"form" => [
			"sections" => [
				[
					"position" => "center",
					"section_title" => "Role Info",
					"section_elements" => [
						[
							"column" => "rolename",
							"description" => "Role Name",
							"type" => "text",
							"required" => true,
							"class" => "col s12 m12"
						], [
							"column" => "roledesc",
							"description" => "Role Name",
							"required" => true,
							"type" => "roles",
							"class" => "col s12 m12"
						]
					]
				]
			]
		]
	],

	"log" => [
		"table" => "activitylog",
		"primary_key" => "id",
		"page_title" => "log",
		"listFAB" => false,
		"retrieve_filter" => "type='admin' $actLog",
		"sort_col" => "id DESC",
		"display_fields" => [
			[
				"column" => "action",
				"description" => "Action",
				"component" => "span"
			], [
				"column" => "description",
				"description" => "Description",
				"component" => "span"
			], [
				"column" => "date",
				"description" => "Time",
				"component" => "span",
				"action" => "datetime"
			]
		],
		"form" => [
			"form_view" => "modal",
			"sections" => [
				[
					"position" => "center",
					"section_title" => "Log Details",
					"section_elements" => [
						[
							"column" => "description",
							"description" => "Description",
							"type" => "textarea",
							"readonly" => true,
							"class" => "col s12"
						]
					]
				]
			]
		]
	],

	"users" => [
		"table" => "users",
		"primary_key" => "id",
		"page_title" => "Users",
		"fixed_values" => "status=1",
		"retrieve_filter" => "status=1, type<3",
		"display_fields" => [
			[
				"column" => "first_name",
				"description" => "First Name",
				"component" => "span"
			], [
				"column" => "last_name",
				"description" => "Last Name",
				"component" => "span"
			], [
				"column" => "gender",
				"source" => "gender",
				"action" => "select",
				"description" => "Gender",
				"component" => "span"
			]
		],
		"form" => [
			"sections" => [
				[
					"position" => "left",
					"section_title" => "User Info",
					"section_elements" => [
						[
							"column" => "first_name",
							"description" => "First Name",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						], [
							"column" => "last_name",
							"description" => "Last Name",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						], [
							"column" => "gender",
							"description" => "Gender",
							"required" => true,
							"type" => "select",
							"source" => "gender",
							"class" => "col s12 m6"
						], [
							"column" => "date_of_birth",
							"description" => "Date of Birth",
							"required" => true,
							"type" => "date",
							"class" => "col s12 m6"
						], [
							"column" => "phone",
							"description" => "Phone Number",
							"class" => "col s12 m6",
							"type" => "text"
						], [
							"column" => "email",
							"description" => "Email",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						],
						[
							"column" => "country",
							"description" => "Country",
							"class" => "col s12 m6",
							"type" => "select",
							"required" => true,
							"source" => "countries"
						],
						[
							"column" => "city",
							"description" => "City",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						],
						[
							"column" => "zip_code",
							"description" => "Zip Code",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						],
						[
							"column" => "account_currency",
							"description" => "Account Currency",
							"class" => "col s12 m6",
							"type" => "select",
							"required" => true,
							"source" => "currency"
						],
						[
							"column" => "next_of_kin",
							"description" => "Next of Kin",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						],
						[
							"column" => "rltxhp_next_of_kin",
							"description" => "Relationship With Next of Kin",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						]
					]
				],
				[
					"position" => "left",
					"section_title" => "Account Info",
					"section_elements" => [
						[
							"column" => "account_type",
							"description" => "Account Type",
							"type" => "select",
							"class" => "col s12 m6",
							"required" => true,
							"empty" => false,
							"source" => "account_types"
						],
						[
							"column" => "account_number",
							"description" => "Account Number",
							"type" => "number",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "account_pin",
							"description" => "Account Pin",
							"type" => "password",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "iban_number",
							"description" => "IBAN Number",
							"type" => "text",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "swift_code",
							"description" => "Swift Code",
							"type" => "text",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "wallet",
							"description" => "Wallet Address",
							"type" => "text",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "lock_account",
							"description" => "Lock Account",
							"type" => "switch",
							"source" => "onoff",
							"class" => "col s12 m6",
						],
						
				         [
							"column" => "confirmed",
							"description" => "Confirm Account",
							"type" => "switch",
							"source" => "confirm",
							"class" => "col s12 m6",
						],
					]
				],
				[
					"position" => "right",
					"section_title" => "Admin Picture",
					"section_elements" => [
						[
							"column" => "picture_ref",
							"description" => "Logo",
							"type" => "picture",
							"class" => "col s12 m12"
						]
					]
				],
				[
					"position" => "right",
					"section_title" => "Security Settings",
					"section_elements" => [
						[
							"column" => "type",
							"description" => "Category",
							"class" => "col s12 m4",
							"type" => "select",
							"required" => true,
							"source" => "user-category",
							"value" => "****************",
						],
						[
							"column" => "roleid",
							"description" => "Role",
							"type" => "select",
							"required" => true,
							"class" => "col s12 m4",
							"source" => "role",
						],
						[
							"column" => "accesslevel",
							"description" => "Access Level",
							"type" => "select",
							"required" => true,
							"class" => "col s12 m4",
							"source" => "accessLevel",
						],
						[
							"column" => "username",
							"description" => "Username",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true
						], [
							"column" => "password",
							"description" => "Password",
							"type" => "password",
							"required" => true,
							"class" => "col s12 m6"
						],
					]
				],

			]
		]
	],
	
	
	"registered-clients" => [
		"table" => "users",
		"primary_key" => "id",
		"page_title" => "Users",
		"fixed_values" => "status=1",
		"retrieve_filter" => "status=1, type=3,",
		"display_fields" => [
			[
				"column" => "first_name",
				"description" => "First Name",
				"component" => "span"
			], [
				"column" => "last_name",
				"description" => "Last Name",
				"component" => "span"
			], [
				"column" => "country",				
				"description" => "Country",
				"component" => "span"
			], [
				"column" => "gender",				
				"description" => "Gender",
				"component" => "span"
			], [
				"column" => "account_type",				
				"description" => "Account Type",
				"component" => "span"
			]
		],
		"form" => [
			"sections" => [
				[
					"position" => "left",
					"section_title" => "User Info",
					"section_elements" => [
						[
							"column" => "first_name",
							"description" => "First Name",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						], [
							"column" => "last_name",
							"description" => "Last Name",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						], [
							"column" => "gender",
							"description" => "Gender",
							"required" => true,
							"type" => "select",
							"source" => "gender",
							"class" => "col s12 m6"
						], [
							"column" => "date_of_birth",
							"description" => "Date of Birth",
							"required" => true,
							"type" => "date",
							"class" => "col s12 m6"
						], [
							"column" => "phone",
							"description" => "Phone Number",
							"class" => "col s12 m6",
							"type" => "text"
						], [
							"column" => "email",
							"description" => "Email",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						],
						[
							"column" => "country",
							"description" => "Country",
							"class" => "col s12 m6",
							"type" => "select",
							"required" => true,
							"source" => "countries"
						],
						[
							"column" => "city",
							"description" => "City",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						],
						[
							"column" => "zip_code",
							"description" => "Zip Code",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						],
						[
							"column" => "account_currency",
							"description" => "Account Currency",
							"class" => "col s12 m6",
							"type" => "select",
							"required" => true,
							"source" => "currency"
						],
						[
							"column" => "next_of_kin",
							"description" => "Next of Kin",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						],
						[
							"column" => "rltxhp_next_of_kin",
							"description" => "Relationship With Next of Kin",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true,
						]
					]
				],
				[
					"position" => "left",
					"section_title" => "Account Info",
					"section_elements" => [
						[
							"column" => "account_type",
							"description" => "Account Type",
							"type" => "select",
							"class" => "col s12 m6",
							"required" => true,
							"empty" => false,
							"source" => "account_types"
						],
						[
							"column" => "account_number",
							"description" => "Account Number",
							"type" => "number",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "account_pin",
							"description" => "Account Pin",
							"type" => "password",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "iban_number",
							"description" => "IBAN Number",
							"type" => "text",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "swift_code",
							"description" => "Swift Code",
							"type" => "text",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "wallet",
							"description" => "Wallet Address",
							"type" => "text",
							"class" => "col s12 m6",
							"required" => true,
						],
						[
							"column" => "lock_account",
							"description" => "Lock Account",
							"type" => "switch",
							"source" => "onoff",
							"class" => "col s12 m6",
						],
				         [
							"column" => "confirmed",
							"description" => "Confirm Account",
							"type" => "switch",
							"source" => "confirm",
							"class" => "col s12 m6",
						],
					]
				],
				[
					"position" => "right",
					"section_title" => "Admin Picture",
					"section_elements" => [
						[
							"column" => "picture_ref",
							"description" => "Logo",
							"type" => "picture",
							"class" => "col s12 m12"
						]
					]
				],
				[
					"position" => "right",
					"section_title" => "Security Settings",
					"section_elements" => [
						[
							"column" => "type",
							"description" => "Category",
							"class" => "col s12 m4",
							"type" => "select",
							"required" => true,
							"source" => "user-category",
							"value" => "****************",
						],
						[
							"column" => "roleid",
							"description" => "Role",
							"type" => "select",
							"required" => true,
							"class" => "col s12 m4",
							"source" => "role",
						],
						[
							"column" => "accesslevel",
							"description" => "Access Level",
							"type" => "select",
							"required" => true,
							"class" => "col s12 m4",
							"source" => "accessLevel",
						],
						[
							"column" => "username",
							"description" => "Username",
							"class" => "col s12 m6",
							"type" => "text",
							"required" => true
						], [
							"column" => "password",
							"description" => "Password",
							"type" => "password",
							"required" => true,
							"class" => "col s12 m6"
						],
					]
				],

			]
		]
	],

	'debit' => [
		'table' => 'transaction',
		'primary_key' => 'id',
		'page_title' => 'debit',
		"pre_submit_function" => "verifyPin",
		"post_submit_function" => "lockAccount",
		'retrieve_filter' => "tx_type='debit'",
		'fixed_values' => "tx_type='debit'",
		'listFAB' => ["refresh"],
		'sort' => 'date DESC',
		'display_fields' => [
			[
				'column' => 'user_id',
				'description' => 'Member',
				'component' => 'span',
				'action' => 'select',
				'class' => 'col s12 m3',
				'source' => [
					"pageType" => "members",
					"column" => ["first_name", "last_name"]
				],
			], [
				'column' => 'amount',
				'description' => 'Amount',
				'component' => 'span',
				'class' => 'col s6 m2',
			], [
				'column' => 'account_id',
				'description' => 'Plan',
				'component' => 'span',
				'action' => 'select',
				'source' => 'accounts',
				'class' => 'col s6 m2',
			], [
				'column' => 'date',
				'description' => 'Date',
				'component' => 'span',
				'action' => 'datetime',
				'class' => 'col s6 m3',
			], [
				'column' => 'status',
				'description' => 'Status',
				'component' => 'span',
				'action' => 'select',
				'source' => 'confirm',
				'class' => 'col s6 m2',
			]
		],
		'form' => [
			"form_view" => "modal",
			"form_submit" => false,
		]
	],

	'loan' => [
		'table' => 'loan',
		'primary_key' => 'id',
		'page_title' => 'loan',
		// "pre_submit_function" => "verifyPin",
		'listFAB' => ["refresh"],
		'sort' => 'date DESC',
		'display_fields' => [
			[
				'column' => 'fullname',
				'description' => 'Fullname',
				'component' => 'span',
				'class' => 'col s12 m2',
			], [
				'column' => 'loan_type',
				'description' => 'Loan Type',
				'component' => 'span',
				'class' => 'col s6 m2',
			], [
				'column' => 'amount',
				'description' => 'Amount',
				'component' => 'span',
				'class' => 'col s6 m2',
			], [
				'column' => 'duration',
				'description' => 'Duration',
				'component' => 'span',
				'class' => 'col s6 m3',
			], [
				'column' => 'status',
				'description' => 'Status',
				'component' => 'span',
				'class' => 'col s6 m2',
			]
		],
		'form' => [
			"form_view" => "modal",
			"sections" => [
				[
					"position" => "center",
					"section_title" => "Approve Loan",
					"section_elements" => [
						[
							"column" => "fullname",
							"description" => "FullName",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "loan_type",
							"description" => "Loan Type",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "amount",
							"description" => "Amount",
							"required" => true,
							"type" => "number",
							"class" => "col s12 m6"
						],
						[
							"column" => "duration",
							"description" => "Duration",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "description",
							"description" => "Reason For Loan",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "status",
							"description" => "Loan Status",
							"type" => "switch",
							"source" => "approval",
							"class" => "col s12 m6",
						],
						[
							"column" => "swift_code_approval",
							"description" => "Unapproved Swift Code",
							"type" => "switch",
							"source" => "approval2",
							"class" => "col s12 m6",
						]
					]

				]
			],
		]
	],


	'bank-login-details' => [
		'table' => 'bank_details',
		'primary_key' => 'id',
		'page_title' => 'Bank Details',
		'display_fields' => [
			[
				'column' => 'account_number',
				'description' => 'Acount Number',
				'component' => 'span',
				'class' => 'col s6 m3',
			],
			[
				'column' => 'account_holder',
				'description' => 'Acount Holder',
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				'column' => 'iban_number',
				'description' => 'IBAN Number',
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				'column' => 'swift_code',
				'description' => 'Swift Code',
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				'column' => 'date',
				'description' => 'Date',
				'component' => 'span',
				'class' => 'col s6 m3',
				'action' => "datetime"
			],
		],
		'form' => [
			'form_view' => 'modal',
			"sections" => [
				[
					"position" => "center",
					"section_title" => "Bank Details",
					"section_elements" => [
						[
							"column" => "account_number",
							"description" => "Account Number",
							"required" => true,
							"type" => "number",
							"class" => "col s12 m12"
						],
						[
							"column" => "account_holder",
							"description" => "Account Holder",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "iban_number",
							"description" => "IBAN Number",
							"required" => true,
							"type" => "number",
							"class" => "col s12 m6"
						],
						[
							"column" => "swift_code",
							"description" => "Swift Code",
							"required" => true,
							"type" => "number",
							"class" => "col s12 m12"
						]
					]
				],
			]
		]
	],

	'deposit_funds' => [
		'table' => 'transaction',
		'primary_key' => 'id',
		'page_title' => 'Deposit Funds',
		"retrieve_filter" => "tx_type=credit",
		"sort"=>"id DESC",
		'display_fields' => [
			[
				'column' => 'fullname',
				'description' => 'Acct Holder',
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				'column' => 'account_number',
				'description' => 'Acct No',
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				"column" => "tx_type",
				"description" => "Tx Type",
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				'column' => 'amount',
				'description' => 'Amount',
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				'column' => 'date',
				'description' => 'Date',
				'component' => 'span',
				'class' => 'col s6 m2',
				'action' => "datetime"
			],
			[
				'column' => 'user_id',
				'description' => 'User Id',
				'component' => 'span',
				'class' => 'col s6 m2',
				"source" => "users",
				'action' => "select"
				 
			]
		],
		'form' => [
			'form_view' => 'modal',
			"sections" => [
				[
					"position" => "center",
					"section_title" => "Deposit Funds",
					"section_elements" => [
						[
							"column" => "user_id",
							"description" => "User Id",
							"required" => true,
							"type" => "select",
							"source" => "users",
							"class" => "col s12 m6"
						],
						[
							"column" => "account_number",
							"description" => "Account Number",
							"required" => true,
							"type" => "number",
							"class" => "col s12 m6"
						],
						[
							"column" => "fullname",
							"description" => "Account Holder",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							'column' => 'amount',
							'description' => 'Amount',
							"required" => true,
							"type" => "number",
							"class" => "col s12 m6"
						],
						[
							"column" => "iban_code",
							"description" => "IBAN Number",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "swift_code",
							"description" => "Swift Code",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "tx_no",
							"description" => "Transaction Number",
							"required" => true,
							"value" => uniqid(),
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "tx_type",
							"description" => "Transaction Type",
							"required" => true,
							"type" => "select",
							"source" => "transaction_type",
							"class" => "col s12 m6"
						],
						[
							"column" => "date",
							"description" => "Date",
							"required" => false,
							"type" => "text",
							"value" => date("Y-m-d H:i:s"),
							"class" => "col s12 m6"
						],
						[
							"column" => "account_type",
							"description" => "Account Type",
							"required" => true,
							"type" => "select",
							"source" => "account_type",
							"class" => "col s12 m6"
						],
						[
							"column" => "description",
							"description" => "Specify Transaction",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m12"
						],
						[
							"column" => "bank_address",
							"description" => "Bank Address",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m12"
						],
						[
							"column" => "select_bank",
							"description" => "Bank Name",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m12"
						],
					]
				],
			]
		]
	],

	'withdraw_funds' => [	
		'table' => 'transaction',
		'primary_key' => 'id',
		'page_title' => 'Withdraw Funds',
		"retrieve_filter" => "tx_type=debit",
		'display_fields' => [
			[
				'column' => 'fullname',
				'description' => 'Acct Holder',
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				'column' => 'account_number',
				'description' => 'Acct No',
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				"column" => "tx_type",
				"description" => "Tx Type",
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				'column' => 'amount',
				'description' => 'Amount',
				'component' => 'span',
				'class' => 'col s6 m2',
			],
			[
				'column' => 'date',
				'description' => 'Date',
				'component' => 'span',
				'class' => 'col s6 m2',
				'action' => "datetime"
			]
		],
		'form' => [
			'form_view' => 'modal',
			"sections" => [
				[
					"position" => "center",
					"section_title" => "Withdraw Funds",
					"section_elements" => [
					    [
							"column" => "user_id",
							"description" => "User Id",
							"required" => true,
							"type" => "select",
							"source" => "users",
							"class" => "col s12 m6"
						],
						[
							"column" => "account_number",
							"description" => "Account Number",
							"required" => true,
							"type" => "number",
							"class" => "col s12 m6"
						],
						[
							"column" => "fullname",
							"description" => "Account Holder",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							'column' => 'amount',
							'description' => 'Amount',
							"required" => true,
							"type" => "number",
							"class" => "col s12 m6"
						],
						[
							"column" => "iban_code",
							"description" => "IBAN Number",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "swift_code",
							"description" => "Swift Code",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m6"
						],
						[
							"column" => "tx_no",
							"description" => "Transaction Number",
							"required" => true,
							"type" => "text",
							"value" => uniqid(),
							"class" => "col s12 m6"
						],
						[
							"column" => "date",
							"description" => "Date",
							"required" => false,
							"type" => "text",
							"value" => date("Y-m-d H:i:s"),
							"class" => "col s12 m6"
						],
						[
							"column" => "tx_type",
							"description" => "Transaction Type",
							"required" => true,
							"type" => "select",
							"source" => "transaction_type",
							"class" => "col s12 m6"
						],
						[
							"column" => "account_type",
							"description" => "Account Type",
							"required" => true,
							"type" => "select",
							"source" => "account_type",
							"class" => "col s12 m6"
						],
						[
							"column" => "description",
							"description" => "Specify Transaction",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m12"
						],
						[
							"column" => "bank_address",
							"description" => "Bank Address",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m12"
						],
						[
							"column" => "select_bank",
							"description" => "Bank Name",
							"required" => true,
							"type" => "text",
							"class" => "col s12 m12"
						],
					]
				],
			]
		]
	]


];
