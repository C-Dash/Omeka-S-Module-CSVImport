<?php
namespace CSVImport\Mapping;

use Zend\View\Renderer\PhpRenderer;

class UserMapping extends AbstractMapping
{
    protected $label = 'User info'; // @translate
    protected $name = 'user-data';

    public function getSidebar(PhpRenderer $view)
    {
        return $view->partial('common/user-sidebar');
    }

    /**
     * Process a row from the CSV file.
     *
     * @param array $row
     * @return array Added data.
     */
    public function processRow(array $row)
    {
        // Reset the data and the map between rows.
        $this->setHasErr(false);
        $data = [];

        $emailIndex = array_keys($this->args['column-user_email'])[0];
        $nameIndex = array_keys($this->args['column-user_name'])[0];
        $roleIndex = array_keys($this->args['column-user_role'])[0];

        foreach ($row as $index => $value) {
            switch ($index) {
                case $emailIndex:
                    $data['o:email'] = $value;
                break;

                case $nameIndex:
                    $data['o:name'] = $value;
                break;

                case $roleIndex:
                    $data['o:role'] = $value;
                break;
            }
        }

        if (empty($data['o:name'])) {
            $data['o:name'] = $data['o:email'];
        }
        return $data;
    }
}
