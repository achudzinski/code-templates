<?php
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use App\Module\Validation\AbstractValidator;

class ${NAME}Validator extends AbstractValidator
{
    const XXX = 'XXX';

    protected function getValidators(): array
    {
        return [
            'xxx',
        ];
    }

    protected function isSupported(\$object): bool
    {
        return \$object instanceof ${NAME};
    }

    protected function xxx(${NAME} \$rq)
    {
    }
}

