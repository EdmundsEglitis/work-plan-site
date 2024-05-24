<link rel="stylesheet" href="../Public/CSS/calendar.css">
<?php
$year = date('Y');
$month = date('m');

// Get the first day of the current month
$firstDayOfMonth = date('N', strtotime("$year-$month-01"));

// Get the number of days in the current month
$daysInMonth = date('t', strtotime("$year-$month-01"));

// Calculate the number of days from the previous month
$daysFromPrevMonth = $firstDayOfMonth - 1;

// Calculate the total number of cells in the calendar grid
$totalCells = $daysInMonth + $daysFromPrevMonth;

// Calculate the number of days from the next month to fill the grid
$daysFromNextMonth = 7 - ($totalCells % 7);

// Initialize the current day of the month
$currentDayOfMonth = 1;

// Initialize the day count
$dayCount = 1;

// Start the calendar grid
?>
<div class="calendar-container">
    <div class="calendar-grid">
        <!-- Month Header -->
        <div class="calendar-header">
            <h1 class="calendar-title"><?= date('F Y') ?></h1>
        </div>

        <!-- Weekday Labels -->
        <?php 
        $weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        foreach ($weekdays as $day) : ?>
            <div class="calendar-weekday"><?= $day ?></div>
        <?php endforeach; ?>    

        <!-- Days from Previous Month -->
        <?php 
        for ($i = $daysFromPrevMonth; $i > 0; $i--) : ?>
            <div class="calendar-day previous-month">
                <span class="previous-month-day"><?= date('j', strtotime("-$i days", strtotime("$year-$month-01"))) ?></span>
            </div>
        <?php endfor; ?>

        <!-- Calendar Days -->
        <?php 
        while ($dayCount <= $daysInMonth) : ?>
            <?php 
            $currentDate = date('Y-m-d', strtotime("$year-$month-$currentDayOfMonth"));
            $tasksForDay = $calendar[$currentDate] ?? []; 
            ?>
            <div class="calendar-day">
                <span><?= $currentDayOfMonth ?></span>
                <?php foreach ($tasksForDay as $task) : ?>
                    <div class="task">
                        <p><?= $task['Title'] . ' - Status:' . $task['Status'] ?></p>
                        <p>Lidz: <?= $task['Deadline'] ?></p>
                        <button class="task-button" action="../task/edit">View</button>
                        <button class="task-button" action="../task/edit">Done</button>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php $currentDayOfMonth++; $dayCount++; ?>
        <?php endwhile; ?>

        <!-- Days from Next Month -->
        <?php 
        for ($i = 1; $i <= $daysFromNextMonth; $i++) : ?>
            <div class="calendar-day next-month">
                <span class="next-month-day"><?= $i ?></span>
            </div>
        <?php endfor; ?>
    </div>
</div>