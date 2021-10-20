<?php

use Pessek\PessekCalendar\Bootstrap;

return [
        'plugin' => [
                'version' => '4.0',
		'name' => 'Pessek Calendar',
        ],
	'bootstrap' => \Pessek\PessekCalendar\Bootstrap::class,
	'settings' => [
		'who_can_create' => 'allmembers',
	],
	'entities' => [
		[
			'type' => 'object',
			'subtype' => 'pessekcalendar',
			'class' => PessekCalendar::class,
			'searchable' => false,
		],
	],
	'actions' => [
		'pessek_calendar/add' => [],
		'pessek_calendar/delete' => [],
		'pessek_calendar/update' => [],
		'pessek_calendar/updateOnEventDrop' => [],
		'pessek_calendar/updateOnEventResize' => [],
		'pessek_calendar/loadevents' => [],
		'pessek_calendar/fullcalendarEventsLoad' => [],
	],
	'routes' => [
		'collection:object:pessekcalendar:owner' => [
			'path' => '/pessek_calendar/owner/{username}',
			'resource' => 'pessek_calendar/owner',
		],
		'view:object:pessekcalendar' => [
			'path' => '/pessek_calendar/view/{guid}/{title?}',
			'resource' => 'pessek_calendar/view',
		],
		'collection:object:add:to:calendar' => [
			'path' => '/pessek_calendar/add_to_calendar/{guid}',
			'resource' => 'pessek_calendar/add_to_calendar',
		],
	],
	'views' => [
		'default' => [
			'evocalendarjs/' => __DIR__ . '/vendors/evo-calendar/js/',
			'evocalendarcss/' => __DIR__ . '/vendors/evo-calendar/css/',
			'fullcalendar/' => __DIR__ . '/vendors/fullcalendar/lib/',
			'popper/' => __DIR__ . '/vendors/popper/dist/',
			'tooltip/' => __DIR__ . '/vendors/tooltip/dist/',
			'rrule/' => __DIR__ . '/vendors/rrule/dist/es5/',
			'fullcalendarrrule/' => __DIR__ . '/vendors/fullcalendar-rrule/package/',
			'luxon/' => __DIR__ . '/vendors/luxon/',
		],
	],
];
