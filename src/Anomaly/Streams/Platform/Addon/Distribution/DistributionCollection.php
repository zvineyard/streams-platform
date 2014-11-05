<?php namespace Anomaly\Streams\Platform\Addon\Distribution;

use Anomaly\Streams\Platform\Addon\AddonCollection;

/**
 * Class DistributionCollection
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Platform\Addon\Distribution
 */
class DistributionCollection extends AddonCollection
{

    /**
     * Return the active distribution.
     *
     * @return null
     */
    public function active()
    {
        foreach ($this->items as $item) {

            if ($item->getSlug() == config('streams.distribution')) {

                return $item;
            }
        }

        return null;
    }
}
 