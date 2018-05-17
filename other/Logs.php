<?php
interface Logger
{
    public function __construct(Adapter $database);
    public function logger($message);
}

class DatabaseLogger implements Logger
{
    public function __construct(DataBase $database)
    {
        $this->Database = $database;
    }

    public function logger($message)
    {
        $this->Database->insert(['message'=>$message]);
    }
}

class FileLogger implements Logger
{
    public function __construct(FileManager $fileManager)
    {
        $this->FileManager = $database;
    }

    public function logger($message)
    {
        $this->FileManager->create('error.log', $message);
    }
}
