<?php
/**
 * Update From Grid a Dash
 *
 * @package productmenu
 * @subpackage processors
 */
require_once (dirname(__FILE__).'/update.class.php');

class ProductMenuUpdateFromGridProcessor extends ProductMenuUpdateProcessor {
    public function initialize() {
        $data = $this->getProperty('data');
        if (empty($data)) return $this->modx->lexicon('invalid_data');
        $data = $this->modx->fromJSON($data);
        if (empty($data)) return $this->modx->lexicon('invalid_data');
        $this->setProperties($data);
        $this->unsetProperty('data');

        return parent::initialize();
    }

}
return 'ProductMenuUpdateFromGridProcessor';