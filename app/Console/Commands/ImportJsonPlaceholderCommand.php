<?php

namespace App\Console\Commands;
use App\Console\Components\ImportDataClient;
use App\Models\Photo;
use Illuminate\Console\Command;


class ImportJsonPlaceholderCommand extends Command
{
    protected $signature = 'import:jsonPlaceholder';
    protected $description = 'Get data from jsonPlaceholder';

    public function handle()
    {
        $import= new ImportDataClient();
        $response = $import->clienttt->request( 'GET', 'photos');
        $data =(json_decode($response->getBody()->getContents()));
        foreach($data as $item){
            Photo::firstOrCreate([
                "title"=>$item->title,
            ],[
                'title'=>$item->title,
                'path'=>$item->url,
                'category_id'=>3
            ]);
        }
    }
}
