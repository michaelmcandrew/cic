// $Id: README.txt,v 1.2 2010/05/04 18:07:30 jvandervort Exp $

-------------- OVERVIEW -------------------------------------------
The Javascript Timer module provides a timer api that can hook html elements to
javascript widget objects. This is useful if you want a moving timer/clock or a
widget that updates every second. It comes with widgets for a countdown timer, a
countup timer, and a clock.


-------------- INSTALLING -----------------------------------------
Simply by activating the module and a widget.
There are no module dependencies.
There are no table components.


-------------- GENERAL USAGE -----------------------------------------
You can either build-up your own nested <span tags within
a full html (or filtered with <spans allowed) input format, or
use php directly.  There are now theme functions to help with
the php formatted strings.  NOTE the date format is ISO8601.

Timer Widget using the php input filter:
<?php
print theme('countdowntimer', 'jst_timer', array(
 'datetime' => '2012-05-02T08:11:00-08:00'
));
?>

Timer widget using html span tags:
<span class="jst_timer">
 <span style="display:none" class="datetime">2012-05-02T08:11:00-08:00</span>
</span>

Clock Widget using the php input filter:
<?php
print theme('jstimer', 'jst_clock', array(
 'clock_type' => 2,
 'size' => 200
));
?>

Clock widget using html span tags:
<span class="jst_clock">
 <span style="display:none" class="clock_type">2</span>
 <span style="display:none" class="size">200</span>
</span>




-------------- Timer widget OUTPUT FORMAT ---------------------------------------
The display of the actual timer is configurable in the Site configuration
admin menu: countdowntimer.

IMPORTANT: If you have a format_num and a format_txt in a timer, the format_txt
value will trump the format_num value.

Currently supported replacement values are:
%day%   - Day number of target date (0-31)
%month% - Month number of target date (1-12)
%year%  - Year number of target date (4 digit number)
%dow%   - Day-Of-Week (Mon-Sun)
%moy%   - Month-Of-Year (Jan-Dec)

%years% - Years from set date(integer number)
%ydays% - (Days - Years) from set date(integer number)

%days%  - Total Days from set date (integer number)

%hours% - (Hours - Days) from set date (integer number, zero padded)
%mins%  - (Minutes - Hours) from set date (intger number, zero padded)
%secs%  - (Seconds - Minutes) from set date (integer number, zero padded)

%hours_nopad% - (Hours - Days) from set date (integer number, no padding)
%mins_nopad%  - (Minutes - Hours) from set date (intger number, no padding)
%secs_nopad%  - (Seconds - Minutes) from set date (integer number, no padding)



-------------- CAVEATS ---------------------------------------------
If a daylight saving time shift should occur in either the client's tz or
the target's tz between the current date/time and your target datetime,
you could be off by one hour until you pass the point of conversion.
