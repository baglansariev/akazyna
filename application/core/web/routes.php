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
	];