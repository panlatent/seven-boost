<?php
/**
 * Boost - A PHP data structures and algorithms enhancement library
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/boost
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\Boost;

interface Storable extends ReadOnlyStorable
{
    public function destroy($name);
    public function set($name, $value);
    public function clear();
}