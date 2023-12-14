<?php
include 'Event.php';
include 'EventsApp.php';
include 'CustomException.php';

$eventsApp1 = new EventsApp();
$eventsApp2 = new EventsApp();

$event1 = new Event('PHP OOP live session', '2023-12-10', 'Online');
$event2 = new Event('Python side event', '2023-12-12', 'In-person');

$event3 = new Event('Workshop on Java', '2023-12-15', 'Online');
$event4 = new Event('HTML5 quiz', '2023-12-18', 'In-person');

$eventsApp1->addEvent($event1);
$eventsApp1->addEvent($event2);

$eventsApp2->addEvent($event3);
$eventsApp2->addEvent($event4);

try {
    throw new CustomException('An error occurred', 'ERR-001');
    throw new CustomException('Another error occurred', 'ERR-002');
} catch (CustomException $e) {
    echo 'Caught an instance of CustomException: ' . $e->getMessage() . ' with code ' . $e->getCode() . '<br>';
} catch (Exception $e) {
    echo 'Caught an instance of Exception: ' . $e->getMessage() . '<br>';
} finally {
    echo 'In the finally block<br>';
}
?>