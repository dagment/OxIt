<?php
  class Lib_Database extends PDO {
   public function __construct() {
    parent::__construct(TYPE.':host='.HOST.';dbname='.NAME_DB, USER, PASSWORD);
   }
  }