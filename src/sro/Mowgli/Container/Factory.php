<?php

namespace sro\Mowgli\Container;

use Mowgli\Container\Factory as BaseFactory;

class Factory extends BaseFactory
{
    /**
     * @param array $options
     *
     * @return Container
     */
    public function build(array $options = array())
    {
        return new Container($options);
    }

}
