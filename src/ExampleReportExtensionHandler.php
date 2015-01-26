<?php namespace Anomaly\ExampleReportExtension;

/**
 * Class ExampleReportExtensionData
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ExampleReportExtension
 */
class ExampleReportExtensionHandler
{

    /**
     * Return the report data.
     *
     * @return string
     */
    public function handle()
    {
        return 'Foo';
    }
}
