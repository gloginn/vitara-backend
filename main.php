<?php

const AMBUE_PRODUCTION  = false; 
const AMBUE_LANGUAGE    = 'pt-br';
const AMBUE_TMEZONE     = 'America/Sao_Paulo';
const AMBUE_DEFAULT_APP = 'default';

//
//
//

const AMBUE_DIR                = __DIR__;
const AMBUE_DIR_LOGS           = AMBUE_DIR . DIRECTORY_SEPARATOR . 'logs';
const AMBUE_DIR_LANGUAGES      = AMBUE_DIR . DIRECTORY_SEPARATOR . 'languages';
const AMBUE_DIR_APPLICATIONS   = AMBUE_DIR . DIRECTORY_SEPARATOR . 'applications';
const AMBUE_DIR_CONFIGURATIONS = AMBUE_DIR . DIRECTORY_SEPARATOR . 'configurations';
const AMBUE_DIR_SYSTEM         = AMBUE_DIR . DIRECTORY_SEPARATOR . 'system';
const AMBUE_DIR_HELPERS        = AMBUE_DIR_SYSTEM . DIRECTORY_SEPARATOR . 'helpers';
const AMBUE_DIR_TYPES          = AMBUE_DIR_SYSTEM . DIRECTORY_SEPARATOR . 'types';

//
//
//

const AMBUE_FILE_LOG_PHP  = AMBUE_DIR_LOGS . DIRECTORY_SEPARATOR . 'php.log';
const AMBUE_FILE_LANGUAGE = AMBUE_DIR_LANGUAGES . DIRECTORY_SEPARATOR . AMBUE_LANGUAGE . '.php';
const AMBUE_FILE_GATES    = AMBUE_DIR_CONFIGURATIONS . DIRECTORY_SEPARATOR . 'gates.php';

//
//
//

require AMBUE_DIR_SYSTEM . DIRECTORY_SEPARATOR . 'Ambue.php';