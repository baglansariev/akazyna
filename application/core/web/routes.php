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
        'conditions' => [
            'controller' => 'conditions',
            'action' => 'index',
        ],
        'faq(/page/[0-9]+)?' => [
            'controller' => 'faq',
            'action' => 'index',
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