<?php
/**
 * This file is part of RedisClient.
 * git: https://github.com/cheprasov/php-redis-client
 *
 * (C) Alexander Cheprasov <cheprasov.84@ya.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RedisClient\Command\Traits\Version_2_8;

use RedisClient\Command\Traits\AbstractCommandsTrait;
use RedisClient\Command\Traits\Version_2_6\ConnectionCommandsTrait;
use RedisClient\Command\Traits\Version_2_6\ListsCommandsTrait;
use RedisClient\Command\Traits\Version_2_6\ScriptingCommandsTrait;
use RedisClient\Command\Traits\Version_2_6\TransactionsCommandsTrait;

trait CommandsTrait {

    use AbstractCommandsTrait;

    use ConnectionCommandsTrait;
    use HashesCommandsTrait;
    use HyperLogLogCommandsTrait;
    use KeysCommandsTrait;
    use ListsCommandsTrait;
    use ScriptingCommandsTrait;
    use ServerCommandsTrait;
    use SetsCommandsTrait;
    use SortedSetsCommandsTrait;
    use StringsCommandsTrait;
    use TransactionsCommandsTrait;

    /**
     * @return string
     */
    public function getVersion() {
        return '2.8';
    }

}
