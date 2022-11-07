$writer = new \Zend_Log_Writer_Stream(BP . '/var/log/temp.log');
$logger = new \Zend_Log();
$logger->addWriter($writer);
$logger->info($e->getMessage());
