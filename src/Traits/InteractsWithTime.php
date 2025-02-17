<?php

declare(strict_types=1);

namespace LaravelHyperf\Support\Traits;

use Carbon\CarbonInterval;
use DateInterval;
use DateTimeInterface;
use LaravelHyperf\Support\Carbon;

trait InteractsWithTime
{
    /**
     * Get the number of seconds until the given DateTime.
     */
    protected function secondsUntil(DateInterval|DateTimeInterface|int $delay): int
    {
        $delay = $this->parseDateInterval($delay);

        return $delay instanceof DateTimeInterface
            ? max(0, $delay->getTimestamp() - $this->currentTime())
            : (int) $delay;
    }

    /**
     * Get the "available at" UNIX timestamp.
     */
    protected function availableAt(DateInterval|DateTimeInterface|int $delay = 0): int
    {
        $delay = $this->parseDateInterval($delay);

        return $delay instanceof DateTimeInterface
            ? $delay->getTimestamp()
            : Carbon::now()->addRealSeconds($delay)->getTimestamp();
    }

    /**
     * If the given value is an interval, convert it to a DateTime instance.
     */
    protected function parseDateInterval(DateInterval|DateTimeInterface|int $delay): DateTimeInterface|int
    {
        if ($delay instanceof DateInterval) {
            $delay = Carbon::now()->add($delay);
        }

        return $delay;
    }

    /**
     * Get the current system time as a UNIX timestamp.
     */
    protected function currentTime(): int
    {
        return Carbon::now()->getTimestamp();
    }

    /**
     * Given a start time, format the total run time for human readability.
     */
    protected function runTimeForHumans(float $startTime, ?float $endTime = null): string
    {
        $endTime ??= microtime(true);

        $runTime = ($endTime - $startTime) * 1000;

        return $runTime > 1000
            ? CarbonInterval::milliseconds($runTime)->cascade()->forHumans(short: true)
            : number_format($runTime, 2) . 'ms';
    }
}
