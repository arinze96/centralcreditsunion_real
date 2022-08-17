<?php
$thisyear = date("Y");
$roles = [
  "Organization Setup" => [
    "icon"  => "settings",
    "links" => [
      [
        "title" => "Dashboard",
        "url"   => "custom-view/dashboard-mini"
      ],
      [
        "title" => "Settings",
        "url"   => "form-view/organization"
      ],
      [
        "title" => "Role",
        "url"   => "content-view/role"
      ],
      [
        "title" => "Bank Details",
        "url" => "content-view/bank-login-details" 
      ]
    ]
  ],
  "Users" => [
    "icon"  => "person",
    "links" => [
      [
        "title" => "Members",
        "url"   => "content-view/users"
      ],
      [
        "title" => "registered-clients",
        "url"   => "content-view/registered-clients"
      ]
    ]
  ],

  "Transactions" => [
    "icon"  => "payment",
    "links" => [
      [
        "title" => "Credit Transactions",
        "url"  => "content-view/deposit_funds",
      ],
      [
        "title" => "Debit Transactions",
        "url"  => "content-view/withdraw_funds"
      ],
      [
        "title" => "Loans",
        "url" => "content-view/loan" 
      ]
    ],
  ],
];
?>
