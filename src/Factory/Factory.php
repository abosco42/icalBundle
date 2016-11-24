<?php

namespace Welp\IcalBundle\Factory;

use Welp\IcalBundle\Component\Calendar;

use Jsvrcek\ICS\Model\CalendarEvent;
use Jsvrcek\ICS\Model\CalendarAlarm;
use Jsvrcek\ICS\Model\CalendarFreeBusy;
use Jsvrcek\ICS\Model\CalendarTodo;

use Jsvrcek\ICS\Model\Relationship\Attendee;
use Jsvrcek\ICS\Model\Relationship\Organizer;

use Jsvrcek\ICS\Model\Description\Geo;
use Jsvrcek\ICS\Model\Description\Location;

use Jsvrcek\ICS\Model\Recurrence\RecurrenceRule;

use Jsvrcek\ICS\Utility\Formatter;
use Jsvrcek\ICS\CalendarStream;
use Jsvrcek\ICS\CalendarExport;
/**
 * Calendar Factory
 *
 * @package Welp\IcalBundle\Factory
 * @author  Titouan BENOIT <titouan@welp.today>
 */
class Factory
{
    /**
     * @var string
     */
    protected $timezone;

    /**
     * @var string
     */
    protected $prodid;

    /**
     * Create new calendar
     *
     * @return Calendar
     */
    public function createCalendar()
    {
        $calendar = new Calendar();

        if (!is_null($this->timezone)) {
            $calendar->setTimezone($this->timezone);
        }

        if (!is_null($this->prodid)) {
            $calendar->setProdId($this->prodid);
        }

        return $calendar;
    }

    /**
     * Create new CalendarEvent
     *
     * @return CalendarEvent
     */
    public function createCalendarEvent()
    {
        $calendarEvent = new CalendarEvent();

        return $calendarEvent;
    }

    /**
     * Create new CalendarAlarm
     *
     * @return CalendarAlarm
     */
    public function createCalendarAlarm()
    {
        $calendarAlarm = new CalendarAlarm();

        return $calendarAlarm;
    }

    /**
     * Create new CalendarFreeBusy
     *
     * @return CalendarFreeBusy
     */
    public function createCalendarFreeBusy()
    {
        $calendarFreeBusy = new CalendarFreeBusy();

        return $calendarFreeBusy;
    }

    /**
     * Create new CalendarTodo
     *
     * @return CalendarTodo
     */
    public function createCalendarTodo()
    {
        $calendarTodo = new CalendarTodo();

        return $calendarTodo;
    }

    /**
     * Set default timezone for calendars
     *
     * @param string $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = \DateTimeZone($timezone);
    }

    /**
     * Set default prodid for calendars
     *
     * @param string $prodid
     */
    public function setProdid($prodid)
    {
        $this->prodid = $prodid;
    }
}
