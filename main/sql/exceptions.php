<?php

namespace PhpMyOrm\sql;
use Exception;
use Symfony\Component\Console\Event\ConsoleCommandEvent;

//
class ConfigFormatError extends Exception {}

//
class DoesNotExist extends Exception {}

//
class IncorrectFilterParams extends Exception {}

//
class ModelPropertyDoesExist extends Exception {}