<?php
App::uses('AppModel', 'Model');
/**
 * Member Model
 *
 */
class Member extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $findMethods = array('available' =>  true);

    protected function _findAvailable($state, $query, $results = array()) {
        if ($state === 'before') {
            $query['conditions']['Member.status'] = '1';
            return $query;
        }
        return $results;
    }

}
