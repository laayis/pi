<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt BSD 3-Clause License
 */

namespace Pi\Filter;

use Zend\Filter\AbstractFilter;

/**
 * Head title text filtering
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class HeadTitle extends AbstractFilter
{
    /**
     * Filter for head title text
     *
     * @param string $value
     *
     * @return string
     */
    public function filter($value)
    {
        // Strip HTML tags
        $value =trim(strip_tags($value));
        // Remove duplicated spaces
        $value = preg_replace('/[\s]+/', ' ', $value);

        return $value;
    }
}
