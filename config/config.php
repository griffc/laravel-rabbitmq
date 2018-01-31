<?php

/**
 * Package configuration
 */
return [
	//  queue identifier to listen on
	'default' => [
		'host' => '',
		'port' => 5672,
		'user' => 'guest',
		'password' => 'guest',
		/**
		 * Queue name in rabbitmq
		 * Leaving this empty will create an anonymous queue.
		 * Generally it is only necessary to set this if durable is set to true
		 */
		'name' => '',
		/**
		 *
		 */
		'durable' => false,
		'exchange' => [
			'exchange' => '',
			'type' => '',
			'passive' => false,
			'durable' => false,
			'auto_delete' => false,
			'internal' => false,
			'nowait' => false,
			'arguments' => null,
			'ticket' => null,
		],
		'bindings' => [
			//  key => event name
		],
	],
	'logging' => [
		'enable' => false,
		'queue-identifier' => 'default',
		'extra-context' => [],
	],
];