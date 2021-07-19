<?php
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Symfony\Component\HttpFoundation\Request;

class ${NAME}Factory
{
    public function fromRawRequest(Request \$rawRequest): ${NAME}
    {
        return new ${NAME}();
    }
}

