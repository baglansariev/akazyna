<?php
	return [
		'' => [
            'controller' => 'home',
            'action' => 'index',
        ],
        'sendmail' => [
            'controller' => 'mail',
            'action' => 'sendMail',
        ],
        'about' => [
            'controller' => 'about',
            'action' => 'index',
        ],
        'products(/page/[0-9]+)?' => [
            'controller' => 'products',
            'action' => 'index',
        ],
        'products/flour/[0-9]+' => [
            'controller' => 'products',
            'action' => 'showOneProduct',
        ],
        'news(/page/[0-9]+)?' => [
            'controller' => 'news',
            'action' => 'index',
        ],
        'news/show/[0-9]+' => [
            'controller' => 'news',
            'action' => 'article',
        ],
        'contacts' => [
            'controller' => 'contacts',
            'action' => 'index',
        ],
	];