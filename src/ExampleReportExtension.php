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
     * Extension identification.
     *
     * @var string
     */
    protected $identifier = 'anomaly.module.dashboard::report.example';

}
