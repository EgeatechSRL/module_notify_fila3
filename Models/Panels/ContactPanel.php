<?php

namespace Modules\Notify\Models\Panels;

use Illuminate\Http\Request;
use Modules\Xot\Contracts\RowsContract;
use Illuminate\Contracts\Support\Renderable;


use Modules\Cms\Models\Panels\XotBasePanel;

class ContactPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Notify\Models\Contact';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = array (
);

    /**
     * The relationships that should be eager loaded on index queries.
     *
     */
    public function with():array {
        return [];
    }

    public function search() :array {

        return [];
    }

    /**
     * on select the option id
     *
     * quando aggiungi un campo select, è il numero della chiave
     * che viene messo come valore su value="id"
     *
     * @param Modules\Notify\Models\Contact $row
     *
     * @return int|string|null
     */
    public function optionId($row) {
        $key = $row->getKey();
        if(null===$key||(!is_string($key)&&!is_int($key))){
            throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
        }
        return $key;
    }

    /**
     * on select the option label.
     *
     * @param Modules\Notify\Models\Contact $row
     */
    public function optionLabel($row):string {
        return 'To Set';
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?Renderable {
        return null;
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */
    public static function indexQuery(array $data, $query)
    {
        //return $query->where('user_id', $request->user()->id);
        return $query;
    }



    /**
     * Get the fields displayed by the resource.
     *
     * @return array
        'col_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
        'value'=>'..',
     */
    public function fields(): array {
        return array (
  0 => 
  (object) array(
     'type' => 'Bigint',
     'name' => 'model_id',
     'rules' => 'required',
     'comment' => NULL,
  ),
  1 => 
  (object) array(
     'type' => 'String',
     'name' => 'model_type',
     'rules' => 'required',
     'comment' => NULL,
  ),
  2 => 
  (object) array(
     'type' => 'String',
     'name' => 'contact_type',
     'comment' => NULL,
  ),
  3 => 
  (object) array(
     'type' => 'String',
     'name' => 'value',
     'comment' => NULL,
  ),
  4 => 
  (object) array(
     'type' => 'Datetime',
     'name' => 'verified_at',
     'comment' => NULL,
  ),
  5 => 
  (object) array(
     'type' => 'Datetime',
     'name' => 'updated_at',
     'comment' => NULL,
  ),
  6 => 
  (object) array(
     'type' => 'Datetime',
     'name' => 'created_at',
     'comment' => NULL,
  ),
  7 => 
  (object) array(
     'type' => 'String',
     'name' => 'updated_by',
     'comment' => NULL,
  ),
  8 => 
  (object) array(
     'type' => 'String',
     'name' => 'created_by',
     'comment' => NULL,
  ),
  9 => 
  (object) array(
     'type' => 'Integer',
     'name' => 'user_id',
     'comment' => NULL,
  ),
  10 => 
  (object) array(
     'type' => 'String',
     'name' => 'token',
     'comment' => NULL,
  ),
);
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs():array {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request):array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request = null):array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request):array {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions():array {
        return [];
    }
}