<?php namespace Anomaly\ExampleReportExtension;

use Anomaly\DashboardModule\Dashboard\Component\Report\ReportExtension;

/**
 * Class ExampleReportExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ExampleReportExtension
 */
class ExampleReportExtension extends ReportExtension
{

    /**
     * This extension provides a the example
     * report for the Anomaly/Dashboard module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.dashboard::report.example';

}
