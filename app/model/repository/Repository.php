<?php

namespace Model\Repository;

use Nette\Utils\Strings;

abstract class Repository extends \Nette\Object {

    /** @var \Nette\Database\Context */
    protected $db;
    protected $company_data;
    protected $datumStart;
    protected $datumKoniec;
    protected $dniDlhe;
    protected $dniKratke;
    private $wunderground = false;

    public function __construct(\Nette\Database\Context $connection, \Nette\DI\Container $context = NULL) {
        $this->db = $connection;
        $this->company_data = array(
            'firma_nazov' => $context->parameters['companyData']['firma_nazov'],
            'firma_adresa' => $context->parameters['companyData']['firma_adresa'],
            'firma_psc' => $context->parameters['companyData']['firma_psc'],
            'firma_mesto' => $context->parameters['companyData']['firma_mesto'],
            'firma_www' => $context->parameters['companyData']['firma_www']
        );

        $this->datumStart = mktime('00', '00', '01', '01', '01', '1970');
        $this->datumKoniec = mktime('23', '59', '59', '31', '12', '2030');
        $this->dniDlhe = array('Pondelok', 'Utorok', 'Streda', 'Štvrtok', 'Piatok', 'Sobota', 'Nedeľa');
        $this->dniKratke = array('Po', 'Ut', 'St', 'Št', 'Pia', 'So', 'Ne');

        if ($context->parameters['wunderground']['enable'] == true) {
            $this->wunderground = array(
                'apikey' => $context->parameters['wunderground']['apikey'],
                'state' => $context->parameters['wunderground']['state'],
                'location' => $context->parameters['wunderground']['location'],
                'refresh' => $context->parameters['wunderground']['refresh'],
                'basePath' => $context->parameters['wunderground']['basePath'],
                'baseUri' => $context->parameters['wunderground']['baseUri'],
                'language' => $context->parameters['wunderground']['language'],
            );
        }
    }

    
    public function issetUser($user){
        $row = $this->db->table('users')->where('login', $user)->fetch();        
        return $row;
    }

    public function getIdUser($user){
        $row = $this->db->table('users')->where('login', $user)->fetch();        
        return $row['id'];
    }

    public function inTransaction() {
        return $this->db->getConnection();
    }

    public function selectAllFrom($table) {
        return $this->db->select('*')->from($table);
    }

    /**
     * Select all from table where (whole condition) Fetch as object(default) or array(false).
     * @table string
     * @cond array
     * @fetch boolean
     * @return dibi row | array
     */
    public function selectAllFromWhere($table, $cond, $fetch = true) {
        return $this->db->select('*')->from($table)->where($cond)->fetch($fetch);
    }

    /**
     * Update table set $set where.
     * @table string
     * @val array
     * @cond array
     * @return int
     */
    public function updateTableSetCondWhere($table, $val, $cond) {
        return $this->db->update($table, $val)->where($cond)->execute();
    }

    /**
     * Update table set $set where.
     * @table string
     * @set array
     * @cond array
     * @return int
     */
    public function insertInto($table, $val) {
        return $this->db->insert($table, $val)->execute();
    }

    public function getValuesForFilter($table, $column) {
        $data = $this->db->select($column)->from($table)->fetchAll();
        $return = array('' => '');
        foreach ($data as $col) {
            $return[$col[$column]] = $col[$column];
        }
        return $return;
    }

    public function getPairs($table) {
        return $this->db->select('*')->from($table)->fetchPairs();
    }

    public function getPairsJoin($table, $table2, $on, $select) {
        return $this->db->select($select)->from($table)
                        ->join($table2)->on($on)->fetchPairs();
    }

    public function getDisplayConfigurationSettings() {
        $d = $this->db->select('displej_nastavenie')->from('displej_typ')->where('id_displej_typ=2')->fetch();
        return unserialize($d['displej_nastavenie']);
    }

    /**
     * Weather underground api processing
     * @param type $lang
     * @return array / FALSE
     */
    public function getWeather($lang = 'EN') {
        try {
            if ($this->wunderground == FALSE) {
                throw new \Exception();
            }
            $value = $this->cache->load('weathersk');

            if ($value === NULL) {
                $urlFormat = 'http://api.wunderground.com/api/%s/conditions/lang:%s/q/%s/%s.json';
                $url = sprintf($urlFormat, $this->wunderground['apikey'], $lang, $this->wunderground['state'], $this->wunderground['location']);
                $json_string = file_get_contents($url);
                $parsed_json = json_decode($json_string);
                $this->cache->save('weather' . $lang, array('data' => $parsed_json, 'timestamp' => new Nette\DateTime), array(
                    Nette\Caching\Cache::EXPIRE => $this->wunderground['refresh'], // akceptuje i sekundy nebo timestamp
                ));
                $value = $this->cache->load('weather' . $lang);
                $data = $value['data'];
                $i = Nette\Image::fromString(file_get_contents((string) $data->{'current_observation'}->{'icon_url'}));
                $i->save($this->wunderground['basePath'] . '/actual_weather' . $lang . '.png', 100, Nette\Image::PNG);
            } else {
                $value = $this->cache->load('weather' . $lang);
                $data = $value['data'];
            }
            return array(
                'location' => (string) $data->{'current_observation'}->{'display_location'}->{'city'},
                'temp_c' => (string) $data->{'current_observation'}->{'temp_c'},
                'temp_f' => (string) $data->{'current_observation'}->{'temp_f'},
                'humidity' => filter_var((string) $data->{'current_observation'}->{'relative_humidity'}, FILTER_SANITIZE_NUMBER_INT),
                'weather' => Nette\Utils\Strings::lower((string) $data->{'current_observation'}->{'weather'}),
                'icon' => $this->baseUri . $this->wunderground['baseUri'] . '/actual_weather' . $lang . '.png?' . $value['timestamp']->format('U')
            );
        } catch (\Exception $ex) {
            return FALSE;
        }
    }

}
