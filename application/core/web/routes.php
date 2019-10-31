<?php
	return [
		'(ru)?(kz)?' => [
            'controller' => 'home',
            'action' => 'index',
        ],
        'sendmail' => [
            'controller' => 'mail',
            'action' => 'sendMail',
        ],
        'about(/ru)?(/kz)?' => [
            'controller' => 'about',
            'action' => 'index',
        ],
        'conditions(/ru)?(/kz)?' => [
            'controller' => 'conditions',
            'action' => 'index',
        ],
        'faq(/page/[0-9]+)?(/ru)?(/kz)?' => [
            'controller' => 'faq',
            'action' => 'index',
        ],
        'news(/page/[0-9]+)?(/ru)?(/kz)?' => [
            'controller' => 'news',
            'action' => 'index',
        ],
        'news/show/[0-9]+(/ru)?(/kz)?' => [
            'controller' => 'news',
            'action' => 'article',
        ],
        'contacts(/ru)?(/kz)?' => [
            'controller' => 'contacts',
            'action' => 'index',
        ],
        'login' => [
            'controller' => 'account',
            'action' => 'login',
        ],
        'register' => [
            'controller' => 'account',
            'action' => 'register',
        ],
        'account' => [
            'controller' => 'account',
            'action' => 'account',
        ],
        'account/payers' => [
            'controller' => 'account',
            'action' => 'account',
        ],
        'account/documents' => [
            'controller' => 'documents',
            'action' => 'getDocumentList',
        ],
        'account/documents/[0-9]+' => [
            'controller' => 'documents',
            'action' => 'getDocument',
        ],
        'logout' => [
            'controller' => 'account',
            'action' => 'logout',
        ],
	];