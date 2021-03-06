<?php

namespace Kendo\UI;

class GridGroupable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Sets the messages displayed during grouping.
    * @param \Kendo\UI\GridGroupableMessages|array $value
    * @return \Kendo\UI\GridGroupable
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

//<< Properties
}

?>
